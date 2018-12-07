<?php exit;?>001574932072fc958f296dd63f8ddda659dc8a7d1334s:3244:"a:2:{s:8:"template";s:3180:"<?php $__Template->display("themes/default/head"); ?>

<?php $__Template->display("themes/default/header"); ?>


<div data-am-widget="slider" class="am-slider am-slider-a1  am-hide-sm-only" data-am-slider='{"directionNav":"false"}' >
    <ul class="am-slides">
        <li>
            <img src="/assets/image/35.png" class="am-img-responsive" alt="<?php echo $media["title"];?>" />
        </li>
        <li>
            <img src="/assets/image/51.png" class="am-img-responsive" alt="<?php echo $media["title"];?>" />
        </li>
        <li>
            <img src="/assets/image/52.png" class="am-img-responsive" alt="<?php echo $media["title"];?>" />
        </li>
    </ul>
</div>

<div data-am-widget="slider" class="am-slider am-slider-a1  am-show-sm-only" data-am-slider='{"directionNav":"false"}' >
    <ul class="am-slides">
        <li>
            <img src="/assets/image/37.jpg" class="am-img-responsive am-center" alt="<?php echo $media["title"];?>" />
        </li>
        <li>
            <img src="/assets/image/53.jpg" class="am-img-responsive am-center" alt="<?php echo $media["title"];?>" />
        </li>
        <li>
            <img src="/assets/image/54.jpg" class="am-img-responsive am-center" alt="<?php echo $media["title"];?>" />
        </li>
    </ul>
</div>



<main class="product-show am-padding-vertical-xl">
    <div class="am-container">
        <p class="am-text-sm am-link-muted am-margin-top-0 am-margin-bottom-sm">
            <a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span>&gt;</span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?>
        </p>

        <ul class="am-avg-sm-4 product-category am-margin-vertical-sm">
            <?php foreach ($condition as $vo) { ?>
            <li class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> ">
                <a href="<?php echo $vo["url"];?>" class="product-num">全部课程</a>
            </li>
            <?php foreach ($vo["config"] as $v) { ?>
            <li <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> >
                <a href="<?php echo $v["url"];?>" class="product-num"><?php echo $v["name"];?></a>
            </li>
            <?php } ?>
            <?php } ?>

        </ul>

        <article>
            <?php foreach ($pageList as $vo) { ?>
           <div class="class-box">
               <img src="<?php echo $vo["image"];?>" class="am-img-responsive" alt="<?php echo $vo["title"];?>" />

               <div>
                   <a href="<?php echo $vo["aurl"];?>">
                       <p class="class-title am-text-truncate"><?php echo $vo["title"];?></p>
                       <p class="">课时：<?php echo $vo["duration"];?></p>
                       <p class="brief-para"><?php echo $vo["brief"];?></p>
                       <span href="">了解课程 >></span>
                   </a>

               </div>
           </div>
            <?php } ?>
            <div class="pagination"><?php echo $page;?></div>
        </article>
    </div>
</main>

<?php $__Template->display("themes/default/bottom_ads"); ?>

<?php $__Template->display("themes/default/footer"); ?>";s:12:"compile_time";i:1543396072;}";