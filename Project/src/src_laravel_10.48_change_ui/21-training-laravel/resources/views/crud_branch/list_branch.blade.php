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
                            <td><img src="{{ asset('uploads/students/'.$branch->imgCN)}}" width="70px"
                                     height="70px" alt="logo" /></td>
                            <td>
                            <td>
                                <a href="{{ route('branch.edit', ['maCN' => $branch->maCN]) }}"
                                   class="btn btn-primary">Edit</a>
                                <form action="{{ route('student.delete', ['id'=>$student->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div> {{ $branches->links() }}</div>
            </div>
        </div>
    </main>
@endsection
