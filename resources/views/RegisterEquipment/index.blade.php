<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Invoice No</th>
      <th scope="col">Show</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($registers as $register)
      <th scope="row"><p>{{ $register->id}}</p></th>      
    <td><a href= "{{ url('RegisterEquipment/show', $register->id) }}"class="btn btn-primary">Show</a></td>
    <td><a href= "{{ url('RegisterEquipment/edit', $register->id) }}" class="btn btn-primary">Update</a></td>
    <td><a href="{{ url('RegisterEquipment/destroy',$register->id) }}"  class="btn btn-primary">Delete</a></td>
    </tr>
     @endforeach
    
  </tbody>
</table>

</body>
</html> 