<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-commerce Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
 </head>
 <body>
    <nav class="nav fixed">
        <div class="pic">
            <img src="e-commerce.jpg" width="150px">
            </div>
            <div class="top_section">
                <a href="/phpinternship/webdev/index.php"> Home</a>
                <a href="/phpinternship/video.php"> Video Calling</a>                
                <a href="#scroll"> Feedback Section</a>
                <a href="/phpinternship/logout.php"> Logout</a>
            </div>
            </nav>
            <div class="about_section">
                <h2> About Us</h2><br>
                <div class="about_content">
                    <p> Well,we started developing this idea from the time when the pandemic started. When  the entire world was suffering from stress, nervousness, we came out of the idea for bringing happiness back  on the faces of people around the world. </p> <br>
                
                <h2> Our Main Branch</h2> <br>
                <p> Our Main Branch is in Ranchi, Jharkhand ,a place from where our journey started and hopefully will prosper from here on. While,we are still  working for the enchancement and updation of our technolgies, but we promise for the quality of our website that we are bringing for our users.</p><br>
<h2> Our Goals</h2>        
<br>
<p>  Our primary goal is to connect more and more people with us and expand our network. We are expecting few updates in our site by next year through which we would be able to give our services globally.   </p>
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

<footer>
   
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

 </body>