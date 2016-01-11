<!DOCTYPE>
<html>
    <head>
        <title>Checkbox - Hobby</title>
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
                            <p class="header_text color_orange">THE LSIT OF HOBBIES</p>
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
                                    <li><a href="http://localhost/BITM_Atomic_Project/index.php">HOME</a></li>
                                    <li><a href="http://localhost/BITM_Atomic_Project/Views/SEIP107348/Checkbox/index.php">VIEW</a></li>
                                    <li><a href="#">ADD HOBBIES</a></li>
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

                    <!--======================= add-hobby-form =====================-->
                    <?php // echo $_POST['hobby'];?>
                    <div class="add_book">
                        <div class="add_book_form">
                            <h4 class="color_orange">Add Your Hobby</h4>
                            <form class="form-horizontal" action="store.php" method="post">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="hobby[]" value="Coding"> Coding
                                    </label>
                                    <label>
                                        <input type="checkbox" name="hobby[]" value="Traveling"> Traveling
                                    </label>
                                    <label>
                                        <input type="checkbox" name="hobby[]" value="Cricket"> Cricket
                                    </label>
                                    <label>
                                        <input type="checkbox" name="hobby[]" value="Music"> Music
                                    </label>
                                    <label>
                                        <input type="checkbox" name="hobby[]" value="Reading"> Reading
                                    </label>
                                    <label>
                                        <input type="checkbox" name="hobby[]" value="Watching Movie"> Watching Movie
                                    </label>
                                </div><br>
                               
                                <button type="submit" class="btn btn-default" name="submit">Submit</button>
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
