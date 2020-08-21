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
  @foreach ($students as $student)
  
	 <form method="post" action="{{route('regupdate',$student->id)}}">
    @csrf
    @method('PUT')
    <h1 style="text-align: center;">Student Edit PAGE</h1>
    <div class="form-group">
      <label for="no">Roll No</label>
      <input type="text" class="form-control" id="no" name="rollno" value="{{$student->rollno}}">
    </div>
     <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
    </div>
     <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="{{$student->address}}">
    </div>
     <div class="form-group">
      <label for="sex">Sex</label>
      <input type="text" class="form-control" id="sex" name="sex" value="{{$student->sex}}">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="sex" name="phone" value="{{$student->phone}}">
    </div>
     
     <button type="submit" class="btn btn-primary">Update</button>

   </form>
@endforeach
</body>
</html>