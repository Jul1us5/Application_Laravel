

<form method="POST" action="{{route('account.update',[$account->id])}}">
   Vardas: {{ $account['firstname'] }}
   Pavardė: {{ $account['lastname'] }}
   Sąskaita: <input type="text" name="plus" value="0">
   @csrf
   <button type="submit">Pridėti</button>
</form>


