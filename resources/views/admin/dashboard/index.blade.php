@extends('admin.components.layouts.base')

@section('title', 'ダッシュボード')

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <div class="card">
        @include('admin.components.card-header', ['title' => 'ダッシュボード'])
        <div class="card-body">
        </div>
    </div>
@endsection
