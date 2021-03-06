<?php
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Book\Book;
use App\BITM\SEIP107348\Utility\Utility;

//Utility::dd($_GET);

$book = new Book();
$view = $book->view($_GET['id']);
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
                            <p class="header_text text-success">THE LSIT OF BOOKS</p>
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


        <!-- =============== table-section =============== -->
        <section class="table_section">
            <div class="container">
                <div class="row col-md-10 col-md-offset-1  custyle">
                    <div class="table_nav">
                        <nav class="navbar navbar-default" role="navigation">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="../../../index.php">HOME</a></li>
                                    <li><a href="index.php">VIEW</a></li>
                                    <li><a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Book/create.php">ADD BOOK</a></li>
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
                    <!-- ----------------- table ------------------ -->
                    <div class="table_part">
                        <table class="table table-bordered custab">

                            <thead>
                                <!-- <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a> -->
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tr>
                                <td><?php echo $view['id']; ?></td>
                                <td><?php echo $view['title']; ?></td>
                                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                </td>
                            </tr>



                        </table>

                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
