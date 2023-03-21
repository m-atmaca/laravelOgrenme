@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kitap Ekleme Sayfası') }}</div>
                <div class="card-body">
                    <h1>KİTAP EKLE</h1>
                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">kitap adı</label>
                            <input type="text" name="isim" class="form-control" placeholder="kitabın adı">
                        </div>
                        <div class="form-group">
                            <label for="">kitap fiyatı</label>
                            <input type="text" name="fiyat" class="form-control" placeholder="kitabın fiyatı">
                        </div>
                        <button type="submit" class="btn btn-success mt-1" >Ekle</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
