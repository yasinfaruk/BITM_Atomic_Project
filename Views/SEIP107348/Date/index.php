
<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");

use App\BITM\SEIP107348\Date\Birthday;
use App\BITM\SEIP107348\Utility\Utility;

$view = new Birthday();
$views = $view->index();

//Utility::d($views);
?>


<!DOCTYPE>
<html>
    <head>
        <title>Book Store</title>
        <link href="../../../Asset/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../Asset/css/main.css" rel="stylesheet" type="text/css"/>        
        <script src="../../../Asset/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="../../../Asset/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <section class="header_part">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="col-md-6">
                            <p class="header_text text-success">THE LIST OF DATES</p>
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
                                    <li><a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Date/index.php">VIEW</a></li>
                                    <li><a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Date/create.php">ADD DATE</a></li>
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
                                    <th>ID</th>
                                    <th>Date</th>
                                    <!--<th>Created</th>-->
                                    <!--<th>Modified</th>-->
                                    <!--<th>Creatd By</th>-->
                                    <!--<th>Modified By</th>-->
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
<?php foreach ($views as $date) { ?>
                                <tr>
                                    <td><?php echo $date['id']; ?></td>
                                    <td><?php echo $date['birthday']; ?></td>

                                    <td class="text-center">
                                        <a class='btn btn-info btn-xs' href="view.php?id=<?php echo $date['id']; ?>"><span class="glyphicon glyphicon-edit"></span> View </a> 
                                        <a class='btn btn-success btn-xs' href="update.php?id=<?php echo $date['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> Edit</a> 
                                        <a href="delete.php?id=<?php echo $date['id']; ?>" name="delete" class="btn btn-danger btn-xs delete"><span class="glyphicon glyphicon-remove"></span> Delete</a>
                                        <a href="#" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-trash"></span> Recover</a>
                                        <a href="#" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-envelope"></span> Email</a>
                                    </td>
                                </tr>  
<?php } ?>
                        </table>

                    </div>
                    <!-- ---------- pagination ------------ -->
                    <div class="table_pagination">
                        <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <!------------------- jquery-part ------------------>

        <script>
            
            $(document).ready(function () {
                
                $(".alert-message").alert();
                window.setTimeout(function () {
                    $(".alert-message").alert('close');
                }, 5000);

                $('.delete').bind('click', function (e) {
                    var deleteItem = confirm('Do you want to delete ?');
                    if (!deleteItem) {
                        e.preventDefault();
                    }
                });
            });

        </script>
        
    </body>
</html>

