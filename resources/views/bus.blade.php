<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col">
<form action="/busread" method="post">
{{ csrf_field() }}
<table class="table">
    <tr>
        <td>BusNumber</td>
        <td><input name='bname' type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>DriverName</td>
        <td><input name='bdri'  type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Route</td>
        <td><input name='br' type="text" class="form-control"></td>
    </tr>
    
    <tr>
        <td></td>
        <td><button class="btn btn-primary">Submit</button></td>
    </tr>
    
</table>
</form>

</div></div></div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</body>
</html>