<?php
  session_start();
?>  
  <!DOCTYPE html>
  <html>
    <head>
        <title>Event Management System</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <script type="text/javascript" src="component/js/jquery/jquery-2.1.4.min.js"></script> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="component/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

      </head>

    <body>
      <div class="navbtn">
      <div onclick="$.scrollify.next();">
        <img src="component/images/downArrow.png">
      </div>
    </div>
    <div class="revnavbtn">
        <div onclick="$.scrollify.previous();">
          <img src="component/images/downArrow.png">
        </div>
      </div>
          <!--
          <ul class="pagination">
            <li><a class="active" href="#home">
                  <span>Home</span>
                  ::after  
                </a>
              </li>
            <li>
              <a class="" href="#aboutus">
                <span>About Us</span>
              </a>
            </li>
            <li><a class="" href="#theme">Theme</a></li>
            <li>
              <a class="" href="#statistics">Statistics</a></li>
            <li><a class="" href="#sitemap">Site Map</a></li>
          </ul>-->
          
          <div class="header-element">
              <!--<div class="transparent-element">
                <a>The Team</a>
              </div>-->
              <div class="transparent-element" onclick="openNav()">&#9776</div>
              <div id="mySidenav" class="sidenav">
                  <a class="closebtn" onclick="closeNav()" style="color:rgb(255,99,71)">&times;</a>
                  <a href="./profile.php">Profile</a>
                  <a href="./index.html">Home</a>
                  <a href="component/pages/exp.html">Experience</a>
                  <a href="./event.php">Event Categories</a>
                  <a href="component/pages/timeline/index2.html">Timeline</a>
                  <a href="component/pages/developer.html">Team</a>
                </div>
          </div>
          <section class="panel" data-section-name="home">
            
            <!--  <video
              src="component/images/HabbaHyperlapse.mp4"
              poster="component/images/simbaa.jpg"
              autoplay
            />
            
            <div id="particles-js">
                <canvas height="651" width="1366" style="width: 100%; height: 100%;"></canvas>
              </div>-->
          <div class="inner"> 
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1">
                
               </div>
               <div class="col-lg-8 col-md-10 col-sm-11">
                 <center>
                  <div id="mob">
                   <h1 class="ml4">
                      <span class="letters letters-1">Event</span>
                      <span class="letters letters-2">Management</span>
                      <span class="letters letters-3">System</span>
                    </h1>
                  </div>
                  </center>

               </div>
               <div class="col-lg-2 col-md-1 col-sm-1">
                
               </div>
             </div>
           </div>
           </div>
           <div id="particles-js"></div>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
           <script type="text/javascript" src="component/js/particles.js"></script>
           <!--<script type="text/javascript" src="component/js/app.js"></script>-->
           <script type="text/javascript">
           var partJson = {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "window",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
           };
           var jsonUri = "data:text/plain;base64,"+window.btoa(JSON.stringify(partJson));
           particlesJS.load('particles-js', jsonUri, function() {
             console.log('callback - particles.js config loaded');});
           </script>
          </section>
          <section class="panel1" data-section-name="aboutus">
            <div class = "innerabout">
           <!-- <div class="fullscreen-video-wrap">  
              <video src="component/images/HabbaHyperlapse.mp4" autoplay="true" loop="true" muted="true">
              </video>
            </div>-->
            <div class="header-overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-1">

                    </div>
                    <div class="col-lg-8">
                      <div class="jumbotron">
                        <h1>Synopsis</h1>
                        <p>Event management system is used to manage all the activity related to event. The main purpose of event management system is to provide a platform for the users to view the information about the events that took place in the past and the ones which are about to take place in the near future. The users can be faulty, students and administrator. They can first login into the website and see through the information such as details about the events like the venue, theme of the event , participants, chief guests ,etc. t allows the user to select from a list of event and get the detail of all the event and register for the events.The administrator can login and update the information ,delete any unwanted data ,arrange the information accordingly so that the user can go through an user friendly and know all the whereabouts of their college.
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-2"> 
                    </div>
                  </div>
                </div>
              </div>
          </section>
          <section class="panel2" data-section-name="satistics">            
            <section id="contact" class="section green">
              <div class="container">
                <h4>Get in Touch</h4>
                <p>
               We would love to hear from you!!
                </p>
                <div class="blankdivider30">
                </div>
                <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="cform" id="contact-form">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <form action="send.php" method="POST" role="form" class="contactForm">
                        <div class="row">  
                        <div class="col-lg-6 ">
                            <div class="field your-name form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validation"></div>
                            </div>
                            <div class="field your-email form-group">
                              <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                            </div>
                            <div class="field subject form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="field message form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validation"></div>
                            </div>
                            <input type="submit" value="Send message" class="btn btn-theme pull-left">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </section>
            
            
            
            
            
            
            
            
            
            
            <!--<div class="container-fluid">
             <div class="row">
               <div class="col-lg-1">
              
                </div>
              <div class="col-lg-6">
                  <center class="like"><h6 style="margin:0;padding:0;"><i class="fas fa-search-location"></i>&nbsp&nbspFind Us</h6>
                    <hr style="width: 8%;border: solid 1px;border-color: #0c59d8;padding: 0;"> </center>
                    
                  <div style="margin-top:1%;-webkit-filter: grayscale(100%);
                      filter: grayscale(100%);"><iframe width="100%" height="500px" frameborder="1" style="border:1" src="https://www.google.com/maps/embed/v1/place?q=acharya%20habba&key=AIzaSyAqZfw03d2lmk-2ZuDN9pGuhbA6lITWwCY&zoom=18" allowfullscreen></iframe></div>
             </div>
             <div class="col-lg-5">
               <center class="like"><h6 style="margin:0;padding:0;"><i class="far fa-thumbs-up"></i>&nbsp&nbsplike Us</h6>
                <hr style="width: 8%;border: solid 1px;border-color: #0c59d8;padding: 0;"> </center>
                
              <div id="facebookd">
     <iframe class="col-xs-12" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Facharya.ac.in%2F&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
             </div>
           </div>
         </div>-->
            <!--
            <div class="innerstatistics">
              <div class="container-fluid">
                  <div class="row">
                  <div class="col-lg-1">
      
                  </div>
          <div class="col-lg-11">
            <div class="container">
              <div class="main-timeline">
                <div class="timeline text" >
                    <a href="#" class="timeline-content animated">
                        <span class="year">2018</span>
                        <h3 class="title">Web Designer</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                        </p>
                    </a>
                </div>
                <div class="timeline text">
                    <a href="#" class="timeline-content animated">
                        <span class="year">2017</span>
                        <h3 class="title">Web Developer</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                        </p>
                    </a>
                </div>
                <div class="timeline text">
                    <a href="#" class="timeline-content animated">
                        <span class="year">2017</span>
                        <h3 class="title">Web Developer</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                        </p>
                    </a>
                </div>
                <div class="timeline text">
                    <a href="#" class="timeline-content animated">
                        <span class="year">2017</span>
                        <h3 class="title">Web Developer</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                        </p>
                    </a>
                </div>
            </div>
            </div>
            </div> 
          </div>
          </div>-->



        </div>
        </section>  



        <section class="panel3 " data-section-name="sitemap" >
            <footer id="footer">
                <div class="footer-top">
                  <div class="container">
                    <div class="row">
            
                      <div class="col-lg-3 col-md-6 footer-info">
                      </div>
            
                      <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                          <div onclick="$.scrollify.move('#home');">
                              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                          </div>
                          <div onclick="$.scrollify.move('#aboutus');">
                              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                          </div>
                          <div onclick="$.scrollify.move('#satistics');"> 
                              <li><i class="fa fa-angle-right"></i> <a href="#">Get In Touch</a></li>
                          </div>
                        </ul>
                      </div>
                      <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                          <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                          <li><i class="fa fa-angle-right"></i> <a href="#">Experience</a></li>
                          <li><i class="fa fa-angle-right"></i> <a href="#">Event Categories</a></li>
                          <li><i class="fa fa-angle-right"></i> <a href="#">Team</a></li>
                        </ul>
                      </div>
            
                      <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                          Soldevenahalli,Hesarghatta Road,<br>
                          Bangalore -560107,Karnataka<br>
                          India <br>
                          <strong>Phone:</strong>0000 0000<br>
                          <strong>Email:</strong> team@xyz.com<br>
                        </p>
            
                        <div class="social-links">
                          <a href="https://www.twitter.com" class="twitter"><i class="fab fa-twitter"></i></a>
                          <a href="https://www.facebook.com" class="facebook"><i class="fab fa-facebook"></i></a>
                          <a href="https://www.instagram.com" class="instagram"><i class="fab fa-instagram"></i></a>
                          <a href="https://www.youtube.com" class="google-plus"><i class="fab fa-google-plus"></i></a>
                          <a href="https://www.linkedin.com" class="linkedin"><i class="fab fa-snapchat"></i></a>
                        </div>
            
                      </div>
            
                    </div>
                  </div>
                </div>
            </footer>
          </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>          
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.js"></script>
    <script type="text/javascript" src="component/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>          
    <script>
        $(function() {
            $.scrollify({
              section : ".panel",
              interstitialSection:".panel, .panel1 , .panel2 , .panel3",
              before: function(section){
                if(section!=0){
                  $('.navbtn').addClass('trans');
                  $('.navbtn').css("visibility", "visible");
                    $('.revnavbtn').css("visibility", "visible");
                }
                if(section===2){
                  $(".timeline-content").addClass("rotateIn");
                }
                if(section===3){
                  $(".small-title").addClass("bounce");
                  $(".foll").addClass("bounce");
                  $("#logo img").addClass("logo-animation");
                }
              },
              after:function(section){
                if(section===0){
                  $('.navbtn').removeClass('trans');
                    $('.revnavbtn').css("visibility", "hidden");
                }
                if(section===2){
                  $(".timeline-content").removeClass("rotateIn");
                }
                if(section===3){
                  $('.navbtn').css("visibility", "hidden");
                  $(".small-title").removeClass("bounce");
                  $(".foll").removeClass("bounce");
                  $("#logo img").removeClass("logo-animation");
                  
                }

            } 
            });
          });
        </script>
        
        <script type="text/javascript">
          var ml4 = {};
            ml4.opacityIn = [0,1];
            ml4.scaleIn = [0.2, 1];
            ml4.scaleOut = 3;
            ml4.durationIn = 800;
            ml4.durationOut = 600;
            ml4.delay = 500;

            anime.timeline({loop: true})
              .add({
                  targets: '.ml4 .letters-1',
                  opacity: ml4.opacityIn,
                  scale: ml4.scaleIn,
                duration: ml4.durationIn
              })
              .add({
                targets: '.ml4 .letters-1',
                opacity: 0,
                scale: ml4.scaleOut,
                duration: ml4.durationOut,
                easing: "easeInExpo",
                delay: ml4.delay
              })
              .add({
                targets: '.ml4 .letters-2',
                opacity: ml4.opacityIn,
                scale: ml4.scaleIn,
                duration: ml4.durationIn
              })
            .add({
              targets: '.ml4 .letters-2',
              opacity: 0,
              scale: ml4.scaleOut,
              duration: ml4.durationOut,
              easing: "easeInExpo",
              delay: ml4.delay
              })
            .add({
                targets: '.ml4 .letters-3',
                opacity: ml4.opacityIn,
                scale: ml4.scaleIn,
                duration: ml4.durationIn
              })
            .add({
                targets: '.ml4 .letters-3',
              opacity: 0,
              scale: ml4.scaleOut,
                duration: ml4.durationOut,
                easing: "easeInExpo",
              delay: ml4.delay
            })
            .add({
                targets: '.ml4',
                opacity: 0,
                duration: 500,
                delay: 500
            });
        </script>
        <script>
          var wid= window.innerWidth;
          console.log(wid);
          if(wid<1000){
 
            var iam=document.getElementById('particles-js');
            iam.style.visibility="hidden"; 
            $("#download").css("display","block");
            $("#download a").addClass("small");

          }

          $(document).ready(function() {
            $("#popUp_bg").delay(1000).fadeIn(500);
          });


          function close_btnfun(){  
          $("#popUp_bg").fadeOut("slow",function()
          {$(this).css("display","none");});
        }

        $("#popUp_body").hover(function(){
          $("#download").css("display","block");
        },function(){
          $("#download").css("display","none");
        });
        </script>

       <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </body>
  </html>