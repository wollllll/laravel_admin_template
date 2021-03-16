@extends('admin.components.layouts.base')

@section('title', $pageTitle)

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <section class="card">
        @include('admin.components.card.card-header', ['title' => $pageTitle])
        <div class="card-body">
        </div>
    </section>
@endsection
