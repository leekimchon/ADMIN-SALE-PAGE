<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\Log;

class UserController extends Controller {
    function index() {
        $users = User::latest()->paginate(3);
        $roles = Role::all();
        $params = [
            'users' => $users,
            'roles' => $roles
        ];
        return view('admin.user.index', $params);
    }
    function create() {
        $roles = Role::all();
        $params = [
            'roles' => $roles
        ];
        return view('admin.user.add', $params);
    }
    function store(Request $request) {
        try {
            DB::beginTransaction();
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $roles_id = $request->roles_id;
            $user->roles()->attach($roles_id);
            DB::commit();
            return redirect()->route('user.index');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('message: ' . $e->getMessage() . ' line: ' . $e->getLine() . ' file: ' . $e->getFile());
            return back();
        }
    }
    function edit($id) {
        $roles = Role::all();
        $user = User::find($id);
        $user_roles = DB::table('user_role')->where('user_id', '=', $user->id)->get();
        $params = [
            'roles' => $roles,
            'user' => $user,
            'user_roles' => $user_roles
        ];
        return view('admin.user.edit', $params);
    }
    function update($id, Request $request) {
        try {
            DB::beginTransaction();
            $user = User::find($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $roles_id = $request->roles_id;
            $user->roles()->sync($roles_id);
            DB::commit();
            return redirect()->route('user.index');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('message: ' . $e->getMessage() . ' line: ' . $e->getLine() . ' file: ' . $e->getFile());
            return back();
        }
    }
    function delete($id) {
        try {
            DB::beginTransaction();
            $user = User::find($id);
            User::find($id)->delete();
            DB::table('user_role')->where('user_id', '=', $user->id)->delete();

            DB::commit();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], status: 200);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('message: ' . $e->getMessage() . ' line: ' . $e->getLine() . ' file: ' . $e->getFile());
            return back();
        }
    }
}
