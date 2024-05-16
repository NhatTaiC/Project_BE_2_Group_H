@extends('dashboard')

<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

// use Hash;
// use Session;
?>


<link rel="stylesheet" href="{{ asset('css/button.css') }}">
<link rel="stylesheet" href="{{ asset('css/btn3d.css') }}">

<!-- Core theme JS-->
<style>
    .card {
        display: inline-block;
    }
</style>



@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{Session::get('success')}}
        </div>
    @endif
    <h2 class="text-info text-center danhSach">Danh sách user</h2>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <!-- <a class="navbar-brand" href="#!">Start Bootstrap</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                    <!-- <li class="nav-item"><a class="nav-link" href="quanlysanpham.php">Admin</a></li> -->
                    <li class="nav-item dropdown">
                        <a style="font-weight:bold; font-size:1.3em;" class="nav-link dropdown-toggle"
                           id="navbarDropdown"
                           href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sắp xếp danh sách </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="?sapxeptangdantheoten">
                                    Sắp xếp tăng dần theo tên
                                </a></li>
                            <li><a class="dropdown-item" href="?sapxepgiamdantheoten">
                                    Sắp xếp giảm dần theo tên
                                </a></li>
                            <li><a class="dropdown-item" href="?sapxeptangdantheoid">
                                    Sắp xếp tăng dần theo id
                                </a></li>
                            <li><a class="dropdown-item" href="?sapxepgiamdantheoid">
                                    Sắp xếp giảm dần theo id
                                </a></li>
                            <li><a class="dropdown-item" href="{{route('user.list')}}">
                                    Danh sách chưa được sắp xếp
                                </a></li>

                        </ul>
                    </li>
                </ul>
                <form action="/search" method="get" class="d-flex">
                    <input name="tukhoa" class="form-control me-2" type="text" placeholder="Tìm kiếm user">
                    <input name="search" value="Tìm kiếm" class="btn btn-info" type="submit"></input>
                </form>

            </div>
        </div>
    </nav>

    <!-- <form action="" method="get">
    <input type="text" name="key" placeholder="Nhập từ khóa cần tìm..." id="">
    <input type="submit" class="btn btn-primary" name="search" value="Tìm kiếm">
</form> -->
    <?php
    if (isset($_GET['search'])){

        ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    @foreach( $listsp as $user)
                        <div class="col-3 mb-5">

                            <!-- Product image-->


                            <img src="{{ asset('avatar/' . $user->avatar) }}" width="100%" height="150px" alt="avatar">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo "Mã:" . $user->id; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Email:" . $user->email; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Số điện thoại:" . $user->phone; ?></h5>
                                    <!-- Product price-->
                                        <?php echo "Username:" . $user->name ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="btn-3d">

                                <a class="" href="{{ route('user.readUser', ['id' => $user->id]) }}"> <span
                                        class="front btn-info ">Xem</span>
                                    <span class="top">Xem</span></a>
                            </div>
                            <div class="btn-3d">


                                <div class="btn-3d">

                                    <a class="" href="{{ route('user.updateUser', ['id' => $user->id]) }}">
                                        <span class="front btn-info">Sửa</span>
                                        <span class="top">Sửa</span></a>
                                </div>
                                <div class="btn-3d">
                                    <a class="" href="{{ route('user.deleteUser', ['id' => $user->id]) }}"><span
                                            class="front btn-info">Xóa</span>
                                        <span class="top">Xóa</span></a>
                                </div>

                            </div>


                        </div>
                    @endforeach


                </div>
            </div>

        </div>

    </div>
    <?php } ?>
    <?php
    if (isset($_GET['searach'])) {

        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        $listsp = [];
        if ($tukhoa != "") {
            $listsp = DB::table("users")->where("id", "like", "%$tukhoa%")->get();
        }

        // $key = $_GET['key'];
        // $user_db = new User_Db();
        // $users_db = $user_db->getSearchProduct($key);


        echo "<div class='container mt-5'>

                           <div class='row'>
                               <div class='col-md-12'>
                                   <div class='row'>";

        foreach ($users_db as $user) {
            echo "
                                        <div class='col-3 mb-5'>


                                        <img src='{{ asset('avatar/user.jpg') }}' width='100%' height='150px' alt='avatar'>

                                        <div class='card-body p-4'>
                                            <div class='text-center'>
                                                <!-- Product name-->
                                                <h5 class='fw-bolder'>" . $user['id'] . "</h5>
                                                <h5 class='fw-bolder'>    " . $user['email'] . " </h5>
                                                <h5 class='fw-bolder'>    " . $user['phone'] . " </h5>

                                                    " . $user['name'] . "
                                            </div>
                                        </div>
                                        <div class='btn-3d'>

                                        <a class='' href='{{ route('user.readUser', ['id' =>" . $user['id'] . "]) }}'> <span
                                                class='front btn-info '>Xem</span>
                                            <span class='top'>Xem</span></a>
                                    </div>
                                    <div class='btn-3d'>


                                        <div class='btn-3d'>

                                            <a class='' href='{{ route('user.updateUser', ['id' => " . $user['id'] . "]) }}'>
                                                <span class='front btn-info'>Sửa</span>
                                                <span class='top'>Sửa</span></a>
                                        </div>
                                        <div class='btn-3d'>
                                            <a class='' href='{{ route('user.deleteUser', ['id' => " . $user['id'] . "]) }}'><span
                                                    class='front btn-info'>Xóa</span>
                                                <span class='top'>Xóa</span></a>
                                        </div>

                                    </div>




                                    </div>

                                        ";
        }


        echo " </div>
                                               </div>

                                           </div>

                                       </div>";

    } ?>
    <?php
    $users = User::paginate(8);
    $users_sxtdtt = User::orderBy('name', 'asc')->get();
    if (isset($_GET['sapxeptangdantheoten'])){
        ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    @foreach($users_sxtdtt as $user)
                        <div class="col-3 mb-5">

                            <!-- Product image-->


                            <img src="{{ asset('avatar/' . $user->avatar) }}" width="100%" height="150px" alt="avatar">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo "Mã:" . $user->id; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Email:" . $user->email; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Số điện thoại:" . $user->phone; ?></h5>
                                    <!-- Product price-->
                                        <?php echo "Username:" . $user->name ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="btn-3d">

                                <a class="" href="{{ route('user.readUser', ['id' => $user->id]) }}"> <span
                                        class="front btn-info ">Xem</span>
                                    <span class="top">Xem</span></a>
                            </div>
                            <div class="btn-3d">


                                <div class="btn-3d">

                                    <a class="" href="{{ route('user.updateUser', ['id' => $user->id]) }}">
                                        <span class="front btn-info">Sửa</span>
                                        <span class="top">Sửa</span></a>
                                </div>
                                <div class="btn-3d">
                                    <a class="" href="{{ route('user.deleteUser', ['id' => $user->id]) }}"><span
                                            class="front btn-info">Xóa</span>
                                        <span class="top">Xóa</span></a>
                                </div>

                            </div>


                        </div>
                    @endforeach


                </div>
            </div>

        </div>

    </div>
    <?php } ?>
    <?php

    $users_sxgdtt = User::orderBy('name', 'desc')->get();
    if (isset($_GET['sapxepgiamdantheoten'])){
        ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    @foreach($users_sxgdtt as $user)
                        <div class="col-3 mb-5">

                            <!-- Product image-->


                            <img src="{{ asset('avatar/' . $user->avatar) }}" width="100%" height="150px" alt="avatar">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo "Mã:" . $user->id; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Email:" . $user->email; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Số điện thoại:" . $user->phone; ?></h5>
                                    <!-- Product price-->
                                        <?php echo "Username:" . $user->name ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="btn-3d">

                                <a class="" href="{{ route('user.readUser', ['id' => $user->id]) }}"> <span
                                        class="front btn-info ">Xem</span>
                                    <span class="top">Xem</span></a>
                            </div>
                            <div class="btn-3d">


                                <div class="btn-3d">

                                    <a class="" href="{{ route('user.updateUser', ['id' => $user->id]) }}">
                                        <span class="front btn-info">Sửa</span>
                                        <span class="top">Sửa</span></a>
                                </div>
                                <div class="btn-3d">
                                    <a class="" href="{{ route('user.deleteUser', ['id' => $user->id]) }}"><span
                                            class="front btn-info">Xóa</span>
                                        <span class="top">Xóa</span></a>
                                </div>

                            </div>


                        </div>
                    @endforeach


                </div>
            </div>

        </div>

    </div>
    <?php } ?>
    <?php
    $phantrang_sxgdtt = User::paginate(8);
    $users_sxgdti = User::orderBy('id', 'desc')->get();
    if (isset($_GET['sapxepgiamdantheoid'])){
        ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    @foreach($users_sxgdti as $user)
                        <div class="col-3 mb-5">

                            <!-- Product image-->


                            <img src="{{ asset('avatar/' . $user->avatar) }}" width="100%" height="150px" alt="avatar">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo "Mã:" . $user->id; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Email:" . $user->email; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Số điện thoại:" . $user->phone; ?></h5>
                                    <!-- Product price-->
                                        <?php echo "Username:" . $user->name ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="btn-3d">

                                <a class="" href="{{ route('user.readUser', ['id' => $user->id]) }}"> <span
                                        class="front btn-info ">Xem</span>
                                    <span class="top">Xem</span></a>
                            </div>
                            <div class="btn-3d">


                                <div class="btn-3d">

                                    <a class="" href="{{ route('user.updateUser', ['id' => $user->id]) }}">
                                        <span class="front btn-info">Sửa</span>
                                        <span class="top">Sửa</span></a>
                                </div>
                                <div class="btn-3d">
                                    <a class="" href="{{ route('user.deleteUser', ['id' => $user->id]) }}"><span
                                            class="front btn-info">Xóa</span>
                                        <span class="top">Xóa</span></a>
                                </div>

                            </div>


                        </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
    <?php } ?>
    <?php
    $phantrang_sxgdtt = User::paginate(8);
    $users_sxtdti = User::orderBy('id', 'asc')->get();
    if (isset($_GET['sapxeptangdantheoid'])){
        ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    @foreach($users_sxtdti as $user)
                        <div class="col-3 mb-5">

                            <!-- Product image-->


                            <img src="{{ asset('avatar/' . $user->avatar) }}" width="100%" height="150px" alt="avatar">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo "Mã:" . $user->id; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Email:" . $user->email; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Số điện thoại:" . $user->phone; ?></h5>
                                    <!-- Product price-->
                                        <?php echo "Username:" . $user->name ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="btn-3d">

                                <a class="" href="{{ route('user.readUser', ['id' => $user->id]) }}"> <span
                                        class="front btn-info ">Xem</span>
                                    <span class="top">Xem</span></a>
                            </div>
                            <div class="btn-3d">


                                <div class="btn-3d">

                                    <a class="" href="{{ route('user.updateUser', ['id' => $user->id]) }}">
                                        <span class="front btn-info">Sửa</span>
                                        <span class="top">Sửa</span></a>
                                </div>
                                <div class="btn-3d">
                                    <a class="" href="{{ route('user.deleteUser', ['id' => $user->id]) }}"><span
                                            class="front btn-info">Xóa</span>
                                        <span class="top">Xóa</span></a>
                                </div>

                            </div>


                        </div>
                    @endforeach


                </div>
            </div>

        </div>

    </div>
    <?php } ?>
    <?php
    if (!isset($_GET['search']) && !isset($_GET['sapxeptangdantheoten']) && !isset($_GET['sapxepgiamdantheoten']) && !isset($_GET['sapxeptangdantheoid']) && !isset($_GET['sapxepgiamdantheoid'])) {
        ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    @foreach($users as $user)
                        <div class="col-3 mb-5">

                            <!-- Product image-->


                            <img src="{{ asset('avatar/' . $user->avatar) }}" width="100%" height="150px" alt="avatar">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo "Mã:" . $user->id; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Email:" . $user->email; ?></h5>
                                    <h5 class="fw-bolder"><?php echo "Số điện thoại:" . $user->phone; ?></h5>
                                    <!-- Product price-->
                                        <?php echo "Username:" . $user->name ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="btn-3d">

                                <a class="" href="{{ route('user.readUser', ['id' => $user->id]) }}"> <span
                                        class="front btn-info ">Xem</span>
                                    <span class="top">Xem</span></a>
                            </div>
                            <div class="btn-3d">


                                <div class="btn-3d">

                                    <a class="" href="{{ route('user.updateUser', ['id' => $user->id]) }}">
                                        <span class="front btn-info">Sửa</span>
                                        <span class="top">Sửa</span></a>
                                </div>
                                <div class="btn-3d">
                                    <a class="" href="{{ route('user.deleteUser', ['id' => $user->id]) }}"><span
                                            class="front btn-info">Xóa</span>
                                        <span class="top">Xóa</span></a>
                                </div>

                            </div>


                        </div>
                    @endforeach

                    <div style=" text-align: center; margin:0 auto;" class="link">{{ $users->links()}}</div>


                </div>
            </div>

        </div>

    </div>
    <?php } ?>

@endsection

