@extends('layouts.app')
@section('title', 'Form Validation')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Form Validation</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Forms</li><li>Validation</li></ul></div></div>
<div class="row g-3">
    <div class="col-lg-8">
        <div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Bootstrap Validation</h5></div><div class="va-card-body">
            <form class="needs-validation" novalidate id="validationForm">
                <div class="row g-3 mb-3">
                    <div class="col-md-6"><label class="form-label">First name <span class="text-danger">*</span></label><input type="text" class="form-control" required><div class="invalid-feedback">Please provide your first name.</div></div>
                    <div class="col-md-6"><label class="form-label">Last name <span class="text-danger">*</span></label><input type="text" class="form-control" required><div class="invalid-feedback">Please provide your last name.</div></div>
                </div>
                <div class="mb-3"><label class="form-label">Email <span class="text-danger">*</span></label><input type="email" class="form-control" required><div class="invalid-feedback">Please provide a valid email.</div></div>
                <div class="mb-3"><label class="form-label">Phone</label><input type="tel" class="form-control" pattern="[0-9]{10,}" placeholder="1234567890"><div class="invalid-feedback">Enter a valid phone number (min 10 digits).</div></div>
                <div class="mb-3"><label class="form-label">Password <span class="text-danger">*</span></label><input type="password" class="form-control" minlength="8" required><div class="invalid-feedback">Password must be at least 8 characters.</div></div>
                <div class="mb-3"><label class="form-label">Country <span class="text-danger">*</span></label><select class="form-select" required><option value="">Choose...</option><option>United States</option><option>Brazil</option><option>United Kingdom</option></select><div class="invalid-feedback">Please select a country.</div></div>
                <div class="mb-4 form-check"><input type="checkbox" class="form-check-input" id="agreeTerms" required><label class="form-check-label" for="agreeTerms">I agree to the terms and conditions <span class="text-danger">*</span></label><div class="invalid-feedback">You must agree before submitting.</div></div>
                <button class="btn btn-primary" type="submit">Submit Form</button>
                <button class="btn btn-outline-secondary ms-2" type="reset">Reset</button>
            </form>
        </div></div>
    </div>
    <div class="col-lg-4">
        <div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Validation States</h5></div><div class="va-card-body">
            <div class="mb-3"><label class="form-label">Valid Input</label><input type="text" class="form-control is-valid" value="Correct value"><div class="valid-feedback">Looks good!</div></div>
            <div class="mb-3"><label class="form-label">Invalid Input</label><input type="text" class="form-control is-invalid"><div class="invalid-feedback">This field is required.</div></div>
            <div><label class="form-label">Valid Select</label><select class="form-select is-valid"><option>Selected option</option></select><div class="valid-feedback">Good choice!</div></div>
        </div></div>
    </div>
</div>
@endsection
@push('scripts')
<script>
document.getElementById('validationForm').addEventListener('submit',function(e){e.preventDefault();e.stopPropagation();this.classList.add('was-validated');});
</script>
@endpush
