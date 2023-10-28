<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Create posts for test</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Liste de nos posts</h1>
                <a href="{{route('posts.create')}}" class="btn btn-success">Nouveau</a>
            </div>
            <div class="col-md-12 mt-3">
                <table class="table table-responsive table-bordered table-striped table-hover">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    @foreach($posts as $key=>$post)
                        <tr>
                            <td width="5">{{++$key}}</td>
                            <td width="15">{{$post->title}}</td>
                            <td width="50">{{$post->description}}</td>
                            <td width="20" class="text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('posts.show',$post->id)}}" class="btn btn-success btn-sm">Show</a>
                                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning btn-sm mx-2">Edit</a>
                                    <a href="{{route('posts.comment',$post->id)}}" class="btn btn-primary btn-sm mx-2">Comment</a>

                                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                </div>
                                
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>