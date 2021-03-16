@extends('admin.components.layouts.base')

@section('title', $pageTitle)

@section('breadcrumbs')
    {{ \App\Utils\Breadcrumb::current('admin.components.breadcrumbs') }}
@endsection

@section('content')
    <section>
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.users.create') }}" class="btn btn-light">
                    登録
                </a>
            </div>
            <div class="card-body">
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

                    </tbody>
                </table>
            </div>
        </div>
        {{--        <users-table--}}
        {{--            :first-page-users='@json($users)'--}}
        {{--            action-url="{{ route('admin.users.get') }}"--}}
        {{--        ></users-table>--}}
    </section>
@endsection
