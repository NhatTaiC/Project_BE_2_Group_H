<?php
use Illuminate\Pagination\Paginator;
?>
@extends('dashboard')
<style>
    .manHinh{
        text-align: center;
        margin: 25px 0px;

    }
    .row{
        text-align: left;

    }
    .chiTiet{
        border: 1px solid #000;
        width: 50%;
        height: 70%;
        margin: auto ;
    }
    .row .col-md-4{
        padding-left: 50px ;
    }
    .row .col-md-8{
        padding-left: 36px ;
        font-weight: bold;
    }
    .chiTiet .chinhSua{
        padding: 15px 15px;
        background: blue;
        margin-bottom: 20px ;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px ;
        margin-left: 390px ;
        display: inline-block;

    }

</style>
@section('content')
    <div class="container">
        <div class="chiTiet">
            <h5  class="manHinh text-info" style="font-size: 1.5em; font-weight:bold;">Thông tin chi tiết</h5>

            <div class="row">
                <div class="col-md-4">
                    <p>Id</p>
                    <p> Username</p>
                    <p> Email</p>
                    <p>Phone</p>

                    <p>Avatar</p>
                </div>
                <div class="col-md-8">
                    <p>{{$user->id}}</p>
                    <p>{{$user->name}}</p>
                    <p>{{$user->email}}</p>
                    <p>{{$user->phone}}</p>

                    <img src="{{ asset('avatar/'.$user->avatar) }}" width="100px" height="100px" alt="avatar">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-info">Chỉnh sửa</a>

                    </div>
                    <div class="col-md-6">
                        <a style="margin-left:-180px;" href="{{ route('user.list')}}" class="btn btn-info">Quay về</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
