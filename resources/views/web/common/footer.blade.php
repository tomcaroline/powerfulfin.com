<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">关于我们</h5>
                    <address>
                        <strong>{{ config('app.company_name') }}</strong>
                    </address>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">导航</h5>
                    <ul class="link-list">
                        <li><a class="waves-effect waves-dark" href="/">首页</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div align="center">
                    <img src="http://www.powerfulfin.com/web/app/download.png" width="140px">
                    <p style="color: #0b0b0b">扫描二维码下载APP</p>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12">
                    <div class="copyright" style="text-align: center">
                        <p>
                            &copy; 2018.powerfulfin.com {{ config('app.company_name') }}
                            &nbsp;&nbsp; {{ config('app.website_filing') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
