<?php
include 'components/header.component.php';
include 'utils/car.utils.php';
include 'handlers/car.handler.php';
?>

<div class="banner-image">
    <div class="overlay"></div>
    <div class="banner-text">
        <h1>Welcome to Car Hub</h1>
        <p>Explore the latest brands and car types tailored for you</p>
    </div>
</div>
<div class="car-list">
    <?php
    foreach ($cars as $car) {
        include 'components/templates/car-card.component.php';
    }
    ?>
</div>

<?php include 'components/footer.component.php'; ?>