@extends('admin.components.layouts.base')

@section('title', 'アカウント（一覧）')

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <div class="card">
        @include('admin.components.card-header', ['title' => 'アカウント（一覧）'])
        <div class="card-body">
            @component('admin.components.table.table')
                @slot('thead')
                    <tr>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                    </tr>
                @endslot
                @slot('tbody')
                    @foreach([1, 2] as $value)
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                        </tr>
                    @endforeach
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
