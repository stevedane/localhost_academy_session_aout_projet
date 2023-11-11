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
                <a href="{{route('post.edit',$post->id}}" class="btn btn-sm btn-warning">edit</a>
                <a href="{{route('post.delete',$post->id}}" class="btn btn-sm btn-danger">delete</a>
               <table class="table table-striped table-responsive"></table>
               <tr>
                <td>Id :</td>
                <td>{{$post->id}}</td>
               </tr>
               <tr>
                <td>Name:</td>
                <td>{{$post->name}}</td>
               </tr>
               <tr>
                <td>Description:</td>
                <td>{{$post->description}}</td>
               </tr>
            </div>
        </div>
    </div>
</body>
</html>