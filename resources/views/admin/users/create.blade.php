@extends('admin.components.layouts.base')

@section('title', Breadcrumb::getPageTitle())

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <div>
        @component('admin.components.card.base', ['title' => Breadcrumb::getPageTitle(), 'header' => false, 'footer' => false])
            @slot('body')
                <form action="{{ route('admin.users.store') }}" method="post">
                    @csrf

                    @include('admin.components.form.input', ['label' => '名前', 'name' => 'name', 'value' => old('name'), 'required' => true])
                    @include('admin.components.form.input', ['label' => 'メールアドレス', 'type' => 'email','name' => 'email', 'value' => old('email'), 'required' => true])
                    @include('admin.components.form.input', ['label' => 'パスワード', 'type' => 'password', 'name' => 'password', 'value' => old('password'), 'required' => true])
                    <button>保存</button>
                </form>
            @endslot
        @endcomponent
    </div>
@endsection
