<?php
include '../../components/header.component.php';
include '../../utils/car.utils.php';
$cars = getCars();

$types = [];
foreach ($cars as $car) {
    $types[$car['type']][] = $car;
}
?>

<link rel="stylesheet" href="../assets/css/types.css" />

<div class="banner">Welcome to Car Types</div>
<?php foreach ($types as $type => $typeCars): ?>
    <h2><?php echo $type; ?></h2>
    <div class="car-list">
        <?php foreach ($typeCars as $car)
            include '../../components/templates/car-card.component.php'; ?>
    </div>
<?php endforeach; ?>

<?php include '../../components/footer.component.php'; ?>