<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeđer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'Danh mục sản phẩm',
            'parent_id' => 0
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xem danh mục sản phẩm',
            'parent_id' => 1,
            'key_code' => 'list_categories'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm danh mục sản phẩm',
            'parent_id' => 1,
            'key_code' => 'add_categories'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa danh mục sản phẩm',
            'parent_id' => 1,
            'key_code' => 'edit_categories'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa danh mục sản phẩm',
            'parent_id' => 1,
            'key_code' => 'delete_categories'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sản phẩm',
            'parent_id' => 0
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xem sản phẩm',
            'parent_id' => 6,
            'key_code' => 'list_product'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm sản phẩm',
            'parent_id' => 6,
            'key_code' => 'add_product'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa sản phẩm',
            'parent_id' => 6,
            'key_code' => 'edit_product'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa sản phẩm',
            'parent_id' => 6,
            'key_code' => 'delete_product'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Slider',
            'parent_id' => 0
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xem Slider',
            'parent_id' => 11,
            'key_code' => 'list_slider'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm Slider',
            'parent_id' => 11,
            'key_code' => 'add_slider'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa Slider',
            'parent_id' => 11,
            'key_code' => 'edit_slider'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa Slider',
            'parent_id' => 11,
            'key_code' => 'delete_slider'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Tài khoản',
            'parent_id' => 0
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xem Tài khoản',
            'parent_id' => 16,
            'key_code' => 'list_user'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm Tài khoản',
            'parent_id' => 16,
            'key_code' => 'add_user'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa Tài khoản',
            'parent_id' => 16,
            'key_code' => 'edit_user'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa Tài khoản',
            'parent_id' => 16,
            'key_code' => 'delete_user'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Quyền',
            'parent_id' => 0
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xem Quyền',
            'parent_id' => 21,
            'key_code' => 'list_role'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm Quyền',
            'parent_id' => 21,
            'key_code' => 'add_role'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa Quyền',
            'parent_id' => 21,
            'key_code' => 'edit_role'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa Quyền',
            'parent_id' => 21,
            'key_code' => 'delete_role'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Trang chủ admin',
            'parent_id' => 0
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xem Trang chủ',
            'parent_id' => 26,
            'key_code' => 'list_home'
        ]);
    }
}
