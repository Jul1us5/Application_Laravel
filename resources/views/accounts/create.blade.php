



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><a href="{{route('home')}}"><b>{{ __('Pagrindinis') }}</b></a>
            
            <a href="{{route('account.index')}}">Sąrašas</a>
            <!-- <a href="{{route('account.index')}}">Peržiureti</a> -->
            <a href="{{route('account.create')}}">Pridėti naują</a>
            
        
            </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>ADD ACCOUNTS</h1>
                    <form action="{{route('account.store')}}" method="post">
                        Vardas: <input type="text" pattern="[A-Za-z]{3,20}" name="firstname" required><br><br>
                        Pavardė: <input type="text" pattern="[A-Za-z]{3,20}" name="lastname" required><br><br>
                        Asmens Kodas: <input type="text" pattern="[0-9]{11,11}" title="Asmens kodą sudaro 11 skaičių" name="code" required><br><br>
                        <button type="submit">Pridėti</button>
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
