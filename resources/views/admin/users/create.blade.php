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

                    @component('admin.components.form.control', ['label' => '名前', 'for' => 'name', 'required' => true])
                        <input class="form-control" id="name" name="name">
                    @endcomponent
                    <button>保存</button>
                </form>
            @endslot
        @endcomponent
    </div>
@endsection
