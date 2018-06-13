<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>student fees</title>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>

<h2>Fees Payment Plan</h2>

<div>
    <form action="{{url('/storeFees')}}" method="post">

        {{csrf_field()}}

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="first_name" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="last_name" placeholder="Your last name..">

        <label for="Tfees">Total Fees payable</label>
        <input type="text" id="Tfees" name="Tfees" placeholder="Your total fees for the sem..">

        <label for="1st">1st Installment</label>
        <input type="text" id="Installment2" name="Installment1" placeholder="Enter amount to be paid in the first installment..">

        <label for="2nd">2nd Installment</label>
        <input type="text" id="Installment2" name="Installment2" placeholder="Enter amount to be paid in the second installment..">

        <label for="Tinstallment">Total Installment</label>
        <input type="text" id="Tinstallment" name="Tinstallment" placeholder="Enter total amount paid in installment..">

        <label for="OneTime">One Time payment</label>
        <input type="text" id="OneTime" name="OneTime" placeholder="Enter total amount paid one time..">

        <input type="submit" value="Submit">
        <a href="{{url('/')}}" class="btn btn-default">go back</a>
    </form>
</div>

</body>
</html>
