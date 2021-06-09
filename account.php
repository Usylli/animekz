<?php  
session_start();
$db = mysqli_connect('localhost', 'root', '', 'animekz');

$get_user = "select * from users where user_name='".$_SESSION['user_name']."'";

$run_user = mysqli_query($db,$get_user);

$row_user = mysqli_fetch_array($run_user);

$user_id = $row_user['user_id'];
                            
$user_name = $row_user['user_name'];

$user_password = $row_user['user_password'];

$user_email = $row_user['user_email'];

$user_bookmarks = $row_user['user_bookmarks'];

if(isset($_GET['save'])){
    
  $user_name = $_GET['user_name'];
  $user_email = $_GET['user_email'];
  $user_password = $_GET['user_password'];
  
  $update_user = "update users set user_name='$user_name', user_email='$user_email', user_password='$user_password' where user_id='$user_id'";
  
  $run_user = mysqli_query($db,$update_user);
  
  if($run_user){
      
      echo "<script>alert('User has been updated sucessfully')</script>";
      echo "<script>window.open('account.php','_self')</script>";
      $_SESSION['user_name'] = $user_name;
      
  }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Personal account</title>
    <?php include('includes/header.php');?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container-fluid">
        <div class="row py-2">
            <div class="col-lg-2 col-md-2 col-sm-0"></div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                        <a class="list-group-item list-group-item-action" id="list-bookmarks-list" data-toggle="list" href="#list-bookmarks" role="tab" aria-controls="bookmarks">Bookmarks</a>
                        <a class="list-group-item list-group-item-action" id="list-exit-list" data-toggle="list" href="#list-exit" role="tab" aria-controls="exit">Exit</a>
                        </div>
                    </div>
                    <div class="col-8" >
                        <div class="tab-content" id="nav-tabContent" style="background: #ECF3FC">
                        <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="title py-2">Personal Information</div> 
                            <div class="setting">
                                <form action="account.php">
                                <div class="form-group">
                                    <label for="email-input" class="form-control-placeholder py-2">E-mail</label> 
                                    <input id="email-input" name="user_email" maxlength="64" type="email" class="form-control" placeholder="" value="<?php echo $user_email ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name-input" class="form-control-placeholder py-2">Username</label> 
                                    <input id="name-input" name="user_name" maxlength="32" type="text" class="form-control" value="<?php echo $user_name ?>">
                                </div> 
                                <div class="form-group ">
                                    <label for="resume-input" class="form-control-placeholder py-2">Password</label> 
                                    <input id="resume-input" name="user_password" maxlength="128" type="text" class=" form-control mb-4" value="<?php echo $user_password ?>">
                                </div>
                                <div class="right-button">
                                    <input type="submit" name="save" value="Save" class="form-control">
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-bookmarks" role="tabpanel" aria-labelledby="list-bookmarks-list">
                        <div class="container">
                            <div class="setting ">
                                <div class="container">
                                    <div class="row">
                                      <?php
                                        
                                        $bookmark = explode(" ", $user_bookmarks);
                                        if(empty($user_bookmarks)){
                                          echo "No bookmarks yet";
                                        }else{
                                          foreach($bookmark as $anime_id){
                                            $get_animes = "select * from `anime` WHERE anime_id = $anime_id";
                                            $run_animes = mysqli_query($db, $get_animes);
                                            $row_anime = mysqli_fetch_array($run_animes);
                                            $anime_image = $row_anime['anime_image'];
                                            $anime_title = $row_anime['anime_title'];
                                            
                                            echo "
                                            <div class='col-lg-4'>
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
                        </div>
                        </div>
                        <div class="tab-pane fade" id="list-exit" role="tabpanel" aria-labelledby="list-exit-list">
                            <form action="logout.php" method="POST">
                                <input type="submit" name="logout" value="logout" class="btn btn-danger">
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
