@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container mt-5">
            <div class="row justify-content-center mt-5">
                <div class="container-fluid py-2 text-center mt-5">
                    <h3 style="font-weight: bold;">
                        Màn Hình Chi Tiết
                    </h3>
                </div>
                <div class="container-fluid py-2 text-center">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
