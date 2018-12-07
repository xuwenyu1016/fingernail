<?php exit;?>001574932036aadf66ae6c1868b0611608523505b468s:4645:"a:2:{s:8:"template";s:4581:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<section class="page-topping am-padding-vertical-sm am-hide-sm-only">
    <div class="am-container">
        <img src="/assets/image/38.png" class="am-img-responsive am-center" alt="<?php echo $media["title"];?>" />
    </div>
</section>

<img src="/assets/image/39.jpg" class="am-img-responsive am-center am-show-sm-only" alt="<?php echo $media["title"];?>" />

<main class="product-show am-padding-vertical-xl">
    <div class="am-container">
        <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a> &gt;<?php foreach ($crumb as $vo) { ?><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <section class="news-box">
            <article class="news-body am-padding-sm">

                <p class="article-title am-text-center am-margin-vertical-xs"><?php echo $contentInfo["title"];?></p>
                <p class="article-time am-text-center am-margin-vertical-xs">时间：<?php echo date('Y-m-d H:i:s',$contentInfo["time"]);?></p>
                <div class="article-box"><?php echo $contentInfo["content"];?></div>
                <p class="am-text-right article-from">来源：<?php echo $contentInfo["copyfrom"];?></p>

                <ul class="am-avg-sm-1 am-avg-md-2 am-padding-top-sm am-padding-bottom-sm">
                    <li>
                        <div class="am-text-truncate"><span>上一篇：</span>
                            <?php if (empty($prevInfo['aurl'])){ ?>
                            <a class="am-link-muted ">暂无</a>
                            <?php }else{ ?>
                            <a href="<?php echo $prevInfo["aurl"];?>" class="am-link-muted"><?php echo $prevInfo["title"];?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li>

                        <div class="am-text-truncate"><span>下一篇：</span>
                            <?php if (empty($nextInfo['aurl'])){ ?>
                            <a class="am-link-muted">暂无</a>
                            <?php }else{ ?>
                            <a href="<?php echo $nextInfo["aurl"];?>" class="am-link-muted"><?php echo $nextInfo["title"];?></a>
                            <?php } ?>
                        </div>
                    </li>
                </ul>

            </article>

            <aside class="new-suggest am-padding-left-sm">
                <div class="am-tabs" data-am-tabs>
                    <ul class="am-tabs-nav am-nav am-nav-tabs">
                        <li class="am-active"><a href="#tab1">近期文章</a></li>
                        <li><a href="#tab2">热门推荐</a></li>

                    </ul>

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"3", "sub"=>true, "limit"=>5, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>

                        </div>
                        <div class="am-tab-panel am-fade" id="tab2">

                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"3", "sub"=>true, "limit"=>5, "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
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

<?php $__Template->display("themes/default/footer"); ?>
";s:12:"compile_time";i:1543396036;}";