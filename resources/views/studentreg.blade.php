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
	<h1 style="text-align: center;">Student REGISTER PAGE</h1>
	<div class="container">
		<div class="col-sm-6">
			<form action="{{route('regstore')}}" method="post">
        @csrf
        <div class="form-group row">
          <label for="no" class="col-sm-2 col-form-label">Roll_No</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="rollno" id="name" placeholder="Enter Your Roll Number">
          </div>
        </div>

        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your name">
          </div>
        </div>

        <div class="form-group row">
          <label for="address" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address">
          </div>
        </div>

        <div class="form-group row">
          <label for="sex" class="col-sm-2 col-form-label">Sex</label>
          <div class="custom-control custom-radio custom-control-inline">
  			<input type="radio" class="custom-control-input" id="male" name="sex" value="male">
  			<label class="custom-control-label" for="male">Male</label>
  			</div>
  			<div class="custom-control custom-radio custom-control-inline">
  			<input type="radio" class="custom-control-input" id="female" name="sex" value="Female">
  			<label class="custom-control-label" for="female">Female</label>
		  </div>
		</div>

        <div class="form-group row">
          <label for="phone" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">OK</button>
        <button type="reset" class="btn btn-secondary">Cancle</button>
  
      </form>

		</div>
	</div>
</body>
</html>

