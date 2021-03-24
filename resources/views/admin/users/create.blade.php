@extends('admin.components.layouts.base')

@section('title', \App\Utils\Breadcrumb::getPageTitle())

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <div>
        @component('admin.components.card.base', ['title' => \App\Utils\Breadcrumb::getPageTitle(), 'header' => false, 'footer' => false])
            @slot('body')
                <form action="{{ route('admin.users.store') }}" method="post">
                    @csrf

                    @component('admin.components.form.control', ['label' => '名前', 'for' => 'name', 'required' => true])
                        <input id="name" class="form-control" name="name" value="{{ old('name') }}">
                    @endcomponent
                    @component('admin.components.form.control', ['label' => 'メールアドレス', 'for' => 'email', 'required' => true])
                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}">
                    @endcomponent
                    @component('admin.components.form.control', ['label' => 'パスワード', 'for' => 'password', 'required' => true])
                        <input type="password" id="password" class="form-control" name="password">
                    @endcomponent
                    @component('admin.components.form.control', ['label' => 'パスワード（確認）', 'for' => 'password_confirmation', 'required' => true])
                        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
                    @endcomponent
                    <div>
                        <button class="btn btn-primary">保存</button>
                    </div>
                </form>
            @endslot
        @endcomponent
    </div>
@endsection
