<section class="w-90 px-5 d-flex row-dir gap-5 mt-20px ac">
    <div class="w-45-dir h-100">
        <img src="<?= $img_src ?>" alt="" class="img-shadow w-100 h-100">
    </div>
    <div class="w-55-dir d-flex flex-col jev">
        <div>
            <p class="m-0 fs-6 fw-semibold"><?= $title; ?></p>
            <?= $description ?>
        </div>
            <div class="d-flex flex-wrap ac js-dir gap-5 w-100 h-60px-dir" <?php if(empty($web_link)&&empty($github_link)){echo 'style="display:none!important"';}?>>
                <a href="<?= $web_link ?>" target="blank" class="btn" <?php if(empty($web_link)){echo 'style="display:none!important"';}?>>
                    <?php if($lang=="pl"){echo "strona";}else{echo "website";} ?>
                    <img src="img/icon1.png" alt="">
                </a>
                <a href="<?= $github_link ?>" target="blank" class="btn" <?php if(empty($github_link)){echo 'style="display:none!important"';}?>>
                    github
                    <img src="img/icon2.png" alt="">
                </a>
            </div>
    </div>
</section>
<div class="d-flex flex-row flex-wrap gap-1-5 w-100 ac jc text-sub2 fs-09 py-20px ">
    <?= $langs; ?>
</div>