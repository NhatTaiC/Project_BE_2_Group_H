@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">

                    {{-- Thông Báo --}}
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
                        </div>
                    @endif

                    <div class="card">
                        <h3 class="card-header text-center">Register User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUser') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- Name --}}
                                <div class="form-group mb-3">
                                    <label for="name">Name:</label>
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                {{-- Email --}}
                                <div class="form-group mb-3">
                                    <label for="email">Email:</label>
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                {{-- Password --}}
                                <div class="form-group mb-3">
                                    <label for="password">Password:</label>
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                {{-- Phone --}}
                                <div class="form-group mb-3">
                                    <label for="phone">Phone:</label>
                                    <input type="text" placeholder="Phone" id="phone" class="form-control"
                                           name="phone">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>

                                <!-- Hinh anh -->
                                <div class="form-group mb-3">
                                    <label for="avatar">Avatar:</label>
                                    <input id="avatar" type="file"
                                           class="form-control" name="avatar"
                                           required autocomplete="avatar">
                                </div>

                                {{-- MSSV --}}
                                <div class="form-group mb-3">
                                    <label for="mssv">MSSV:</label>
                                    <input type="text" placeholder="MSSV" id="mssv" class="form-control"
                                           name="mssv">
                                    @if ($errors->has('mssv'))
                                        <span class="text-danger">{{ $errors->first('mssv') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
