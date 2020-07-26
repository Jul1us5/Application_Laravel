



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

                    
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




