



@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    
                    @include('layouts.menu')
            
                <div class="card-body">
                    <div class="titles">
                    <a href="{{route('product.index')}}">< Sugrįšti</a>
                    </div>
                    <div class="show">
                    <h1>{{$product->title}}</h1>
                     @foreach($product->getImages as $img) 
                        <div class="images">
                            <img src="{{asset('images/products/'.$img->photo)}}">
                        </div>
                        
                    @endforeach
                        <div class="showUser">
                            
                            <title>{{$product->name}}</title>
                            <span>{{$product->about}}</span>
                            <span>{{$product->code}}</span>
                            <p>{{$product->notice}}</p>
                            <span>{{$product->tag}}</span>
                        </div>
                        <a href="#">Užsisakyti į namus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





