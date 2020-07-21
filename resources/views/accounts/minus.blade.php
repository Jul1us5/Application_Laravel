<form method="POST" action="{{route('account.update',[$account->id])}}">
   Vardas: <input type="text" name="firstname" value="{{$account->firstname}}">
   Pavardė: <input type="text" name="lastname" value="{{$account->lastname}}">
   Sąskaita: <input type="text" name="bill" value="{{$account->bill}}">
   @csrf
   <button type="submit">Pridėti</button>
</form>