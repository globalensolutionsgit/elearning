<?php require_once 'header_innerpage.php'; ?>

<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="form-box">
                    <form action="signin_check.php" method="post" role="form" id="sign_form">
                        <div class="message"><?php if (isset($_GET['error_id'])) {
            if ($_GET['error_id'] == '1' ) {
                echo 'Invalid user name and password';
            }
        } ?></div>
                        <div class="form-body">
                            <fieldset>
                                
                                <legend>Login Below:</legend>
                                <div>
                                <label>Name<sup style="color:#FF0000;"><i class="fa fa-asterisk text-danger" style="font-size: 7px;"></i></sup></label>
                                <input type="text" placeholder="Enter your Name" class="input-block-level" name="user_name" data-validation="required name"/>
                                </div>
                                <div>
                                <label>Password<sup style="color:#FF0000;"><i class="fa fa-asterisk text-danger" style="font-size: 7px;"></i></sup></label>
                                <input type="password" placeholder="Enter your Password" class="input-block-level" name="password" data-validation="required"/>                        
                                </div>
                                <button type="submit" class="btn-style">Submit</button>
                            </fieldset>
                        </div>
                        <div class="footer">
                            
                            <div class="span5">
                              <!--  <h2>Sign up Today for Free !</h2> -->
                       <!-- no need to register     <ul>
                                <li><a href="student-login.php">Student Register Here </a></li>
                                <li><a href="teacher-login.php">Teacher Register Here </a></li>

                            </ul> -->
                            </div>
                            <div class="span6">
                            <h2>Find More !</h2>
                            <ul>
                                <li><a href="forgot.php">Forgot My Password</a></li>
                                <li><a href="#">Terms of Use</a></li>

                            </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>                
        </div>
    </div>
    <!--FOLLOW US SECTION START-->
    <section class="follow-us">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                            <div class="text">
                                <h4>Follow us on Facebook</h4>
                                <p>Faucibus toroot menuts</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="span4">
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-google"></i>
                            <div class="text">
                                <h4>Follow us on Google Plus</h4>
                                <p>Faucibus toroot menuts</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="span4">
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                            <div class="text">
                                <h4>Follow us on Linkedin</h4>
                                <p>Faucibus toroot menuts</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FOLLOW US SECTION END-->
</div>

<?php
require_once 'footer.php';
