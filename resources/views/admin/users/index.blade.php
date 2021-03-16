@extends('admin.components.layouts.base')

@section('title', $pageTitle)

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <section>
        <users-table
            :first-page-users='@json($users)'
            action-url="{{ route('admin.users.get') }}"
        ></users-table>
    </section>
@endsection
