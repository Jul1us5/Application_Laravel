


<h1>ADD ACCOUNTS</h1>

<form action="{{route('account.store')}}" method="post">
    Vardas: <input type="text" name="firstname"><br><br>
    Pavardė: <input type="text" name="lastname"><br><br>
    Asmens Kodas: <input type="text" name="code"><br><br>
    <button type="submit">ADD</button>
    @csrf
</form>
