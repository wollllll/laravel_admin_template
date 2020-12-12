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
                        <th>ID</th>
                        <th>名前</th>
                        <th>メールアドレス</th>
                        <th>作成日時</th>
                    </tr>
                @endslot
                @slot('tbody')
                    @foreach($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <th>{{ $user->name }}</th>
                            <th>{{ $user->email }}</th>
                            <th>{{ $user->created_at }}</th>
                        </tr>
                    @endforeach
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
