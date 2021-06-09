<?php session_start();

$conn = new mysqli('localhost', 'root', '', 'animekz');
$anime_id = $_GET['inc'];
    
?>
<head>
    <meta charset="UTF-8">
    <title>Anime X Kz</title>
<?php 
    $db = mysqli_connect('localhost', 'root', '','animekz');
    include('includes/header.php'); 
    $anime_id = -1;
    function incrementViews($id) {
        $db = mysqli_connect('localhost', 'root', '','animekz');
        $result = mysqli_query($db,"UPDATE anime SET anime_views = anime_views + 1 WHERE anime_id = $id");
        global $anime_id;
        $anime_id = $id;
    }

    if (isset($_GET['inc'])) {
        incrementViews($id = $_GET['inc']);
    }
    if (isset($_GET['ep'])) {
        $id = $_GET['inc'];
        $episode = $_GET['ep'];
        $db = mysqli_connect('localhost', 'root', '', 'animekz');
        $get_ep = "select * from episodes WHERE episode_anime_id = $id AND episode_number = $episode";
        $run_ep = mysqli_query($db, $get_ep);
        $row_ep = mysqli_fetch_array($run_ep);
        $episode_link = $row_ep['episode_link'];
    }
    if(isset($_SESSION['user_name'])){
        $get_user = "select * from users where user_name='".$_SESSION['user_name']."'";
        $run_user = mysqli_query($db,$get_user);
        $row_user = mysqli_fetch_array($run_user);
        $user_bookmarks = $row_user['user_bookmarks'];

        $bookmarks = explode(" ", $user_bookmarks);

        if(in_array($id, $bookmarks )){
            $bookmarked = "<i class='fas fa-bookmark'></i>";
        } else{
            $bookmarked = "<i class='far fa-bookmark'></i>";
        }
    }
    
?>


        <!--  Anime page  -->
        <div class="container-lg mx-auto row block p-3">
            <?php 
                $get_anime = "select * from anime where anime_id = $id";
            
                $run_anime= mysqli_query($db, $get_anime);
                $counter = 1;
                $row_anime = mysqli_fetch_array($run_anime);

                $anime_id = $row_anime['anime_id'];
                $anime_title = $row_anime['anime_title'];
                $anime_description = $row_anime['anime_description'];
                $anime_categories = $row_anime['anime_categories'];
                $anime_images = $row_anime['anime_image'];
                $anime_views = $row_anime['anime_views'];
                $anime_episodes = $row_anime['anime_episodes'];
                $anime_rating = $row_anime['anime_rating'];

                if(isset($_SESSION['user_name'])){
                    echo"
                    <div class='col-12 col-xl-3 col-lg-4 col-md-5 anime_poster p-3'>
                    <img class='w-100' src='$anime_images' alt='anime_poster'>
                    <a href='book.php?inc=$id'><h2>$bookmarked</h2></a>
                    <span><i class='far fa-eye'></i> $anime_views</span>
                    </div>
                    <div class='col-12 col-xl-9 col-lg-8 col-md-7 anime_description p-3'>
                        <div class='main_info d-flex justify-content-between'>
                            <div class='name_title'>
                                <h3>$anime_title</h3>
                                <div class='genre d-flex'>";
                                $categories = explode(" ", $anime_categories);
                                foreach($categories as $category){
                                    echo "<a href='category.php?cat=$category' class='genre_item'>$category</a>";
                                }
                    echo"
                                </div>
                            </div>
                            <div class='rate d-flex'>
                                <i class='bi bi-star-fill align-middle m-0 pt-2'></i><span> </span><a href='https://myanimelist.net/'><h3 class='m-0 p-0 align-middle'>$anime_rating</h3></a>
                            </div>
                            
                        </div>
                        <div class='description p-3'>
                            <p>$anime_description
                            </p>
                        </div>
                    </div>
                    ";
                } else{
                    echo"
                    <div class='col-12 col-xl-3 col-lg-4 col-md-5 anime_poster p-3'>
                    <img class='w-100' src='$anime_images' alt='anime_poster'>
                    <span><i class='far fa-eye'></i> $anime_views</span>
                    </div>
                    <div class='col-12 col-xl-9 col-lg-8 col-md-7 anime_description p-3'>
                        <div class='main_info d-flex justify-content-between'>
                            <div class='name_title'>
                                <h3>$anime_title</h3>
                                <div class='genre d-flex'>";
                                $categories = explode(" ", $anime_categories);
                                foreach($categories as $category){
                                    echo "<a href='category.php?cat=$category' class='genre_item'>$category</a>";
                                }
                    echo"
                                </div>
                            </div>
                            <div class='rate d-flex'>
                                <i class='bi bi-star-fill align-middle m-0 pt-2'></i><span> </span><a href='https://myanimelist.net/'><h3 class='m-0 p-0 align-middle'>$anime_rating</h3></a>
                            </div>
                            
                        </div>
                        <div class='description p-3'>
                            <p>$anime_description
                            </p>
                        </div>
                    </div>
                    ";
                }
                
            
            ?>
        </div>

        <!--    Series    -->
        
        <div class="btn-toolbar" role="toolbar" aria-label="Episodes">
            <form action="anime.php?inc=<?php echo $id ?>" method="GET">
            <div class="btn-group me-2" role="group" aria-label="Second group">
                <?php 
                    for($i = 1; $i<=$anime_episodes; $i++){
                        if($i == 1){
                            echo "<a href='anime.php?inc=$id&ep=$i'><button type='button' class='btn btn-primary my-2 mx-1 p-2'>$i</button></a>";
                        } else{
                            echo "<a href='anime.php?inc=$id&ep=$i'><button type='button' class='btn btn-primary my-2 mx-1 p-2'>$i</button></a>";
                        }
                    }
                ?>
            </div>
            </form>
        </div>
            <?php 
            if(isset($_GET['ep'])){
                echo "
                <div id='content-1' class='tab-content' style='background: grey'>
                    <center>
                    <iframe width='960' height='600' src='$episode_link' frameborder='0' scrolling='no' allowfullscreen></iframe>
                    </center>
                </div>
                ";
            }
            
            ?>

            <div class="popular row container mx-auto pt-5">
            <h4>Similar by genre: <?php echo $categories[0].", ".$categories[1]; ?></h4>
            <div class="owl-carousel flex-row-reverse">
                <?php 
                $db = mysqli_connect('localhost', 'root', '', 'animekz');
                $get_animes = "select * from `anime` WHERE anime_categories LIKE '%".$categories[0]."%' AND anime_categories LIKE '%".$categories[1]."%' AND anime_id != $anime_id  ORDER BY anime_views DESC";
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


        <div id="disqus_thread"></div>
        <script>
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://animexkz.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        

       



    </div>
</div>

<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script id="dsq-count-scr" src="//animexkz.disqus.com/count.js" async></script>

<?php include('includes/footer.php'); ?>