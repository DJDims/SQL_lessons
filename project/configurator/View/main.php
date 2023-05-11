<?php
ob_start();
?>

<section class="mt-3">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- item -->
                <div class="card mx-auto" style="width: 40%;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="card-text mb-4">Ever dreamed of building your own computer?<br>You can do it with our computer configurator!
                            content.</p>
                        <a href="#" class="btn btn-card">Build your PC!</a>
                    </div>
                </div>
                <!-- item -->
            </div>
            <div class="carousel-item">
                <!-- item -->
                <div class="card mx-auto" style="width: 40%;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="card-text mb-4">You don't want to build your own computer.<br>Check out our ready-made builds for different needs!</p>
                        <a href="#" class="btn btn-card">Check out!</a>
                    </div>
                </div>
                <!-- item -->
            </div>
            <div class="carousel-item">
                <!-- item -->
                <div class="card mx-auto" style="width: 40%;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="card-text mb-4">We also have a list of all computer components.<br>You're interested? Then go ahead!</p>
                        <a href="#" class="btn btn-card">Check out!</a>
                    </div>
                </div>
                <!-- item -->
            </div>
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

<section class="mt-5">
    <h2>Latest builds</h2>
</section>

<?php
$content = ob_get_clean();
include 'layout.php';
?>