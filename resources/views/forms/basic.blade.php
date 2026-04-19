@extends('layouts.app')
@section('title', 'Basic Forms')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Basic Forms</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Forms</li><li>Basic</li></ul></div></div>
<div class="row g-3">
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Text Inputs</h5></div><div class="va-card-body">
        <div class="mb-3"><label class="form-label">Default Input</label><input type="text" class="form-control" placeholder="Enter text"></div>
        <div class="mb-3"><label class="form-label">With Icon</label><div class="input-group"><span class="input-group-text"><i class="bi bi-person"></i></span><input type="text" class="form-control" placeholder="Username"></div></div>
        <div class="mb-3"><label class="form-label">Disabled</label><input type="text" class="form-control" disabled value="Disabled input"></div>
        <div class="mb-3"><label class="form-label">Readonly</label><input type="text" class="form-control" readonly value="Read only"></div>
        <div><label class="form-label">Textarea</label><textarea class="form-control" rows="3" placeholder="Enter message"></textarea></div>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Select & Checks</h5></div><div class="va-card-body">
        <div class="mb-3"><label class="form-label">Select</label><select class="form-select"><option>Choose...</option><option>Option 1</option><option>Option 2</option><option>Option 3</option></select></div>
        <div class="mb-3"><label class="form-label">Multiple Select</label><select class="form-select" multiple style="height:80px"><option>Option 1</option><option>Option 2</option><option>Option 3</option></select></div>
        <div class="mb-3"><label class="form-label d-block">Checkboxes</label>
            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" checked id="c1"><label class="form-check-label" for="c1">Option 1</label></div>
            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="c2"><label class="form-check-label" for="c2">Option 2</label></div>
        </div>
        <div class="mb-3"><label class="form-label d-block">Radio Buttons</label>
            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="r1" checked id="r1"><label class="form-check-label" for="r1">Yes</label></div>
            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="r1" id="r2"><label class="form-check-label" for="r2">No</label></div>
        </div>
        <div class="mb-3"><label class="form-label">Switch</label><div class="form-check form-switch"><input class="form-check-input" type="checkbox" checked id="sw1"><label class="form-check-label" for="sw1">Enable notifications</label></div></div>
        <div><label class="form-label">Range</label><input type="range" class="form-range"></div>
    </div></div></div>
</div>
@endsection
