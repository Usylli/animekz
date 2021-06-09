<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '','animekz');
$get_user = "select * from users where user_name='".$_SESSION['user_name']."'";
$run_user = mysqli_query($db,$get_user);
$row_user = mysqli_fetch_array($run_user);
$user_bookmarks = $row_user['user_bookmarks'];
$user_id = $row_user['user_id'];

$bookmarks = explode(" ", $user_bookmarks);

if(isset($_GET['inc'])){
    $id = $_GET['inc'];
    if(in_array($id, $bookmarks)){
        $key = array_search($id, $bookmarks);
        unset($bookmarks[$key]);
        if(empty($user_bookmarks)){
            $bookmarks_final = "";
        }else{
            $bookmarks_final = implode(" ", $bookmarks);
        }
    } else{
        if(empty($user_bookmarks)){
            $bookmarks_final = $id;
        }else{
            array_push($bookmarks, $id);
            $bookmarks_final = implode(" ", $bookmarks);
        }
        
    }
    $update_bookmarks = "UPDATE `users` SET user_bookmarks='$bookmarks_final' WHERE `user_id` = $user_id";
    $run_user = mysqli_query($db,$update_bookmarks);
}
echo $bookmarks_final;
header("Location: anime.php?inc=$id");
?>