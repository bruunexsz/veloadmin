@extends('layouts.app')
@section('title', 'File Upload')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">File Upload</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Forms</li><li>File Upload</li></ul></div></div>
<div class="row g-3">
    <div class="col-lg-8">
        <div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Dropzone Upload</h5></div><div class="va-card-body">
            <div class="va-dropzone" id="dropzone1">
                <i class="bi bi-cloud-arrow-up" style="font-size:3rem;color:var(--va-primary)"></i>
                <h5 class="mt-3">Drop files here or click to upload</h5>
                <p class="text-muted mb-0">Supports: JPG, PNG, GIF, PDF (Max 10MB)</p>
                <input type="file" multiple style="display:none" id="fileInput1">
            </div>
            <div id="fileList" class="mt-3"></div>
        </div></div>
    </div>
    <div class="col-lg-4">
        <div class="va-card mb-3"><div class="va-card-header"><h5 class="va-card-title">Standard Upload</h5></div><div class="va-card-body">
            <div class="mb-3"><label class="form-label">Single File</label><input type="file" class="form-control"></div>
            <div><label class="form-label">Multiple Files</label><input type="file" class="form-control" multiple></div>
        </div></div>
        <div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Avatar Upload</h5></div><div class="va-card-body text-center">
            <img src="https://ui-avatars.com/api/?name=Upload&background=6366f1&color=fff&size=100" class="rounded-circle mb-3" width="100" height="100" id="avatarPreview">
            <div><input type="file" accept="image/*" class="form-control form-control-sm" onchange="if(this.files[0]){document.getElementById('avatarPreview').src=URL.createObjectURL(this.files[0])}"></div>
        </div></div>
    </div>
</div>
@endsection
@push('scripts')
<script>
const dz=document.getElementById('dropzone1'),fi=document.getElementById('fileInput1'),fl=document.getElementById('fileList');
dz.addEventListener('click',()=>fi.click());
dz.addEventListener('dragover',e=>{e.preventDefault();dz.style.borderColor='var(--va-primary)';dz.style.background='rgba(99,102,241,.04)'});
dz.addEventListener('dragleave',()=>{dz.style.borderColor='';dz.style.background=''});
dz.addEventListener('drop',e=>{e.preventDefault();dz.style.borderColor='';dz.style.background='';showFiles(e.dataTransfer.files)});
fi.addEventListener('change',()=>showFiles(fi.files));
function showFiles(files){Array.from(files).forEach(f=>{const d=document.createElement('div');d.className='d-flex align-items-center justify-content-between border rounded p-2 mb-2';d.innerHTML=`<div class="d-flex align-items-center gap-2"><i class="bi bi-file-earmark text-primary"></i><div><div class="fw-medium" style="font-size:.8125rem">${f.name}</div><small class="text-muted">${(f.size/1024).toFixed(1)} KB</small></div></div><button class="btn btn-sm btn-outline-danger" onclick="this.parentElement.remove()"><i class="bi bi-x"></i></button>`;fl.appendChild(d)})}
</script>
@endpush
