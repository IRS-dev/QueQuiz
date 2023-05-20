<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>QueQuiz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../landingpage/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../landingpage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../landingpage/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../landingpage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../landingpage/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl  p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0 text-white">QUE<span class="fs-5">quiz</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link text-white">Home</a>
                    </div>
                    <a href="/" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Back</a>
                </div>
            </nav>
        <!-- About Start -->
        <div class="container-xxl  absolute ">
            <div class="container px-lg-5 py-lg-5 mt-5">
                <div class="row g-5 justify-content-center ">
                    <div class="col-lg-8 ">

                                <form method="POST" action="">
                                    @csrf
                             
                                            <div class="card-body">
                                                <div class=" text-dark rounded mb-3 card py-2">
                                                <h1 class=" text-center text-dark rounded">Test Bahasa Inggirs</h1>
                                                <div class="card-body">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi dolore, beatae voluptatum facilis quae aut illum vitae quo, dicta perferendis harum dolores soluta temporibus corrupti commodi possimus ad error ex?
                                                </div>
                                                </div>
                                                    <div class="card mb-3">
                                                        <div class="card-header text-dark">Please insert Username dan Email</div>
                                    
                                                        <div class="card-body">
                                                            <input type="hidden" name="questions[9]" value="">
                                                          
                                                                <div class="form-text">
                                                                    <input class="form-control border-1 rounded mb-3 text-dark" required autofocus type="text" name="username"  placeholder="Username" >
                                                                    <input class="form-control border-1 rounded mb-3 text-dark" required type="email" name="Email"  placeholder="Email" >

                                                                </div>

                                                        </div>
                                                    </div>
                                                    <div class="card mb-3">
                                                        <div class="card-header text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias recusandae doloremque fugiat, eaque odio cupiditate aperiam aut earum nulla eligendi aliquid nostrum nesciunt ipsa! Explicabo voluptates in natus perferendis obcaecati rem voluptas, a atque libero aspernatur non. Aperiam praesentium eligendi alias maxime, officia tempora assumenda? Deleniti enim magnam, autem commodi inventore sint id earum illo consequuntur vel amet, voluptas veniam nam maxime. Consectetur et nobis cupiditate fuga laboriosam minima rem. Ratione eaque, neque praesentium, consequatur quaerat commodi vel aliquid quo veniam quisquam numquam temporibus ipsum doloribus unde suscipit facere dolores quia earum velit! Consequuntur quibusdam, reprehenderit eaque provident dolor laboriosam?</div>
                                    
                                                        <div class="card-body">
                                                            <input type="hidden" name="questions[9]" value="">
                                                          
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questions[]" id="option-" value="">
                                                                    <label class="form-check-label text-dark" for="option-">
                                                                        000
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questions[]" id="option-" value="">
                                                                    <label class="form-check-label text-dark" for="option-">
                                                                        000
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questions[]" id="option-" value="">
                                                                    <label class="form-check-label text-dark" for="option-">
                                                                        000
                                                                    </label>
                                                                </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6">
                                                            <button type="submit" class="btn btn-secondary text-white">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                            </div>


                                </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">QueQuiz</a>, All Right Reserved. 
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white" ></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../landingpage/lib/wow/wow.min.js"></script>
    <script src="../landingpage/lib/easing/easing.min.js"></script>
    <script src="../landingpage/lib/waypoints/waypoints.min.js"></script>
    <script src="../landingpage/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../landingpage/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../landingpage/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../landingpage/js/main.js"></script>
</body>

</html>