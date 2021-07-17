<form method="POST" action="{{route('translator.store')}}">
Name: <input type="text" name="translator_name">
Surname: <input type="text" name="translator_surname">
@csrf
<button type="submit">ADD</button>
</form>
