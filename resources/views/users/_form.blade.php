<div class="row">
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('name') has-danger @enderror">
            <label for="name" class="bmd-label-floating"> Name *</label>
            <input type="text" class="form-control " name="name" id="name"
                required="true" aria-required="true" value="{{ old('name', $user->name) }}">
            @error('name')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('email') has-danger @enderror">
            <label for="email" class="bmd-label-floating"> Email *</label>
            <input type="email" class="form-control" name="email" id="email"
                required="true" aria-required="true" value="{{ old('email', $user->email) }}">
            @error('email')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('password') has-danger @enderror">
            <label for="password" class="bmd-label-floating"> Password *</label>
            <input type="password" class="form-control" name="password" id="password"
                required="true" name="password" aria-required="true">
            @error('password')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div
            class="form-group bmd-form-group @error('password_confirmation') has-danger @enderror">
            <label for="password_confirmation" class="bmd-label-floating"> Confirm Password
                *</label>
            <input type="password" class="form-control" id="password_confirmation"
                required="true" equalto="#examplePassword" name="password_confirmation"
                aria-required="true">
            @error('password_confirmation')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
</div>