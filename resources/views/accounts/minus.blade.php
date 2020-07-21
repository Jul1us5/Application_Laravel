<form method="POST" action="{{route('account.update',[$account->id])}}">
Vardas: {{ $account['firstname'] }}
   Pavardė: {{ $account['lastname'] }}
   Sąskaita: <input type="text" name="minus" value="0">
   @csrf
   <button type="submit">Atimti</button>
</form>