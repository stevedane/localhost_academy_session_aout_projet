<div class="row">
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('name') has-danger @enderror">
            <label for="name" class="bmd-label-floating"> Name *</label>
            <input type="text" class="form-control " name="name" id="name"
                required="true" aria-required="true" value="{{ old('name', $customer->name) }}">
            @error('name')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('name') has-danger @enderror">
            <label for="address" class="bmd-label-floating"> Address *</label>
            <input type="text" class="form-control " name="address" id="address"
                required="true" aria-required="true" value="{{ old('address', $customer->address) }}">
            @error('address')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('name') has-danger @enderror">
            <label for="phone_number" class="bmd-label-floating"> Phone_Number *</label>
            <input type="text" class="form-control " name="phone_number" id="phone_number"
                required="true" aria-required="true" value="{{ old('phone_number', $customer->phone_number) }}">
            @error('phone_number')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group bmd-form-group @error('name') has-danger @enderror">
            <label for="history_reservation" class="bmd-label-floating"> History_Reservation *</label>
            <input type="text" class="form-control " name="history_reservation" id="history_reservation"
                required="true" aria-required="true" value="{{ old('history_reservation', $customer->history_reservation) }}">
            @error('history_reservation')
                <label class="error" for="name">{{ $message }}</label>
            @enderror
        </div>
    </div>
</div>