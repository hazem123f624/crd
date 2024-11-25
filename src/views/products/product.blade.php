<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--water.css--><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<a class="btn btn-info" href="create">create new product</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>description</th>
        <th>img</th>
        <th>category</th>
        <th>user</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    @foreach($product as $pro)
        <tr>
            {{--<pre>
            @php
            print_r($pro);
                 exit();
                    @endphp--}}
            <td>{{$pro["id"]}}</td>
            <td>{{$pro["name"]}}</td>
            <td>{{$pro["price"]}}</td>
            <td>{{$pro["description"]}}</td>
            <td>{{$pro["img"]}}</td>
            <td>{{$pro["category_id"]}}</td>
            <td>{{$pro["user_id"]}}</td>
            <td><a class="btn btn-success" href="edit/{{$pro['id']}}">edit</a></td>
            <td><a class="btn btn-warning" href="delete/{{$pro['id']}}">delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>