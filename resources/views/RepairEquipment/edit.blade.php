<!DOCTYPE html>
<html>
<head>
<title>Repair Equipment</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form action="{{ action('RepairController@update',$repairs->id) }}"  method="POST">
  
  <div class="form-group ">
    <label for="invoice">Invoice No</label>
    <input type="text" class="form-control"  name="id" value="{{$repairs->id}}">
 
  </div>
   <div class="form-group">
    <label for="category">Description</label>
    <input type="text" class="form-control" name="description" value="{{$repairs->description}}">
  </div>
  <div class="form-group">
    <label for="equipmetID">Cost</label>
    <input type="text" class="form-control"  name="cost"  value="{{$repairs->cost}}">
  </div>
   <div class="form-group">
    <label for="serialNo">Serial No</label>
    <input type="text" class="form-control"  name="invoice_attach"  value="{{$repairs->invoice_attach}}">
  </div>
  
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>

