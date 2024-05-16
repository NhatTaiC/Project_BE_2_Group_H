@extends('relationboardship')

@section('content')
    <main class="login-form">
        <div class="container my-5 pt-5">
            <div class="container-fluid py-2 text-center">
                <h2 style="font-weight: bold;">Danh Sách Chi Nhánh</h2>

                <form action="" method="POST" class="form-inline" role="form">
                    <div class="form-group">

                    </div>
                </form>

            </div>
            <div class="row justify-content-center pb-5">
                <table class="table table-bordered table:hover">
                    <thead>
                    <tr>
                        <th class="text-center">Số lượng </th>
                        <th class="text-center">Mã Chi Nhánh</th>
                        <th class="text-center">Tên Chi Nhánh</th>
                        <th class="text-center">Số Điện Thoại Chi Nhánh</th>
                        <th class="text-center">Địa Chỉ nhánh</th>
                        <th class="text-center">IMG</th>
                        <th class="text-center">Công Cụ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($branches as $branch)
                        <tr>
                            <td class="text-center">{{ $branch->branch_id }}</td>
                            <td class="text-center">{{ $branch->maCN }}</td>
                            <td class="text-center">{{ $branch->tenCN }}</td>
                            <td class="text-center">{{ $branch->sodtCN }}</td>
                            <td class="text-center">{{ $branch->diaChiCN }}</td>
                            <td><img src="{{ asset('uploads/branches/'.$branch->imgCN)}}" width="70px"
                                     height="70px" alt="Anh dai dien" /></td>
                            <td>
                            <td>
{{--                                <a href="{{ route('branch.editBranch', ['maCN' => $branch->maCN]) }}"--}}
{{--                                   class="btn btn-primary">Edit</a>--}}
                                <a href="{{ route('branch.editBranch', ['branch_id' => $branch->branch_id]) }}"
                                   class="btn btn-primary">Edit</a>
                                <a href="{{ route('branch.deleteBranch', ['branch_id' => $branch->branch_id]) }}"
                                   class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </main>
@endsection
