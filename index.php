<!-- start including header -->
<?php
include('./dbConnection.php');
include('./maininclude/header.php');
?>
<!-- end including header -->



<!-- start video bg -->
<div class="container-fluid remove-vid-margin">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source src="img_video/typing.mp4">
    </video>
    <div class="vid-overlay"></div>
  </div>
  <div class="vid-content">
    <h1 class="my-content">Welcome to Learniverse</h1>
    <small class="my-content">Learn , Grow , Succedd..!!</small><br><br>

    <?php
      if(!isset($_SESSION['is_login'])){
        echo'
        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>
        ';
      }
      else{
        echo'
        <a href="Student/studentProfile.php" class="btn btn-primary">My Profile</a>
        ';
        
      }
    ?>

  </div>
</div>
<!-- end video bg -->



<!-- start text banner -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm ">
      <h5><img class="iconsize mr-3" src="icons/book.svg" alt="">100+ Online Courses</h5>
    </div>
    <div class="col-sm ">
      <h5><img class="iconsize mr-3" src="icons/peoples.svg" alt="">Expert Instructors</h5>
    </div>
    <div class="col-sm ">
      <h5><img class="iconsize mr-3" src="icons/card.svg" alt="">Lifetime Access</h5>
    </div>
    <div class="col-sm ">
      <h5><img width="14px" class=" mr-3" src="icons/rupees.svg" alt="">Money back Guarantee</h5>
    </div>
  </div>
</div>
<!-- end text banner -->




<!-- start courses -->

<div class="container mt-5">
  <div>
    <h1 class="text-center">Popular Courses</h1>
  </div>


  <!-- start 1st card deck-->
 
  <div class="card-deck mt-4">
    
    <?php
      $sql = "SELECT * FROM course LIMIT 3";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $course_id = $row['course_id'];
          echo '
          <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card" style="border-radius:20px;">
              <img src="' . str_replace('..','.',$row['course_img']). '" class="card-img-top" >
              <div class="card-body">
                <h5 class="card-title">' .$row['course_name']. '</h5>
                <p class="card-text">' .$row['course_desc']. '</p>
              </div>
              <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&#8377 ' .$row['course_original_price']. '</del></small><span class="font-weight-bolder">&#8377 ' .$row['course_price']. '</span></p>
                <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
              </div>
            </div>
          </a>';
        }
      }
    ?> 
  </div>
  <!-- end 1st card deck-->

  <!-- start 2nd card deck-->
  <div class="card-deck mt-4">
    <?php
      $sql = "SELECT * FROM course LIMIT 3,3";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $course_id = $row['course_id'];
          echo '
          <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card" style="border-radius:20px;">
              <img src="' . str_replace('..','.',$row['course_img']). '" class="card-img-top ">
              <div class="card-body">
                <h5 class="card-title">' .$row['course_name']. '</h5>
                <p class="card-text">' .$row['course_desc']. '</p>
              </div>
              <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&#8377 ' .$row['course_original_price']. '</del></small><span class="font-weight-bolder">&#8377 ' .$row['course_price']. '</span></p>
                <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
              </div>
            </div>
          </a>';
        }
      }
    ?> 

  </div>
  <!-- end 2nd card deck-->

  <div class="text-center m-2">
    <a href="courses.php" class="btn btn-danger btn-sm mt-3">View All Courses</a>
  </div>
</div>
<!-- end courses -->


<div class="horizantalline"></div>


<!-- start contact us -->
<?php
include('./contact.php');
?>
<!-- end contact us -->





<!-- slider start -->
<section id="feedbackslid">
  <div class="demo">
    <div class="Feedback">
      Feedback
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div id="testimonial-slider" class="owl-carousel">
  
            <?php
  
              $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img,f.fb_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  $s_img = str_replace('..','.',$row['stu_img']);
            ?>
  
                  <div class="testimonial">
                    <div class="pic">
                      <img src="<?php echo $s_img ?>" alt="">
                    </div>
                    <h3 class="title"><?php echo $row['stu_name'] ?></h3>
                    <span class="post"><?php echo $row['stu_occ'] ?></span>
                    <p class="description">
                    <?php echo $row['fb_content'] ?>
                    </p>
                  </div>
                <?php }
              }?>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>
<!-- slider end -->




<!-- start social banner -->
<div class="container-fluid bg-danger">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><img class="iconsize mr-2" src="icons/instagram.svg" alt="">Instagram</a>
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><img class="iconsize mr-2" src="icons/facebook.svg" alt="">Facebook</a>
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><img class="iconsize mr-2" src="icons/twitter.svg" alt="">X (Twitter)</a>
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><img class="iconsize mr-2" src="icons/whatsapp.svg" alt="">WhatsApp</a>
    </div>
  </div>
</div>
<!-- end social banner -->




<!-- start about section -->
<div class="container-fluid p-4" style="background: linear-gradient(#ede5047c,#baba33a9,#168c24a9);">
  <div class="container" style="background: linear-gradient(#4377dd0d,#03b4140e);">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About Us</h5>
        <p>Learniverse provides universal access to the world's best education, partnering with top universities and organizations to offer courses online</p>
      </div>

      <div class="col-sm">
        <h5>Category</h5>
        <a href="#" class="text-dark">Web Development</a><br />
        <a href="#" class="text-dark">Web Designing</a><br />
        <a href="#" class="text-dark">Android App Development</a><br />
        <a href="#" class="text-dark">iOS Development</a><br />
        <a href="#" class="text-dark">Data Analysis</a><br />
      </div>

      <div class="col-sm">
        <h5>Contact Us</h5>
        <p>Learniverse Pvt Ltd <br> Near KIT IMER ,<br>Gokul-Shirgoan , Kolhapur<br>Ph. 7261937461</p>
      </div>
    </div>
  </div>
</div>
<!-- end about section -->


<!-- start including footer -->
<?php
include('./maininclude/footer.php');
?>
<!-- end including footer -->