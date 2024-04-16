@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="container-fluid py-2 text-center">
                <h2 style="font-weight: bold;">Danh Sách User</h2>
            </div>
            <div class="row justify-content-center">
                <table class="table table-bordered table:hover">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">
                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}"
                                   class="link-control text-decoration-none">Edit |</a>
                                <a href="{{ route('user.readUser', ['id' => $user->id]) }}"
                                   class="link-control text-decoration-none">View |</a>
                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}"
                                   class="link-control text-decoration-none">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <!-- Phan Trang Users -->
                {{--<?php
                  include_once("resources/views/crud_user/config.php");
                  include_once("resources/views/crud_user/db.php");
                  include_once("resources/views/crud_user/user.php");
                  include_once("resources/views/crud_user/user_db.php");

                  $user_db = new User_Db();

                  $url = $_SERVER['PHP_SELF'];

                  $page = "";
                  if (!isset($_GET['page'])) {
                      # code...
                      $page = 1;
                  } else {
                      # code...
                      $page = $_GET['page'];
                  }

                  $total = $user_db->getCount();

                  $perPage = 5;

                  $offSet = 1;

                  echo $user_db->getPaginationBar($url, $page, $total, $perPage, $offSet);
                  ?>--}}

            </div>
        </div>
    </main>
@endsection