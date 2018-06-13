<!DOCTYPE html>
<html>
<head>
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
    <form action="{{url('/feesIndex')}}">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="Tfees">Total Fees payable</label>
        <input type="text" id="Tfees" name="Tfees" placeholder="Your total fees for the sem..">

        <label for="1st">1st Installment</label>
        <input type="text" id="1st" name="1st" placeholder="Enter amount to be paid in the first installment..">

        <label for="2nd">2nd Installment</label>
        <input type="text" id="2nd" name="2nd" placeholder="Enter amount to be paid in the second installment..">

        <label for="Tinstallment">Total Installment</label>
        <input type="text" id="Tinstallment" name="Tinstallment" placeholder="Enter total amount paid in installment..">

        <label for="OneTime">One Time payment</label>
        <input type="text" id="OneTime" name="OneTime" placeholder="Enter total amount paid one time..">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
