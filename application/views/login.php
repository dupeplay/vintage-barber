
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper auth p-0 theme-two">
        <div class="row d-flex align-items-stretch">
          <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
            <div class="slide-content bg-1">
            </div>
          </div>
          <div class="col-12 col-md-8 h-100 bg-white">
            <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
              <div class="nav-get-started">
                <p>Don't have an account?</p>
                <a class="btn get-started-btn" href="<?php echo base_url();?>auth/register">GET STARTED</a>
              </div>
              <form action="<?php echo base_url();?>auth/login" method="POST">
                <h3 class="mr-auto">Welcome to Vintage Blades Barber !</h3>
                <p class="mb-5 mr-auto">Login to Access the CMS.Enter your details below.</p>
                
                <!--SESSION FLASH DATA-->
                <?php if(isset($_SESSION['success'])){?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success'];?>
                    </div><?php }?>
                
                <?php if(isset($_SESSION['error'])){?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error'];?>
                    </div><?php }?>
                
                <div class="form-group">
                   <?php //echo validation_errors("<div class='alert alert-danger'>","</div>");?>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="Username Required">
                  </div>
                    <p><?php echo form_error('username');?></p>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                    </div>
                      <input type="password" name="password" class="form-control" placeholder="Password" required="Password Required">
                  </div>
                    <p><?php echo form_error('password');?></p>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn" name="submit">SIGN IN</button>
                </div>
                <div class="wrapper mt-5 text-gray">
                  <p class="footer-text">Copyright © 2018 Akstech Pte Ltd. All rights reserved.</p>
                  <ul class="auth-footer text-gray">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>