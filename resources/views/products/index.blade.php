



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
                        
                            <div class="product">
                                <h1>{{$product->title}}</h1>
                                <!-- @foreach ($product->getImages as $item)

                            
                                
                                @endforeach -->
                                <img src="{{asset('images/products/'.$product->getImages[0]->photo)}}">
                            
                                <title>{{$product->name}}</title>
                                <span>{{$product->about}}</span>
                                <span>{{$product->code}}</span>
                                <p>{{$product->notice}}</p>
                                <span>{{$product->tag}}</span>
                                <form method="POST" action="{{route('product.destroy', [$product])}}">
                                    @csrf
                                    <button class="x" type="submit">x</button>
                                </form>
                        

                            </div>
                     
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection





