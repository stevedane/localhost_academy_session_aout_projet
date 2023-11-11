<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/ bootstrap/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nom">nom</label>
                        <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalide @enderror" value="{{old('nom')}}">
                        @error('nom')
                        <span class="invalide-feedback">
                        <strong>{{message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('nom') is-invalide @enderror" >{{old('description')}}</textarea>
                        @error('description')
                        <span class="invalide-feedback">
                        <strong>{{message}}</strong>
                        </span>
                        @enderror
                    </div> 
                    <div class="form-group mt-3">
                        <input type="submit" value="enregistre" class="btn btn-success">
                    </div>
               </form>
            </div>
        </div>
    </div>
</body>
</html>