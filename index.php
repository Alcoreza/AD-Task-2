<?php
include 'components/header.component.php';
include 'utils/Car.util.php';
include 'handlers/car.handler.php';
?>

<div class="banner-image">
    <div class="overlay"></div>
    <div class="banner-text">
        <h1>Welcome to Car Hub</h1>
        <p>Explore the latest brands and car types tailored for you</p>
    </div>
</div>

<?php
renderInfoSection("", "Cars are more than just machines—they’re expressions of innovation, style, and freedom. They empower people to travel far, experience new places, and connect with others. From engineering brilliance to cultural icons, cars shape the way we live and move. They continue to evolve, embracing technology like electric power and autonomous driving, making the future of transportation exciting.");
renderInfoSection("Fun Fact About Cars", "The first speeding ticket was issued in 1902 — the driver was going 45 mph!");
?>


<div class="car-list-section">
    <div class="car-list">
        <?php
        $featuredCars = array_slice($cars, 0, 3);
        foreach ($featuredCars as $car) {
            include 'components/templates/car-card.component.php';
        }
        ?>
    </div>
    <h2 class="featured-title">Featured Cars</h2>
</div>

<?php include 'components/footer.component.php'; ?>