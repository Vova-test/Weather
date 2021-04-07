<?php require_once(ROOT_PATH."/templates/partials/header.php"); ?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-9 col-lg-8 col-xl-6">
                <div class="card p-4">
                    <div class="d-flex">
                        <h6 class="flex-grow-1"><?php echo $mainTag[0]['city']; ?></h6>
                        <h6><?php echo $mainTag[0]['time']; ?></h6>
                    </div>
                    <div class="d-flex flex-column temp mt-5 mb-3">
                        <h1 class="mb-0 font-weight-bold" id="heading"><?php echo $mainTag[0]['temperature']; ?> C</h1>
                        <span class="small grey"><?php echo $mainTag[0]['conditions']; ?></span>
                    </div>
                    <div class="d-flex">
                        <div class="temp-details flex-grow-1">
                            <p class="my-1"> <img src="https://i.imgur.com/B9kqOzp.png" height="17px"> <span> 40 km/h </span> </p>
                            <p class="my-1"> <i class="fa fa-tint mr-2" aria-hidden="true"></i> <span> 84% </span> </p>
                            <p class="my-1"> <img src="https://i.imgur.com/wGSJ8C5.png" height="17px"> <span> 0.2h </span> </p>
                        </div>
                        <div> <img src="https://i.imgur.com/Qw7npIg.png" width="100px"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once(ROOT_PATH."/templates/partials/footer.php"); ?>
<pre>
    <?php print_r($mainTag); ?>
</pre>
