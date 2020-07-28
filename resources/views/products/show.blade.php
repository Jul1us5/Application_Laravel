



@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    
                    @include('layouts.menu')
            
                <div class="card-body">
                    <div class="show">
                     @foreach($product->getImages as $img) 
                        <img src="{{asset('images/products/'.$img->photo)}}">
                    @endforeach
                        <div class="showUser">
                            <h1>{{$product->title}}</h1>
                            <title>{{$product->name}}</title>
                            <span>{{$product->about}}</span>
                            <span>{{$product->code}}</span>
                            <p>{{$product->notice}}</p>
                            <span>{{$product->tag}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





