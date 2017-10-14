<body class="login-container">

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <!-- Registration form -->

                    <?php if(isset($_SESSION['success'])){;?>
                        <div class="alert alert-success"> 
                            <?php echo $_SESSION['success'];?>
                        </div>

                    <?php } ?>
                    <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                        <form action="" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="panel registration-form">
                                    <div class="panel-body">
                                        <div class="text-center">
                                            <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                                            <h5 class="content-group-lg">Create account <small class="display-block">All fields are required</small></h5>
                                        </div>        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span>Username</span>
                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <span>Password</span>
                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" placeholder="Email" name="email" id="email">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span>Password</span>
                                                <div class="form-group has-feedback">
                                                    <input type="password" class="form-control" placeholder="Create password" id="password" name="password">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <span>Repeat Password</span>
                                                <div class="form-group has-feedback">
                                                    <input type="password" class="form-control" placeholder="Repeat password" id="password" name="password2">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <span>Gender</span>
                                                 <div class="form-group has-feedback">
                                                    <select class="form-control" id="gender" name="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <span>Phone Number</span>
                                                <div class="form-group has-feedback">
                                                    <input type="number" class="form-control" placeholder="Your Phone Number" name="phone">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="styled">
                                                    Accept <a href="#">terms of service</a>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" class="btn btn-link"><a href="<?php echo site_url();?>/auth/login"><i class="icon-arrow-left13 position-left"></i>SIGN IN</a></button>
                                            <button type="submit" class="btn bg-primary" name="register">Create account</button>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    
                    <!-- /registration form -->


                    <!-- Footer -->
                    
                    <div class="footer text-muted text-center">
                        &copy; 2017. <a href="<?php echo site_url();?>">Kuy Laundry</a> 
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->



</body>