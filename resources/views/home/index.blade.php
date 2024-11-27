<script>
    const hobbies = {{\Illuminate\Support\Js::from($hobbies)}}
</script>


<h1>Second: Hello World</h1>
<h2>This is a laravel test project</h2>
<h3>Current year: {{ date('Y') }}</h3>
<p>You are on Page {{$title}} : {{$subtitle}}</p>
<p>Job: {!! $job !!}</p>
