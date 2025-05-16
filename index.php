<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "components/header.component.php";
    ?>

    <div class="welcome-banner">
        <h1>Welcome to CarHub</h1>
        <p>Your Gateway to the world of automobile</p>
    </div>

    <div class="card">
        <h2>Featured Brands</h2>
        <div class="brand-list">
            <?php
            $brands = ['Audi', 'BMW', 'Toyota', 'Mercedes-Benz', ' Honda', 'Ford'];
            foreach ($brands as $brand) {
                echo "<div class='brand-item'>
                <img src='assets/img/" . strtolower(str_replace(' ', '', $brand)) . ".jpg' alt='$brand'/>
                <p>$brand</p>
                </div>";
            }
            ?>
        </div>
    </div>

    <?php
    include 'components/footer.component.php';
    ?>
</body>

</html>