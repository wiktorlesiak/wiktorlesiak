<?php

require_once __DIR__ . '/../_header.php';
?>

<?php
require_once __DIR__ . '/../_nav.php';

if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "Only For ADMINS!";
    header("location: index.php?action=error");
}else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $admin = $_SESSION['admin'];
}


if(!$admin ){
    $_SESSION['message'] = "You must have admin privileges to enter!";
    header("location: index.php?action=error");
}

require_once("db.php");
$sql = "SELECT * FROM products ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Wiktor Lesiak</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>





                <?php
    $sql = "SELECT * FROM devupdate ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);
    ?>

    <form name="frmUser" method="post" action="">
        <div id="about" class="section md-padding">

            <!-- Container -->
            <div class="container">

                <!-- Row -->
                <div class="row">

                    <!-- Section header -->
                    <div class="section-header text-center">
        <h1 class="title">DEV UPDATE EDIT</h1>
        <hr>
        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
        <div align="left" style="padding-bottom:5px;"><a href="index.php?action=add_update" class="link"> Add Update</a></div>
        <table border="0" cellpadding="10" cellspacing="1" class="tblListForm">
            <tr class="listheader">
                <td>ID</td>
                <td>Title</td>
                <td>Title Description</td>
                <td>Description</td>
                <td>TIMESTAMP</td>
                <td>CRUD Actions</td>
            </tr>
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
                if($i%2==0)
                    $classname="evenRow";
                else
                    $classname="oddRow";
                ?>
                <tr class="<?php if(isset($classname)) echo $classname;?>">
                    <td><?php echo $row["id"]; ?></td>
                    <td> <?php echo $row["title"]; ?></td>
                    <td><?php echo $row["titledesc"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                    <td><?php echo $row["timestamp"]; ?></td>
                    <td><a href="index.php?action=edit_update&id=<?php echo $row["id"]; ?>" class="link">Edit</a>  <a href="index.php?action=delete_update&id=<?php echo $row["id"]; ?>" class="link">Delete</td>
                </tr>
                <?php
                $i++;
            }
            ?>
                    </div>

                    </div>
                </div>
            </div>
        </table>
    </form>
<!--END UPDATE CURD-->



</form>
</div>
</body>
</html>
