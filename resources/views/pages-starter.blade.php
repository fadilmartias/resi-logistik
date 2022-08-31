@extends('layouts.master')
@section('title') @lang('translation.Starter_Page')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Starter Page @endslot
@endcomponent
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
