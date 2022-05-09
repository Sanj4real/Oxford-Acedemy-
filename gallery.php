<?php @include('partial/header.php') ?>

<section class="page__details">
    <div class="page__detail ">
        <div class="overflow"></div>
        <div class="page__detail__inner">
            <div class="text-center">
                <div id="breadcrumb" class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="current">Gallery</span>
                </div>
                <h1 class="page__title">Gallery</h1>
            </div>
        </div>
    </div>
</section>

<section class="gallery gallery-page padding-spacing">
    <div class="container">
    <div class="site--header text-center">
            <div class="site--header--top">
                <img src="img/site-head/school.svg" alt="">
                <h6>Memories</h6>
            </div>
            <h2>Do you have any questions? </h2>
        </div>
        <div class="row">
            <div class="col-md-4 gallery-block">
                <div class="pic">
                    <div class="gallery-content border-out">
                        <a href="gallery-details.php"><img src="img/slider/1.jpg" alt=" " class="w-100" /></a>
                    </div>
                </div>
                <h4><a href="gallery-details.php">Children’s Day</a></h4>
            </div>
            <div class="col-md-4 gallery-block">
                <div class="pic">
                    <div class="gallery-content border-out">
                        <a href="gallery-details.php"><img src="img/slider/3.jpg" alt=" " class="w-100" /></a>
                    </div>
                </div>
                <h4><a href="gallery-details.php"> Parent-child Recreation Day</a></h4>
            </div>
            <div class="col-md-4 gallery-block">
                <div class="pic">
                    <div class="gallery-content border-out">
                        <a href="gallery-details.php"><img src="img/slider/2.jpg" alt=" " class="w-100" /></a>
                    </div>
                </div>
                <h4><a href="gallery-details.php"> Environment Day</a></h4>
            </div>
        </div>
    </div>
</section>

<?php @include('partial/footer.php') ?>