  <!-- Site footer -->
  <footer class="site-footer mt-5">
      <div class="container">
        <div class="row justify-content-center">
          

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
                <?php   
                    $db = mysqli_connect('localhost', 'root', '', 'animekz');
                    $get_a_cats = "select * from categories ORDER BY category_name";
                    $run_a_cats = mysqli_query($db, $get_a_cats);
                    $count = 0;
                    while ($row_a_cats=mysqli_fetch_array($run_a_cats) and $count < 6){
                        
                        $a_cat_id = $row_a_cats['category_id'];
                        $a_cat_title = $row_a_cats['category_name'];
                        
                        echo "
                        
                        <li><a href='category.php?cat=$a_cat_title'>$a_cat_title</a></li>
                        
                        ";
                        $count++;
                    }
                    
                ?>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="about.php">About Us</a></li>
              <li><a href="index.php">Home</a></li>
              <li><a href="login.php">Log In</a></li>
              <li><a href="register.php">Register</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>We are in social media</h6>
            <ul class="footer-links">
              <li><a href="#">VK</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Youtube</a></li>
              <li><a href="#">Discrod</a></li>
              <li><a href="#">Twitter</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 justify-content-center">
            <center><p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">AnimeKz</a>.</center>
            </p>
          </div>
        </div>
      </div>
</footer>

<script>
                    $(document).ready(function() {
                        $('.owl-carousel').owlCarousel({
                            loop:true,
                            margin:10,
                            responsiveClass:true,
                            responsive:{
                                0:{
                                    items:1,
                                    nav:true
                                },
                                600:{
                                    items:3,
                                    nav:false
                                },
                                1000:{
                                    items:5,
                                    nav:true,
                                    loop:false
                                }
                            }
                        })
                    })
                </script>
        </div>
    </div>




<!--  Own carousel  -->
<script>
      function toggleForm(){
        section = document.querySelector('section');
        container = document.querySelector('.containerr');
        container.classList.toggle('active');
        section.classList.toggle('active');
      }
</script>
<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>
<!--  Boostrap JS  -->
<script src="bootstrap-5.0.0-beta3-dist/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>