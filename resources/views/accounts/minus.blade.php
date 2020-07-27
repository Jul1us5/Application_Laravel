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

                    <form method="POST" action="{{route('account.update',[$account->id])}}">
                        Vardas: {{ $account['firstname'] }}<br/>
                        Pavardė: {{ $account['lastname'] }}<br/>
                        Sąskaita: {{ $account['bill'] }} €<br/>
                        <input type="text" name="minus" value="0">
                        @csrf
                        <button type="submit">Atimti</button>
                     </form>
                     <form method="POST" action="{{route('account.destroy', [$account])}}">
                        @csrf
                        <button class="x" type="submit">x</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection