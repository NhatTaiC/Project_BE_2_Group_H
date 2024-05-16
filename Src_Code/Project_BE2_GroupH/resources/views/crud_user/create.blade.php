@extends('dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    @if (Session::has('success'))
    <div class="alert alert-success">
        <i class="fas fa-check-circle"></i> {{Session::get('success')}}
    </div>
    @endif
    <div class="main">
        <div class="register">
            <form class="form" action="{{ route('user.postUser') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="chk" class="" aria-hidden="true">Đăng ký</label>
                      <!-- Username -->
                      <div class="form-group mb-2">
                                    <div class="row text-center">
                                            <div class="col-md-4" style="">Username</div>
                                            <div class="col-md-8" style="text-align: left; margin-bottom: 10px;">
                                            <input type="text" id="name" style="border: solid 1px; width: 215px;" name="name"
                                               required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group mb-2">
                                    <div class="row text-center">
                                            <div class="col-md-4" style="">Email</div>
                                            <div class="col-md-8" style="text-align: left;">
                                            <input type="text" id="email_address" style="border: solid 1px; width: 215px;"
                                               name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mật khẩu -->
                                    <div class="form-group mb-2">
                                    <div class="row text-center">
                                            <div class="col-md-4" style="">Mật khẩu</div>
                                            <div class="col-md-8" style="text-align: left;">
                                            <input type="password" id="password" style="border: solid 1px; width: 215px;"
                                               name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="form-group mb-2">
                                    <div class="row text-center">
                                            <div class="col-md-4" style="">Số điện thoại</div>
                                            <div class="col-md-8" style="text-align: left;">
                                            <input type="text" id="phone" style="border: solid 1px; width: 215px;" name="phone" required>
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Hinh anh -->
                                    <div class="row mb-3">
                                        <label for="avatar"  style=" padding-right: 50px;"class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

                                        <div class="col-md-6">
                                            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">

                                            @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <!-- <div>
                                            <label for="avatar">Ảnh đại diện</label>
                                            <input id="avatar" type="file" name="avatar" accept="image/*">
                                        </div> -->
                                    </div>

                                    <!-- Button -->

                                            <a href="{{route('login')}}" class="text-black" style="font-weight:bold; text-align: right; text-decoration: none; font-size: 13px;">Bạn đã có tài khoản?</a>

                                        <button type="submit" style="margin-left:32px;" class="btn btn-info btn-block">Đăng kí</button>


                    <!-- hinh anh -->
                    <!-- so dien thoai -->

            </form>
        </div>
    </div>
</body>
</html>
@endsection
