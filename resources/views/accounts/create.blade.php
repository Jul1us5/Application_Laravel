



@extends('layouts.app')

@section('content')

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>ADD ACCOUNTS</h1>
                    <form method="post" action="{{route('account.store')}}" enctype="multipart/form-data">
                        Vardas: <input type="text" pattern="[A-Za-z]{3,20}" name="firstname" required><br><br>
                        Pavardė: <input type="text" pattern="[A-Za-z]{3,20}" name="lastname" required><br><br>
                        Portret: <input type="file" name="img"><br><br>
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
