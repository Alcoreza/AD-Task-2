<?php
include './components/header.component.php';
include './utils/car.utils.php';
include './handlers/cars.handler.php';
?>

<div class="banner">Welcome to AD-CarSite - Explore Our Cars</div>
<div class="car-list">
    <?php
    foreach ($cars as $car) {
        include './components/templates/car-card.component.php';
    }
    ?>
</div>

<?php include './components/footer.component.php'; ?>