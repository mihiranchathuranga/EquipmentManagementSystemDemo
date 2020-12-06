<!DOCTYPE html>
<html>
<head>
<title>Register Equipment</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form action="{{ action('RegisterController@update',$registers->id) }}"  method="POST">
  
  <div class="form-group ">
    <label for="invoice">Invoice No</label>
    <input type="text" class="form-control"  name="id" value="{{$registers->id}}">
 
  </div>
   <div class="form-group">
    <label for="category">Category</label>
    <input type="text" class="form-control" name="category" value="{{$registers->category}}">
  </div>
  <div class="form-group">
    <label for="equipmetID">Equipment ID</label>
    <input type="text" class="form-control"  name="equipment_id"  value="{{$registers->equipment_id}}">
  </div>
   <div class="form-group">
    <label for="serialNo">Serial No</label>
    <input type="text" class="form-control"  name="serial_no"  value="{{$registers->serial_no}}">
  </div>
  <div class="form-group">
    <label for="supplier">Supplier</label>
    <input type="text" class="form-control"  name="supplier" value="{{$registers->supplier}}">
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>


