@extends('layouts.app')
@section('title', 'Basic Tables')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Basic Tables</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Tables</li><li>Basic</li></ul></div></div>
<div class="row g-3">
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Striped Table</h5></div><div class="va-card-body p-0">
        <div class="table-responsive"><table class="table table-striped va-table mb-0">
            <thead><tr><th>#</th><th>Name</th><th>Email</th><th>Role</th><th>Status</th><th>Actions</th></tr></thead>
            <tbody>
                <tr><td>1</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Sarah+J&size=32&background=6366f1&color=fff" class="rounded-circle" width="32"> Sarah Johnson</div></td><td>sarah@example.com</td><td>Admin</td><td><span class="va-badge va-badge-success">Active</span></td><td><button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button><button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td>2</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Mike+C&size=32&background=10b981&color=fff" class="rounded-circle" width="32"> Mike Chen</div></td><td>mike@example.com</td><td>Editor</td><td><span class="va-badge va-badge-success">Active</span></td><td><button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button><button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td>3</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Emily+D&size=32&background=f59e0b&color=fff" class="rounded-circle" width="32"> Emily Davis</div></td><td>emily@example.com</td><td>Viewer</td><td><span class="va-badge va-badge-warning">Pending</span></td><td><button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button><button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td>4</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Alex+W&size=32&background=ef4444&color=fff" class="rounded-circle" width="32"> Alex Wilson</div></td><td>alex@example.com</td><td>Editor</td><td><span class="va-badge va-badge-danger">Inactive</span></td><td><button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button><button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td>5</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Lisa+B&size=32&background=06b6d4&color=fff" class="rounded-circle" width="32"> Lisa Brown</div></td><td>lisa@example.com</td><td>Admin</td><td><span class="va-badge va-badge-success">Active</span></td><td><button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button><button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button></td></tr>
            </tbody>
        </table></div>
    </div></div></div>
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Bordered Table</h5></div><div class="va-card-body p-0">
        <div class="table-responsive"><table class="table table-bordered va-table mb-0">
            <thead><tr><th>Product</th><th>Category</th><th>Price</th><th>Stock</th><th>Rating</th></tr></thead>
            <tbody>
                <tr><td>MacBook Pro 14"</td><td>Electronics</td><td>$2,499</td><td>142</td><td><i class="bi bi-star-fill text-warning"></i> 4.9</td></tr>
                <tr><td>AirPods Pro</td><td>Audio</td><td>$249</td><td>350</td><td><i class="bi bi-star-fill text-warning"></i> 4.7</td></tr>
                <tr><td>iPad Air M2</td><td>Tablets</td><td>$799</td><td>89</td><td><i class="bi bi-star-fill text-warning"></i> 4.8</td></tr>
            </tbody>
        </table></div>
    </div></div></div>
</div>
@endsection
