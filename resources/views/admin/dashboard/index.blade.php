@extends('admin.components.layouts.base')

@section('title', \App\Utils\Breadcrumb::getPageTitle())

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <div>

    </div>
@endsection
