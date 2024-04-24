@extends('dashboard.layouts.main')

@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Address</h1>
</div>

<div class="col-md-6">
    <form action="/dashboard/address/{{ $address->id }}" method="post">
        @method('put')
        @csrf
        {{-- <input type="text" name="tb_contact_id" value="{{ old('firstname', $address->tb_contact_id) }}" readonly> --}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pilih User</label>
            <select class="form-control" name="tb_contact_id" id="">
                <option value="">-- Pilih User --</option>
                @foreach($contacts as $contact)
                <option value="{{ $contact->id }}" <?php if($address->id == $contact->id){ echo 'selected'; } ?>>{{ $contact->firstname }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Street</label>
            <input type="text" name="street" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{ old('street', $address->street) }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{ old('city', $address->city) }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Province</label>
            <input type="text" name="province" class="form-control" id="exampleInputPassword1" required value="{{ old('province', $address->province) }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Country</label>
            <input type="text" name="country" class="form-control" id="exampleInputPassword1" required value="{{ old('country', $address->country) }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Postal Code</label>
            <input type="text" name="postal_code" class="form-control" id="exampleInputPassword1" required value="{{ old('postal_code', $address->postal_code) }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="/dashboard/address" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection