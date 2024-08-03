<div class="tw-bg-gray-200 tw-rounded-lg tw-p-2" style="width:500px;">
    <table class="ub-table">
        <tbody>
        <tr>
            <td width="80">
                <i class="iconfont icon-desktop tw-w-5 tw-inline-block"></i>
                电脑端
            </td>
            <td>
                <a href="javascript:;" class="tw-mr-2"
                   data-clipboard-text="{{\ModStart\Core\Input\Request::domainUrl().modstart_web_url('live_chat/chat/'.$item->alias)}}">
                    <i class="iconfont icon-copy"></i>
                </a>
                <a href="{{modstart_web_url('live_chat/chat/'.$item->alias)}}" target="_blank">
                    {{\ModStart\Core\Input\Request::domainUrl().modstart_web_url('live_chat/chat/'.$item->alias)}}
                </a>
            </td>
        </tr>
        <tr>
            <td width="80">
                <i class="iconfont icon-phone tw-w-5 tw-inline-block"></i>
                手机端
            </td>
            <td>
                <a href="javascript:;" class="tw-mr-2"
                   data-clipboard-text="{{\ModStart\Core\Input\Request::domainUrl().modstart_web_url('live_chat/chat/'.$item->alias)}}">
                    <i class="iconfont icon-copy"></i>
                </a>
                <a href="{{modstart_web_url('live_chat/chat/'.$item->alias)}}" target="_blank">
                    {{\ModStart\Core\Input\Request::domainUrl().modstart_web_url('live_chat/chat/'.$item->alias)}}
                </a>
            </td>
        </tr>
        <tr>
            <td width="80">
                <i class="iconfont icon-code tw-w-5 tw-inline-block"></i>
                网页嵌入
            </td>
            <td>
                <?php $script = '<script src="'.\ModStart\Core\Input\Request::domainUrl().modstart_web_url('vendor/LiveChat/entry/sdk.js?channel='.$item->alias).'"></script>'; ?>
                <textarea class="form tw-w-full" style="height:4em;" readonly>{{$script}}</textarea>
                <br>
                <a href="javascript:;"
                   data-clipboard-text="{{$script}}">
                    <i class="iconfont icon-copy"></i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</div>