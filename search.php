<?php 
    session_start(); 
    if (isset($_GET['title'])) {
        $anime_title = $_GET['title'];
    }
?>
<head>
    <meta charset="UTF-8">
    <title>Anime X Kz</title>
    <link rel="stylesheet" href="css/main.css">
<?php include('includes/header.php'); ?>

            <!--  Popular  -->
            <div class="popular row container mx-auto">
                <h4>Search Result</h4>
                <?php             
                $db = mysqli_connect('localhost', 'root', '','animekz');
                $get_animes = "select * from `anime` WHERE anime_title LIKE '%$anime_title%'";
                $run_animes = mysqli_query($db, $get_animes);
                if($run_animes->num_rows == 0){
                    echo "
                    <div class='col-lg-12'>
                    <h5 style='height: 300px;'>nothing found</h5>
                    <div class='blog-grid'>
                    <div class='blog-img'>";
                } else{
                    while($row_anime = mysqli_fetch_array($run_animes)){
                        $anime_id = $row_anime['anime_id'];
                        $anime_image = $row_anime['anime_image'];
                        $anime_title = $row_anime['anime_title'];
                        
                        echo "
                        <div class='col-lg-3'>
                        <div class='blog-grid'>
                        <div class='blog-img'>
                            <a href='anime.php?inc=$anime_id'>
                                <img src='$anime_image' title=''alt=''>
                            </a>
                        </div>
                        <div>
                            <center><p><a href='anime.php?inc=$anime_id'>$anime_title</a></p></center>
                        </div>
                        </div>
                        </div>
                        "; 
                    }
                }
                ?>
            </div>
            </div>
            </div>
            <?php include('includes/footer.php') ?>
