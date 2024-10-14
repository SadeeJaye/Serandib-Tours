<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serandib Tours</title>
    <link rel="stylesheet" href="only.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
    <nav>
    <div class="container">
            <h3 class="logo">Serandib<span>Tour</span></h3>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="only.php">Only In Serandib</a></li>
                <li><a href="transport.php">Transport</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="login.php" class="btn login-btn">Log In</a>
                <a href="login.php" class="btn signup-btn">Sign Up</a>
        </div>
    </nav>
        <h1 class="big-title translate" data-speed="0.1">Living The Island Life</h1>

        <img src="person.png" class="person translate" data-speed="-0.25" alt="">
        <img src="mountain1.png" class="mountain1 translate" data-speed="-0.2" alt="">
        <img src="mountain2.png" class="mountain2 translate" data-speed="0.4" alt="">
        <img src="mountain3.png" class="mountain3 translate" data-speed="0.3" alt="">
        <img src="sky.png" class="sky translate" data-speed="0.5" alt="">
    </header>

    <section>
        <div class="shadow"></div>

        <div class="container1">
            <div class="content opacity">
                <h3 class="title">
                    Island Life
                    <div class="border"></div>
                </h3>
                <p class="text">
                We understand that no two people are alike, often having widely varying preferences and expectations,
                 which is where our decades of experience enable us to perfectly tailor our itineraries to anticipate and fit anyone’s needs,
                  in both Sri Lanka and the Maldives. Our team of experts negotiate the best rates on behalf of our clients, from affordable 
                  accommodation to all-inclusive luxurious getaways at star class hotels and high end boutique properties, we will arrange your
                   dream island vacation for you.</p>
            </div>

            <div class="imgContainer opacity">
                <img src="ella.jpg" alt="">
            </div>
        </div>
    </section>













    <section id="tour-listings">
    <div class="container">
        <h2 class="section-title">
            Featured Tours
            <span class="underline"></span>
        </h2>
        <div class="tour-grid">
            <!-- Tour 1 -->
            <div class="tour-card animate-card">
                <div class="tour-image-wrapper">
                    <img src="f1.jpg" alt="Tour Image 1" class="tour-image">
                </div>
                <div class="tour-content">
                    <h3 class="tour-title">Cultural Heritage Tour</h3>
                    <p class="tour-description">Explore ancient temples, historic cities, and local traditions on this immersive cultural journey.</p>
                    <div class="tour-footer">
                        <p class="tour-price">$299</p>
                        <a href="book.php" class="btn book-btn">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Tour 2 -->
            <div class="tour-card animate-card">
                <div class="tour-image-wrapper">
                    <img src="tour2.jpg" alt="Tour Image 2" class="tour-image">
                </div>
                <div class="tour-content">
                    <h3 class="tour-title">Beach Paradise Tour</h3>
                    <p class="tour-description">Relax on pristine beaches and enjoy the tropical vibes on this seaside getaway.</p>
                    <div class="tour-footer">
                        <p class="tour-price">$499</p>
                        <a href="book.php" class="btn book-btn">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Tour 3 -->
            <div class="tour-card animate-card">
                <div class="tour-image-wrapper">
                    <img src="tour3.jpg" alt="Tour Image 3" class="tour-image">
                </div>
                <div class="tour-content">
                    <h3 class="tour-title">Adventure Tour</h3>
                    <p class="tour-description">Thrill-seekers will love this adventure tour featuring hiking, rafting, and other outdoor activities.</p>
                    <div class="tour-footer">
                        <p class="tour-price">$399</p>
                        <a href="book.php" class="btn book-btn">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Tour 4 -->
            <div class="tour-card animate-card">
                <div class="tour-image-wrapper">
                    <img src="tour4.jpg" alt="Tour Image 4" class="tour-image">
                </div>
                <div class="tour-content">
                    <h3 class="tour-title">Wildlife Safari Tour</h3>
                    <p class="tour-description">Embark on a wildlife safari and witness exotic animals in their natural habitat.</p>
                    <div class="tour-footer">
                        <p class="tour-price">$599</p>
                        <a href="book.php" class="btn book-btn">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Tour 5 -->
            <div class="tour-card animate-card">
                <div class="tour-image-wrapper">
                    <img src="tour5.jpg" alt="Tour Image 5" class="tour-image">
                </div>
                <div class="tour-content">
                    <h3 class="tour-title">Luxury Island Tour</h3>
                    <p class="tour-description">Experience the ultimate luxury island tour with 5-star accommodations and VIP services.</p>
                    <div class="tour-footer">
                        <p class="tour-price">$999</p>
                        <a href="book.php" class="btn book-btn">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Tour 6 -->
            <div class="tour-card animate-card">
                <div class="tour-image-wrapper">
                    <img src="tour6.jpg" alt="Tour Image 6" class="tour-image">
                </div>
                <div class="tour-content">
                    <h3 class="tour-title">Historical Wonders Tour</h3>
                    <p class="tour-description">Discover the ancient ruins and architectural marvels that shaped history.</p>
                    <div class="tour-footer">
                        <p class="tour-price">$450</p>
                        <a href="book.php" class="btn book-btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="view-all-tours">View All Tours</a>
    </div>
</section>















<?php
// Fetching the tour details from the database
$tour_id = $_GET['tour_id']; // Assuming you're passing the tour ID in the URL
// Database connection and query to get tour details based on $tour_id
// You should replace this with your actual database logic
// Example data for demo:
$tour_details = [
    'title' => 'Explore the Wonders of Sri Lanka',
    'description' => 'Experience the natural beauty and culture of Sri Lanka with our expertly guided tour. Discover historic landmarks, stunning beaches, and unique wildlife.',
    'itinerary' => [
        'Day 1: Arrival and city tour',
        'Day 2: Visit the ancient city of Anuradhapura',
        'Day 3: Wildlife safari in Yala National Park',
        'Day 4: Relax on the southern beaches',
    ],
    'pricing' => [
        'per_person' => '300 USD',
        'group_discount' => '10% discount for groups of 5 or more'
    ],
    'transport_options' => ['Private Car', 'Minibus', 'Luxury Coach'],
    'gallery_images' => ['hiking.jpg', 'tour4.jpg', 'tour6.jpg'], // Replace with actual paths
];
?>

<div class="tour-container">

    <!-- Tour Introduction Section -->
    <section class="tour-intro-section">
        <div class="intro-text">
            <h1 class="slide-in"><?php echo $tour_details['title']; ?></h1>
            <p class="zoom-in"><?php echo $tour_details['description']; ?></p>
            <a href="#booking-section" class="cta-btn swing-in">Book Now</a>
        </div>
    </section>

    <!-- Image Gallery Section -->
    <section class="image-gallery-section fade-in">
        <div class="gallery-wrapper">
            <?php foreach ($tour_details['gallery_images'] as $image): ?>
                <div class="gallery-item">
                    <img src="<?php echo $image; ?>" alt="Gallery Image" class="gallery-image">
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Itinerary & Pricing Section -->
    <section class="details-section">
        <div class="details-wrapper">
            <div class="itinerary-card hover-tilt">
                <h2>Itinerary</h2>
                <ul class="itinerary-list">
                    <?php foreach ($tour_details['itinerary'] as $day): ?>
                        <li><?php echo $day; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="pricing-card hover-tilt">
                <h2>Pricing</h2>
                <p>Per Person: <span><?php echo $tour_details['pricing']['per_person']; ?></span></p>
                <p>Group Discount: <span><?php echo $tour_details['pricing']['group_discount']; ?></span></p>
            </div>
        </div>
    </section>

    <!-- Transport Options -->
    <section class="transport-options-section">
        <h2 class="fade-in">Transport Options</h2>
        <div class="transport-options">
            <?php foreach ($tour_details['transport_options'] as $option): ?>
                <span class="transport-option"><?php echo $option; ?></span>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="booking-section" class="booking-section zoom-in">
        <h2>Book Your Tour</h2>
        <form action="process_booking.php" method="POST" class="booking-form">
            <div class="form-group">
                <label for="tour-date">Select Date</label>
                <input type="date" id="tour-date" name="tour_date" required>
            </div>
            <div class="form-group">
                <label for="travelers">Number of Travelers</label>
                <input type="number" id="travelers" name="travelers" min="1" max="20" required>
            </div>
            <button type="submit" class="book-btn">Book Now</button>
        </form>
    </section>

</div>















<footer class="footer">
    <div class="footer-content">
        <div class="footer-logo">
            <h2>Serandib Tours</h2>
            <p>Explore the beauty of Sri Lanka with us!</p>
        </div>
        <div class="footer-links">
            <div class="footer-section">
                <h3>Explore</h3>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="only.php">Only In Serandib</a></li>
                    <li><a href="transport.php">Transport</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <ul>
                    <li>Email: info@serandibtours.com</li>
                    <li>Phone: +943 456 7890</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-media">
                    <a href="https://facebook.com/yourpage" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/yourpage" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/yourpage" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/company/yourpage" class="social-icon" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Serandib Tours. All rights reserved.</p>
    </div>
</footer>




    <script src="only.js"></script>
</body>
</html>