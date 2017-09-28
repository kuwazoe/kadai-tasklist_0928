@if (count($errors) > 0)
    <ul>
        @foreach ($error->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif