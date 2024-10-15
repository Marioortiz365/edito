@extends('Layout.app')


@section('titulos')
    Universadad Politécnica de Zacatecas
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="offset-md-1 col-md-10 text-center">
                <h1>Universadad Politécnica de Zacatecas</h1>
            </div>
        </div>
    <div class="content">
        <div class="row">
            <div class="offset-md-2 col-md-8 text-center">
                <img src="{{asset('images/upz.png')}}" title="UPZ" class="img-responsive">
            </div>
        </div>
    </div>
</div>
@endsection