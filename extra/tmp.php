<section id="header fixed-top" style="position: fixed; width: 100%;">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <?php 
                if ( isset($_SESSION['shopName']) )  {
                    echo $_SESSION['shopName'];
                }else{
                    echo $_SESSION["SiteName"];
                }  
            ?>
        </a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <?php 
                if ( isset($_SESSION['shopName']) )  {
            ?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.php">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="offer.php">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php 
                    if ((isset($_SESSION["gamer"]))&&(strcmp($_SESSION["gamer"]["type"], "owner")==0)) {  
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Offers</a>
                    </li>
            
                <?php } ?>
            
            </ul>
            <?php>
                }  
            <?>
            <ul class="navbar-nav">
                <?php if (!(isset($_SESSION["gamer"]))) {  ?>
            
                    <li class="nav-item">
                        <a href="signup.php" class="nav-link"><span class="glyphicon glyphicon-user"></span> Register as Owner </a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                
                <?php 
                }
                else { 
                ?>

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $_SESSION["gamer"]["name"]; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="change_pic.php">Change Pic</a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        </ul>
                    </li>

                <?php  
                    }
                ?>
                    
            </ul>

        </div>
    </nav>
</section>   