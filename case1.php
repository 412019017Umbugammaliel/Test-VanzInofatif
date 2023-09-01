<?php
$fruits = [
    [
        "fruitId" => 1,
        "fruitName" => "Apel",
        "fruitType" => "IMPORT",
        "stock" => 10
    ],
    [
        "fruitId" => 2,
        "fruitName" => "Kurma",
        "fruitType" => "IMPORT",
        "stock" => 20
    ],
    [
        "fruitId" => 3,
        "fruitName" => "apel",
        "fruitType" => "IMPORT",
        "stock" => 50
    ],
    [
        "fruitId" => 4,
        "fruitName" => "Manggis",
        "fruitType" => "LOCAL",
        "stock" => 100
    ],
    [
        "fruitId" => 5,
        "fruitName" => "Jeruk Bali",
        "fruitType" => "LOCAL",
        "stock" => 10
    ],
    [
        "fruitId" => 6,
        "fruitName" => "KURMA",
        "fruitType" => "IMPORT",
        "stock" => 20
    ],
    [
        "fruitId" => 7,
        "fruitName" => "Salak",
        "fruitType" => "LOCAL",
        "stock" => 150
    ]
];

// Pertanyaan 1
function getFruitNames($fruits)
{
    $fruitNames = [];
    foreach ($fruits as $fruit) {
        $fruitNames[] = $fruit["fruitName"];
    }
    return array_unique($fruitNames);
}

// Pertanyaan 2
function getFruitTypesAndCounts($fruits)
{
    $fruitTypeCounts = [];
    foreach ($fruits as $fruit) {
        $fruitType = $fruit["fruitType"];
        if (!isset($fruitTypeCounts[$fruitType])) {
            $fruitTypeCounts[$fruitType] = [];
        }
        $fruitTypeCounts[$fruitType][] = $fruit["fruitName"];
    }
    return $fruitTypeCounts;
}

// Pertanyaan 3
function getTotalStockByFruitType($fruits)
{
    $totalStockByType = [];
    foreach ($fruits as $fruit) {
        $fruitType = $fruit["fruitType"];
        if (!isset($totalStockByType[$fruitType])) {
            $totalStockByType[$fruitType] = 0;
        }
        $totalStockByType[$fruitType] += $fruit["stock"];
    }
    return $totalStockByType;
}

// Jawaban Pertanyaan 1
$fruitNames = getFruitNames($fruits);
echo "<p>Buah yang dimiliki Andi: " . implode(", ", $fruitNames) . "</p>";

// Jawaban Pertanyaan 2
$fruitTypesAndCounts = getFruitTypesAndCounts($fruits);
echo "<p>Jumlah wadah yang dibutuhkan: " . count($fruitTypesAndCounts) . "</p>";
echo "<ul>";
foreach ($fruitTypesAndCounts as $fruitType => $fruitsInType) {
    echo "<li>Jenis buah di wadah {$fruitType}: " . implode(", ", $fruitsInType) . "</li>";
}
echo "</ul>";

// Jawaban Pertanyaan 3
$totalStockByType = getTotalStockByFruitType($fruits);
echo "<p>Total stock buah di wadah:</p>";
echo "<table>";
echo "<tr><th>Jenis Buah</th><th>Total Stock</th></tr>";
foreach ($totalStockByType as $fruitType => $totalStock) {
    echo "<tr><td>{$fruitType}</td><td>{$totalStock}</td></tr>";
}
echo "</table>";
?>