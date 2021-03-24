@extends('admin.components.layouts.base')

@section('title', \App\Utils\Breadcrumb::getPageTitle())

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <div>
        @component('admin.components.card.base', ['title' => \App\Utils\Breadcrumb::getPageTitle(), 'header' => false, 'footer' => false])
            @slot('body')
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>名前</th>
                        <th>メールアドレス</th>
                        <th>作成日時</th>
                        <th>更新日時</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endslot
        @endcomponent
    </div>
@endsection
