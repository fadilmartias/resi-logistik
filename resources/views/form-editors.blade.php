@extends('layouts.master')
@section('title') @lang('translation.Form_Editors')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Forms @endslot
@slot('title') Form Editors @endslot
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Ckeditor Classic editor</h4>
                <p class="card-title-desc">Example of Ckeditor Classic editor</p>
            </div>
            <div class="card-body">
                <div id="ckeditor-classic"></div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
