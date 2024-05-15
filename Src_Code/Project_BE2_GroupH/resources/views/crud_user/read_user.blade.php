@extends('dashboard')

@section('content')
    {{--  Link CSS  --}}
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

    {{--  Title  --}}
    <section class="section-title">
        <div class="container-fluid my-5 text-center">
            <h1 class="title">{{ $user->name }}'s Information</h1>
        </div>
    </section>

    {{--  Table  --}}
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table class="table table-bordered mb-5 pb-5">
                    <thead>
                    <tr class="row-header" style="background: lightcoral; font-size: 30px; font-weight: 700">
                        <th class="text-center bg-info th-data">ID</th>
                        <th class="text-center bg-info th-data">UserName</th>
                        <th class="text-center bg-info th-data">Email</th>
                        <th class="text-center bg-info th-data">Phone</th>
                        <th class="text-center bg-info th-data">Avatar</th>
                        <th class="text-center bg-info th-data">MSSV</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center td-data"
                        >{{ $user->id }}</td>
                        <td class="text-center td-data"
                        >{{ $user->name }}</td>
                        <td class="text-center td-data"
                        >{{ $user->email }}</td>
                        <td class="text-center td-data"
                        >{{ $user->phone }}</td>
                        <td class="text-center td-data"
                        >{{ $user->mssv }}</td>
                        <td class="text-center td-data">
                            <img src="{{ asset('avatar/' . $user->avatar ) }}" style="width: 70px; height: 70px"
                                 alt="avatar">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <br><br>
@endsection
