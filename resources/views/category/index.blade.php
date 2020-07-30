



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
                  <div class="category">
                    <div class="create_category">
                      <form action="{{ route('category.store') }}" method="POST">
                        @csrf
              
                          <select name="parent_id">
                            <option type="hidden" value="0">Kategorija</option>
                          </select>
        
                          <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Kategorijos pavadinimas" required>
                          <button type="submit" class="btn btn-primary">Sukurti</button>
            
                      </form>
                    </div>
                  </div>


                  <div class="category">

                  @foreach ($categories as $category)
                    <div class="inner_category">
                    {{ $category->title }}
                    <form action = "{{route('category.destroy', $category->id) }}" method="POST">
                              @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    </div>
                  @endforeach 

                  </div>


             

<!-- ------------------------------------------------ -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection