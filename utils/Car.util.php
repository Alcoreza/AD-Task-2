<?php

function renderInfoSection($title, $content)
{
    $class = empty($title) ? "info-section white" : "info-section";
    echo "<div class='{$class}'>";
    if (!empty($title)) {
        echo "<h2>{$title}</h2>";
    }
    echo "<p>{$content}</p>";
    echo "</div>";
}

function getCars()
{
    return [
        [
            'name' => 'Model X',
            'brand' => 'Tesla',
            'type' => 'Electric',
            'image' => 'car1.jpg',
        ],
        [
            'name' => 'Mustang GT',
            'brand' => 'Ford',
            'type' => 'Sports',
            'image' => 'car2.jpg'
        ],
        [
            'name' => 'Civic',
            'brand' => 'Honda',
            'type' => 'Sedan',
            'image' => 'car3.jpg'
        ],
        [
            'name' => 'Corolla',
            'brand' => 'Toyota',
            'type' => 'Sedan',
            'image' => 'car4.jpg'
        ],
        [
            'name' => 'Wrangler',
            'brand' => 'Jeep',
            'type' => 'SUV',
            'image' => 'car5.jpg'
        ],
        [
            'name' => 'i8',
            'brand' => 'BMW',
            'type' => 'Hybrid',
            'image' => 'car6.jpg'
        ],
        [
            'name' => 'A4',
            'brand' => 'Audi',
            'type' => 'Sedan',
            'image' => 'car7.jpg'
        ],
        [
            'name' => 'Cybertruck',
            'brand' => 'Tesla',
            'type' => 'Electric',
            'image' => 'car8.jpg'
        ],
        [
            'name' => 'F-150 Raptor',
            'brand' => 'Ford',
            'type' => 'Truck',
            'image' => 'car9.jpg'
        ],
        [
            'name' => 'Camaro',
            'brand' => 'Chevrolet',
            'type' => 'Sports',
            'image' => 'car10.jpg'
        ],
    ];
}
?>