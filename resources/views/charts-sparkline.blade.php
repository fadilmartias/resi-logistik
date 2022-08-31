@extends('layouts.master')
@section('title') @lang('translation.Sparkline_Charts') @endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Charts @endslot
@slot('title') Sparkline Charts @endslot
@endcomponent
<div class="row">
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Pie Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline1" data-colors='["#34c38f", "#1c84ee", "#e9ecef"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Bar Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline2" data-colors='["#34c38f"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Line Chart</h4>
            </div>
            <div class="card-body analytics-info">
                <div id="sparkline4" data-colors='["#1c84ee"]'></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Composite Bar Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline3" data-colors='["#1c84ee", "#34c38f"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Line Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline5" data-colors='["#1c84ee", "rgba(28, 132, 238, 0.3)", "#34c38f", "rgba(52, 195, 143, 0.3)"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card bg-primary">
            <div class="card-header bg-transparent">
                <h4 class="card-title text-white mb-0">Discrete Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline6" data-colors='["#fff"]' class="text-center"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Bullet Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline7" data-colors='["#1c84ee", "#ef6767"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Box Plot Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline8" data-colors='["#34c38f"]' class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Tristate Chart</h4>
            </div>
            <div class="card-body">
                <div id="sparkline9" data-colors='["#1c84ee", "#34c38f", "#ef6767"]' class="text-center"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/jquery-sparkline/jquery-sparkline.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/sparklines.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
