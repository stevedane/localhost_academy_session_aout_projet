@if($user)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$user->name}} - Update</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <form method="post" action="{{route('users.update', $user->id)}}">
                                @csrf
                                @method('put')
                                <div class="card-header">
                                    <h2>
                                        Modification de l'utilisateur  : <b>{{$user->name}}</b>
                                        <a href="{{route('users.index')}}" class="btn btn-sm btn-primary">Retour</a>
                                    </h2>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input value="{{$user->name}}" class="form-control" type="text" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" id="email"type="email"  class="form-control" value="{{$user->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" id="email" type="password" class="form-control" value="{{$user->password}}">
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

@else
    redirect()->route('users.index');
@endif