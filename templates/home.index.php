<?php require_once(ROOT_PATH."/templates/partials/header.php"); ?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-9 col-lg-8 col-xl-6">
                <div class="card p-4">
                    <div class="d-flex">
                        <h6 class="flex-grow-1">London</h6>
                        <h6>16:08</h6>
                    </div>
                    <div class="d-flex flex-column temp mt-5 mb-3">
                        <h1 class="mb-0 font-weight-bold" id="heading"> 13° C </h1> <span class="small grey">Stormy</span>
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
        <div class="card card-2">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0"></li>
                    <li data-target="#demo" data-slide-to="1" class="active"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul> <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col">
                                <div class="row row1">21&deg;</div>
                                <div class="row row2"><img class="img-fluid" src="https://img.icons8.com/ios/100/000000/sun.png" /></div>
                                <div class="row row3">12:00</div>
                                <div class="row row4">PM</div>
                            </div>
                            <div class="col">
                                <div class="row row1">20&deg;</div>
                                <div class="row row2"><img class="img-fluid" src="https://img.icons8.com/ios/100/000000/sun.png" /></div>
                                <div class="row row3">1:00</div>
                                <div class="row row4">PM</div>
                            </div>
                            <div class="col">
                                <div class="row row1">20&deg;</div>
                                <div class="row row2"><img class="img-fluid" src="https://img.icons8.com/windows/100/000000/cloud.png" /></div>
                                <div class="row row3">2:00</div>
                                <div class="row row4">PM</div>
                            </div>
                            <div class="col">
                                <div class="row row1">19&deg;</div>
                                <div class="row row2"><img class="img-fluid" src="https://img.icons8.com/windows/100/000000/cloud.png" /></div>
                                <div class="row row3">3:00</div>
                                <div class="row row4">PM</div>
                            </div>
                            <div class="col">
                                <div class="row row1">18&deg;</div>
                                <div class="row row2"><img class="img-fluid" src="https://img.icons8.com/cotton/64/000000/rain--v3.png" /></div>
                                <div class="row row3">4:00</div>
                                <div class="row row4">PM</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once(ROOT_PATH."/templates/partials/footer.php"); ?>

