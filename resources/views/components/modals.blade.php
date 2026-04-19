@extends('layouts.app')
@section('title', 'Modals')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Modals</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Components</li><li>Modals</li></ul></div></div>
<div class="row g-3">
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Basic Modal</h5></div><div class="va-card-body">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Open Modal</button>
        <div class="modal fade" id="basicModal" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Basic Modal</h5><button class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><p>This is a basic modal with a header, body, and footer.</p></div><div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button class="btn btn-primary">Save Changes</button></div></div></div></div>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Confirmation Modal</h5></div><div class="va-card-body">
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">Delete Item</button>
        <div class="modal fade" id="confirmModal" tabindex="-1"><div class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-body text-center py-4"><div class="rounded-circle bg-danger bg-opacity-10 d-inline-flex p-3 mb-3"><i class="bi bi-exclamation-triangle text-danger" style="font-size:2rem"></i></div><h5>Are you sure?</h5><p class="text-muted">This action cannot be undone. This will permanently delete the item.</p><div class="d-flex gap-2 justify-content-center"><button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button class="btn btn-danger">Yes, Delete</button></div></div></div></div></div>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Large Modal</h5></div><div class="va-card-body">
        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#lgModal">Large Modal</button>
        <div class="modal fade" id="lgModal" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Large Modal</h5><button class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><p>This is a large modal that provides more space for content, forms, or detailed information.</p></div><div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div></div></div></div>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Form Modal</h5></div><div class="va-card-body">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">Add New</button>
        <div class="modal fade" id="formModal" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Add New Item</h5><button class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><div class="mb-3"><label class="form-label">Name</label><input type="text" class="form-control"></div><div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control"></div><div class="mb-3"><label class="form-label">Role</label><select class="form-select"><option>Admin</option><option>Editor</option><option>Viewer</option></select></div></div><div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button class="btn btn-success">Add</button></div></div></div></div>
    </div></div></div>
</div>
@endsection
