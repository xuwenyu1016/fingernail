<?php exit;?>0015736248828103dcb44e0e0ae37f7f521b8a8d1ec8s:2894:"a:2:{s:8:"template";s:2830:"<header class="am-hide-sm-only">
    <div class="am-container">
        <article class="am-padding-vertical-sm">
            <h1 class="am-margin-0">
                <a href="/"><img src="/assets/image/28.png" class="am-img-responsive" alt="<?php echo $media["title"];?>" /></a>
            </h1>


            <ul class="am-avg-sm-2 am-text-sm am-padding-bottom-xs">
                <li><img src="/assets/image/26.png" alt=""/> <span class="am-padding-left-xs">资询热线：15921211121</span></li>
                <li class="am-padding-left-sm"><img src="/assets/image/27.png" alt=""/> <span class="am-padding-left-xs">微信号：yukamiaomiao</span></li>
            </ul>
        </article>

    </div>
</header>

<nav class="am-hide-sm-only">
    <div class="am-container">
        <ul class="am-avg-sm-5 nav-list">
            <li><a href="/"><span>首页</span><span>Home</span></a></li>
            <li>
                <?php if ( $categoryInfo['name'] ==  '课程介绍'  ){ ?>
                <a href="/list-kechengjieshao.html" class="active"><span>课程介绍</span><span>Courses</span></a>
                <?php }else{ ?>
                <a href="/list-kechengjieshao.html" class=""><span>课程介绍</span><span>Courses</span></a>
                <?php } ?>
             </li>
            <!--<li><a href=""><span>产品介绍</span><span>Products</span></a></li>-->
            <li>
                <?php if ( $categoryInfo['name'] ==  '活动资讯'  ){ ?>
                <a href="/list-huodongzixun.html" class="active"><span>活动资讯</span><span>Events</span></a>
                <?php }else{ ?>
                <a href="/list-huodongzixun.html" class=""><span>活动资讯</span><span>Events</span></a>
                <?php } ?>
            </li>
            <li><a href="/list-zuopinzhanshi.html"><span>作品展示</span><span>Gallery</span></a></li>
            <!--<li><a href=""><span>师资团队</span><span>Teachers</span></a></li>-->
            <li><a href="/page-guanyuwomen.html"><span>关于我们</span><span>About Us</span></a></li>
        </ul>
    </div>
</nav>

<header data-am-widget="header" class="am-header am-header-default am-show-sm-only">
    <div class="am-header-left am-header-nav">
        <a href="tel:15921211121" class="">
            <i class="am-header-icon am-icon-phone"></i>
        </a>
    </div>

    <h1 class="am-header-title">
        <a href="/" class="">
            <img src="/assets/image/28.png" class="am-img-responsive am-center" alt="<?php echo $media["title"];?>" />
        </a>
    </h1>

    <div class="am-header-right am-header-nav">
        <button data-am-modal="{target: '#doc-modal-3', closeViaDimmer: 0, width: 300, height: 310}">
            <i class="am-header-icon am-icon-wechat"></i>
        </button>
        
    </div>
</header>

";s:12:"compile_time";i:1542088882;}";