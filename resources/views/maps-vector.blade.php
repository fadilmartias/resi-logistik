@extends('layouts.master')
@section('title') @lang('translation.Vector_Maps')  @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Maps @endslot
@slot('title') Vector Maps @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">World Vector Map</h4>
                <p class="card-title-desc">Example of world vector maps.</p>
            </div>
            <div class="card-body">
                <div id="world-map-markers" style="height: 420px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">USA Vector Map</h4>
                <p class="card-title-desc">Example of united states of ameria vector maps.</p>
            </div>
            <div class="card-body">
                <div id="usa-vectormap" style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">India Vector Map</h4>
                <p class="card-title-desc">Example of india vector maps.</p>
            </div>
            <div class="card-body">
                <div id="india-vectormap"  style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Australia Vector Map</h4>
                <p class="card-title-desc">Example of australia vector maps.</p>
            </div>
            <div class="card-body">
                <div id="australia-vectormap" style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Chicago Vector Map</h4>
                <p class="card-title-desc">Example of chicago vector maps.</p>
            </div>
            <div class="card-body">
                <div id="chicago-vectormap"  style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">UK Vector Map</h4>
                <p class="card-title-desc">Example of united kingdom vector maps.</p>
            </div>
            <div class="card-body">
                <div id="uk-vectormap" style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Canada Vector Map</h4>
                <p class="card-title-desc">Example of canada vector maps.</p>
            </div>
            <div class="card-body">
                <div id="canada-vectormap"  style="height: 350px"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->
@endsection
@section('script')

<script src="{{ URL::asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/vector-maps.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
