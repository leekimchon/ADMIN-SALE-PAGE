<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row translate-middle justify-content-center mt-5">
            <div class="col-md-3">
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example0">Họ tên</label>
                        <input name="name" value="{{ old('name') }}" type="input"  id="form2Example0" class="form-control @error('name') is-invalid @enderror" />
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email</label>
                        <input name="email" value="{{ old('email') }}" type="input"  id="form2Example1" class="form-control @error('email') is-invalid @enderror" />
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Mật khẩu</label>
                        <input name="password" value="{{ old('password') }}" type="password"  id="form2Example2" class="form-control @error('password') is-invalid @enderror" />
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example3">Nhập lại Mật khẩu</label>
                        <input name="re_password" value="{{ old('re_password') }}" type="password"  id="form2Example3" class="form-control @error('re_password') is-invalid @enderror" />
                        <span class="text-danger">{{ $errors->first('re_password') }}</span>
                    </div>
                
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div> --}}
                        </div>
                
                        <div class="col">
                            <!-- Simple link -->
                            {{-- <a href="#!">Forgot password?</a> --}}
                        </div>
                    </div>
                
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Đăng ký</button>
                
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Đã có tài khoản? <a href="{{ route('login.index') }}">Đăng nhập</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>

