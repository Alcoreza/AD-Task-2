<?php
include '../../components/header.component.php';
include '../../utils/car.utils.php';
$cars = getCars();

$brands = [];
foreach ($cars as $car) {
    $brands[$car['brand']][] = $car;
}
?>

<link rel="stylesheet" href="../../assets/css/global.css">
<link rel="stylesheet" href="../brands/assets/css/brands.css">

<div class="banner-image brands-banner">
    <div class="overlay"></div>
    <div class="banner-text">
        <h1>Explore Car Brands</h1>
        <p>Discover the heritage and design philosophy behind your favorite brands</p>
    </div>
</div>

<div class="info-brand white">
    <p>
        Car brands represent unique legacies, engineering mastery, and distinct design language.
        From the luxury of Mercedes-Benz to the performance of Ferrari, each brand brings something
        special to the road. Explore different manufacturers and find the one that fits your style
        and driving experience.
    </p>
</div>

<?php foreach ($brands as $brand => $brandCars): ?>
    <div class="brand-block">
        <h2 class="brand-title"><?php echo $brand; ?></h2>
        <div class="car-list">
            <?php foreach ($brandCars as $car)
                include '../../components/templates/car-card.component.php'; ?>
        </div>
    </div>
<?php endforeach; ?>


<?php include '../../components/footer.component.php'; ?>