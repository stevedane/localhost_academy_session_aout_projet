<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Detail - of Post</title>
</head>
<body>
   <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 d-flex">
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-warning mx-2">Edit</a>
                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
                <div class="col-md-6">
                    
                    <table class="table table-striped table-responsive">
                        <tr>
                            <td>Id :</td>
                            <td>{{$post->id}}</td>
                         </tr>
                        <tr>
                            <td>Title :</td>
                            <td>{{$post->title}}</td>
                         </tr>
                         <tr>
                            <td>Description :</td>
                            <td>{{$post->description}}</td>
                         </tr>
                         <tr>
                            <td>Created_at :</td>
                            <td>{{$post->created_at}}</td>
                         </tr>
                         <tr>
                            <td>Updated_at :</td>
                            <td>{{$post->updated_at}}</td>
                         </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div> 
</body>
</html>