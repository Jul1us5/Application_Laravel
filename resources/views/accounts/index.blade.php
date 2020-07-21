@foreach ($account as $accounts)
{{$accounts->firstname}} {{$accounts->lastname}} {{$accounts->counts}} {{$accounts->code}} {{$accounts->bill}}
  <a href="{{route('account.plus',[$accounts])}}"><button>Pridėti</button></a>
  <a href="{{route('account.minus',[$accounts])}}"><button>Atimti</button></a>
  <form method="POST" action="{{route('account.destroy', [$accounts])}}">
   @csrf
   <button type="submit">Pašalinti</button>
  </form>
  <br>
@endforeach





