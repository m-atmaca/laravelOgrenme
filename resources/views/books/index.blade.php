@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kitaplar') }}</div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">kitap ismi</th>
                        <th scope="col">fiyat</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($books as $book)
                        <tr>
                        <th scope="row">{{$book->id}}</th>

                        <td>{{$book->isim}}</td>
                        <td>{{$book->fiyat}} ₺</td>




                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
