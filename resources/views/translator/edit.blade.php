<form method="POST" action="{{route('translator.update',$translator)}}">
Name: <input type="text" name="translator_name" value="{{$translator->name}}">
Surname: <input type="text" name="translator_surname" value="{{$translator->surname}}">
@csrf
<button type="submit">EDIT</button>
</form>