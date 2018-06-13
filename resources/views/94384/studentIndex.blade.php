<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Student Fee Payment Plan</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<h1>New Student Records</h1>
@if(count($students) > 1)
    @foreach($students as $student)
        <div class="well">
            <h3><a href="/studentIndex/{{$student->id}}">{{$student->first_name}}</a></h3>
            <small>written on{{$student->created_at}}</small>
        </div>

    @endforeach

@else
    <p>No Records to display</p>

@endif

</body>

</html>

