<?php require_once(ROOT_PATH."/templates/partials/header.php");?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-8 col-lg-7 col-xl-5">
                <div class="card p-4">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <h3><strong><?php echo $mainTag[0]['city'];?></strong></h3>
                            <h5><?php echo $mainTag[0]['time']; ?></h5>
                        </div>

                    </div>
                    <div class="d-flex flex-column temp mb-3">
                        <h2 class="mb-0 font-weight-bold" id="heading"><?php echo $mainTag[0]['temperature'];?> C</h2>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="temp-details">
                            <p class="my-0"><span class="small grey"><?php echo $mainTag[0]['conditions'];?></span></p>
                        </div><div class="temp-details">
                            <p class="my-0"><span><?php echo $mainTag[0]['temperatures'];?></span></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="temp-details flex-grow-1">
                            <p class="my-0">
                                <span>
                                    <span class="smaller-text"><?php echo $mainTag[0]['precipValue'];?></span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card p-4 my-3">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <h3><strong><?php echo $mainTag[1]['header'];?></strong></h3>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3 px-2 text-center border-right
                                <?php echo $mainTag[1]['morning']['active']==1 ? "active" : "";?>">
                            <h5>
                                <span>
                                    <?php echo $mainTag[1]['morning']['title'];?>
                                </span>
                            </h5>
                            <h2>
                                <span class="big-blue">
                                    <?php echo $mainTag[1]['morning']['temp'];?>
                                </span>
                            </h2>
                            <div class="my-5">
                                <svg class="svg">
                                    <use xlink:href="/svg/sprite.svg#sun"></use>
                                </svg>
                            </div>
                            <div class="mt-2">
                                <?php if ($mainTag[1]['morning']['perCentTitle']):?>
                                    <span class="biger-text">
                                        <svg class="small-svg smaller">
                                            <use xlink:href="/svg/sprite.svg#raindrop"></use>
                                        </svg><?php echo $mainTag[1]['morning']['perCentTitle'];?>
                                    </span>
                                <?php else:?>
                                    <span class="biger-text">--</span>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-3 px-2 text-center border-right
                                <?php echo $mainTag[1]['afternoon']['active']==1 ? "active" : "";?>">
                            <h5>
                                <span>
                                    <?php echo $mainTag[1]['afternoon']['title'];?>
                                </span>
                            </h5>
                            <h2>
                                <span class="big-blue">
                                    <?php echo $mainTag[1]['afternoon']['temp'];?>
                                </span>
                            </h2>
                            <div class="my-5">
                                <svg class="svg">
                                    <use xlink:href="/svg/sprite.svg#sun"></use>
                                </svg>
                            </div>
                            <div class="mt-2">
                                <?php if ($mainTag[1]['afternoon']['perCentTitle']):?>
                                    <span class="biger-text">
                                        <svg class="small-svg smaller">
                                            <use xlink:href="/svg/sprite.svg#raindrop"></use>
                                        </svg><?php echo $mainTag[1]['afternoon']['perCentTitle'];?>
                                    </span>
                                <?php else:?>
                                    <span class="biger-text">--</span>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-3 px-2 text-center border-right
                                <?php echo $mainTag[1]['evening']['active']==1 ? "active" : "";?>">
                            <h5>
                                <span>
                                    <?php echo $mainTag[1]['evening']['title'];?>
                                </span>
                            </h5>
                            <h2>
                                <span class="big-blue">
                                    <?php echo $mainTag[1]['evening']['temp'];?>
                                </span>
                            </h2>
                            <div class="my-5">
                                <svg class="svg">
                                    <use xlink:href="/svg/sprite.svg#moon-50"></use>
                                </svg>
                            </div>
                            <div class="mt-2">
                                <?php if ($mainTag[1]['evening']['perCentTitle']):?>
                                    <span class="biger-text">
                                        <svg class="small-svg smaller">
                                            <use xlink:href="/svg/sprite.svg#raindrop"></use>
                                        </svg><?php echo $mainTag[1]['evening']['perCentTitle'];?>
                                    </span>
                                <?php else:?>
                                    <span class="biger-text">--</span>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-3 px-2 text-center
                                <?php echo $mainTag[1]['night']['active']==1 ? "active" : "";?>">
                            <h5>
                                <span>
                                    <?php echo $mainTag[1]['night']['title'];?>
                                </span>
                            </h5>
                            <h2>
                                <span class="big-blue">
                                    <?php echo $mainTag[1]['night']['temp'];?>
                                </span>
                            </h2>
                            <div class="my-5">
                                <svg class="svg">
                                    <use xlink:href="/svg/sprite.svg#moon-50"></use>
                                </svg>
                            </div>
                            <div class="mt-2">
                                <?php if ($mainTag[1]['night']['perCentTitle']):?>
                                    <span class="biger-text">
                                        <svg class="small-svg smaller">
                                            <use xlink:href="/svg/sprite.svg#raindrop"></use>
                                        </svg><?php echo $mainTag[1]['night']['perCentTitle'];?>
                                    </span>
                                <?php else:?>
                                    <span class="biger-text">--</span>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-4 my-3">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <h3><strong><?php echo $mainTag[2]['header'];?></strong></h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-3 ml-5">
                        <h2 class="mb-0 font-weight-bold heading"><?php echo $mainTag[0]['temperature'];?> C</h2>
                        <span class="big-temp"><?php echo $mainTag[2]['text'];?></span>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-md-6 bordered-top">
                            <div class="d-flex justify-content-between py-1">
                                <div>
                                    <svg class="svg-8">
                                        <use xlink:href="/svg/sprite.svg#thermometer-50"></use>
                                    </svg>
                                    <span><?php echo $mainTag[2]['items'][0]['text1'];?></span>
                                </div>
                                <div>
                                    <span><?php echo $mainTag[2]['items'][0]['text2'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 bordered-top">
                            <div class="d-flex justify-content-between py-1">
                                <div>
                                    <svg class="svg-8">
                                        <use xlink:href="/svg/sprite.svg#wind"></use>
                                    </svg>
                                    <span><?php echo $mainTag[2]['items'][1]['text1'];?></span>
                                </div>
                                <div>
                                    <span class="svg-8 py-1">
                                        <svg class="compass-east">
                                            <use xlink:href="/svg/sprite.svg#compass-east"></use>
                                        </svg>
                                    </span>
                                    <span><?php echo $mainTag[2]['items'][1]['text2'];?></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 bordered-top py-1">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <svg class="svg-8">
                                        <use xlink:href="/svg/sprite.svg#raindrop"></use>
                                    </svg>
                                    <span><?php echo $mainTag[2]['items'][2]['text1'];?></span>
                                </div>
                                <div>
                                    <span><?php echo $mainTag[2]['items'][2]['text2'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 bordered-top py-1">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <svg class="svg-8">
                                        <use xlink:href="/svg/sprite.svg#wet"></use>
                                    </svg>
                                    <span><?php echo $mainTag[2]['items'][3]['text1'];?></span>
                                </div>
                                <div>
                                    <span><?php echo $mainTag[2]['items'][3]['text2'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 bordered-top py-1">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <svg class="svg-8">
                                        <use xlink:href="/svg/sprite.svg#thermometer-100"></use>
                                    </svg>
                                    <span><?php echo $mainTag[2]['items'][4]['text1'];?></span>
                                </div>
                                <div>
                                    <span><?php echo $mainTag[2]['items'][4]['text2'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 bordered-top py-1">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <svg class="svg-8">
                                        <use xlink:href="/svg/sprite.svg#sun"></use>
                                    </svg>
                                    <span><?php echo $mainTag[2]['items'][5]['text1'];?></span>
                                </div>
                                <div>
                                    <span><?php echo $mainTag[2]['items'][5]['text2'];?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 bordered-top py-1">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <svg class="svg-8">
                                        <use xlink:href="/svg/sprite.svg#eye"></use>
                                    </svg>
                                    <span><?php echo $mainTag[2]['items'][6]['text1'];?></span>
                                </div>
                                <div>
                                    <span><?php echo $mainTag[2]['items'][6]['text2'];?></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6 bordered-top py-1">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <svg class="svg-8 p-1">
                                        <use xlink:href="/svg/sprite.svg#half-moon"></use>
                                    </svg>
                                    <span><?php echo $mainTag[2]['items'][7]['text1'];?></span>
                                </div>
                                <div>
                                    <span><?php echo $mainTag[2]['items'][7]['text2'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once(ROOT_PATH."/templates/partials/footer.php");?>
<pre>
    <?php print_r($mainTag);?>
</pre>
