<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    th, td {
  padding: 15px;
  text-align: left;
}

tr:hover {background-color: coral;}
td:hover {background-color: pink; color: red;}
a{
  border: 3px;
  padding:5px;
  border-radius: 3px;
  margin:2px;
}
  </style>
</head>
<body>

<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)    
    <tr>
       <td>{{$item->id}}</td>
      <td>{{$item->first_name}}</td>
      <td>{{$item->last_name}}</td>
      <td>{{$item->mobile_no}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>
        <a href="/edit/{{$item->id}}">Edit</a>
      <a href="/delete/{{$item->id}}" onclick="return confirm('Are you sure want to delete this record from student table?')">Delete</a></td>
    </tr>
    @endforeach
    
   
  </tbody>
</table><br>
<br>
<button class="btn btn-primary"><a href="/demo1" class="text-white">Add Student</a> </button>
</body>
</html>