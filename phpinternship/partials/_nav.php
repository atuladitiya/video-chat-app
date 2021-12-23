<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/phpinternship">joyouslife</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">';

      if(!$loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/phpinternship/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/phpinternship/signup.php">Signup</a>
      </li>';
      }
    echo '</ul>
    
  </div>
</nav>';
?>