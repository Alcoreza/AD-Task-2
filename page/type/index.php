<?php
include '../../components/header.component.php';
include '../../utils/car.utils.php';
$cars = getCars();

$types = [];
foreach ($cars as $car) {
    $types[$car['type']][] = $car;
}
?>

<link rel="stylesheet" href="../../assets/css/global.css" />
<link rel="stylesheet" href="assets/css/types.css" />

<div class="types-banner">
    <div class="overlay"></div>
    <div class="banner-text">
        <h1>Explore Car Types</h1>
        <p>Discover the diversity and characteristics of various car types</p>
    </div>
</div>

<div class="info-section white">
    Cars come in many types, from sleek sports cars to versatile SUVs. Understanding these types helps you choose the
    right vehicle to suit your lifestyle and needs.
</div>

<?php foreach ($types as $type => $typeCars): ?>
    <div class="type-block">
        <h2 class="type-title"><?php echo $type; ?></h2>
        <div class="type-car-grid">
            <?php foreach ($typeCars as $car)
                include '../../components/templates/car-card.component.php'; ?>
        </div>
    </div>
<?php endforeach; ?>

<?php include '../../components/footer.component.php'; ?>