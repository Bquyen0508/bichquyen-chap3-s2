<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $message = $_POST["message"];
        $password = $_POST["password"];
        $province = $_POST["province"];
        $gender = $_POST["gender"];
    }
    ?>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $password ?></td>
            <td><?php echo $number ?></td>
            <td><?php echo $message ?></td>
            <td>
                <?php echo $province ?>
            </td>
            <td>
                <?php
                    if (isset($_POST["skill"])) {
                        $selectedSkills = $_POST["skill"];
                        echo "You are a ";
                        echo implode(" | ", $selectedSkills);
                    } else {
                        echo "No skills selected";
                    }
                ?>
            </td>
            <td><?php echo $gender ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>