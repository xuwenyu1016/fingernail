<?php exit;?>0015735534987075d969d6ad169879120a474fc94e18s:4395:"a:2:{s:8:"template";s:4331:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>


<img src="/assets/image/38.png" class="am-img-responsive am-center am-hide-sm-only" alt="<?php echo $media["title"];?>" />

<img src="/assets/image/39.jpg" class="am-img-responsive am-center am-show-sm-only" alt="<?php echo $media["title"];?>" />

<main class="product-show am-padding-vertical-xl">
    <div class="am-container">
        <p class="am-text-sm am-link-muted am-margin-top-0 am-margin-bottom-sm">
            <a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span>&gt;</span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?>
        </p>

        <section class="news-box">

            <article class="news-body am-padding-sm">

                <div class="nav-links">
                    <?php foreach ($condition as $vo) { ?>

                    <a href="<?php echo $vo["url"];?>" class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> ">全部文章</a>
                    <?php foreach ($vo["config"] as $v) { ?>


                    <a <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> href="<?php echo $v["url"];?>"><?php echo $v["name"];?></a>

                    <?php } ?>

                    <?php } ?>
                </div>

                <div class="news-container">
                    <?php foreach ($pageList as $vo) { ?>
                    <a href="<?php echo $vo["aurl"];?>" class="news-box am-padding-vertical-sm">
                        <img src="<?php echo $vo["image"];?>" alt="<?php echo $vo["title"];?>" class="am-img-responsive" />

                        <div class="news-content am-padding-left-sm">
                            <p class="am-text-truncate am-margin-vertical-xs"><?php echo $vo["title"];?></p>
                            <p class="am-margin-vertical-xs am-text-sm"><?php echo $vo["description"];?></p>

                            <span>阅读全文 >> </span>
                        </div>
                    </a>
                    <?php } ?>
                </div>

                <div class="pagination"><?php echo $page;?></div>

            </article>

            <aside class="new-suggest am-padding-left-sm">
                <div class="am-tabs" data-am-tabs>
                    <ul class="am-tabs-nav am-nav am-nav-tabs">
                        <li class="am-active"><a href="#tab1">近期文章</a></li>
                        <li><a href="#tab2">热门推荐</a></li>

                    </ul>

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"6", "sub"=>true, "limit"=>5, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>

                        </div>
                        <div class="am-tab-panel am-fade" id="tab2">

                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"6", "sub"=>true, "limit"=>5, "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>

                        </div>

                    </div>
                </div>
            </aside>

        </section>
    </div>
</main>

<?php $__Template->display("themes/default/bottom_ads"); ?>

<?php $__Template->display("themes/default/footer"); ?>";s:12:"compile_time";i:1542017498;}";