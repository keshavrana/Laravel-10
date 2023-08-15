<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: lightblue">
    <table border="12px">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
       
            @foreach ($user as $item)
            <tbody>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->mobile}}</td>
                <td><a href="{{route('users.edit',$item->id)}}">Edit</a></td>
                <td>
                    <form action="{{route('users.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    
                </td>
            </tbody>
            @endforeach
       
    </table>
</body>
</html>