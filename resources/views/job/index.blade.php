<div>
    <h1>hello {{ $name }}</h1>
    @foreach ($jobs as $job )
    <div>
        {{ $job['title'] }} : {{ $job['salary'] }}
    </div>
    @endforeach
</div>
