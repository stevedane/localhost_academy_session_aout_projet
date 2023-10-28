@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <form class="form" method="post" action="auth_controller.php">
          <div class="card card-login card-hidden">
            <div class="card-header card-header-rose text-center">
              <h4 class="card-title">Login</h4>
            </div>
            <div class="card-body ">
              <p class="card-description text-center">Or Be Classical</p>
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email..." name="email" id="email" require>
                </div>
              </span>
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password..."  name="password" id="password" require>
                </div>
              </span>
            </div>
            <div class="card-footer justify-content-center">
              <a href="#pablo" class="btn btn-rose btn-link btn-lg">Lets Go</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection