<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>update page</h1>
<form action="{{ url('update',$product->id) }}" method="post">
    @csrf
    <div>
        <label>name</label>
        <input type="text" name="name" value="{{ $product->name }}"/>
    </div>
    <div>
        <label>password</label>
        <input type="password" name="password" value="{{ $product->password }}"/>
    </div>
    <div>
        <input type="submit" name="update"/>
    </div>
</form>
</body>
</html>
