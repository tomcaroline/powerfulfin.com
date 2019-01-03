<style>
    .nav-tabs-custom > .nav-tabs > li.active {
        border-top-color: #dd4b39;
    }
</style>
<section class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="box box-danger">
                <div class="box-body box-profile">
                    <h3 class="profile-username text-center">{{ $real['full_name'] }}</h3>

                    <p class="text-muted text-center">{{ $real['uid'] }}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>申请金额</b> <a class="pull-right">￥{{ $base['borrow_money'] }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>申请时间</b> <a class="pull-right">{{ $base['create_time'] }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>申请期数</b> <a
                                class="pull-right">{{ $base['loan_product_config']['rate_time_x'] +  $base['loan_product_config']['rate_time_y'] }}
                                期</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="nav-tabs-custom" style="">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">订单信息</a></li>
                    <li><a href="#picinfo" data-toggle="tab">图片信息</a></li>
                    <li><a href="#phonebook" data-toggle="tab">通讯录</a></li>
                    <li><a href="#timeline" data-toggle="tab">操作记录</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <table class="table table-hover table-bordered table-striped " id="image">

                            <tr>
                                <td colspan="4" align="center">分期申请</td>
                            </tr>
                            <tr>
                                <td>订单号</td>
                                <td>{{ $base['id'] }}</td>
                                <td>用户ID</td>
                                <td>{{ $base['uid'] }}</td>
                            </tr>
                            <tr>
                                <td>申请金额</td>
                                <td>{{ $base['borrow_money'] }}</td>
                                <td>学校</td>
                                <td>{{ $org['org_name'] }}</td>

                            </tr>
                            <tr>
                                <td>资金方</td>
                                <td>{{ \App\Models\ActiveRecord\ARPFLoanProduct::$resourceCompany[$base['resource']] }}</td>
                                <td>金融产品</td>
                                <td>{{ $base['loan_product_config']['name'] }}({{ $base['loan_product'] }})</td>
                            <tr>
                                <td colspan="4" align="center">分期账单信息</td>
                            </tr>
                            <tr>
                                <td>订单状态</td>
                                <td>{{ \App\Models\Server\BU\BULoanStatus::getStatusDescriptionForAdmin($base['status']) }}
                                    ({{ $base['status'] }})
                                </td>
                                <td>分期期数</td>
                                <td>{{ $base['loan_product_config']['rate_time_x'] +  $base['loan_product_config']['rate_time_y'] }}</td>
                            </tr>
                            <tr>
                                <td>课程顾问</td>
                                <td>{{ $base['class_adviser'] }}</td>
                                <td>开课时间</td>
                                <td>{{ $base['class_start_date'] }}</td>
                            </tr>

                            <tr>
                                <td colspan="4" align="center">用户信息</td>
                            </tr>
                            <tr>
                                <td>姓名</td>
                                <td>{{ $real['full_name'] }}</td>
                                <td>身份证</td>
                                <td>{{ $real['identity_number'] }}</td>
                            </tr>
                            <tr>
                                <td>身份证起始日</td>
                                <td>{{ $real['start_date'] }}</td>
                                <td>身份证截止日</td>
                                <td>{{ $real['end_date'] }}</td>
                            </tr>
                            <tr>
                                <td>生日</td>
                                <td>{{ $real['birthday'] }}</td>
                                <td>性别</td>
                                <td>{{ $real['gender'] }}</td>
                            </tr>
                            <tr>
                                <td>民族</td>
                                <td>{{ $real['nationality'] }}</td>
                                <td>签发机关</td>
                                <td>{{ $real['issuing_authority'] }}</td>
                            </tr>
                            <tr>
                                <td>地址</td>
                                <td colspan="3">{{ $real['address'] }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" align="center">联系信息</td>
                            </tr>
                            <tr>
                                <td>微信</td>
                                <td>{{ $contact['wechat'] }}</td>
                                <td>邮箱</td>
                                <td>{{ $contact['email'] }}</td>
                            </tr>
                            <tr>
                                <td>QQ</td>
                                <td>{{ $contact['qq'] }}</td>
                                <td>住房</td>
                                <td>{{ $contact['housing_situation'] }}</td>
                            </tr>
                            <tr>
                                <td>婚姻</td>
                                <td>{{ $contact['marital_status'] }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>紧急联系人</td>
                                <td>{{ $contact['contact_person'] }}({{ $contact['contact_person_relation'] }})</td>
                                <td>联系电话</td>
                                <td>{{ $contact['contact_person_phone'] }}</td>
                            </tr>
                            <tr>
                                <td>现居地</td>
                                <td colspan="3">{{ $contact['home_address'] }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" align="center">银行卡信息</td>
                            </tr>
                            <tr>
                                <td>银行</td>
                                <td>卡号</td>
                                <td>手机号</td>
                                <td>用途</td>
                            </tr>
                            @foreach($bank as $item)
                                <tr>
                                    <td><img src="{{ \App\Models\Server\BU\BUBanks::getBankLogo($item['bank_code']) }}"
                                             style="width: 19px">{{ $item['bank_name'] }}</td>
                                    <td>{{ $item['bank_account'] }}</td>
                                    <td>{{ $item['phone'] }}</td>
                                    <td>
                                        @if($item['type'] == 1)
                                            划扣卡
                                        @else
                                            主动还款卡
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="4" align="center">工作状态:<?php switch ($work['working_status']) {
                                        case \App\Models\ActiveRecord\ARPFUsersWork::WORKING_CONDITION_WORKING:
                                            echo "在职";
                                            break;
                                        case \App\Models\ActiveRecord\ARPFUsersWork::WORKING_CONDITION_READING:
                                            echo "学生";
                                            break;
                                        case \App\Models\ActiveRecord\ARPFUsersWork::WORKING_CONDITION_UNEMPLOYED:
                                            echo "待业";
                                            break;
                                        default:
                                            echo "未知";
                                            break;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>最高学历</td>
                                <td>{{ $work['highest_education'] }}</td>
                                <td>职业</td>
                                <td>{{ $work['profession'] }}</td>
                            </tr>
                            <tr>
                                <td>月收入</td>
                                <td>￥{{ $work['monthly_income'] }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php if ($work['working_status'] == \App\Models\ActiveRecord\ARPFUsersWork::WORKING_CONDITION_WORKING) { ?>
                            <tr>
                                <td>单位名称</td>
                                <td><?php echo $work['work_name']; ?></td>
                                <td>单位电话</td>
                                <td><?php echo $work['work_contact']; ?></td>
                            </tr>
                            <tr>
                                <td>单位地址</td>
                                <td><?php echo $work['work_address']; ?></td>
                                <td>入职时间</td>
                                <td><?php echo $work['work_entry_time']; ?></td>
                            </tr>
                            <tr>
                                <td>职位</td>
                                <td>{{ $work['work_profession'] }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php } else if ($work['working_status'] == \App\Models\ActiveRecord\ARPFUsersWork::WORKING_CONDITION_READING) { ?>
                            <tr>
                                <td>学校名称</td>
                                <td>{{ $work['school_name'] }}</td>
                                <td>学校电话</td>
                                <td>{{ $wrok['school_contact'] }}</td>
                            </tr>
                            <tr>
                                <td>学校地址</td>
                                <td>{{$work['school_address']}}</td>
                                <td>入学时间</td>
                                <td>{{ $work['entrance_time'] }}</td>
                            </tr>
                            <tr>
                                <td>学制</td>
                                <td>{{ $work['education_system'] }}</td>
                                <td>专业</td>
                                <td>{{ $work['school_major'] }} </td>
                            </tr>
                            <?php } else if ($work['working_status'] == \App\Models\ActiveRecord\ARPFUsersWork::WORKING_CONDITION_UNEMPLOYED) { ?>
                            <tr>
                                <td>培训机构</td>
                                <td>{{ $work['train_contact'] }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php }else {
                            } ?>


                            <tr>
                                <td colspan="4" align="center">设备信息</td>
                            </tr>
                            <tr>
                                <td>版本号</td>
                                <td>{{ $base['version'] }}</td>
                                <td>设备号</td>
                                <td>{{ $base['phone_id'] }}</td>
                            </tr>
                            <tr>
                                <td>GPS定位-经纬度</td>
                                <td>{{ $location['location'] }}</td>
                                <td>IP地址</td>
                                <td>{{ $location['ip_address'] }}</td>
                            </tr>
                            <tr>
                                <td>机构</td>
                                <td>{{ $location['org_name'] }}</td>
                                <td>距离</td>
                                <td>{{ $location['distance'] }}KM</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane" id="picinfo">
                        2
                    </div>
                    <div class="tab-pane" id="phonebook">
                        3
                    </div>
                    <div class="tab-pane" id="timeline">
                        4
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
