<?php require_once("templates/header.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $province = $_POST["name"];
}
?>
<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $province ?></h2>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        if ($gender == "Female") {
            echo '<img src="images/female.png" alt="Female" width="100px">';
        } else {
            echo '<img src="images/male.png" alt="Male" width="100px">';
        }
        ?>
    </div>
</div>
<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        if (isset($_POST["html"])) {
            echo '<button type="button" class="btn btn-primary"> ' .$_POST["html"] . '</button>' ." ";
        }
        if (isset($_POST["css"])) {
            echo '<button type="button" class="btn btn-primary"> ' . $_POST["css"] . '</button>' . " ";
        }
        if (isset($_POST["js"])) {
            echo '<button type="button" class="btn btn-primary"> ' . $_POST["js"] . '</button>' . " ";
        }
        if (isset($_POST["php"])) {
            echo '<button type="button" class="btn btn-primary"> ' . $_POST["php"] . '</button>';
        }
        ?>
    </div>
</div>

<?php require_once("templates/footer.php") ?>
