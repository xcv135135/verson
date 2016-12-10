
  <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    
        <div class="navbar-header">
          
          <a class="navbar-brand" href="./main.php">C++ course</a>
        </div>
        
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="./main.php">Home</a></li>
           <!--  <li ><a href="./Profile.php">Profile</a></li>
            <li><a href="#contact">Contact</a></li> -->
          </ul>

          {if !$is_login}
            
          {else}
             {$login_content}   

          {/if}
         
        </div><!-- /.nav-collapse -->
   
  </div><!-- /.navbar -->


