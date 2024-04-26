@extends('dashboard')

@section('content')
    <main class="login-form">
<<<<<<< HEAD
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4 mt-5">
=======
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 my-5 pt-5">
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
                    <div class="card mx-auto border-dark" style="width: 600px;">
                        <h4 class="card-header text-center">
                            Màn Hình Đăng Nhập
                        </h4>
                        <div class="card-body">
                            <form action="{{ route('user.authUser') }}" method="post">
                                @csrf
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="td-left">Email:</td>
                                        <td class="td-right"><input type="text" class="td-right-username form-control" name="email"
                                                                    id="email" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Mật khẩu:</td>
                                        <td class="td-right"><input type="password" class="td-right-mk form-control" id="password"
                                                                    name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right"><input type="checkbox" name="remember"> Ghi nhớ đăng nhập</td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right">
                                            <a href="#" class="text-decoration-none me-2">Quên mật khẩu</a>
                                            <button type="submit" class="btn btn-dark btn-block">Đăng nhập</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
