<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Create post</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <form method="post" action="{{route('posts.update',$post->id)}}">
                                @csrf
                                @method('put')
                                <div class="card-header">
                                    <h2>
                                        Ajout d'un post
                                        <a href="{{route('posts.index')}}" class="btn btn-sm btn-primary">Retour</a>
                                    </h2>
                                </div>
                                <div class="card-body">
                                    @if(session('error'))
                                        <div class="alert alert-success">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input value="{{$post->title}}" class="form-control" type="text" name="title" id="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="nom">Description</label>
                                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">
                                            {{ $post->description }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-around">
                                            <input class="btn btn-danger" type="reset" value="Réinitialiser">
                                            <input class="btn btn-success" type="submit" value="Enregistrer">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>