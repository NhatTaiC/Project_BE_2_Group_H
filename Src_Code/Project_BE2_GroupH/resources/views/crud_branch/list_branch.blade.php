@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container my-5 pt-5">
            <div class="container-fluid py-2 text-center">
                <h2 style="font-weight: bold;">Danh Sách Chi Nhánh</h2>
            </div>
            <div class="row justify-content-center pb-5">
                <table class="table table-bordered table:hover">
                    <thead>
                    <tr class="bg-primary">
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
                            <td class="text-center">
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
                @csrf
                <table>
                    <form action=""  enctype="multipart/form-data">
                        <td><input name="keyWord" class="form-control me-2" type="text" placeholder="Tìm kiếm" width="20%"></td>
                        <td><input name="search" value="Tìm kiếm" class="btn btn-info" type="submit"></td>
                        <td><button class="btn btn-success" type="button" style="width: 60%">
                                <a href="{{ route('branch.sortBranch_desc') }}" class="btn-them text-decoration-none text-white text-center" style="font-weight: 150; font-size: 10px">Sort maCN</a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-primary"> <a href="{{route('branch.createBranch')}}" class="btn-them text-decoration-none text-white btn-primary text-center" style="width: 50%">Thêm Chi Nhánh</a></button>
                        </td>
                        <td><button class="btn btn-success" type="button" style="width: 40%">
                                <a href="{{ route('branch.listBranches') }}" class="btn-them text-decoration-none text-white text-center" style="font-weight: 150; font-size: 10px">reset</a>
                            </button></td>
                    </form>
                </table>
                <div> {{ $branches->links() }}</div>
            </div>
        </div>
    </main>
@endsection
