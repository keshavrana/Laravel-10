<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: grey">
    <h1>Please Fill the form and go kush ho jao </h1>
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" >
        <label for="">Mobile</label>
        <input type="text" name="mobile" >
        <label for="">Email</label>
        <input type="text" name="email" >
        <hr>
        <button type="submit">Submit</button>
    </form>

    <br><br><br><hr>

    <a href="{{route('users.index')}}">Go To List</a>
</body>
</html>