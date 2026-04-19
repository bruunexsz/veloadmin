@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Profile</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Profile</li></ul></div></div>

{{-- Cover & Avatar --}}
<div class="va-card mb-4">
    <div style="height:200px;background:linear-gradient(135deg,#6366f1,#a855f7);border-radius:12px 12px 0 0"></div>
    <div class="px-4 pb-4" style="margin-top:-50px">
        <div class="d-flex flex-wrap align-items-end gap-3">
            <img src="https://ui-avatars.com/api/?name=John+Doe&background=6366f1&color=fff&size=100&bold=true" class="rounded-circle border border-4 border-white" width="100" height="100">
            <div class="mb-2">
                <h4 class="mb-0">John Doe</h4>
                <p class="text-muted mb-0">Full Stack Developer | San Francisco, CA</p>
            </div>
            <button class="btn btn-primary btn-sm ms-auto mb-2"><i class="bi bi-pencil me-1"></i>Edit Profile</button>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-xl-4">
        <div class="va-card mb-3">
            <div class="va-card-body">
                <h6 class="mb-3">About</h6>
                <div class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-briefcase text-muted"></i><span>Senior Developer at <strong>TechCorp</strong></span></div>
                <div class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-geo-alt text-muted"></i><span>San Francisco, California</span></div>
                <div class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-envelope text-muted"></i><span>john.doe@email.com</span></div>
                <div class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-phone text-muted"></i><span>+1 (555) 123-4567</span></div>
                <div class="d-flex align-items-center gap-2"><i class="bi bi-globe text-muted"></i><span>johndoe.dev</span></div>
            </div>
        </div>
        <div class="va-card">
            <div class="va-card-body">
                <h6 class="mb-3">Skills</h6>
                <span class="badge bg-primary bg-opacity-10 text-primary me-1 mb-1 p-2">Laravel</span>
                <span class="badge bg-success bg-opacity-10 text-success me-1 mb-1 p-2">Vue.js</span>
                <span class="badge bg-info bg-opacity-10 text-info me-1 mb-1 p-2">React</span>
                <span class="badge bg-warning bg-opacity-10 text-warning me-1 mb-1 p-2">Node.js</span>
                <span class="badge bg-danger bg-opacity-10 text-danger me-1 mb-1 p-2">Python</span>
                <span class="badge bg-primary bg-opacity-10 text-primary me-1 mb-1 p-2">PostgreSQL</span>
                <span class="badge bg-success bg-opacity-10 text-success me-1 mb-1 p-2">Docker</span>
                <span class="badge bg-info bg-opacity-10 text-info me-1 mb-1 p-2">AWS</span>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="va-card">
            <div class="va-card-body">
                <ul class="nav nav-tabs mb-4" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#overview">Overview</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#settings">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#activity">Activity</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="overview">
                        <h6>About Me</h6>
                        <p class="text-muted">Experienced full-stack developer with 8+ years of expertise in building scalable web applications. Passionate about clean code, user experience, and mentoring junior developers. Currently leading a team of 5 developers building next-generation SaaS products.</p>
                        <h6 class="mt-4">Projects</h6>
                        <div class="row g-3">
                            <div class="col-md-6"><div class="border rounded p-3"><h6 class="mb-1" style="font-size:.875rem">E-Commerce Platform</h6><p class="text-muted mb-2" style="font-size:.8125rem">Laravel + Vue.js marketplace</p><div class="progress" style="height:4px"><div class="progress-bar bg-primary" style="width:85%"></div></div></div></div>
                            <div class="col-md-6"><div class="border rounded p-3"><h6 class="mb-1" style="font-size:.875rem">Analytics Dashboard</h6><p class="text-muted mb-2" style="font-size:.8125rem">React + Node.js analytics</p><div class="progress" style="height:4px"><div class="progress-bar bg-success" style="width:62%"></div></div></div></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="settings">
                        <form>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6"><label class="form-label">First Name</label><input type="text" class="form-control" value="John"></div>
                                <div class="col-md-6"><label class="form-label">Last Name</label><input type="text" class="form-control" value="Doe"></div>
                            </div>
                            <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control" value="john.doe@email.com"></div>
                            <div class="mb-3"><label class="form-label">Bio</label><textarea class="form-control" rows="3">Senior Developer at TechCorp</textarea></div>
                            <button type="button" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="activity">
                        <div class="va-timeline">
                            <div class="va-timeline-item"><div class="fw-medium">Updated profile picture</div><small class="text-muted">Today at 10:30 AM</small></div>
                            <div class="va-timeline-item"><div class="fw-medium">Completed project "Analytics Dashboard"</div><small class="text-muted">Yesterday at 3:45 PM</small></div>
                            <div class="va-timeline-item"><div class="fw-medium">Joined the Design Team</div><small class="text-muted">Apr 10, 2026</small></div>
                            <div class="va-timeline-item"><div class="fw-medium">Account created</div><small class="text-muted">Jan 15, 2026</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
