@extends('admin.components.layouts.base')

@section('title', Breadcrumb::getPageTitle())

@section('breadcrumbs')
    {{ Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <div>
        @component('admin.components.card.base', ['title' => Breadcrumb::getPageTitle(), 'header' => false, 'footer' => false])
            @slot('header')
                <a href="{{ route('admin.users.create') }}" class="btn btn-light">登録</a>
            @endslot
            @slot('body')
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th>名前</th>
                        <th>メールアドレス</th>
                        <th>作成日時</th>
                        <th>機能</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->formatCreatedAt() }}</td>
                            <td>
                                <a href="" class="btn btn-light">編集</a>
                                <a href="" class="btn btn-danger">削除</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endslot
        @endcomponent
        {{--        <users-table--}}
        {{--            :first-page-users='@json($users)'--}}
        {{--            action-url="{{ route('admin.users.get') }}"--}}
        {{--        ></users-table>--}}
    </div>
@endsection
