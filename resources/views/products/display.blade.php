<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 15px;
  th{
  background-color: #04AA6D;
  color: white;}

  text-align: center;
}

</style>
        <body>
</head>
<body>
    <h1 align="center">Display</h1>
    <table border="3px" align="center">
        <tr>
          <th >name</th>
          <th >password</th>
          <th>delete</th>
          <th>upadate</th>

        </tr>
        @foreach($data as $datas)
        <tr >
          <td>{{ $datas->name }}</td>
          <td>{{ $datas->password }}</td>
          <td>
            <a href="{{ url('delete', $datas->id )}}">delete</a>
          </td>
          <td>
            <a href="{{ url('update_view', $datas->id )}}">update</a>
            </td>

        </tr>
        @endforeach




      </table>

</body>
</html>
