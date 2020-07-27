



@extends('layouts.app')

@section('content')
<div class="container">

    @foreach ($products as $product)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    
                    @include('layouts.menu')
            
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @foreach ($product->getImages as $photo)
                    <img src="{{asset('images/products/'.$photo->photo)}}" style="width: 250px; height: auto;">
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection





