<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
</head>
<body>

    {{-- AC 4 --}}

    <!-- <h1>Fruits List</h1>
    @foreach ($fruits as $fruit)
        <p>Name: {{ $fruit['name'] }}, Price: {{ $fruit['price'] }}</p>
    @endforeach  -->

    {{-- AC 5 --}}

    <h1>Here are all the fruits:</h1>
    @foreach ($fruits as $fruit)
        <p>{{ $fruit->name }} costs {{ $fruit->price }} $</p>
    @endforeach
   

</body>
</html>