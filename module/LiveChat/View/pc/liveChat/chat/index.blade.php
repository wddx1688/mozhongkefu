@extends($_viewFrame)

@section('pageTitleMain')在线客服@endsection
@section('pageKeywords')在线客服@endsection
@section('pageDescription')在线客服@endsection

@section('bodyAppend')
    @parent
    <script>
        window.__selectorDialogServer = "{{modstart_web_url('member_data/file_manager')}}";
        window.__data = {
            channel:{!! \ModStart\Core\Util\SerializeUtil::jsonEncode($channel) !!},
            param:{!! \ModStart\Core\Util\SerializeUtil::jsonEncode($param) !!}
        };
    </script>
    <script src="@asset('asset/vendor/vue.js')"></script>
    <script src="@asset('asset/vendor/element-ui/index.js')"></script>
    <script src="@asset('vendor/LiveChat/entry/chat.js')"></script>
@endsection

@section('body')
    <div id="app"></div>
@endsection
