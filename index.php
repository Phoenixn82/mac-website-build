<?php
// Read JSON file
$jsonData = file_get_contents('data/mac.json');

// Decode JSON data
$macData = json_decode($jsonData, true);

// Check if JSON decoding was successful
if ($macData === null) {
    die('Error decoding JSON data.');
}
?>

<?php include("partials/header.php"); ?>
<?php include("partials/footer.php"); ?>
<script src="js/draggable.js"></script>