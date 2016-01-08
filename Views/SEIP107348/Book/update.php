
<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Book\Book;
use App\BITM\SEIP107348\Utility\Utility;

$view = new Book();
$views = $view->update($_GET['id']);

$id = $views['id'];

if (isset($_POST['submit'])) {
    $title = $_POST['title'];

    $conn = mysql_connect("localhost", "root", "root") or die("not connected");
    $lnk = mysql_select_db("BITM") or die("cannot select db table");

    $query = "UPDATE `atomicProject` SET `title`='$title' WHERE  id='$id'";
    $result = mysql_query($query);
    
    if ($result) {
        Utility::message("Update is successful");
    } else {
        Utility::message("Update is failed.");
    }

    Utility::redirect('index.php');
}


//var_dump($views);
?>


<!DOCTYPE>
<html>
    <head>
        <title>Book Store</title>
        <link href="../../../Asset/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section class="header_part">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="col-md-6">
                            <p class="header_text color_orange">THE LSIT OF BOOKS</p>
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
                                    <li><a href="#">HOME</a></li>
                                    <li><a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Book/index.php">VIEW</a></li>
                                    <li><a href="#">ADD BOOK</a></li>
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
                        <form class="navbar-form navbar-left add_book_form" role="search" method="post" action="#">
                            <div class="form-group">
                                <h4 class="color_orange">Add Favorite Book</h4>
                                <input name="title" type="text" class="form-control" value="<?php echo $views['title']; ?>">

                                <button name="submit" type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </form>
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
