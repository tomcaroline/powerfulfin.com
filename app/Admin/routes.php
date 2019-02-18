<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->any('/', 'HomeController@index');
    $router->any('/home/success', 'HomeController@success');
    $router->any('/home/err', 'HomeController@err');
    /**
     * 用户管理
     */
    $router->any('/users/index', 'UsersController@index');
    $router->any('/users/real', 'UsersController@real');
    $router->any('/users/banks', 'UsersController@banks');

    /**
     * 商户管理
     */
    $router->any('/org/head', 'OrgController@head');
    $router->any('/org/addhead', 'OrgController@addhead');
    $router->any('/org/edithead', 'OrgController@edithead');
    $router->any('/org/headinfo', 'OrgController@headinfo');

    /**
     * 分校管理
     */
    $router->any('/org/index', 'OrgController@index');
    $router->any('/org/addorg', 'OrgController@addorg');
    $router->any('/org/editorg', 'OrgController@editorg');

    /**
     * 课程管理
     */
    $router->any('/org/class', 'OrgController@class');
    $router->any('/org/addorgclass', 'OrgController@addorgclass');
    $router->any('/org/editclass', 'OrgController@editclass');

    /**
     * 校区管理员
     */
    $router->any('/org/users', 'OrgController@users');
    $router->any('/org/adduser', 'OrgController@adduser');

    /**
     * 订单管理
     */
    $router->any('/loan/index', 'LoanController@index');
    $router->any('/loan/info', 'LoanController@info');
    $router->any('/loan/bill', 'LoanController@bill');
    $router->any('/loan/contract', 'LoanController@contract');
    $router->any('/loan/tools', 'LoanController@tools');
    $router->any('/tools/loanstatus', 'ToolsController@loanStatus');

    /**
     * 后台公用地址选择器
     */
    $router->any('/area/province', 'AreaController@province');
    $router->any('/area/city', 'AreaController@city');
    $router->any('/area/area', 'AreaController@area');

    /**
     * 风控
     */
    $router->any('/verify/lists', 'VerifyController@lists');
    $router->any('/verify/collect', 'VerifyController@collect');
});
