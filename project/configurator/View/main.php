<?php
ob_start();
?>

<!-- silder -->
<section class="mt-3">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
            <!-- item -->
            <div class="carousel-item active">
                <div class="card mx-auto" style="width: 53%;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="card-text mb-4">Ever dreamed of building your own computer?<br>You can do it with our computer configurator!
                        content.</p>
                        <a href="#" class="btn btn-card">Build your PC!</a>
                    </div>
                </div>
            </div>
            <!-- item -->
            <!-- item -->
            <div class="carousel-item">
                <div class="card mx-auto" style="width: 53%;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="card-text mb-4">Don't you want to build your own computer?<br>Check out our ready-made builds for different needs!</p>
                        <a href="#" class="btn btn-card">Check out!</a>
                    </div>
                </div>
            </div>
            <!-- item -->
            <!-- item -->
            <div class="carousel-item">
                <div class="card mx-auto" style="width: 53%;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="card-text mb-4">We also have a list of all computer components.<br>You're interested? Then go ahead!</p>
                        <a href="#" class="btn btn-card">Check out!</a>
                    </div>
                </div>
            </div>
            <!-- item -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</section>
<!-- silder -->

<!-- latest builds -->
<div class="album py-5">
    <div class="container">
        <h2 class="text-center">Latest builds</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <!-- card -->
            <div class="col">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Build title</h5>
                        <span class="badge rounded-pill text-bg-secondary">By user</span>
                        <p class="card-text">Build description description description description description description</p>
                        <a href="#" class="btn btn-primary">Show build</a>
                    </div>
                </div>
            </div>
            <!-- card -->
        </div>
    </div>
</div>
<!-- latest builds -->

<?php
$content = ob_get_clean();
include 'layout.php';
?>