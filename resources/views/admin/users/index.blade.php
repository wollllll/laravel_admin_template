@extends('admin.components.layouts.base')

@section('title', Breadcrumb::getPageTitle())

@section('breadcrumbs')
    {{ Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <div>
        @component('admin.components.card.base', ['title' => Breadcrumb::getPageTitle(), 'header' => false, 'footer' => false])
            @slot('body')
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>名前</th>
                        <th>メールアドレス</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at ?? null }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endslot
        @endcomponent
    </div>
@endsection
