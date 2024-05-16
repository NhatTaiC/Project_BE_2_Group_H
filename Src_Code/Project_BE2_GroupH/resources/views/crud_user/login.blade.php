@extends('dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>

	</style>
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">


</head>

<body>
@if (Session::has('success'))
<div class="alert alert-success">
    <i class="fas fa-check-circle"></i> {{Session::get('success')}}
</div>
@endif
	<!-- đăng nhập -->
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="login">
			<form method="POST" action="{{ route('user.authUser') }}" class="form">
				@csrf
				<label for="chk" aria-hidden="true">Đăng nhập</label>
				<div style="">Email</div>
				<div>

					<input class="input" type="email" name="email" placeholder="Email" required="" autofocus>
					@if ($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="" style="">Mật khẩu</div>
				<div class="">

					<input class="input" type="password" name="password" placeholder="Mật khẩu" required="" autofocus>
					@if ($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<a href="{{route('user.createUser')}}" class="text-white" style="font-weight:bold; text-align: right; text-decoration: none; font-size: 13px;">Bạn chưa có tài khoản?</a>
				<button type="submit" class="btn btn-block" style="">Đăng nhập</button>
			</form>
		</div>


	</div>
</body>

</html>
@endsection
