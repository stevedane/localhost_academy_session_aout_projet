<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>creation-user</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('users.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"  >
                        @error('name')
                        <span class="invalid-feedback">
                           <strong>{{$message}}</strong> 
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" > 
                        @error('email')
                        <span class="invalid-feedback">
                           <strong>{{$message}}</strong> 
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" id="password" type="password" class="form-control @error('email') is-invalid @enderror" > 
                        @error('password')
                        <span class="invalid-feedback">
                           <strong>{{$message}}</strong> 
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" value="enregistrer" class="btn btn-success">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>