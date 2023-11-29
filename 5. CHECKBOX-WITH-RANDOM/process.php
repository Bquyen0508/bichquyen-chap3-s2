<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
$course = isset($_GET["skill"]) ? $_GET["skill"] : "";
foreach ($course as $skill) {
    $skillColor[$skill] = $colors[array_rand($colors)];
}
?>
<div class="card">
    <div class="card-body">
        <?php foreach ($course as $skill) : ?>
            <button class="btn btn-<?php echo $skillColor[$skill]; ?>"><?php echo $skill; ?></button>
        <?php endforeach; ?>
    </div>
</div>


<?php require_once 'templates/footer.php' ?>