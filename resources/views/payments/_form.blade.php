<div class="row">
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('name') has-danger @enderror">
            <label for="montant" class="bmd-label-floating"> Montant *</label>
            <input type="text" class="form-control " name="montant" id="montant"
                required="true" aria-required="true" value="{{ old('name', $payment->montant) }}">
            @error('montant')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('reference') has-danger @enderror">
            <label for="reference" class="bmd-label-floating"> Reference *</label>
            <input type="text" class="form-control" name="reference" id="reference"
                required="true" aria-required="true" value="{{ old('email', $payment->reference) }}">
            @error('reference')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('system') has-danger @enderror">
            <label for="system" class="bmd-label-floating"> system *</label>
            <select type="sytem" class="form-control" name="system" id="system"
                required="true" name="system" aria-required="true">
                 <option value="card">card</option>
                 <option value="mobile_money">mobile_money</option>
                 <option value="cash">cash</option>
            </select>
            @error('system')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div
            class="form-group bmd-form-group @error('number') has-danger @enderror">
            <label for="number" class="bmd-label-floating"> Number
                *</label>
            <input type="tel" class="form-control" id="number"
                required="true"  name="number"
                aria-required="true">
            @error('number')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
</div>