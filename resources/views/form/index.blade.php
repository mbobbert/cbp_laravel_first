<h1>Messages</h1>
<a href="{{ action('FormController@create')}}">Create new</a>
<br/>

@foreach($messages as $message)
    <b>{{ $message->name }}</b>
    <br/>
    {{ $message->message }}
    <hr/>
@endforeach