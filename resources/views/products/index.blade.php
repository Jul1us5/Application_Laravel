



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
<!-- ------------------------------------------------ -->
                    @forelse($products as $product)
                    <div class="scene scene--card">
                        <div class="icard">
                            <div class="icard__face icard__face--front">
                            <img src="{{asset('images/products/'.$product->getImages[0]->photo)}}">
                            
                            </div>
                            <div class="icard__face icard__face--back">
                            <img src="{{asset('images/products/'.$product->getImages[0]->photo)}}">
                            </div>
                        </div>
                    </div>
                    @empty
                        <p>Nieko nera...</p>
                    @endforelse

                    <!-- @forelse($products as $product)
                    <div class="product">
                        <h1>{{$product->title}}</h1>
                        <img src="{{asset('images/products/'.$product->getImages[0]->photo)}}">
                    
                        <title>{{$product->name}}</title>
                        <span>{{$product->about}}</span>
                        <span>{{$product->code}}</span>
                        <p>{{$product->notice}}</p>
                        <span>{{$product->tag}}</span>
                        <a href="{{route('product.show', [$product])}}">+</a>
                        <form method="POST" action="{{route('product.destroy', [$product])}}">
                            @csrf
                            <button class="x" type="submit">x</button>
                        </form>
                    </div>
                    @empty
                        <p>Galiakas</p>
                    @endforelse -->

<!-- ------------------------------------------------ -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





