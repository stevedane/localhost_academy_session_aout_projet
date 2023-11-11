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
        <div class="form-group bmd-form-group @error('description') has-danger @enderror">
            <label for="description" class="bmd-label-floating"> Description *</label>
            <textarea  class="form-control" name="description" id="description"
                required="true" aria-required="true" >{{ old('description', $category->description) }}
            </textarea>
            @error('description')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    
</div>