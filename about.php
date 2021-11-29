    <?php
        include('inc/css.php')
    ?>

    <title>PORTFOLIO</title>
</head>
<body>
    
    <?php include 'inc/header.php' ?>

    <section id="hero" class="d-flex align-items-center" style="background: #D3FAD6; height: 350px;">
        <div class="row d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="container col-lg-8 pt-5 pt-lg-0 content">
                <h1>About Me</h1>
                <p>
                    Frederic Ntirenganya, (born April 12, 1983, Nyanza District, Rwanda), Rwandan mathematician, researcher on various disciplines on health and climate change. As statistician, Frederic emphasized measuring correlations and fitting curves to the data, and he played important role in the development of R packages to analyze climate data with the help of African Math’s Initiative. Rather than just dealing with mathematical and statistics theory, Frederic’s papers most often applied the tools of statistics to scientific problems.
                </p>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-5">
                    <img src="assets/img/8.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 pt-4 pt-lg-0 content">
                    <h3>Rwandan mathematician, researcher on various disciplines on health and climate change.</h3>
                    <p class="fst-italic">
                        Frederic is also a part time Lecturer at University of Lay Advenstist of Kigali in Rwanda to apply various methods of statistical data analysis in different field related research. Since then he has mostly convened and lectured undergraduate students’ statistics and mathematics courses.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> April 12, 1983</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong> www.ntirenganyafrederick.me</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> +250 781 862 349</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> 38</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> Master</li>
                                <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> City : Kigali, Rwanda</li>
                                <!-- <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> Available</li> -->
                            </ul>
                        </div>
                    </div>
                    <p>
                        His research has remained on climate and biostatistics for decision making whereby he published different articles related to health modeling and climate analysis. “Frederic believes that data can change the World towards informed decision“. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>
                    If Not Now, When? Let’s Work Together!
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="w-100">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <?php include('inc/footer.php') ?>

    <?php include('inc/js.php') ?>