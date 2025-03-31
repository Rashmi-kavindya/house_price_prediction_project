<?php include "config/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">🏡Dream Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4">House Price Predictor</h2>

        <div id="Captions" class="carousel slide">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#Captions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#Captions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#Captions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/img1.png" class="d-block w-100" alt=" ">
            <div class="carousel-caption d-none d-md-block" style="color: white;">
                <h5>Find Your Dream Home Instantly</h5>
                <p>Our AI-powered prediction tool helps you estimate house prices with precision. Start your search today!</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/img2.png" class="d-block w-100" alt=" ">
            <div class="carousel-caption d-none d-md-block" style="color: white;">
                <h5 >Smart Insights for Smarter Decisions</h5>
                <p>Get data-driven price predictions based on location, size, and more—helping you make informed real estate choices.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/img3.png" class="d-block w-100" alt=" ">
            <div class="carousel-caption d-none d-md-block" style="color: white;">
                <h5>Your Guide to the Perfect Investment</h5>
                <p>Whether you're buying or selling, our tool ensures you get the best value for your property. Try it now!</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#Captions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#Captions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

        <form action="predict.php" method="POST" class="shadow p-4 bg-light rounded">
            <div class="mb-3">
                <label class="form-label">Bedroom Count</label>
                <input type="number" name="bedroom_count" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Net Square Meters</label>
                <input type="number" step="0.01" name="net_sqm" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Center Distance (m)</label>
                <input type="number" step="0.01" name="center_distance" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Metro Distance (m)</label>
                <input type="number" step="0.01" name="metro_distance" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Floor</label>
                <input type="number" name="floor" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Age of the Building</label>
                <input type="number" name="age" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Predict Price</button>
        </form>

        <!-- About Us Section -->
        <section id="about" class ="mt-5 p-4 bg-light rounded shadow">
            <h3 class="text-center">About Us</h3>
            <p class="text-center">
                Welcome to Dream Home! We are dedicated to providing accurate and data-driven house price predictions.
                Our mission is to help buyers and sellers make informed decisions in the real estate market.
            </p>
        </section>

        <!-- Contact Section -->
        <section id="contact" class ="mt-5 p-4 bg-light rounded shadow">
            <h3 class="text-center">Contact Us</h3>
            <p class="text-center">📧 Email: contact@dreamhome.com | 📞 Phone: +123 456 7890</p>
            <form action="contact.php" method="POST" class="mt-3">
                <div class="mb-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-success w-100">Send Message</button>
            </form>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>