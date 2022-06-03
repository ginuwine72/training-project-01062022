<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Department</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <div class="card">
    {{$employee}}
  </div>
  <tbody>
      @php($i=1)
      @foreach($employee as $row)
    <tr>
      <th>{{$i++}}</th>
      <td>{{$row->fullname}}</td>
      <td>{{$row->dep}}</td>
      <td>{{$row->image}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>