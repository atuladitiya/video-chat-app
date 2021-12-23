<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Video Calling Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
    <div class="container my-3">
    <div class="alert alert-success alert-dismissible fade show center-block" role="alert"> 
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
    <h2 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h2>          
            <span aria-hidden="true"> &times; </span>      
      </button>
    </div>
  </div>
        <nav class="nav fixed">
            <div class="pic">
                <img src="e-commerce.jpg" width="150px">
                </div>
                <div class="top_section">
                    <a href="about.php"> About Us</a>
                    <a href="#footer-section">Miscellaneous</a>
                    <a href="/phpinternship/video.php"> Video Calling</a>                    
                    <a href="#scroll"> Feedback Section</a>
                    <a href="/phpinternship/logout.php"> Logout</a>
                </div>
            
        </nav>
        <div class="section">
            <div class="section_counter">
                <h2> This is a Video Calling Website !!!</h2><br> 
                <span> Chat with your friends with just one tap from our website. We provide a very safe,secure and stable environment with enhanced       picture quality and stable connection. Designed with modern  coding skills like Javascript,CSS,HTML,and many other, we provide you one of the best technology of the generation. </span>
                <div class="click">
                    
                </div>
            </div>
        </div>
        <div class="shop"> 
            <h2> Call Now!!! !!!</h2>
            <div class="shop_entity">
                <div class="item">
                    <div class="item_image">
                        <img src="new.jpg"> 
                    </div>
                    <div class="item_description">
                        <h3> Real Time Chatting</h3><br>
                        <p> It is now possible to chat with your friends in real time without any lag . With excellent layout and brilliant skeleton structure of our site, it makes a matter of great fascination for our users to connect and do chatting.   </p>
                        

                    </div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="insert.jpg"> 
                    </div>
                    <div class="item_description">
                        <h3> Simple  to Handle </h3><br>
                        <p> One of the key features which has been taken into consideration while designing our site is that we have tried from our side to keep things as simple as possible which makes it possible for every user to communicate from end to end.  </p>
                       
            </div>
        </div>
        <div class="item">
            <div class="item_image">
                <img src="ready.webp"> 
            </div>
            <div class="item_description">
                <h3> Fast Connection </h3><br>
                <p> Designed with agora.io technology, it is now possible to connect within few seconds of creating room or username. You just need to send some credentials to your dear ones and they will be in front of you within a very short period of time erasing all the boundaries and distances. </p>
                
        </div>
        </div>
        </div>
        <div class="additional">
           
        </div>
        </div>
        <div class="highlights">
            <h2> Our Features...</h2>
        
        
        <div class="highlight_box">
            <div class="highlight_content">
                <li> Eye- capturing layout </li>
                <li> Designed with some extra-ordinary technical tools</li>
                <li> Chat as long as you can</li>
                <li> Safe & Secure</li>
                <li> Muting & Unmuting facility available</li>
                <li> Feedback facility available </li>
            </div>
            <div class="highlight_image">
                <img src="last.jpg">
            </div>
        </div>
        

        </div>
        
<div class="testimonials">
    <h2> Our motivations</h2>
    <div class="testimonials_container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          
            
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                  <div class="item_imaging">
                    <img src="zoom.jpg" alt="...">  
                  </div>
                <div class="item_main">
                    <h3> Zoom</h3>
                    <p> We got the idea of creating this platform just because of zoom app . We saw some extra ordinary features of this website and it served as a motivation for us.</p>
                </div>
                
              </div>
              <div class="item">
                <div class="item_imaging">
                    <img src="meeting.jpg" alt="...">  
                  </div>
                <div class="item_main">
                    <h3>  Google Meet</h3>
                    <p> Since the pandemic started, google meet was receiving lots of attention. Whether that attention was for attending online classes, or for conducting conferences of business firms and companies.</p>
                </div>
               
              </div>
              <div class="item">
                <div class="item_imaging">
                    <img src="team.jpg" alt="...">  
                  </div>
                <div class="item_main">
                    <h3> Microsoft Team</h3>
                    <p> With much more improved concepts and additional features, microsoft team became much more popular than rest of its competitors in the market.</p>
                </div>
              </div>
              
            </div>
          
            
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</div>

    <div class="form" id="scroll">
        <h2> Let us Grow Together...</h2>
        <div class="form_section">
            <form name="review_form" method="post">
                <input type="text" name="Name" placeholder="Enter Your Name"> <br>
                <input type="number" name="Number" placeholder="Enter your Phone Number"> <br>
                <input type="email" name="Email" placeholder="Enter your e-mail"> <br>
                <textarea name="Description" placeholder=" Enter your review"></textarea><br>
                <button type="submit"> Post Review</button>
            </form>
        </div>
    </div>

<footer id="footer-section">
    <div class="company_image">
        <img src="e-commerce.jpg" width="80px">
    </div>
    <div class="footer_content">
        <h3> Go to</h3>
        <a href="about.php"> About Us</a>                    
                    <a href="/phpinternship/video.php"> Video Calling</a>|
                    <a href="/phpinternship/logout.php"> Logout</a>|
                    <a href="feedback.html"> Feedback Page</a>
    </div>
    <div class="footer_pages"> 
        <h3> Must Read</h3>
        <a href="terms.html" target="_blank"> Terms & Conditions</a>|
        <a href="history.html" target="_blank"> History</a>|
        <a href="#"></a>
    </div>
    <div class="footer_followers"> <h3> Our Accounts </h3>
   
    <a href="https://www.instagram.com" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> </a>
    <a href="https://www.twitter.com" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
</div>
<div class="footer_contact"> <h3> Contact Us...</h3>
    <a href="https://api.WhatsApp.com/send?phone=+917479634753" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> </a>
    
    <a href="tel:+919608820283" target="_blank"> <i class="fa fa-phone-square" aria-hidden="true"></i></a>
</div>
<hr>
<div class="last">
<p> @Copyright & copy; Joyous life. All rights reserved</p>
</div>
</footer>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script type="text/javascript">
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzhKBQbWFH2j1Hw_OFno2QsIi6FdRrEJZFVEnjsjdtrK1tm9rz6uau1ikrbDoJYLSTB6w/exec'
            const form = document.forms['review_form']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for your review!!!"))
                .catch(error => console.error('Error!', error.message))
            })
          
</script>
    </body>
