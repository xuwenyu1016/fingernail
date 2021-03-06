<?php exit;?>001573785290418f59756df8f19e8f7212e7f4b321b2s:10682:"a:2:{s:8:"template";s:10617:"<footer class="am-padding-vertical-xl am-hide-sm-only">
    <div class="am-container">
        <ul class="am-avg-sm-3 am-padding-bottom-lg">
            <li>
                <article class="am-padding-top-xl">
                    <img src="/assets/image/29.png" class="am-img-responsive" width="280" alt="<?php echo $media["title"];?>" />
                </article>
            </li>
            <li>
                <article class="am-padding-top-xl am-padding-left-lg">
                    <p class="footer-head am-padding-vertical-sm">网站地图</p>
                    <p><a href="/">网站首页 Home</a></p>
                    <p><a href="/list-kechengjieshao.html">课程介绍 Courses</a></p>
                    <!--<p><a href="">产品介绍 Products</a></p>-->
                    <!--<p><a href="">活动资讯 Events</a></p>-->
                    <p><a href="/list-zuopinzhanshi.html">作品展示 Gallery</a></p>
                    <!--<p><a href="">师资团队 Teachers</a></p>-->
                    <p><a href="/page-guanyuwomen.html">关于我们 About Us</a></p>
                </article>

            </li>
            <li>
                <article class="am-padding-top-xl am-padding-left-lg">
                    <p class="footer-head am-padding-top-sm">点击订阅，获取全部课程内容！</p>

                    <p class="am-padding-bottom-sm">抢先了解课程、产品特别活动等更多消息。</p>
                    <button data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 600, height: 630}"><span>邮箱</span><span>订阅</span></button>
                </article>

            </li>
        </ul>

        <p class="am-margin-vertical-sm am-text-center copy-line am-text-sm am-padding-top-sm">Copyright&copy; 2007-2018 MISAKI SCHOOL 有限公司 版权所有 并保留所有权力 &emsp;<a href="http://www.miitbeian.gov.cn">沪ICP备15025216号-1</a></p>
    </div>
</footer>

<footer class="am-show-sm-only">
    <div>
        <img src="/assets/mimage/8.png" class="am-img-responsive am-center" alt="<?php echo $media["title"];?>" />
    </div>

    <p class="am-text-center am-margin-vertical-xs">微信搜索yukamiaomiao<br/>添加助教老师</p>
    <p class="am-text-center am-margin-vertical-xs am-text-lg"><b>点击订阅，获取全部课程内容</b></p>
    <p class="am-text-center am-margin-vertical-xs am-text-xs">抢先了解课程、产品特别活动等更多消息。</p>
    <button class="yellow-btn am-center" data-am-modal="{target: '#doc-modal-2', closeViaDimmer: 0, width: 300, height: 480}">立即订阅</button>

    <p class="am-margin-vertical-xs am-text-center copy-line am-text-sm am-padding-top-sm">Copyright&copy; 2007-2018 MISAKI SCHOOL有限公司<br/> 版权所有 并保留所有权力</p>

</footer>

<hr class="break am-show-sm-only">

<div class="bottom-nav am-show-sm-only">
    <ul class="am-navbar-nav am-avg-sm-5">
        <li>
            <a href="/">
                <img src="/assets/mimage/9.png" class="am-img-responsive">
                <span class="am-navbar-label">首页</span>
            </a>
        </li>
        <li>
            <a href="/list-huodongzixun.html">
                <img src="/assets/mimage/10.png" class="am-img-responsive">
                <span class="am-navbar-label">活动资讯</span>
            </a>
        </li>

        <li>
            <a href="">
                <span class="am-navbar-label">免费<br/>预约</span>
            </a>
        </li>
        <li>
            <a href="tel:15921211121">
                <img src="/assets/mimage/11.png" class="am-img-responsive">
                <span class="am-navbar-label">咨询热线</span>
            </a>
        </li>
        <li>
            <a href="/page-guanyuwomen.html">
                <img src="/assets/mimage/12.png" class="am-img-responsive">
                <span class="am-navbar-label">关于我们</span>
            </a>
        </li>
    </ul>
</div>


<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">联系我们
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd contact-form">

            <article>

                <form class="am-padding-top-sm" action="<?php echo U('DuxCms/Form/push');?>" method="post">

                    <p class="am-margin-top-sm am-margin-bottom-0 am-text-left">您的个人信息</p>

                    <div>
                        <p><span>*</span>称谓</p>
                        <input type="radio" name="gender" value="先生" placeholder="" checked />先生 &emsp;&emsp;
                        <input type="radio" name="gender" value="女士" placeholder="" />女士
                    </div>

                    <div>
                        <p><span>*</span>姓名</p>
                        <input type="text" name="name" placeholder="" required />
                    </div>

                    <div>
                        <p><span>*</span>电话</p>
                        <input type="tel" name="tel" placeholder="" required />
                    </div>

                    <div>
                        <p><span>*</span>电子邮箱</p>
                        <input type="email" name="email" placeholder="" required />
                    </div>


                    <div>
                        <p>您的讯息</p>
                        <textarea name="content" placeholder=""></textarea>
                    </div>

                    <div>
                        <input type="checkbox" name="confirmation" class="am-margin-0" value="希望接收" placeholder="" />
                        <span class="am-text-sm">我希望通过上述所提供的任何一种通讯方式接收Misaki相关信息。</span>
                    </div>

                    <div class="validate">
                        <div>
                            <p><span>*</span>验证码</p>
                            <input name="checkcode" type="text" maxlength="4" size="4" >
                            <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                        </div>

                        <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                        <input type="hidden" name="table" value="guestbook">

                        <button type="submit">提 交</button>
                    </div>


                </form>

            </article>

        </div>
    </div>
</div>

<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">联系我们
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd contact-form-wap">

            <article>

                <form class="am-padding-top-xs" action="<?php echo U('DuxCms/Form/push');?>" method="post">

                    <p class="am-margin-top-xs am-margin-bottom-0 am-text-left">您的个人信息</p>

                    <div>
                        <p>
                            <span>*</span>称谓 &emsp;
                            <input type="radio" name="gender" value="先生" placeholder="" checked />先生 &emsp;&emsp;
                            <input type="radio" name="gender" value="女士" placeholder="" />女士
                        </p>

                    </div>

                    <div>
                        <p><span>*</span>姓名</p>
                        <input type="text" name="name" placeholder="" />
                    </div>

                    <div>
                        <p><span>*</span>电话</p>
                        <input type="tel" name="tel" placeholder="" />
                    </div>

                    <div>
                        <p><span>*</span>电子邮箱</p>
                        <input type="email" name="email" placeholder="" />
                    </div>

                    <div>
                        <p><span>*</span>您的讯息</p>
                        <textarea name="content" placeholder=""></textarea>
                    </div>

                    <div>
                        <input type="checkbox" name="confirmation" class="am-margin-0" value="希望接收" placeholder="" />
                        <span class="am-text-xs">我希望通过上述所提供的任何一种通讯方式接收Misaki相关信息。</span>
                    </div>

                    <div class="validate">
                        <p><span>*</span>验证码</p>
                        <input name="checkcode" type="text" maxlength="4" size="4" >
                        <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                    </div>

                    <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                    <input type="hidden" name="table" value="guestbook">

                    <button type="submit">提 交</button>
                </form>

            </article>

        </div>
    </div>
</div>

<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-3">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">微信关注MISAKI
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd contact-form-wap">

            <img src="/assets/mimage/8.png" class="am-img-responsive am-center qr-img" width="200" alt="<?php echo $media["title"];?>" />

            <p class="am-text-center am-margin-vertical-xs">微信搜索yukamiaomiao<br/>添加助教老师</p>

        </div>
    </div>
</div>

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/assets/js/amazeui.min.js"></script>
<script src="/assets/js/js.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=2ab9a8e5f4c7f4b99d508d3d0025b954"></script>




</body>

</html>";s:12:"compile_time";i:1542249290;}";