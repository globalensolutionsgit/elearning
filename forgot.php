<?php require_once 'header_innerpage.php'; ?>

<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <div class="buttons"></div>
        <div class="row">
            <div class="span12">
                <div class="form-box">
                    <div class="message"><?php
                                    include('dbcon.php');
                                    if(isset($_POST['submit'])){
                                        $email = $_POST['email'];
                          
                                        $sql = mysql_query("select * from users where email = '$email'")or die(mysql_error());
                                        $count = mysql_num_rows($sql);
                                        if($count!=0){
                                            $row = mysql_fetch_array($sql);
                                            $msg = "Hi ".$row['firstname']."\n";
                                            $msg .= "Your password is ".$row['password'].".";
                                            mail($email,"Forgot password",$msg);
                                            echo "Password sent to your registered mail id";
                                        }
                                        else{
                                            echo "Invalid mail id";
                                        }
                                    }
                               
                            ?></div>
                    <form action="" method="post">
                        <div class="form-body">
                            <fieldset>
                                
                                <legend>Reset your password:</legend>
                                <label>Email Address<sup style="color:#FF0000;"><i class="fa fa-asterisk text-danger" style="font-size: 7px;"></i></sup></label>
                                <input type="text" placeholder="Enter your E-mail ID" class="input-block-level" name="email">
                                <button type="submit" class="btn-style" name="submit">Submit</button>
                            </fieldset>
                        </div>
                        <div class="footer">
                            <div class="span5">
                           <!--  <h2>Sign up Today for Free !</h2> -->
                       <!--     <ul>
                                <li><a href="student-login.php">Student Register Here </a></li>
                                <li><a href="teacher-login.php">Teacher Register Here </a></li>

                            </ul> -->
                            </div>
                            <div class="span6">
                            <h2>Find More !</h2>
                            <ul>
                                <li><a href="#">Forgot My Password</a></li>
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
