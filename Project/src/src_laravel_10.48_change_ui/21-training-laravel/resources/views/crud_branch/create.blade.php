<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                <h5 class="alert alert-success">{{ session('status')}}</h5>
                @endif
                    <div class="card-body">
                        <form action="{{ route('branch.postBranch') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-borderless">
                                <tr>
                                    <td class="td-left">Mã Chi Nhánh:</td>
                                    <td class="td-right"><input type="text" id="maCN" class="td-right-username form-control"
                                                                name="maCN" required autofocus>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-left">Tên Chi Nhánh:</td>
                                    <td class="td-right"><input type="text" id="tenCN" class="td-right-mk form-control"
                                                                name="tenCN" required autofocus>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-left">Địa chỉ Chi Nhánh:</td>
                                    <td class="td-right"><input type="text" id="diaChiCN" class="td-right-mk form-control"
                                                                name="diaChiCN" required autofocus>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-left">Số điện thoại Chi Nhánh:</td>
                                    <td class="td-right"><input type="text" id="sodtCN" class="td-right-mk form-control"
                                                                name="sodtCN" required autofocus>
                                    </td>
                                </tr>
                                <tr>
                                    <div class="form-group mb-3">
                                        <label for="">Ảnh đại diện:</label>
                                        <input type="file" name="imgCN" id="" class="form-control">
                                    </div>
                                </tr>
                                <tr>
                                    <td class="td-left"></td>
                                    <td class="td-right">
                                        <button class="btn btn-dark btn-block">Đăng ký</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>
