<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>New student Registration Form</h2>
    <form action="{{action('StudentController@store')}}" method="post">

        {{csrf_field()}}

        <div class="form-group">
            <label for="email">First Name:</label>
            <input type="text" class="form-control" id="fName" placeholder="Enter your first name" name="first_name">
        </div>
        <div class="form-group">
            <label for="email">Last Name:</label>
            <input type="text" class="form-control" id="lName" placeholder="Enter your last name" name="last_name">
        </div>
        <div class="form-group">
            <label for="email">Course:</label>
            <input type="text" class="form-control" id="course" placeholder="Enter your course" name="course">
        </div>
        <div class="form-group">
            <label for="email">Entry year:</label>
            <input type="text" class="form-control" id="year" placeholder="Enter your Entry year" name="year">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <button type="submit" class="btn btn-default">go back</button>
    </form>
</div>

</body>
</html>
