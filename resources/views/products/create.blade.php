



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
                    <h1>Sukurti</h1>
                    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                        Title: <input type="text" pattern="[A-Za-z]{3,20}" name="title" required><br><br>
                        Name: <input type="text" pattern="[A-Za-z]{3,20}" name="name" required><br><br>
                        About: <input type="text" name="about"><br><br>
                        Kodas: <input type="text" pattern="[0-9]{6,6}" title="Kodą sudaro 11 skaičių" name="code" required><br><br>
                        Notice: <input type="text" name="notice"><br><br>
                        Tag: <input type="text" name="tag"><br><br>
                        Img: <input type="file" name="img"><br><br>
                        <button type="submit">Sukurti</button>
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection