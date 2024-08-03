@extends($_viewFrame)

@section('pageTitleMain')客服工作台@endsection
@section('pageKeywords')客服工作台@endsection
@section('pageDescription')客服工作台@endsection

@section('bodyAppend')
    @parent
    <script>
        window.__selectorDialogServer = "{{modstart_web_url('member_data/file_manager')}}";
        window.__data = {

        };
    </script>
    <script src="@asset('asset/vendor/vue.js')"></script>
    <script src="@asset('asset/vendor/element-ui/index.js')"></script>
    <script src="@asset('vendor/LiveChat/entry/staff.js')"></script>
@endsection

@section('body')
    <div id="app"></div>
@endsection
