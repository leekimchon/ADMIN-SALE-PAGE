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
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example1">Email</label>
                        <input name="email" value="{{ old('email') }}" type="input" id="form2Example1" class="form-control @error('email') is-invalid @enderror" />
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Mật khẩu</label>
                        <input name="password" value="{{ old('password') }}" type="password" id="form2Example2" class="form-control @error('password') is-invalid @enderror" />
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        <span class="text-danger">{{ $errors->first('err_login') }}</span>
                    </div>
                
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input name="remember" class="form-check-input" type="checkbox" value="" id="form2Example31"/>
                                <label class="form-check-label" for="form2Example31"> Nhớ mật khẩu </label>
                            </div>
                        </div>
                
                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Quên mật khẩu?</a>
                        </div>
                    </div>
                
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Đăng nhập</button>
                
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Chưa có tài khoản? <a href="{{ route('register.index') }}">Đăng ký</a></p>
                        <p>Hoặc đăng nhập với:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <a href="{{ route('facebook.login') }}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </button>
                
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>
                
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>
                
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
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

