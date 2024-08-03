@extends($_viewFrame)

@section('pageTitleMain')在线客服预览@endsection
@section('pageKeywords')在线客服预览@endsection
@section('pageDescription')在线客服预览@endsection

@section('bodyContent')
    <div class="tw-bg-gray-100 tw-min-h-screen">
    </div>
    <script src="{{modstart_web_url('vendor/LiveChat/entry/sdk.js')}}?channel={{Input::get('channel')}}&param=test-param"></script>
@endsection
