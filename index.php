

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Prime Trading - quality export and imports</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script>
        document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");
        const duration = 2000; // Total time for the animation in milliseconds (2 seconds)

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute("data-target")); // Final number
            const increment = target / (duration / 20); // Calculate increment value per frame (50fps)

            let current = 0;

            const updateCounter = () => {
                current += increment; // Increment the current value
                if (current < target) {
                    counter.innerText = Math.ceil(current); // Display rounded-up value
                    setTimeout(updateCounter, 20); // Repeat every 20ms (50fps)
                } else {
                    counter.innerText = (target+"+"); // Ensure it stops at the target
                }
            };

            updateCounter();
        });
    });
    </script>

    <style>
        .gradient-box {
            background: linear-gradient(to right, rgba(255, 255, 255, 1),rgba(255, 255, 255, 0.3));
        }
        .counter {
    font-size: 3rem;
    font-weight: bold;
    transition: all 0.5s ease-in-out;
}
.counter-1 {
    font-size: 3rem;
    font-weight: bold;
    transition: all 2s ease-in-out;
}

    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-9 px-5 text-start w-90">
                <small>
                  <i class="fa fa-map-marker-alt me-2"></i>Bedrya City Mall, 8th Floor, Office No. 701, Addis Ababa, Ethiopia
                </small>
                <small class="ms-4 text-center gap-2">
                  <i class="fa fa-phone-alt me-2"></i> <a href="tel:+251978784600" class="text-secondary">+251978784600</a>   <a href="tel:+251901031314" class="text-secondary">+251901031314</a>

                </small>
              </div>
              
            <div class="col-lg-3 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0 col-8 col-sm-4">
                <!-- <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1> -->
                <img src="img/logo.png" class="w-50" alt="">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                    <a href="import.php" class="nav-item nav-link">Import</a>
                    <a href="export.php" class="nav-item nav-link">Export</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="blog.php" class="nav-item nav-link">Blog</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    <a class="nav-item nav-link"><div class="gtranslate_wrapper"></div></a>
<script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"detect_browser_language":true,"languages":["en","nl","zh-CN","fr","ar"],"wrapper_selector":".gtranslate_wrapper","flag_size":24}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/popup.js" defer></script>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.php" class="dropdown-item">Our Features</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="404.php" class="dropdown-item">404 Page</a>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a>
                </div> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h4 class="text-secondary">From Field to Market</h4>
                                    <h6 class="display-3 mb-5 animated slideInDown">Importing Growth, Exporting Beauty</h6>
                                    <a href="contact.php" class="w-50 btn btn-primary rounded-pill py-sm-3 px-sm-5">Contact Us Now</a>
                                    <!-- <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.png" alt="Image">
                   <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h4 class="text-secondary">Flourish & Export</h4>
                                    <h6 class="display-3 mb-5 animated slideInDown">Importing Growth, Exporting Beauty</h6>
                                    <a href="contact.php" class="w-50 btn btn-primary rounded-pill py-sm-3 px-sm-5">Contact us Now</a>
                                    <!-- <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-5.png" alt="Image">
                   <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h4 class="text-secondary">Flourish & Export</h4>
                                    <h6 class="display-3 mb-5 animated slideInDown">Importing Growth, Exporting Beauty</h6>
                                    <a href="contact.php" class="w-50 btn btn-primary rounded-pill py-sm-3 px-sm-5">Contact us Now</a>
                                    <!-- <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.png" alt="Image">
                   <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h4 class="text-secondary">Flourish & Export</h4>
                                    <h6 class="display-3 mb-5 animated slideInDown">Importing Growth, Exporting Beauty</h6>
                                    <a href="contact.php" class="w-50 btn btn-primary rounded-pill py-sm-3 px-sm-5">Contact us Now</a>
                                    <!-- <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/about.png">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Prime Trading PLC</h1>
                    <p class="mb-4">Prime Import and Export is a leading international trade company specializing in both the export of fresh fruits and vegetables and the import of high-quality fertilizers and agricultural chemicals. We are a one-stop shop for farmers and agricultural businesses, offering a comprehensive solution for optimizing crop production and yiel</p>
                    <div class="d-flex flex-row w-100">
                        <div class="w-75">
                            <p><i class="fa fa-check text-primary me-2"></i>Import Agricultural Chemicals</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Export Fruits</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Export Cut Flowers </p>
                        </div>
                        <div class="w-75">
                            <p><i class="fa fa-check text-primary me-2"></i>Import Animal Feed Raw Material</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Import Fertilizers</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Flower Farming</p>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="d-flex justify-content-between row">
        <div class="col-md-3 col-6 text-center">
            <h1 class="text-secondary counter" data-target="500">0</h1>
            <p class="h5">Farmers</p>
        </div>
        <div class="col-md-3 col-6 text-center">
            <h1 class="text-secondary counter" data-target="20">0</h1>
            <p class="h5">Countries & territories served</p>
        </div>
        <div class="col-md-3 col-6 text-center">
            <h1 class="text-secondary counter" data-target="40">0</h1>
            <p class="h5">Trucks</p>
        </div>
        <div class="col-md-3 col-6 text-sm-center text-start ">
            <h1 class="text-secondary counter" data-target="15">0</h1>
            <p class="h5">Type of Agricultural products</p>
        </div>
    </div>
    
    

    <div class="container-fluid bg-light bg-icon py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Services</h1>
                <p>We are committed to providing high-quality agricultural products and services with a focus on excellence and sustainability. Explore the features that set us apart.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5 d-flex flex-column align-items-center">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center;">
                            <img class="img-fluid" src="img/export_icon.png" alt="export" style="max-width: 143px;">
                        </div>
                        <h4 class="mb-3">High-Quality Exports</h4>
                        <p class="mb-4">We export a wide variety of fresh fruits, cereals, and flowers, ensuring the highest quality and timely delivery to international markets.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="about.php">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5 d-flex flex-column align-items-center">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center;">
                            <img class="img-fluid" src="img/import.webp" alt="import" style="max-width: 143px;">
                        </div>
                        <h4 class="mb-3">Premium Imported Products</h4>
                        <p class="mb-4">Our imports include top-tier fertilizers, animal feed, and agricultural products to support farming operations and increase productivity.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="about.php">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5 d-flex flex-column align-items-center">
                        <div style="height: 150px; display: flex; align-items: center; justify-content: center;">
                            <img class="img-fluid" src="img/icon-2.png" alt="sustainability" style="max-width: 143px;">
                        </div>
                        <h4 class="mb-3">Sustainable Practices</h4>
                        <p class="mb-4">We prioritize sustainability by sourcing environmentally-friendly agricultural products and practicing ethical import and export processes.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Product part -->
    <div class="container-xxl py-5">
        <div class="container">
               
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Our Products</h1>
                <p>We proudly export premium flowers, avocados, and fruits to the world, showcasing the richness of our land. Additionally, we import high-quality fertilizers and agricultural products to support sustainable farming. Explore our offerings and grow with us!</p>
            </div>
        <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="position-relative bg-light overflow-hidden shadow-lg">
                                    <img class="img-fluid w-100" src="img/fruits.png" alt="">
                                    <div style="opacity: 0.5; background-color: black;" class="text-center w-100 h-100 rounded text-white position-absolute start-0 bottom-0 py-1 px-3"></div>
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 my-4 py-1 px-3">Premium</div>
                                    <div class=" text-center bg-transparent rounded text-white position-absolute start-0 bottom-0 py-1 px-3">
                                        <a class="text-white" href="">
                                            <h3 class="text-white text-start">Fruits</h3>
                                            <p class="text-start">Our avocados boast a rich, buttery flavor and a luxurious texture that sets them apart</p>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="position-relative bg-light overflow-hidden shadow-lg img-fluid">
                                    <img class="img-fluid w-100" src="img/cut-flower.png" alt="">
                                    <div style="opacity: 0.5; background-color: black;" class="text-center w-100 h-100 rounded text-white position-absolute start-0 bottom-0 py-1 px-3"></div>
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 my-4 py-1 px-3">Premium</div>
                                    <div class=" text-center bg-transparent rounded text-white position-absolute start-0 bottom-0 py-1 px-3">
                                        <a class="text-white" href="">
                                            <h3 class="text-white text-start">Cut Flowers</h3>
                                            <p class="text-start ">Each bloom is cultivated and handpicked at the perfect moment of blooming</p>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="position-relative bg-light overflow-hidden shadow-lg">
                                    <img class="img-fluid w-100" src="img/flowers.png" alt="">
                                    <div style="opacity: 0.5; background-color: black;" class="text-center w-100 h-100 rounded text-white position-absolute start-0 bottom-0 py-1 px-3"></div>
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 my-4 py-1 px-3">Premium</div>
                                    <div class=" text-center bg-transparent rounded text-white position-absolute start-0 bottom-0 py-1 px-3">
                                        <a class="text-white" href="">
                                            <h3 class="text-white text-start">Flowers</h3>
                                            <p class="text-start ">Experience the epitome of floral elegance with our premium level flowers</p>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="position-relative bg-light overflow-hidden shadow-lg">
                                    <img class="img-fluid w-100" src="img/Fertilizers.png" alt="">
                                    <div style="opacity: 0.5; background-color: black;" class="text-center w-100 h-100 rounded text-white position-absolute start-0 bottom-0 py-1 px-3"></div>
                                    <div class=" text-center bg-transparent rounded text-white position-absolute start-0 bottom-0 py-1 px-3">
                                        <a class="text-white" href="">
                                            <h3 class="text-white text-start">Fertilizers</h3>
                                            <p class="text-start ">Enhance agricultural yields and nurture growth with our fertilizers</p>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="position-relative bg-light overflow-hidden shadow-lg">
                                    <img class="img-fluid w-100" src="img/chemicals.png" alt="">
                                    <div style="opacity: 0.5; background-color: black;" class="text-center w-100 h-100 rounded text-white position-absolute start-0 bottom-0 py-1 px-3"></div>
                                    <div class=" text-center bg-transparent rounded text-white position-absolute start-0 bottom-0 py-1 px-3">
                                        <a class="text-white" href="">
                                            <h3 class="text-white text-start">Agricultural Chemicals</h3>
                                            <p class="text-start text-white">Optimize crop health and maximize yield with our agricultural chemicals</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="product-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="position-relative bg-light overflow-hidden shadow-lg">
                                    <img class="img-fluid w-100" src="img/animals.png" alt="">
                                    <div style="opacity: 0.5; background-color: black;" class="text-center w-100 h-100 rounded text-white position-absolute start-0 bottom-0 py-1 px-3"></div>
                                    <div class=" text-center bg-transparent rounded text-white position-absolute start-0 bottom-0 py-1 px-3">
                                        <a class="text-white" href="">
                                            <h3 class="text-white text-start">Animal Feed Raw Material</h3>
                                            <p class="text-start text-white">Elevate animal nutrition with our feed raw materials, for healthy livestock</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of priduct -->

    <!-- Trusted by -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Trusted By</h2>
        
        <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <img src="img/merk.webp" class="partner-logo d-block mx-auto bg-white" alt="Partner 1">
                        </div>
                        <div class="col-md-3">
                            <img src="img/natural.webp" class="partner-logo d-block mx-auto" alt="Partner 2">
                        </div>
                        <div class="col-md-3">
                            <img src="img/saturn.jpg" class="partner-logo d-block mx-auto" alt="Partner 3">
                        </div>
                        <div class="col-md-3">
                            <img src="img/paradox.png" class="partner-logo d-block mx-auto" alt="Partner 4">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <img src="img/natural.webp" class="partner-logo d-block mx-auto bg-white" alt="Partner 1">
                        </div>
                        <div class="col-md-3">
                            <img  src="img/merk.webp"class="partner-logo d-block mx-auto" alt="Partner 2">
                        </div>
                        <div class="col-md-3">
                            <img src="img/paradox.png" class="partner-logo d-block mx-auto" alt="Partner 3">
                        </div>
                        <div class="col-md-3">
                            <img  src="img/saturn.jpg" class="partner-logo d-block mx-auto" alt="Partner 4">
                        </div>
    
                        
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#partnerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#partnerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <style>
        .gradient-box {
            background: linear-gradient(to right, rgba(255, 255, 255, 1),rgba(255, 255, 255, 0.3));
        }
        .counter {
    font-size: 3rem;
    font-weight: bold;
    transition: all 0.5s ease-in-out;
    }
    .counter-1 {
    font-size: 3rem;
    font-weight: bold;
    transition: all 2s ease-in-out;
    }
    .partner-logo {
            height: 100px; /* Set a consistent height */
            object-fit: contain; /* Ensure the logos scale properly without distortion */
        }
    
        @media (max-width: 768px) {
            .partner-logo {
                height: 80px; /* Adjust height for smaller screens */
            }
        }
    
    </style>
    
    
    
    



    <!-- Trusted by -->


    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Visit Our Gallery</h1>
                    <p class="text-white mb-0">Step into our world and explore the visual journey of our work. Our gallery showcases the projects, milestones, and experiences that define who we are. From the products we offer to the people behind our firm, take a closer look at the passion and dedication that goes into everything we do.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="gallery.php">Visit Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">What Peoples Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Prime's expertise in import and export operations has been instrumental in optimizing our trading processes."</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/customer-1.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Aman</h5>
                            <span>Director</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Working with prime has been a game-changer for our import business. Their expertise have truly impressed us."</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/customer-2.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Markos</h5>
                            <span>Client</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">Prime's proactive approach and attention to detail have streamlined our operations."</p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/customer.jpg" alt="">
                        <div class="ms-3">
                            <h5 class="mb-1">Sara</h5>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Latest Blog</h1>
                <p>Explore our latest blog posts for insights, updates, and expert advice on topics that matter to you. From industry trends to practical tips, our blog is your go-to source for fresh and valuable content</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/export_car.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Exporting premium products to clients around the world</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2025</small>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
   <?php include 'footer.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>