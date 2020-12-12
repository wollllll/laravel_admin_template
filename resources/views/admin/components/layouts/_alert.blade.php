{{--@if(session()->has(config('session.alert.success')))--}}
{{--    <div class="alert alert-success alert-dismissible">--}}
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
{{--        <span><i class="icon fas fa-check"></i>{{ session(config('session.alert.success')) }}</span>--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if(session()->has(config('session.alert.errors')))--}}
{{--    <div class="alert alert-danger alert-dismissible">--}}
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
{{--        <span><i class="icon fas fa-exclamation-circle"></i>入力情報に不備がありました。下記をご確認ください。</span>--}}
{{--        <ul>--}}
{{--            @foreach(array_unique($errors->all()) as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if(session()->has(config('session.alert.fail')))--}}
{{--    <div class="alert alert-danger alert-dismissible">--}}
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
{{--        <span><i class="icon fas fa-exclamation-circle"></i>{{ session(config('session.alert.fail')) }}</span>--}}
{{--    </div>--}}
{{--@endif--}}
