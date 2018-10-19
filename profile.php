<?php 

  include 'connection.php';
//  include 'Vars.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Bamba Kirana Store - You want it ? We Got It . </title>                  

    <!-- Meta -->
    <meta charset="utf-8" />
    
    
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />

        <link rel="stylesheet" type="text/css" href="Style/profile.css" media="all" />

        <script src="Javascript/profile.js"></script>

        <script src="javascript/checkout.js"></script>    

</head>
    <body >
        <section id="main">
				<div class="page-header flush">
                    <div class="art solo-art profile-art">
                        <img src= <?php echo $_SESSION["gamer"]["pic_loc"]; ?>  >
                    </div>   
                    <div class="meta-info user-details">
                        <h1 class="page-title"> <?php echo $_SESSION["gamer"]["name"]; ?> </h1>
                    </div>
                    <div class="header-fill">
                        <img style=" background-size: 150% , 150% ;" src=<?php echo $_SESSION["gamer"]["pic_loc"]; ?>  width="150%" height="150%" alt="" >
                    </div>
                </div>

                <div class="page-group quick-tab">
		                <ul class="btn-tabs big center sub-tabs" id="">
	                    <li data-tab="sub-tab-user-details" class="active"><a class="btn x-small light">User Details</a></li>
	                    <!--		Can Add more like this
	              	      <li data-tab="sub-tab-notif-settings" class=""><a class="btn x-small light"></a>Items Purchased</li>
	                	-->
	                	</ul>
				</div>

	            <div class="page-group quick-tab sub-tab-user-details">
     			    <ul class="grid-form">
	    			    <!--    facebook 
                        <li>
		    			    <label class="main">Facebook</label>
    					        <div class="grp toggle-field">
					    	    <a class="btn fb" onclick="Util.logAndGoToUrl('site:account_settings:find_friends:click', '/friends.php');">Find Friends</a>			
		    			    </div>
			    	    </li>
                        -->
                        <li>
                            <label class="main">Phone Number</label>
                            <!--        button to add phone number 
                            <span id="phone_profile"><a class="btn green " id ="edit_phone_number" onclick="Content.edit_phone_btn_onclick()">ADD MOBILE NUMBER</a></span>
                            -->
                            <input type="tel" id ="phone_number" value= <?php echo $_SESSION["gamer"]["phone_number"]; ?> >
                        </li>
			            <li>
				            <label class="main">Name</label>
			                <div class="grp">
		    		            <input id="firstname" id ="old_firstname" class="text short full" type="text" value= <?php echo $_SESSION["gamer"]["name"]; ?> />
                                <!--    <input type="hidden" id ="old_firstname" value="Sahaj">     -->
				            </div>
		                </li>
			            
                        <!--
                        <li>
                            <label class="main">Last Name</label>
                            <div class="grp">
                                <input id="lastname" class="text short full" type="text" value="Bamba" />
                            </div>
                        </li>
                        

                        <li>
                            <label class="main">Profile</label>
                            <div class="grp with-prefix">
                                <a href="/u/32c884f1c5c4017fc07dd418a531d551">saavn.com/u/32c884f1c5c4017fc07dd418a531d551</a>
                            </div>
                        </li>

                        -->

                        <li>
                            <label class="main">Email</label>
                            <div class="grp">
                                <input id="new_email" class="text short full" type="email" value= <?php echo $_SESSION["gamer"]["name"]; ?> />
                                <!--
                                <input type="hidden" id ="old_email" value="sahajbamba1999@gmail.com">
                                <input type="hidden" id ="merge" value="0">
                                <input type="hidden" id ="username_accnt" value="1982688228696863">
                                <input type="hidden" id ="non_email" value="true">
                                <input type="hidden" id ="email_login" value="false">
                                <input type="hidden" id ="network" value="fb">
                                <input type="hidden" id ="phonefbid" value="">
                                <input type="hidden" id ="phonefbtoken" value="">
                                -->
                            </div>
                        </li>

                        <li>
                            <label class="main">Address</label>
                            <div class="grp">
                                <input id="lastname" class="text short full" type="text" value= <?php echo $_SESSION["gamer"]["name"]; ?> />
                            </div>
                        </li>
                        
                        <!--
                        <li>
                            <label class="main">Birthday</label>
                            <input id="datepicker" class="dob-dropdown" value = "dd/mm/yyyy" readonly onclick="Content.datepick(this)"/> </li>
                        -->
                         <li>
                            <label class="main">Gender</label>
                            
                            <select id="gender_u" class="gender-dropdown">
                                <option value="m"selected>Male</option>
                                <option value="f" >Female</option>
                                <option value="u" >Other</option>
                            </select>
                        </li>

                        <li id="edit_password_link" class="hideoption">

                            <label class="main">Password</label>
                            <div class="grp">
                                <a class="change-password" href="javascript:void(0)">Edit Password</a>
                            </div>
                        </li>
                        
                        <li>
                            <label class="main"></label>
                             <div class="grp">
                                <a class="btn green" href="javascript:void(0)" onclick="Content.checkIsMerge()">Save Changes</a>
                            </div>
                        </li>
                    </ul>
                </div>

        </section>
    </body>
</html>