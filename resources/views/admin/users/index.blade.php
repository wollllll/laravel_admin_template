@extends('admin.components.layouts.base')

@section('title', 'アカウント（一覧）')

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
