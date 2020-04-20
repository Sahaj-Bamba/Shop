<title>
    <?php 
        if ( isset($_SESSION['shopName']) )  {
            echo $_SESSION['shopName'];
        }else{
            echo $_SESSION["SiteName"];
        }  
    ?>
</title>    

<meta charset="UTF-8" />
<meta https-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
<meta name="description" content="Shop" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161923538-2"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-161923538-2');
</script>
<!-- ending google analytics-->


<!-- Latest compiled and minified CSS for boot strap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<link rel="icon" type="image/x-icon" href="Image/Site/icon.jpeg">

<!-- Java Script files -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
