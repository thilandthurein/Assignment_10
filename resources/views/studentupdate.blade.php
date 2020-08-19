<!DOCTYPE html>
<html>
<head>
  <title>Patient Register Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
  <h1 style="text-align: center;">Student List</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Sex</th>
      <th scope="col">Phone</th>
      <th scope="col" colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $row)
      <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->rollno}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->address}}</td>
        <td>{{$row->sex}}</td>
        <td>{{$row->phone}}</td>
        <td><a href="{{route('regshow',$row->id)}}" class="btn-info">Edit</a></td>

    <form method="post" action="{{route('regdestroy',$row->id)}}"  enctype="multipart-data">
         @csrf
          @method('DELETE')
        <td><input type="submit" class="btn btn-danger" value="Delete"></td>
    </form>

    <form method="post" action="{{route('regdestroytime',$row->id)}}">
         @csrf
          @method('DELETE')
         <td><input type="submit" class="btn btn-danger" value="Deletetime"></td>
    </form>
    </tr>
      @endforeach
  </tbody>
</table>
</body>
</html>

