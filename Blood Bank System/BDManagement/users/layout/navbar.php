 <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Blood Bank</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php
                        if (isset($setHomeActive)) {
                            echo $setHomeActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="index.php">Home</a></li>
                        <li class="<?php
                        if (isset($setAboutActive)) {
                            echo $setAboutActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="about.php">About Us</a></li>
                        <li class="<?php if(isset($setContactActive)){ echo $setContactActive;} else{echo '';} ?>">
                         <a href="contact.php">Contact</a>
                        </li>
                        <li class="<?php if(isset($setMemberActive)){ echo $setMemberActive; } else { echo ''; } ?>">
                            <a href="member.php">Our Members</a>
                        </li>
                        
                        <li class="<?php if(isset($setAvailabilityActive)) {echo $setAvailabilityActive;} else {echo '';} ?>">
                            <a href="availability.php">Check Availability</a>
                        </li>

                        <li class="<?php if(isset($setJoinUsActive)){ echo $setJoinUsActive; } else { echo ''; } ?>">
                            <a href="register.php">Join Us</a>
                        </li>
                        
                        <!-- <div class="dropdown">
                        <li class="">
                        <li><a>Login</a></li>
                        
                        
                    <div class="dropdown-content">
                        <a href="../index.php">User Login</a>
                        <a href="../admin/index.php">Admin Login</a>
                    </div>
                    </li>
                    </div> -->
                            <!-- <a href="../admin/index.php">Employee Login</a> -->
                        <li class="">
                            <a href="../index.php">Donor Login</a>
                        </li>

                        <li class="">
                            <a href="../admin/index.php">Admin Login</a>
                        </li>

                        
                        
                        
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	</br></br>
<style>
 /*  .dropdown {
        position: relative;
        display: inline-block;
        text-align: left;
    }

    .dropdown-content {
        display: none;
        top: 15px;
        position: absolute;
        background-color: #f1f1f1;
        border-radius: 10px;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 10px 10px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        border-radius: 10px;
        background-color: rgb(253, 0, 55);
        color: white;
    }

    .dropdown:hover .dropdown-content {
        display: inline;
    }

    .dropdown:hover .dropbtn {
        background-color: red;
    }
  
 */

</style>