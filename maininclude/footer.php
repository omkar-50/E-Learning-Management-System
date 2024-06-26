<!-- start footer -->
<footer class="container-fluid bg-dark text-center p-2 d-print-none">
    <small class="text-white">Copyright &copy; 2024 || Designed By Learniverse || <a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a></small>
  </footer>
  <!-- end footer -->




  <!-- start student registration modal -->
 

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" onclick="clearStuRegFields()">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- start student signup form -->
        <?php include('studentRegistration.php'); ?>
        <!-- end student signup form -->
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearStuRegFields()">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- end student registration modal -->




  <!-- start student login modal -->
 

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" onclick="clearStuLogFields()">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- start student login form -->
        <form id="stuLoginForm">
          <div class="form-group">
          <img class="iconsizeregistration" src="icons/envelope.svg" alt=""><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Email" id="stuLogemail" name="stuLogemail">
          </div>
          <div class="form-group">
          <img class="iconsizeregistration" src="icons/key.svg" alt=""><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
          </div>
        </form>
        <!-- end student login form -->
      </div>
      <div class="modal-footer">
        <small id="ststusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStudentLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearStuLogFields()">Cancel</button>
      </div>
    </div>
  </div>
</div>
  <!-- end student login modal -->




  <!-- start Admin login modal -->
 

<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" onclick="clearAdminLogFields()">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- start Admin login form -->
        <form id="adminLoginForm">
          <div class="form-group">
          <img class="iconsizeregistration" src="icons/envelope.svg" alt=""><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Email" id="adminLogemail" name="adminLogemail">
          </div>
          <div class="form-group">
          <img class="iconsizeregistration" src="icons/key.svg" alt=""><label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
          </div>
        </form>
        <!-- end Admin login form -->
      </div>
      <div class="modal-footer">
      <small id="ststusAdminLogMsg"></small>
        <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearAdminLogFields()">Cancel</button>
      </div>
    </div>
  </div>
</div>
  <!-- end Admin login modal -->



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/studentAjaxRequest.js"></script>
  <script src="js/adminAjaxRequest.js"></script>
  <script>
    $(document).ready(function() {
      $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: true,
        transitionStyle: "backSlide",
        autoPlay: true
      });
    });
  </script>


</body>

</html>