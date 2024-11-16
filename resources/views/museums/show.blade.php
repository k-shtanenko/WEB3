@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $museum->name }}</div>

                <div class="card-body">
                    <img src="{{ asset('storage/museums/' . $museum->image) }}" alt="{{ $museum->name }}" 
                    class="img-fluid card-img-top border border-dark size"
                    style="max-height: 400px">

                    <p class="card-text mt-2"><strong>Описание:</strong> {{ $museum->description }}</p>
                    <p class="card-text"><strong>Адрес:</strong> {{ $museum->address }}</p>
                    <p class="card-text"><strong>Ссылка:</strong> <a href="{{ $museum->link }}" target="_blank">{{ $museum->link }}</a></p>
                    <p class="card-text"><strong>Цена:</strong> {{ $museum->price }}</p>

                    <a href="{{ route('museums.edit', $museum) }}" class="btn btn-primary">Редактировать</a>
                    <form action="{{ route('museums.destroy', $museum) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection