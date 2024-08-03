@extends($_viewFrame)

@section('pageTitle'){{modstart_config('Pan_HomeSiteName','在线客服')}}@endsection

@section('bodyContent')

    @if(modstart_module_enabled('Banner'))
        {!! \Module\Banner\View\BannerView::basic('liveChat',null,'2-1') !!}
    @endif

    <div class="ub-container">
        <div class="ub-content">
            <div class="head">
                <div class="title">专业的客服系统</div>
                <div class="sub-title">快速提升客户服务效率和服务体验</div>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="item-a">
                            <div class="image">
                                <i class="iconfont icon-tools ub-color-a" style="font-size:3rem;line-height:3rem;"></i>
                            </div>
                            <div class="title">界面简洁舒适</div>
                            <div class="slogan">提供简介大气的界面设计</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="item-a">
                            <div class="image">
                                <i class="iconfont icon-desktop ub-color-b" style="font-size:3rem;line-height:3rem;"></i>
                            </div>
                            <div class="title">自适应支持</div>
                            <div class="slogan">支持手机H5、电脑端</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="item-a">
                            <div class="image">
                                <i class="iconfont icon-users ub-color-c" style="font-size:3rem;line-height:3rem;"></i>
                            </div>
                            <div class="title">客服后台</div>
                            <div class="slogan">专业的客服后台，提供多客服支持</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="item-a">
                            <div class="image">
                                <i class="iconfont icon-code ub-color-d" style="font-size:3rem;line-height:3rem;"></i>
                            </div>
                            <div class="title">专业技术</div>
                            <div class="slogan">深度定制消息通讯更可靠</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
