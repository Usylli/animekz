<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <title>Anime X Kz</title>
<?php include('includes/header.php'); ?>

            <!--  Popular  -->
            <div class="popular row container mx-auto">
                <h4>Popular</h4>
                <div class="owl-carousel flex-row-reverse">
                    <?php 
                    $db = mysqli_connect('localhost', 'root', '', 'animekz');
                    $get_animes = "select * from `anime` ORDER BY anime_views DESC";
                    $run_animes = mysqli_query($db, $get_animes);
                    while($row_anime=mysqli_fetch_array($run_animes)){
                        $anime_id = $row_anime['anime_id'];
                        $anime_image = $row_anime['anime_image'];
                        $anime_title = $row_anime['anime_title'];

                        echo "<div class='image-block'>
                            <a href='anime.php?inc=$anime_id#disqus_thread'>
                            <div class='image'>
                                <div class='image-shadow' style='background-image: url($anime_image);'></div>
                                <div class='image-img' style='background-image: url($anime_image);'></div>
                            </div>
                            </a>
                            <center><p class='pt-3 mb-0'><a href='anime.php?inc=$anime_id#disqus_thread'>$anime_title </a></p></center>
                        </div>";
                    }
                    ?>
                </div>
            </div>

            <!--  Ongoings  -->
            <div class="ongoing row container mx-auto pt-5">
                <h4>Ongoing</h4>
                <div class="owl-carousel flex-row-reverse">
                <?php 
                    $db = mysqli_connect('localhost', 'root', '', 'animekz');
                    $get_animes = "select * from `anime` WHERE ongoin = 1 ORDER BY anime_id DESC";
                    $run_animes = mysqli_query($db, $get_animes);
                    while($row_anime=mysqli_fetch_array($run_animes)){
                        $anime_id = $row_anime['anime_id'];
                        $anime_image = $row_anime['anime_image'];
                        $anime_title = $row_anime['anime_title'];

                        echo "<div class='image-block'>
                            <a href='anime.php?inc=$anime_id'>
                            <div class='image'>
                                <div class='image-shadow' style='background-image: url($anime_image);'></div>
                                <div class='image-img' style='background-image: url($anime_image);'></div>
                            </div>
                            </a>
                            <center><p class='pt-3 mb-0'><a href='anime.php?inc=$anime_id'>$anime_title </a></p></center>
                        </div>";
                    }
                    ?>
                </div>
            </div>
            </div>
            </div>

            <?php include('includes/footer.php') ?>
