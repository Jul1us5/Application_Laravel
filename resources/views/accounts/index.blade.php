



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><a href="{{route('home')}}"><b>{{ __('Pagrindinis') }}</b></a>
            
            <a href="{{route('account.index')}}">Sąrašas</a>
            <a href="{{route('product.index')}}">Sukurti</a>
            <a href="{{route('account.create')}}">Pridėti naują</a>
            
        
            </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="index-main">
                            <span>VARDAS</span>
                            <span>PAVARDĖ</span>
                            <span>ID</span>
                            <span>ASMENS KODAS</span>
                            <span>Eur.</span>
                            </div>
                        <div class="buttons">
                    @foreach ($account as $accounts)
                      <span>{{$accounts->firstname}}</span> <span>{{$accounts->lastname}}</span> <span>{{$accounts->counts}}</span> <span>{{$accounts->code}}</span> <span>{{$accounts->bill}} €</span>
                      <a href="{{route('account.plus',[$accounts])}}"><span>+</a>
                        <a href="{{route('account.minus',[$accounts])}}">-</span></a>
                        
                          
                        <br>
                    @endforeach
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





