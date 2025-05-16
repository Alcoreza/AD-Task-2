<?php
include '../../components/header.component.php';
include '../../utils/car.utils.php';
$cars = getCars();

$brands = [];
foreach ($cars as $car) {
    $brands[$car['brand']][] = $car;
}
?>

<link rel="stylesheet" href="./assets/css/brands.css"/>

<div class="banner">Welcome to Car Brands</div>
<?php foreach ($brands as $brand => $brandCars): ?>
    <h2><?php echo $brand; ?></h2>
    <div class="car-list">
        <?php foreach ($brandCars as $car) include '../../components/templates/car-card.component.php'; ?>
    </div>
<?php endforeach; ?>

<?php include '../../components/footer.component.php'; ?>