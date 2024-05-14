@extends('relationboardship')

@section('content')
    <main class="login-form">
        <div class="container my-5 pt-5">
            <div class="container-fluid py-2 text-center">
                <h2 style="font-weight: bold;">Danh Sách Chi Nhánh</h2>
            </div>
            <div class="row justify-content-center pb-5">
                <table class="table table-bordered table:hover">
                    <thead>
                    <tr>
                        <th class="text-center">Mã Chi Nhánh</th>
                        <th class="text-center">Tên Chi Nhánh</th>
                        <th class="text-center">Địa chỉ Chi Nhánh</th>
                        <th class="text-center">Số Địa Thoại Chi Nhánh</th>
                        <th class="text-center">IMG</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($branches as $branch)
                        <tr>
                            <td class="text-center">{{ $branch->maCN }}</td>
                            <td class="text-center">{{ $branch->tenCN }}</td>
                            <td class="text-center">{{ $branch->diaChiCN }}</td>
                            <td class="text-center">{{ $branch->sodtCN }}</td>
                            <td class="text-center">{{ $branch->imgCN }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
