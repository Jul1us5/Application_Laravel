



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
                    <h1>Sukurti</h1>
                    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                        Title: <input type="text" pattern="[A-Za-z]{3,20}" name="title" required><br><br>
                        Name: <input type="text" pattern="[A-Za-z]{3,20}" name="name" required><br><br>
                        About: <input type="text" name="about"><br><br>
                        Kodas: <input type="text" pattern="[0-9]{6,6}" title="Kodą sudaro 6 skaičių" name="code" required><br><br>
                        Notice: <input type="text" name="notice"><br><br>
                        Tag: <input type="text" name="tag"><br><br>
                        
                        <div class="form-group">
                            @foreach ($categories as $category)
                            <label>{{$category->title}}</label>
                            <input type="checkbox" name="categories[]" value="{{$category->id}}">
                            @endforeach
                        </div>
                    

                        <div id="product-photo-inputs">
                        Img: <input type="file" name="img[]"><br><br><br>
                        </div>
                        
                        <button id="add-product-photo" type="button">Add Photo</button>
                        <button type="submit">Sukurti</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
