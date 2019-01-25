


<?php
$connect = mysqli_connect("localhost", "root", "root", "wiktorlesiak");

$query = "SELECT * FROM devupdate ORDER BY id DESC ";
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
        ?>


    <!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once __DIR__ . '\_header.php' ?>
</head>

<body>
<!-- Header -->
<header id="home">
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('./img/background1.jpg');">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->




    <!-- Nav -->
    <?php require_once __DIR__ . '\_nav.php' ?>
    <!-- /Nav -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Grid -->
            <div class="w3-row w3-padding ">

                <!-- Blog entries -->
                <div class="w3-col 29 s12">

                    <!-- Blog entry -->
                    <div class="w3-container w3-border  w3-padding-large">
                        <div >

                            <h3 class="white-text"><?php echo $row["title"]; ?></h3>

                            <h5 style="color: lightgray"><?php echo $row["titledesc"]; ?> - <span style="color: slategray" class="w3-opacity white-text s" ><i><?php echo $row["timestamp"]; ?></i></span></h5>
                        </div>

                        <div class="w3-justify">
                            <p style="color: lightgray"><?php echo $row["description"]; ?></p>
                        </div>
                    </div>
                </div>
                <!-- END About/Intro Menu -->
            </div>
        <?php
    }
}
?>

<?php require_once __DIR__ . '/../templates/_footer.php'; ?>

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- /Back to top -->
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
