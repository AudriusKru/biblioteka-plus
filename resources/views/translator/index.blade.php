@foreach ($translators as $translator)
<a href="{{route('translator.edit',[$translator])}}">{{$translator->name}}
{{$translator->surname}}</a>
<form method="POST" action="{{route('translator.destroy', $translator)}}">
@csrf
<button type="submit">DELETE</button>
</form>
<br>
@endforeach
