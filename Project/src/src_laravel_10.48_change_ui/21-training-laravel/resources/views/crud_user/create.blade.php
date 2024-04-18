@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer my-5 mx-auto">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="card mx-auto border-dark my-5" style="width: 600px;">
                        <h3 class="card-header text-center">
                            Màn Hình Đăng Ký
                        </h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUser') }}" method="post">
                                @csrf
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="td-left">Username:</td>
                                        <td class="td-right"><input type="text" id="name" class="td-right-username form-control"
                                                                    name="name" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Email:</td>
                                        <td class="td-right"><input type="text" id="email_address" class="td-right-mk form-control"
                                                                    name="email" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left">Mật khẩu:</td>
                                        <td class="td-right"><input type="password" id="password" class="td-right-mk form-control"
                                                                    name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right"></td>
                                    </tr>
                                    <tr>
                                        <td class="td-left"></td>
                                        <td class="td-right">
                                            <label for="remember" class="me-2"><input type="checkbox" name="remember"> Ghi nhớ</label>
                                            <button class="btn btn-dark btn-block">Đăng ký</button>
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
