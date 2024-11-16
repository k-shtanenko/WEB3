@extends('layouts.app')

@section('content')

<div class="container text-center" data-bs-zindex="10">
    <div class="h2 text-start mt-3 mb-3">
        <h1>Карта музеев Рима и Ватикана</h1>
    </div>
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 row-cols-my-xxxl-4">
        @foreach ($museums as $museum)
            <div class="col text-start pb-3">
                <div role="button" class="card p-3 object border border-dark h-100" data-bs-toggle="modal" data-bs-target="#Modal{{ $loop->index + 1 }}">
                    <img src="{{ asset('storage/museums/' . $museum->image) }}" alt="{{ $museum->name }}" class="img-fluid card-img-top border border-dark size" style="height: 300px;">
                    <div class="badge position-absolute mt-2 ms-2 object-overlay bg-dark50">от €{{ $museum->price }}.00</div>
                    <div class="card-body">
                        <p class="h5">{{ $museum->name }}</p>
                        <p class="card-text">{{ $museum->description }}</p>
                        <p class="card-text">Адрес: {{ $museum->address }}</p>
                        <a href="{{ $museum->link }}" target="_blank" class="card-text text-blue">Официальный сайт</a>
                    </div>
                    <a href="{{ route('museums.show', $museum) }}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection