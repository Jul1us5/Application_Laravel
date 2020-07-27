



@extends('layouts.app')

@section('content')
<div class="container">

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
                    @foreach ($products as $product)
                        @foreach ($product->getImages as $item)
                            <div class="product">
                                <h1>{{$product->title}}</h1>
                                <img src="{{asset('images/products/'.$item->photo)}}">
                                
                                <title>{{$product->name}}</title>
                                <span>{{$product->about}}</span>
                                <span>{{$product->code}}</span>
                                <p>{{$product->notice}}</p>
                                <span>{{$product->tag}}</span>

                            </div>
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection





