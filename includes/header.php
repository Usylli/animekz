    <?php 
    $db = mysqli_connect('localhost', 'root', '','animekz');
    $result = mysqli_query($db, "SELECT * FROM anime");
    $num_rows = mysqli_num_rows($result);
    ?>
    <!--  Link bootstrap  -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--  Bootstrap's icons  -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/icons-1.4.1/font/bootstrap-icons.css">
    <!--  Font Awesome icons  -->
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <!--  Google fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,100&display=swap" rel="stylesheet">
    <!--  Own carousel  -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <!--  Main styles  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body class="row">
<!--  Owl carousel  -->
<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>

    <!--  Main block  -->
    <div class="main_block col-12 col-lg-10 mt-lg-5 mx-auto row">
        <div class="inner_main_block container-fluid row p-5">
            <!--  Header  -->
            <div class="header container-fluid container-lg">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">AnimeXkz</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse row justify-content-between" id="navbarSupportedContent">
                            <div class="col-lg-6 d-lg-flex text-center justify-content-center">
                                <a href="index.php" class="menu_btn">Home<hr></a>
                                <a href="https://www.animenewsnetwork.com/news/" class="menu_btn">Anime News<hr></a>
                                <a href="anime.php?inc=<?php echo rand(1, $num_rows);?>" class="menu_btn">Random<hr></a>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle p-0" style="color:gray;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Categories
                                    </button>
                                    <ul class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuButton1">
                                        <?php   
                                            $db = mysqli_connect('localhost', 'root', '', 'animekz');
                                            $get_a_cats = "select * from categories ORDER BY category_name";
                                            $run_a_cats = mysqli_query($db, $get_a_cats);
                                            
                                            while ($row_a_cats=mysqli_fetch_array($run_a_cats)){
                                                
                                                $a_cat_id = $row_a_cats['category_id'];
                                                $a_cat_title = $row_a_cats['category_name'];
                                                
                                                echo "
                                                
                                                <li><a class='dropdown-item' href='category.php?cat=$a_cat_title'>$a_cat_title</a></li>
                                                
                                                ";
                                                
                                            }
                                            
                                        ?>
                                    </ul>
                                </div>
                                <a href="about.php" class="menu_btn">About Us<hr></a>
                            </div>
                            <div class="d-flex col-lg-6 justify-content-end">
                                <form class="row row-cols-lg-auto g-3 align-items-center" action="search.php" method="GET">
                                <div class="col-12">
                                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                                    <div class="input-group">
                                    <button name="title" value="" id="search" class="btn btn-outline-primary my-2 my-sm-0" type="submit" onclick="document.getElementById('search').value = document.getElementById('searchInp').value;"><i class="fas fa-search"></i></a></button>
                                    <input class="form-control mr-sm-2" type="search" id="searchInp" placeholder="Search" aria-label="Search">
                                    </div>
                                </div>
                                </form>
                                <?php 
                                if (empty($_SESSION['user_name'])) {    
                                    echo '<button class="btn btn-outline-primary my-2 mx-2 my-sm-0" style="height: 10%" type="submit" onclick="location.href=\'login.php\';"><i class="fas fa-sign-in-alt"></i> Sign In</button>';
                                } else{
                                    echo "
                                    <div class='dropdown'>
                                        <button class='btn btn-outline-primary dropdown-toggle mx-2' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                                            <i class='fas fa-user'></i> ".$_SESSION['user_name']."
                                        </button>
                                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                                            <li><a class='dropdown-item' href='account.php'>Account</a></li>
                                            <li><a class='dropdown-item' href='logout.php'>Log Out</a></li>
                                        </ul>
                                    </div>
                                    " ; 
                                }
                                ?>    
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            