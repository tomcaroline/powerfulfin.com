<?php
/**
 * 左侧菜单
 * User: haoxiang
 * Date: 2018/12/24
 * Time: 5:07 PM
 */
$menus = [
    ['name' => '订单审核', 'url' => '', 'class' => '', 'fa' => 'fa-cubes', 'menus' => [
        ['name' => '报名确认', 'url' => '/order/bookinglist', 'class' => '', ],
        ['name' => '放款确认', 'url' => '/order/confirmlist', 'class' => '', ],
    ]],
    ['name' => '信息统计', 'url' => '', 'class' => '', 'fa' => 'fa-dashboard', 'menus' => [
        ['name' => '订单查询', 'url' => '/stat/list', 'class' => '', ],
        ['name' => '校区统计', 'url' => '/stat/sumup', 'class' => '', ],
    ]],
    ['name' => '百科', 'url' => '', 'class' => '', 'fa' => 'fa-question-circle-o', 'menus' => [
        ['name' => '常见问题', 'url' => '/home/faq', 'class' => '', ],
        ['name' => '资金方信息', 'url' => '/home/capital', 'class' => '', ],
    ]],
    ['name' => '扫码申请', 'url' => '/home/applyqr', 'class' => '', 'fa' => 'fa-qrcode', 'menus' => []],
    //['name' => '站内信', 'url' => '/home/msglist', 'class' => '', 'fa' => 'fa-envelope-open-o', 'menus' => []],
    //['name' => '退出登录', 'url' => '/home/logout', 'class' => '', 'fa' => 'fa-sign-in', 'menus' => []],
];
?>
<div class="left-side sticky-left-side">
    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="/" style="position: fixed;left: 34px;top: 9px;">
            <img style="height: 25px;" src="{{ admin_asset('org/images/org-logo.png') }}" alt="">
        </a>
    </div>

    <div class="logo-icon text-center">
        <a href="/" style="position: fixed;left: 10px;top: 9px;">
            <img src="{{ admin_asset('web/img/logo.png') }}" alt="" style="width: 27px;">
        </a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">
        <ul class="nav nav-pills nav-stacked custom-nav">
        <?php foreach($menus as $m) {
            $currentPath = '/' . Request::path();
            //判断是否有选中本级菜单
            if ($currentPath == $m['url']) {
                $isActive = true;
            } else {
                $isActive = false;
                foreach ($m['menus'] as $m2) {
                    if ($currentPath == $m2['url']) {
                        $isActive = true;
                    }
                }
            }
            ?>
            <li class="<?php if (array_key_exists('menus', $m) && $m['menus']) { echo 'menu-list';}
            if ($isActive) {if ('/' . Request::path() == $m['url']) { echo 'active';} else {echo 'nav-active';}} echo " {$m['class']}";?>">
                <a href="<?php if ($m['url']) {echo $m['url'];} else {echo 'javascript:void(0)';}?>">
                    <i class="fa {{$m['fa']}}"></i> <span>{{$m['name']}}</span>
                </a>
                @if($m['menus'])
                    <ul class="sub-menu-list">
                        @foreach ($m['menus'] as $m2)
                            <li class="{{$m2['class']}} <?php if ('/' . Request::path() == $m2['url']) echo 'active';?>"><a href="<?php if ($m2['url']) {echo $m2['url'];} else {echo 'javascript:void(0)';}?>">{{$m2['name']}}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        <?php
        $isActive = false;
        }?>
        </ul>
    </div>
</div>
