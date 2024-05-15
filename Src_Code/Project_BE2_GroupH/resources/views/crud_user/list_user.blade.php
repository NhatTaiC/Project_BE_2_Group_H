@extends('dashboard')

@section('content')
    {{--  Link CSS  --}}
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

    {{--  Title  --}}
    <section class="section-title">
        <div class="container-fluid my-5 text-center">
            <h1 class="title">Danh Sách Người Dùng</h1>
        </div>
    </section>

    {{-- Thông Báo --}}
    @if (Session::has('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
        </div>
    @endif

    {{-- Table --}}
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr class="row-header">
                        <th class="text-center bg-info th-data">ID</th>
                        <th class="text-center bg-info th-data">Username</th>
                        <th class="text-center bg-info th-data">Email</th>
                        <th class="text-center bg-info th-data">Phone</th>
                        <th class="text-center bg-info th-data">Avatar</th>
                        <th class="text-center bg-info th-data">MSSV</th>
                        <th class="text-center bg-info th-data">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="row-data table:hover">
                            <td class="text-center td-data">{{ $user->id }}</td>
                            <td class="text-center td-data"
                            >{{ $user->name }}</td>
                            <td class="text-center td-data"
                            >{{ $user->email }}</td>
                            <td class="text-center td-data"
                            >{{ $user->phone }}</td>
                            <td class="text-center td-data"><img
                                    src="{{ asset('avatar/' . $user->avatar ) }}" style="width: 70px; height: 70px"
                                    alt="avatar"></td>
                            <td class="text-center td-data"
                            >{{ $user->mssv }}</td>
                            <td class="text-center td-data">
                                <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="text-decoration-none btn btn-primary">View</a>
                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="text-decoration-none btn btn-success">Edit</a>
                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="text-decoration-none btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>

                {{-- Nút Thêm Người Dùng --}}
                <button class="btn btn-dark p-3" type="button" style="width: 30%">
                    <a href="{{ route('user.createUser') }}" class="btn-them text-decoration-none text-white" style="font-weight: 700; font-size: 20px">Thêm Người Dùng</a>
                </button>

                {{-- Phân Trang --}}
                <div class="link text-center my-5 mx-5 px-5" style="text-align: center">{!! $users->links() !!}</div>

            </div>
        </div>
    </main>
@endsection
