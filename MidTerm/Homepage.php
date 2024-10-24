<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMUDRA Hotel</title>
    <link rel="stylesheet" href="Homepage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Samudra Hotel</h1>
            <nav>
                <ul>
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="price_check.html">Check Price</a></li>
                <li><a href="Login.html">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="banner">
        <div class="slider">
            <img src="img/hotel1.jpg" alt="hotel 1">
            <img src="img/hotel2.jpg" alt="hotel 2">
            <img src="img/hotel3.jpg" alt="hotel 3">
        </div>
    </div>

    <div class="hotel-profile">
        <h1>Hotel Profile</h1>
        <br><br>
        <p>Welcome to Samudra Hotel, your gateway to unparalleled comfort and elegance. At Samudra Hotel, we offer more than just a place to stay; we provide an unforgettable experience. Nestled in a prime location, our hotel blends luxurious comfort with the serene beauty of nature, making it the perfect escape for both leisure and business travelers. Each of our rooms is thoughtfully designed with modern amenities and stylish décor, ensuring a restful stay. Whether you are here for a quick getaway or an extended vacation, our dedicated team is committed to delivering impeccable service that exceeds your expectations. Indulge in culinary delights at our on-site restaurant, relax by the pool with breathtaking views, or rejuvenate at our spa. Samudra Hotel is also equipped with state-of-the-art meeting and event facilities, making it ideal for corporate gatherings and special occasions. Discover the perfect harmony of relaxation and sophistication at Samudra Hotel where every moment is crafted to perfection. Samudra Hotel Where luxury meets tranquility.</p>
    </div>

    <div class="footer">
        <p>SAMUDRA</p>
    </div>

    <script>
        $(document).ready(function(){
            let currentImageIndex = 0;
            let images = $('.slider img');
            let imageCount = images.length;

            function showImage(index) {
                images.hide();
                images.eq(index).show();
            }

            function nextImage() {
                currentImageIndex = (currentImageIndex + 1) % imageCount;
                showImage(currentImageIndex);
            }

            showImage(currentImageIndex);
            setInterval(nextImage, 3000);  
        });
    </script>
</body>
</html>
