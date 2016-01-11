
<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Radio\Gender;
use App\BITM\SEIP107348\Utility\Utility;

$view = new Gender();
$gender = $view->update($_GET['id']);

$id = $gender['id'];

if (isset($_POST['submit'])) {

    $gender = $_POST['radio'];

    $conn = mysql_connect("localhost", "root", "root") or die("not connected");
    $lnk = mysql_select_db("BITM") or die("cannot select db table");

    $query = "UPDATE `radio` SET `gender`='" . $gender . "' WHERE  id='$id'";
    $result = mysql_query($query);

    if ($result) {
        Utility::message("Update is successful");
    } else {
        Utility::message("Update is failed.");
    }

    Utility::redirect('index.php');
}

//Utility::d($views);
?>

<!DOCTYPE>
<html>
    <head>
        <title>Movie Store</title>
        <link href="../../../Asset/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/main.css" rel="stylesheet" type="text/css"/>
        <style>
            .add_book_form{
                padding: 15px 170px;
            }
        </style>
    </head>
    <body>
        <section class="header_part">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="col-md-6">
                            <p class="header_text color_orange">SELECT THE GENDER</p>
                        </div>
                        <div class="col-md-6">  					

                            <p class="navbar-text pull-right">
                                <a href="#"><span class="glyphicon glyphicon-envelope"></span> yasin.faruk8585@gmail.com</a>
                            </p>
                            <p class="navbar-text pull-right">
                                <a href="#"><span class="glyphicon glyphicon-hand-right"></span> SEIP-107348</a>
                            </p>
                            <p class="navbar-text pull-right">
                                <a href="#"><span class="glyphicon glyphicon-user"></span> Mohammad Faruk</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- =============== navbar-section =============== -->
        <section class="table_section">
            <div class="container">
                <div class="row col-md-10 col-md-offset-1  custyle">
                    <div class="table_nav">
                        <nav class="navbar navbar-default" role="navigation">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="../../../index.php">HOME</a></li>
                                    <li><a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Radio/index.php">VIEW</a></li>
                                    <li><a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Radio/create.php">ADD GENDER</a></li>
                                    <!--<li><a href="#">Link</a></li>-->
                                </ul>

                                <ul class="nav navbar-nav navbar-right"> 
                                    <form class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>

                                    <li><a href="#">Download PDF</a></li>

                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>

                    <!--======================= add-book-form =====================-->
                 
                    <div class="add_book">
                        <div class="add_book_form">
                            <h4 class="color_orange">Select The Gender</h4>
                            <form class="form-horizontal" method="post" action="#">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="radio" value="male"> Male
                                    </label>
                                    <label>
                                        <input type="radio" name="radio" value="female"> Female
                                    </label>
                                </div><br>
                               
                                <button name="submit" type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>

                        </div>
                    </div>
                    <div class="back_button">
                        <a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Book/index.php">
                            <button type="submit" class="btn btn-danger">&ll; Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

