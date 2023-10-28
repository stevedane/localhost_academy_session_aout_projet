@extends('layouts.guest',['title' => 'Forgot Password'])

@section('content')
<div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Forgot password</h4>
                </div>
                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email...">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <a class="btn btn-link" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>  
                  <button type="submit" class="btn btn-rose btn-link btn-lg">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
@endsection
