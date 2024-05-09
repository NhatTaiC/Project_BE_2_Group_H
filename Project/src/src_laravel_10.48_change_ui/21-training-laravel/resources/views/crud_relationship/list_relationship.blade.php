@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container my-5 pt-5">
            <div class="container-fluid py-2 text-center">
                <h2 style="font-weight: bold;">Danh Sách Liên Hệ</h2>
            </div>
            <div class="row justify-content-center pb-5">
                <table class="table table-bordered table:hover">
                    <thead>
                    <tr>
                        <th class="text-center">maLienHe</th>
                        <th class="text-center">tenPhongBan</th>
                        <th class="text-center">soDT</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($relationships as $relationship)
                        <tr>
                            <td class="text-center">{{ $relationship->maLienHe }}</td>
                            <td class="text-center">{{ $relationship->tenPhongBan }}</td>
                            <td class="text-center">{{ $relationship->soDT }}</td>
                            <td class="text-center">
                                <a href="{{ route('relationship.deleteRelationship', ['maLienHe' => $relationship->maLienHe]) }}"
                                   class="link-control text-decoration-none">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $relationships->links() }}
                
            </div>
        </div>
    </main>
@endsection
