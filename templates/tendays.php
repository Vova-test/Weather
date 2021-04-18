<?php require_once(ROOT_PATH . "/templates/partials/header.php");?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-9 col-xl-8 block-ten">
                <div class="row">
                    <div class="col-12 d-block d-sm-none py-1 hidden-point">.</div>
                    <div class="col-12 pg-15-30">
                        <h4>
                            <strong>
                                <?php echo $mainTag['mainTitle'];?>
                            </strong>
                            <span class="smaller-text"> -
                                <span>
                                    <?php echo $mainTag['city'];?>
                                </span>
                            </span>
                        </h4>
                        <h6 class="opacity-1">
                            <?php echo $mainTag['time'];?>
                        </h6>
                    </div>
                    <h2><div class="col-12"></div></h2>
                </div>
                <?php foreach ($mainTag['days'] as $key => $day):?>
                    <div class="row">
                        <div class="col-12">
                            <div class="details bordered-top" <?php echo $key == 0 ? "open" : "";?>>
                                <div class="summary" tabindex="0">
                                    <div class="marker-down">
                                        <svg class="small-svg smaller">
                                            <use xlink:href="/svg/sprite.svg#marker-down"></use>
                                        </svg>
                                    </div>
                                    <div class="row pg-top-5 py-3">
                                        <div class="col-5  col-sm-4 col-md-2 pr-1 my-auto">
                                            <span><?php echo $day['summary']['date']; ?></span>
                                        </div>
                                        <div class="col-3  col-sm-2 col-md-2 px-1 my-auto">
                                            <span class="bold-text">
                                                <?php echo $day['summary']['temp1']; ?>
                                                <span class="small-text">/
                                                    <span>
                                                        <?php echo $day['summary']['temp2']; ?>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="col-4 px-1 my-auto d-none d-md-block">
                                            <span>
                                                <svg class="svg-8 mr-1">
                                                    <?php if ($key == 0 && !isset($day['details'][1])):?>
                                                        <use xlink:href="/svg/sprite.svg#moon-50"></use>
                                                    <?php else:?>
                                                        <use xlink:href="/svg/sprite.svg#sun"></use>
                                                    <?php endif;?>
                                                </svg>
                                                <span class="small-text">
                                                    <?php echo $day['summary']['text']; ?>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2 px-1 my-auto">
                                            <svg class="small-svg smaller">
                                                <use xlink:href="/svg/sprite.svg#wet"></use>
                                            </svg>
                                            <span class="small-text">
                                                <?php echo $day['summary']['percent']; ?>
                                            </span>
                                        </div>
                                        <div class="col-4 col-sm-4  col-md-2 px-1 my-auto d-none d-sm-block">
                                            <svg class="small-svg smaller">
                                                <use xlink:href="/svg/sprite.svg#wind"> </use>
                                            </svg>
                                            <span class="small-text">
                                                <?php echo $day['summary']['windText']; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail  py-3">
                                    <div class="marker-up">
                                        <svg class="small-svg smaller">
                                            <use xlink:href="/svg/sprite.svg#marker-up"></use>
                                        </svg>
                                    </div>
                                    <div class="row">
                                        <?php if ($key == 0 && !isset($day['details'][1])):?>
                                            <div  class="col-12">
                                                <h6>
                                                    <strong>
                                                        <?php echo $day['details'][0]['timeDay'];?>
                                                    </strong>
                                                    <span> |
                                                        <span>
                                                            <?php echo $day['details'][0]['timeName'];?>
                                                        </span>
                                                    </span>
                                                </h6>
                                                <div class="row">
                                                    <div  class="col-6">
                                                        <div class="row">
                                                            <div  class="col-2">
                                                                <h2>
                                                                    <strong class="big-temp">
                                                                        <?php echo $day['details'][0]['temp']; ?>
                                                                    </strong>
                                                                </h2>
                                                            </div>
                                                            <div  class="col-6">
                                                                <svg class="svg-3">
                                                                    <use xlink:href="/svg/sprite.svg#moon-50"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div  class="col-6 pl-0">
                                                        <div>
                                                            <svg class ="small-svg">
                                                                <use xlink:href="/svg/sprite.svg#wet"> </use>
                                                                <span>
                                                                    <?php echo $day['details'][0]['percent'];?>
                                                                </span>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <svg class ="small-svg">
                                                                <use xlink:href="/svg/sprite.svg#wind"> </use>
                                                                <span>
                                                                    <?php echo $day['details'][0]['windText'];?>
                                                                </span>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p><?php echo $day['details'][0]['description'];?></p>
                                            </div>
                                            <div class="col-12">
                                                <div class=" my-1 bordered-col">
                                                    <div class="row m-2 bordered-row">
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#raindrop"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][0]['otherInfo'][0]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][0]['otherInfo'][0]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#sun"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][0]['otherInfo'][1]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][0]['otherInfo'][1]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#moon-rise"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][0]['otherInfo'][2]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][0]['otherInfo'][2]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#moon-set"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][0]['otherInfo'][3]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][0]['otherInfo'][3]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else :?>
                                            <div  class="col-12 col-md-6 order-md-1">
                                                <h6>
                                                    <strong>
                                                        <?php echo $day['details'][0]['timeDay'];?>
                                                    </strong>
                                                    <span> | <span>
                                                            <?php echo $day['details'][0]['timeName'];?>
                                                        </span>
                                                    </span>
                                                </h6>
                                                <div class="row">
                                                    <div  class="col-6">
                                                        <div class="row">
                                                            <div  class="col-6">
                                                                <h2>
                                                                    <strong class="big-temp">
                                                                        <?php echo $day['details'][0]['temp']; ?>
                                                                    </strong>
                                                                </h2>
                                                            </div>
                                                            <div  class="col-6 p-0">
                                                                <svg class="svg-3">
                                                                    <use xlink:href="/svg/sprite.svg#sun"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div  class="col-6 pl-0">
                                                        <div>
                                                            <svg class ="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#wet"></use>
                                                                <span>&nbsp;<span>
                                                                        <?php echo $day['details'][0]['percent'];?>
                                                                    </span>
                                                                </span>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <svg class ="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#wind"></use>
                                                                <span>&nbsp;<span>
                                                                        <?php echo $day['details'][0]['windText'];?>
                                                                    </span>
                                                                </span>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p><?php echo $day['details'][0]['description'];?></p>
                                            </div>
                                            <div class="col-12 col-md-6 order-md-3">
                                                <div class=" my-1 bordered-col">
                                                    <div class="row   m-2 bordered-row">
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#raindrop"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][0]['otherInfo'][0]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][0]['otherInfo'][0]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#sun"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][0]['otherInfo'][1]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][0]['otherInfo'][1]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="row   m-2">
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#sun-rise"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][0]['otherInfo'][2]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][0]['otherInfo'][2]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#sun-set"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][0]['otherInfo'][3]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][0]['otherInfo'][2]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  class="col-12 col-md-6 order-md-2">
                                                <h6>
                                                    <strong>
                                                        <?php echo $day['details'][1]['timeDay'];?>
                                                    </strong>
                                                    <span> |
                                                        <span>
                                                            <?php echo $day['details'][1]['timeName'];?>
                                                        </span>
                                                    </span>
                                                </h6>
                                                <div class="row">
                                                    <div  class="col-6">
                                                        <div class="row">
                                                            <div  class="col-4">
                                                                <h2>
                                                                    <strong class="big-temp">
                                                                        <?php echo $day['details'][1]['temp']; ?>
                                                                    </strong>
                                                                </h2>
                                                            </div>
                                                            <div  class="col-6 p-0">
                                                                <svg class="svg-3">
                                                                    <use xlink:href="/svg/sprite.svg#moon-50"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div  class="col-6 pl-0">
                                                        <div>
                                                            <svg class ="small-svg">
                                                                <use xlink:href="/svg/sprite.svg#wet"> </use>
                                                                <span>
                                                                    <?php echo $day['details'][1]['percent'];?>
                                                                </span>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <svg class ="small-svg">
                                                                <use xlink:href="/svg/sprite.svg#wind"> </use>
                                                                <span>
                                                                    <?php echo $day['details'][1]['windText'];?>
                                                                </span>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p><?php echo $day['details'][1]['description'];?></p>
                                            </div>
                                            <div class="col-12 col-md-6 order-md-4">
                                                <div class=" my-1 bordered-col">
                                                    <div class="row m-2 bordered-row">
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#raindrop"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][1]['otherInfo'][0]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][1]['otherInfo'][0]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#sun"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][1]['otherInfo'][1]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][1]['otherInfo'][1]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="row m-2">
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#moon-rise"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][1]['otherInfo'][2]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][1]['otherInfo'][2]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                        <div class="col-6">
                                                            <svg class="small-svg smaller">
                                                                <use xlink:href="/svg/sprite.svg#moon-set"></use>
                                                                <span class="small-text">
                                                                    <?php echo $day['details'][1]['otherInfo'][3]['text'];?>
                                                                </span>
                                                                <h6 class="ml-4">
                                                                    <strong>
                                                                        <?php echo $day['details'][1]['otherInfo'][3]['value'];?>
                                                                    </strong>
                                                                </h6>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</main>
<div class="margin-footer">.</div>
<?php require_once(ROOT_PATH . "/templates/partials/footer.php");?>
