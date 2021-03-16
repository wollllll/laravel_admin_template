@extends('admin.components.layouts.base')

@section('title', $pageTitle)

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <section>
        @component('admin.components.card.base', ['title' => $pageTitle, 'header' => false, 'footer' => false])
            @slot('body')
                <form>
                    @include('admin.components.form.input')
                </form>
            @endslot
        @endcomponent
    </section>
@endsection
