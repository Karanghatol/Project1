<!DOCTYPE html>
<div class="inc-header">
    <?php include_once "header.php"; ?>
</div>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index-style.css">
    <title>Home</title>
</head>

<body>
    
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img (1).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/img (2).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/img (3).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/img (4).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/img (5).jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <section class="description">
        <h1 class="about-h1">
            <p>About Us</p>
        </h1>
        <hr /><br>
        <p class="dec">
            <b>
                <i> Our mission declares our purpose of existence as a company and our objectives.</i>
                <br>
                <br>
                To give every customer much more than what he/she asks for in terms of quality, selection, value for
                money and customer service, by understanding local tastes and preferences and innovating constantly to
                eventually provide an unmatched experience in jewellery shopping.
            </b>
        </p>
    </section>

    <body>
        <div class="card_div">
            <div class="card" style="width: 18rem;"><img src="images/img (4).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.Some quick example text to build on the card title and make up the bulk of the
                        card's content.Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;"><img src="images/img (4).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.Some quick example text to build on the card title and make up the bulk of the
                        card's content.Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;"><img src="images/img (4).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.Some quick example text to build on the card title and make up the bulk of the
                        card's content.Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;"><img src="images/img (4).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.Some quick example text to build on the card title and make up the bulk of the
                        card's content.Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <script>
            const slider = document.querySelector('.carousel-item');
            let slideIndex = 0;

            function nextSlide() {
                slideIndex = (slideIndex + 1) % slider.children.length;
                updateSlider();
            }

            function updateSlider() {
                const translateValue = -slideIndex * 100 + '%';

                slider.style.transform = `translateX($ {
                    translateValue
                })`;
            }

            // Automatically slide every 2 seconds (adjust as needed)
            setInterval(nextSlide, 2000);
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    </body>

</html>
<?php include_once "footer.php"; ?>