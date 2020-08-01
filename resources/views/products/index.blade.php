



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
                    <!-- <div class="titles"> -->

                    <form action="{{route('product.index')}}" method="get">
                        <select name="category">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select><br><br>
                        <button type="submit">FILER</button>
                    </form>
                    <!-- </div> -->
                    @forelse($products as $product)

                    <div class="product-card">
                        
                        <h1>{{$product->title}}</h1>
                        <img src="{{asset('images/products/'.$product->getImages[0]->photo)}}">
                        <title>{{$product->name}}</title>
                        <span>{{$product->about}}</span>
                        <!-- <span>{{$product->code}}</span> -->
                        <!-- <span>{{$product->tag}}</span> -->
                        <p>{{$product->notice}}</p>
                        

                        <a href="{{route('product.show', [$product])}}">Plačiau</a>
                        <form method="POST" action="{{route('product.destroy', [$product])}}">
                            @csrf
                            <button class="x" type="submit">Ištrinti</button>
                        </form>

                    </div>
                    @empty
                        <p>Nieko nera...</p>
                    @endforelse

<!-- ------------------------------------------------ -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





