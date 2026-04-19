@extends('layouts.app')
@section('title', 'Leaflet Maps')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Leaflet Maps</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Maps</li><li>Leaflet</li></ul></div></div>
<div class="row g-3">
    <div class="col-12">
        <div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Interactive Map</h5></div>
        <div class="va-card-body p-0"><div id="leafletMap" style="height:450px;border-radius:0 0 12px 12px"></div></div></div>
    </div>
    <div class="col-md-6">
        <div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Markers Map</h5></div>
        <div class="va-card-body p-0"><div id="markersMap" style="height:300px;border-radius:0 0 12px 12px"></div></div></div>
    </div>
    <div class="col-md-6">
        <div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Dark Tiles</h5></div>
        <div class="va-card-body p-0"><div id="darkMap" style="height:300px;border-radius:0 0 12px 12px"></div></div></div>
    </div>
</div>
@endsection
@push('scripts')
<script>
var m1=L.map('leafletMap').setView([51.505,-0.09],13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{attribution:'&copy; OpenStreetMap'}).addTo(m1);
L.marker([51.505,-0.09]).addTo(m1).bindPopup('<b>London</b><br>VeloAdmin HQ').openPopup();

var m2=L.map('markersMap').setView([40.7128,-74.006],4);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{attribution:'&copy; OpenStreetMap'}).addTo(m2);
[[40.71,-74.00,'New York'],[34.05,-118.24,'Los Angeles'],[41.87,-87.62,'Chicago'],[29.76,-95.36,'Houston']].forEach(function(c){L.marker([c[0],c[1]]).addTo(m2).bindPopup('<b>'+c[2]+'</b>')});

var m3=L.map('darkMap').setView([48.856,2.352],12);
L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png',{attribution:'&copy; CartoDB'}).addTo(m3);
L.marker([48.856,2.352]).addTo(m3).bindPopup('<b>Paris</b>');
</script>
@endpush
