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

<section class="gallery__page padding-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gallery-content">
                    <a href="img/slider/1.jpg" data-fancybox >
                        <img src="img/slider/1.jpg" alt=" " class="w-100" />
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-content">
                    <a href="img/slider/3.jpg" data-fancybox >
                        <img src="img/slider/3.jpg" alt=" " class="w-100" />
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-content">
                    <a href="img/slider/2.jpg" data-fancybox >
                        <img src="img/slider/2.jpg" alt=" " class="w-100" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php @include('partial/footer.php') ?>