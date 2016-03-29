<?php require_once 'header_innerpage.php'; ?>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="page-heading">
    	<div class="container">
            <h2>TUTORING ENQUIRIES</h2>
            <p>We will be happy to answer any questions you may have about your child or our tutoring services in Singapore.</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
    	<div class="container">
            <div class="contact-us">
            <!--EVENT START-->
            	<!--EVENT LOCATION MAP START-->
                <div class="event-location-map">
                	<div id="map-canvas">
                        <div id="map_area" style="height:100%;width:100%;"></div>
        </div>
                </div>
                <!--EVENT LOCATION MAP END-->                
                <div class="row">
                	<div class="span8">
                            <?php
                                if(isset($_POST['submit'])){
                                    $msg = "Name:".$_POST['name']."\n";
                                    $msg .= "Email".$_POST['email']."\n";
                                    $msg .= "Comments".$_POST['comments'];
                                    mail("sastha@globalensolutions.com","Contactus From",$msg);
                                    echo "Thanks for your valuable comments";
                                }
                                else{
                            ?>
                            <div class="leave-reply">
                        	<h2>Leave Us a Reply</h2>
                                <form method="post" action="" id="contact_form" role="form">
                                <div class="row-fluid">
                                    <div class="span6 required-symbol">
                                        <input type="text" placeholder="Name" class="input-block-level" name="name" data-validation="required">
                                    </div>
                                    <div class="span6 required-symbol">
                                        <input type="text" placeholder="E-mail" class="input-block-level" name="email" data-validation="email">
                                    </div>
                                    <div class="text-area">
                                        <textarea placeholder="Comments" class="input-block-level" name="comments" id="my-textarea"></textarea>
                                        <span id="max-length-element">500</span> chars left
                                        <button class="btn-style" type="submit" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php }  ?>                           
                    </div>                   
                </div>
            <!--EVENT END-->
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
   <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 13,
                scrollwheel: false,
                center: new google.maps.LatLng(11.954299,79.832727)
              };

              var map = new google.maps.Map(document.getElementById('map_area'),
                  mapOptions);
   var contentString = '<div id="content">'+
         '<div id="siteNotice">'+
        '</div>'+
        '<div id="bodyContent">'+
         '<p><b>e-Vinity</b></p>'+
         '<p>10, 2nd Floor, Maria Tower,Vellavari Street, Muthialpet,Puducherry - 605003.</p>'+
         '<p>info@evinity.com</p>'+
         '<p>+91 - 413 - 2235600</p>'+
         '</div>'+
         '</div>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map,
                title: 'e-Vinity'
              });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
            
        </script>
    <!--CONTANT END-->
    <?php require_once 'footer.php'; ?>