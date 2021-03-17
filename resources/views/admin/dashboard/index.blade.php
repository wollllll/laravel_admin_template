@extends('admin.components.layouts.base')

@section('title', Breadcrumb::getPageTitle())

@section('breadcrumbs')
    {{ Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <div>

    </div>
@endsection
