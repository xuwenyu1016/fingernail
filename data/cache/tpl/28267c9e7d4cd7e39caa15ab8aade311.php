<?php exit;?>001573631440aba9af6753ba92c00e74b4ff4ad9824es:3072:"a:2:{s:8:"template";s:3008:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>

<img src="/assets/image/34.png" class="am-img-responsive am-center am-hide-sm-only am-margin-top-lg" alt="<?php echo $media["title"];?>" />

<main class="product-show am-padding-vertical-xl">
    <div class="am-container">
        <p class="am-text-sm am-link-muted am-margin-top-0 am-margin-bottom-sm">
            <a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span>&gt;</span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?>
        </p>

        <ul class="am-avg-sm-4 product-category am-margin-vertical-sm">
            <li>
                <a href="/list-zuopinzhanshi.html" class="product-num">全部作品</a>
            </li>

            <li>
                <div class="product-num">
                    美甲作品 <span class="am-icon-caret-down"></span>

                    <ul class="dropdown">
                        <li>
                            <a href="/zuopinzhanshi/select/meijiazuoping-all.html?class_id=1">全部</a>
                        </li>
                        <?php foreach ($condition as $vo) { ?>
                        <?php foreach ($vo["config"] as $v) { ?>
                        <li <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> >
                        <a href="<?php echo $v["url"];?>"><?php echo $v["name"];?></a>
                        </li>
                        <?php } ?>
                        <?php } ?>
                    </ul>
                </div>

            </li>
            <li>
                <a href="/zuopinzhanshi/select/meijiezuoping-1.html?class_id=1" class="product-num">美睫作品 <span class="am-icon-caret-down"></span></a>
            </li>
            <li>
                <a href="/zuopinzhanshi/select/banyongjiuzuoping-1.html?class_id=1" class="product-num">半永久作品 <span class="am-icon-caret-down"></span></a>
            </li>

        </ul>

        <article>
            <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-3 am-avg-lg-4 am-gallery-default product-list" data-am-gallery="{ pureview: true }" >
                <?php foreach ($pageList as $vo) { ?>
                <li>
                    <div class="am-gallery-item">
                        <a href="<?php echo $vo["image"];?>" class="">
                            <img src="<?php echo $vo["image"];?>" class="am-img-responsive am-center" alt="<?php echo $vo["title"];?>" />
                            <p class="am-margin-top-xs am-margin-bottom-0 am-text-center am-text-sm"><?php echo $vo["title"];?></p>
                        </a>
                    </div>
                </li>
                <?php } ?>
            </ul>

            <div class="pagination"><?php echo $page;?></div>
        </article>
    </div>
</main>

<?php $__Template->display("themes/default/bottom_ads"); ?>

<?php $__Template->display("themes/default/footer"); ?>";s:12:"compile_time";i:1542095440;}";