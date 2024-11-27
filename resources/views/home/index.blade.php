<h1>Hello World</h1>
{{--
    Comment
--}}

<p>Hobbies:</p>
<ul>
    @foreach($hobbies as $hobbie)
        <li> {{ $loop->iteration }} {{$hobbie}}</li>
    @endforeach
</ul>
