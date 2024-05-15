@extends('dashboard')

@section('content')

    {{-- Form-Control   --}}
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Update User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input name="id" type="hidden" value="{{ $user->id }}">

                                {{-- Name --}}
                                <div class="form-group mb-3">
                                    <label for="name">Name:</label>
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                {{-- Email --}}
                                <div class="form-group mb-3">
                                    <label for="email">Email:</label>
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
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
                                           name="phone" value="{{ $user->phone }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>

                                <!-- Hinh anh -->
                                <div class="form-group mb-3">
                                    <label for="avatar">Avatar:</label>
                                    <input id="avatar" type="file"
                                           class="form-control" name="avatar"
                                    >
                                    <br>
                                    <img src="{{ asset('avatar/' . $user->avatar ) }}" style="width: 70px; height: 70px"
                                         alt="avatar">
                                </div>

{{--                                <div class="row mb-3">--}}
{{--                                    <label for="avatar" style="padding-right: 58px;" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>--}}

{{--                                    <div class="col-md-6">--}}
{{--                                        <input id="avatar"  type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">--}}
{{--                                        <img src="{{ asset('avatar/'.$user->avatar)  }}" width="70px" height="70px" alt="avatar">--}}
{{--                                        @error('avatar')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                </div>--}}

                                {{-- MSSV --}}
                                <div class="form-group mb-3">
                                    <label for="mssv">MSSV:</label>
                                    <input type="text" placeholder="MSSV" id="mssv" class="form-control"
                                           name="mssv" value="{{ $user->mssv }}">
                                    @if ($errors->has('mssv'))
                                        <span class="text-danger">{{ $errors->first('mssv') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
