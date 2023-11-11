!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/ bootstrap/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 d-flex">
                <a href="{{route('brand.edit',$brand->id}}" class="btn btn-sm btn-warning">edit</a>
                <a href="{{route('brand.delete',$brand->id}}" class="btn btn-sm btn-danger">delete</a>
               <table class="table table-striped table-responsive"></table>
               <tr>
                <td>Id :</td>
                <td>{{$brand->id}}</td>
               </tr>
               <tr>
                <td>Name:</td>
                <td>{{$brand->name}}</td>
               </tr>
               <tr>
                <td>Description:</td>
                <td>{{$brand->description}}</td>
               </tr>
            </div>
        </div>
    </div>
</body>
</html>