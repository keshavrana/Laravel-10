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
    <form action="{{route('users.update',$user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Name</label>
        <input type="text" name="name" value="{{$user->name}}">
        <label for="">Mobile</label>
        <input type="text" name="mobile" value="{{$user->mobile}}">
        <label for="">Email</label>
        <input type="text" name="email" value="{{$user->email}}">
        <hr>
        <button type="submit">Update</button>
    </form>

    <br><br><br><hr>

    <a href="{{route('users.index')}}">Go To List</a>
</body>
</html>