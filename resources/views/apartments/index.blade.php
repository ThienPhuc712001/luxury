@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($apartments as $apartment)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $apartment->image_url }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $apartment->name }}</h5>
                            <p class="card-text">{{ $apartment->general_info }}</p>
                            <p class="card-text">Giá: {{ $apartment->price }} triệu/m2</p>
                            <p class="card-text">Trạng thái: {{ $apartment->status }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $apartments->links() }}
    </div>
@endsection
