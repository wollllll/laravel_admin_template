@extends('admin.components.layouts.base')

@section('title', $pageTitle)

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <section>
        @component('admin.components.card.base', ['title' => $pageTitle, 'header' => false, 'footer' => false])
            @slot('body')
                <form action="{{ route('admin.users.store') }}" method="post">
                    @csrf

                    @include('admin.components.form.input', ['label' => '名前', 'name' => 'name', 'value' => old('name'), 'required' => true])
                    <button>保存</button>
                </form>
            @endslot
        @endcomponent
    </section>
@endsection
