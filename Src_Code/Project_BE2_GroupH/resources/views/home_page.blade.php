@extends('dashboard')

@section('content')

    {{-- Section Title --}}
    <section id="section-title">
        <div class="container-fluid text-center mt-5">
            <h1 class="text-center">
                Home Page
            </h1>
        </div>
    </section>

    {{-- Section Cards Xe --}}
    <section id="section-card-xe">
        <div class="container-fluid mt-5 center text-center">
            @foreach($xe as $x)
                <div class="card" style="width: 400px">
                    <img src="{{ asset('uploads/'. $x->hinhanhxe ) }}" alt="" class="card-img-top" style="width: 100%">
                    <div class="card-img-overlay card-body">
                        <h4 class="card-title">
                            {{ $x->tenxe }}
                        </h4>
                        <div class="card-text">
                            <p class="xe_id">ID Xe: {{ $x->xe_id }}</p>
                            <p class="maloaixe">Mã Loại Xe: {{ $x->maxe }}</p>
                            <p class="mauxe">Màu Xe: {{ $x->mauxe }}</p>
                            <p class="giaxe">Giá Xe: {{ $x->giaxe }}</p>
                            <p class="sochongoi">Số Chỗ Ngồi: {{ $x->sochongoi }}</p>
                            <p class="dongco">Động Cơ: {{ $x->dongco }}</p>
                            <p class="dungtichbinhxang">Dung Tích Bình Xăng: {{ $x->dungtichbinhxang }}</p>
                        </div>
                        <a href="{{ route('xe.readXe', ['xe_id' => $x->xe_id]) }}" class="btn btn-primary">Thông Tin
                            Xe</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
