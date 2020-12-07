<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form action="{{ action('RepairController@store') }}" method="POST">
  <div class="form-group ">
    <label for="repair">Repair No</label>
    <input type="text" class="form-control"  name="id"  >
 
  </div>
  <div class="form-group ">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" >
  </div>
   <div class="form-group">
    <label for="cost">Cost</label>
    <input type="text" class="form-control" name="cost">
  </div>
  <div class="form-group">
    <label for="invoice_attach">Invoice Attach</label>
    <input type="text" class="form-control" name="invoice_attach" >
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>


