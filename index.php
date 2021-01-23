<?php
include("Php and Database Connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaygo Live Stream</title>

    <link href="Kaygo images\unnamed.png" rel="icon">

    <link href="bootstrap\css\WBootstrap.css" rel="Stylesheet">

    <script src="bootstrap\js\jquery.min.js"></script>

    <script src="bootstrap\js\bootstrap.min.js"></script>

    <style>
        td {border: 2px solid black; }
        tr:nth-child(odd) {background-color: gold;}
    </style>


</head>

<body>

         <!--Alert Box Opening-->
    <script>
        alert("By clicking on the OK, you assure that you are 18 or above 18, and agree to our Terms and Conditions.");
    </script>

        <!--Start Top Nav-->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container" style="background-color:gold;color:black;width:100%;height:30px;border-radius:8px;font-size:17px;border:1.5px solid black;">
            <!--Start sign In-->
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="" data-toggle="modal" data-target="#modal-id" style="font-size:17px;color:black;"> | Sign In |</a>
            </div>
            <!--End Sign In-->
            <!--Start Sign in modal-->
            <div class="modal" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">x</button>
                            <div style="font-size:21px;margin-left:6px;">Sign In</div>
                        </div>

                        <div class="modal-body">
                            <div style="font-size:16px;margin-left:22px;color:black;">Sign In with E-Mail</div>
                            <br>

                            <div>
                            <form action="" method="POST">
                                <input type="email" required="" style="width:80%;height:45px;margin-left:20px;" placeholder=" enter your email " name="1">
                                <br>
                                <br>
                            <input type="password" required="" style="width:80%;height:45px;margin-left:20px;" placeholder=" enter your password " name="2">
                                <br>
                                <br>
                                <center>
                                <button style="width:45%;height:45px;color:black;background-color:gold;border:1.47px solid black;font-size:19px;font-family:proxima_nova_ltlight;border-radius:9px;" name="3">
                                    Sign In </button></center>
                            </div>
                            <hr>
                            </form>
                            
                            <?php
                             if(isset($_POST['3']))
                            {
                            $email=$_POST['1'];
                            $password=$_POST['2'];
                            $sql="SELECT * FROM registration WHERE email='$email' AND password='$password'";
                            $result=$conn->query($sql);
                            if($result->num_rows>0)
                                {
                                    $_SESSION['email']=$email;
                                    
                                      echo
                                    "<script>   
                                    window.open('selection.php','_self');
                                    </script>";
                                }
                                    else
                                    {
                                        echo "Error";
                                    }
                                } 
                                
                           ?>

                            <div style="text-align:center;"> Or Use: </div>

                            <br>
                            <center><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                
                                <button>
                                    <img src="Kaygo images\Modal pictures\google_PNG19644.png" style="width:80px ; height:35px ;"></img>
                                </button>
                                <button>
                                    <img src="Kaygo images\Modal pictures\download-facebook-logo-png-17.png" style="width:80px ; height:35px ;"></img>
                                </button>
                                <button>
                                    <img src="Kaygo images\Modal pictures\msn.png" style="width:80px ; height:35px;"></img>
                                </button>
                                <button>
                                    <img src="Kaygo images\Modal pictures\2000px-Bing_logo.svg.png" style="width:80px ; height:35px;"></img>
                                </button>
                            </div></center>

                        </div>
                        <br>
                        <div class="modal-footer">
                        </div>


                    </div>
                </div>
            </div>
            <!--End Sign in modal-->
            <!--Start Registration-->
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="" data-toggle="modal" data-target="#modal" style="color:black;font-size:17px;"> | Registration |</a>
            </div>
            <!--End Registration-->
            <!--Start Laguage Modal-->
            <div class="modal" id="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">x</button>
                            <div style="font-size:21px;margin-left:6px;">Registration</div>
                        </div>
                        <div class="modal-body">
                            <div style="font-size:16px;margin-left:22px;color:black;">Register with E-Mail</div>
                            <br>
                            <div>
                                <form method="POST">
                                <input type="email" required="" style="width:80%;height:45px;margin-left:20px;" placeholder=" enter your email " name="4">
                                <br>
                                <br>
                                <input type="password" required="" style="width:80%;height:45px;margin-left:20px;" placeholder=" create a password " name="5">
                                <br>
                                <br>
                                <center><button style="width:45%;height:45px;color:black;background-color:gold;border:1.47px solid black;font-size:19px;font-family:proxima_nova_ltlight;border-radius:9px;" name="6">
                                    Register </button></center></form>
                            </div>
                            
                            <?php
                            include("Php and Database Connection.php");
                            
                                if(isset($_POST['6']))
                                {
                                $email1=$_POST['4'];
                                $password1=$_POST['5'];
                                $sql2="INSERT INTO registration(email,password) VALUES('$email1','$password1')";
                                if($conn->query($sql2)===TRUE)
                                {
                                      echo
                                    "<script>   
                                    window.open('Registration successful.php','_self');
                                    </script>";
                                }
                                    else
                                    {
                                        echo "Error";
                                    }
                                } 
                            ?>
                            
                            
                            <hr>
                            <center><div> Or Use: </div></center>
                            <br>
                            <center><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <button>
                                    <img src="Kaygo images\Modal pictures\google_PNG19644.png" style="width:80px ; height:35px ;"></img>
                                </button>
                                <button>
                                    <img src="Kaygo images\Modal pictures\download-facebook-logo-png-17.png" style="width:80px ; height:35px;"></img>
                                </button>
                                <button>
                                    <img src="Kaygo images\Modal pictures\msn.png" style="width:80px ; height:35px;"></img>
                                </button>
                                <button>
                                    <img src="Kaygo images\Modal pictures\2000px-Bing_logo.svg.png" style="width:80px ; height:35px;"></img>
                                </button>
                            </div></center>

                        </div>
                        <br>
                        <div class="modal-footer">
                        </div>



                    </div>
                </div>
            </div>

            <!--End Laguage Modal-->
            <!--Start Language-->
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="dropdown">
                    <a href="" data-toggle="dropdown" style="text-decoration:none;color:black;"> | Languages |
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">

                        <div>
                            <img src="Kaygo images\Flags icon\USA_-512.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">English</a>
                        </div>
                    
                    <div>
                            <img src="Kaygo images\Flags icon\USA_-512.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Latin</a>
                        </div>

                        <div>
                            <img src="Kaygo images\Flags icon\China-512.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Chinese</a>
                        </div>

                        <div>
                            <img src="Kaygo images\Flags icon\Flag_of_The_United_Arab_Emirates_-_Circle-512.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Arabic</a>
                        </div>

                        <div>
                            <img src="Kaygo images\Flags icon\images.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Deutsch</a>
                        </div>

                        <div>
                            <img src="Kaygo images\Flags icon\Flag_of_Italy_-_Circle-512.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Italiano</a>
                        </div>

                        <div>
                            <img src="Kaygo images\Flags icon\france-512.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Français</a>
                        </div>

                        <div>
                            <img src="Kaygo images\Flags icon\Flag_of_Russia_-_Circle-512.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Pусский</a>
                        </div>

                        <div>
                            <img src="Kaygo images\Flags icon\images.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Español</a>
                        </div>

                        <div>
                            <img src="Kaygo images\Flags icon\flag-round-250.png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Türk</a>
                        </div>


                        <div>
                            <img src="Kaygo images\Flags icon\flag-round-250 (1).png" style="height:20px;width:20px;"></img>
                            <a href="" style="color:black;">Ceština</a>
                        </div>

                        <div>
                            <img src="Kaygo images\Flags icon\India-512.png" style="height:21px;width:21px;"></img>
                            <a href="" style="color:black;">हिंदी</a>
                        </div>
                    </div>
                </div>

            </div>
            <!--End Language-->

        </div>
        <!--End Top Nav-->


        <!--Kaygo Logo Image-->

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" style="justify-content:center;display:flex;">



                <div class="hidden-sm hidden-md hidden-lg">
                    <a href="index.php"><img src="Kaygo images\KAYGO LIVE STREAM (2).png" class="img-responsive"></img></a>

                </div>
                <div class=" hidden-md hidden-sm hidden-xs">
                <a href="index.php"><img src="Kaygo images\KAYGO LIVE STREAM (2).png" class="img-responsive" style="height:170px;"></img></a>

                </div>
                <div class="hidden-lg hidden-sm hidden-xs">
                <a href="index.php"><img src="Kaygo images\KAYGO LIVE STREAM (2).png" class="img-responsive"></img></a>

                </div>
                <div class="hidden-lg hidden-md hidden-xs">
                <a href="index.php"><img src="Kaygo images\KAYGO LIVE STREAM (2).png" class="img-responsive"></img></a>

                </div>
            </div>



            <!--Start Text Kaygo Live Stream-->
            <div class="hidden-xs col-sm-12 col-md-12 col-lg-8">
                <br>


                <center style="line-height:24px;">
                    <!--Text Kaygo Live Stream-->
                    <h2 style="color:darkslategray;font-family:proxima_nova_ltlight;">
                        Kaygo Live Stream - the best video chat with girls online
                    </h2>
                    <!--Text Kaygo Live Stream-->

                    <p style="font-size:17px;color:darkslategray;font-family:proxima_nova_ltlight;">
                        Thousands of beautiful strangers are online and waiting for you!
                    </p>
                    <p style="font-size:17px;color:darkslategray;font-family:proxima_nova_ltlight;">
                        Start a unique video chat with girls right now!
                    </p>
                    <p>
                        <button style="font-size:21px;font-family:proxima_nova_ltlight;background-color:gold;color:black;border:1.51px solid 
                    black;"> GET FREE TRIAL NOW </button>
                    </p>
                    <p style="font-size:16px;text-align:center;">NO SIGN UP NEEDED</p>

                </center>

            </div>


            <!--Blank Space md-->
            <div class="hidden-xs">
                <br>
            </div>
        </div>
        </div>


        <!--Kaygo Advertisment and Slider-->

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <!--Blank Space(xs)-->                
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                        <br>
                </div>
                
                <!--Kaygo Advertisment(xs)-->
                <img src="Kaygo images\Kaygo.png" style="width:450px;" class="col-xs-10 hidden-sm hidden-md hidden-lg"></img>

                <!--Kaygo Advertisment(lg)-->
                <img src="Kaygo images\Kaygo.png" class="hidden-xs hidden-md hidden-sm img-responsive"></img>

                <!--Kaygo Advertisment(md)-->
                <img src="Kaygo images\Kaygo.png" class="hidden-xs hidden-sm hidden-lg img-responsive"></img>

                <!--Kaygo Advertisment(sm)-->
                <img src="Kaygo images\Kaygo.png" class="hidden-xs hidden-md hidden-lg img-responsive">
            </div>


            <!--Slider-->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">


                <table style="border:2px solid black;height:100%;width:100%;float:right;margin-right:12px;margin-top:17px;" class="hidden-xs">

                    <tr>
                        <td>
                            <a href="" style="color:black;">
                                <center>Video Chat</center>
                            </a>
                        </td>
                        <td>
                            <a href="" style="color:black;">
                                <center>Messages
                                    <center>
                            </a>
                        </td>
                        <td>
                            <a href="" style="color:black;">
                                <center>Notifications
                                    <center>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" rowspan="3">
                            <center>
                                <div id="carousel" class="carousel slide" data-ride="carousel">

                                    <ol class="carousel-indicators">
                                        <li data-slide-to="0" data-target="#carousel"></li>
                                        <li data-slide-to="1" data-target="#carousel"></li>
                                        <li data-slide-to="2" class="active" data-target="#carousel"></li>
                                    </ol>

                                    <div class="carousel-inner">
                                        <div class="item">
                                            <img src="Kaygo images\girl3-blur.png" style="height:113%;width:52%;"></img>
                                        </div>
                                        <div class="item">
                                            <img src="Kaygo images\girl2-blur.png" style="height:113.3%;width:52%;"></img>
                                        </div>
                                        <div class="item active">
                                            <img src="Kaygo images\girl1-blur.png" style="height:113%;width:52%;"></img>
                                        </div>
                                    </div>


                                </div>
                            </center>
                        </td>
                    </tr>


                    <tr>
                    </tr>


                    <tr>
                    </tr>

                    <tr>
                        <td colspan="3" rowspan="2">

                            <center style="line-height:33px">
                                <p style="color:black;font-size:19px;">Private chat with girls</p>
                                <p>
                                    <button style="Color:black;font-size:19px;width:37%;height:35px;background-color:white;border:1.8px solid black;font-family:proxima_nova_ltlight;border-radius:8px;">Try for Free</button>
                                </p>
                            </center>

                        </td>
                    </tr>

                    <tr>
                    </tr>



                </table>
            </div>
        </div>
        </div>


        <!--Blank Space-->
        <div class="hidden-xs col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
            <br><br>
        </div>


       <!-- Kaygo chatting Image-->
       <div class="hidden-xs col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
            
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="justify-content:center;display:flex;">
            <img src="Kaygo images\gettyimages-1043828886-170667a.jpg" class="img-responsive" style="height:440px;">
        
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <h2 style="color:darkslategray;"> Cam-to-Cam</h2>
        

        <p style="text-align:justify;font-size:18px;font-family:proxima_nova_ltlight;color:darkslategray;word-spacing:1.4px;"> 
            <big>Welcome to Kaygo Live Stream - the next generation of video dating, for the user who wants to talk online to people they’ve never met, at the push of a button. Innovative video chat rooms let you connect in an instant with girls in their thousands. Make use of free video chat over your webcam, sign-up not required, to chat, flirt and have fun, without any commitments at all. Press the button and enjoy random video chat online with total new people straight away, with great features, plus instant connections with no waiting around. Feel free and secure to find your chat partner and express your feelings. All of this is possible now for absolutely free only on Kaygo Live Stream, established 2018. No Sign up or Registration needed fully operational and secured.</big>
        </p>
        
    </div>
        
       </div>



    <!--Blank Space-->
    <div class="hidden-xs col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
            <br>
        </div>
        
        
         <!-- Kaygo Verified Image-->
         <div class="hidden-xs col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
             
             <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                 <h2 style="color:darkslategray;"> Verified Girls </h2>
             
             
             <p style="text-align:justify;font-size:19px;font-family:proxima_nova_ltlight;color:darkslategray;word-spacing:-1.4px;"> 
                 <big>Do you want to chat to girls online, but keep finding sites that have mostly men on them? Kaygo is a revolution in video dating that lets you enjoy anonymous video chat with strangers. Connect with only girls who want to 
                        chat and have fun, in our private chat rooms that offer a wide range of great chat features. You could get over 60 matches in an hour when you join Kaygo,all with verified female users. Try it out for free right now, and enjoy videochat with girls that other sites just can’t provide. We ensure you quality not quantity, so what are you waiting for hit that trial button Now!</big>
             </p>
             
             </div>
        
             <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="justify-content:center;display:flex;">
            <img src="Kaygo images\Verified.jpg" class="img-responsive" style="height:400px;">
        
        </div>
        
        
        </div>

        <!--Blank Space-->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
                <br><br>
            </div>


<!--Kaygo World Start-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
        
    
    <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center;font-family:proxima_nova_ltlight;color:darkslategray;">
        <big>How does it work?</big>
    </h2>
    
    <!--Blank Space-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
        <br>
    </div>
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center;font-size:20px;font-family:proxima_nova_ltlight;color:darkslategray;">
        Kaygo is easy to use, just turn on your camera and a random girl will appear right away. If you don't like your match, just press ‘Next’.
    </div>
    
    <!--Blank Space-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
            <br>    
        </div>
    
    
    <!-- Kaygo World Image-->
    <div style="background-color:aliceblue;">
        
        <center>  
            <img src="Kaygo images\edited.jpg" class="img-responsive" style="height:450px;width:1320px;">
            
            <!--Blank Space-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <br>    
                </div>
    
            <!--Kaygo Free Trial Button-->
            <button style="font-size:21px;font-family:proxima_nova_ltlight;background-color:deepskyblue;color:white;border:1.51px solid 
            deepskyblue;width:300px;height:60px;"> GET FREE TRIAL NOW </button>
    
    
            <!--Blank Space-->        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <br>    
                </div>
    
            <!--Kaygo No sign up needed-->
            <p style="font-size:16px;text-align:center;">NO SIGN UP NEEDED</p>
        
        </center>
                </div>
    
      </div>
    
    <!--Kaygo World End-->

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
        <br><br><br>
    </div>
    
    
    <!--Kaygo Whats Special-->
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
        
    
        <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center;font-family:proxima_nova_ltlight;color:darkslategray;">
            <big>What's Special?</big>
        </h2>
        
    
    <!--Blank Space-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <br>
    </div>
    
    <!--Kaygo Special Text-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center;font-size:19px;font-family:proxima_nova_ltlight;color:darkslategray;">
            Forget everything you think you know about online dating. Kaygo has created an innovative video dating network that offers lightning fast connections and allows best video chat without creating an account. Talk with girls at the push of a button and enjoy great new features that will make your experience even better.
            
    </div>
    
    
    <!--Blank Space-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <br><br><br>
        </div>
    
    
    <!--Kaygo Special 3 Images div-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
    
    <!--Kaygo Special Boy Image-->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        
        <center>
        <img src="Kaygo images\Arab-Character_small_preview.png" class="img-responsive"></img>              
            </center>
       
            <h3 style="text-align:center;" class="col-xs-12 col-sm-12">Super Fast</h3>
    
        <p style="text-align:center;" class="col-xs-12">We don’t make you wait, our webcams load instantly. Everything ready to go on your click.</p>
      
    
    </div>
    
    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
        <br>
    </div>
    

    <!--Kaygo Special Lock Image-->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            
        <center>
        <img src="Kaygo images\963-512.png" class="img-responsive"></img>
        </center>                
    
            <h3 style="text-align:center;" class="col-xs-12 col-sm-12">ANONYMOUS AND SECURE</h3>
            
                <p style="text-align:center;" class="col-xs-12 col-sm-12">You’re not required to provide any personal information. Your privacy our privacy.</p>
              
        </div>
        
        
        <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
            <br>
        </div>
        

        <!--Kaygo Special Girl Image-->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    
            <center>
            <img src="Kaygo images\Cute_Arabian_Vector_Girl_small_preview.jpg" class="img-responsive"></img>
            </center>

        <h3 style="text-align:center;" class="col-xs-12 col-sm-12">HIGH QUALITY</h3>
    
        <p style="text-align:center;" class="col-xs-12 col-sm-12">We use the latest live video streaming technology. Just a click away from you.</p>
      
    
    </div>
            
    </div>
    
    </div>




<!--Blank Space-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br><br><br>
</div>





<!--Kaygo Get Started Now!-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
    

    <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center;font-family:proxima_nova_ltlight;color:darkslategray;">
        <big>Get Started Now!</big>
    </h2>
    

<!--Blank Space-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br>
</div>

<!--Kaygo Get Started Now! Text-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center;font-size:19px;font-family:proxima_nova_ltlight;color:darkslategray;">
    Once you start using Kaygo, you’ll be hooked instantly, because it gives you hours of non-stop real time video chat! Start your free trial and start meeting girls now! Kaygo Live Stream makes your life easier and simpler!
</div>

<!--Blank Space-->        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br><br>    
</div>


<!--Kaygo Free Trial Button-->
<center>
<button style="font-size:21px;font-family:proxima_nova_ltlight;background-color:deepskyblue;color:white;border:1.51px solid 
deepskyblue;width:300px;height:60px;"> GET FREE TRIAL NOW </button>
</center>

<!--Blank Space-->        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <br>    
    </div>

<!--Kaygo No sign up needed-->
<p style="font-size:16px;text-align:center;">NO SIGN UP</p>



<!--Blank Space-->        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br><br><br>    
</div>

</div>


<!--Blank Space-->        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br>
</div>


<!--User Agreement, Privacy Policy, English-->        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:aliceblue;">
                                
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">     
<a href="" style="color:darkslategray;font-size:18px;font-family:proxima_nova_ltlight;">User Agreement</a> 
</div>

<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">     
<a href="" style="color:darkslategray;font-size:18px;font-family:proxima_nova_ltlight;">Privacy Policy</a> 
</div>

<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">     
<a href="" style="color:darkslategray;font-size:18px;font-family:proxima_nova_ltlight;">18 U.S.C. 2257 Record</a> 
</div>

<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">     
<a href="" style="color:darkslategray;font-size:18px;font-family:proxima_nova_ltlight;">Cookie Policy</a> 
</div>

<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">     
<a href="" style="color:darkslategray;font-size:18px;font-family:proxima_nova_ltlight;">Affiliate program</a> 
</div>

<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">     
<a href="" style="color:darkslategray;font-size:18px;font-family:proxima_nova_ltlight;"><img src="Kaygo images\Flags icon\USA_-512.png" style="height:18px;width:18px;"> English</a> 
</div>

<!--Blank Space-->        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br>
</div>

<!--Copyright Line-->        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">     
<p style="color:darkslategray;font-size:17px;font-family:proxima_nova_ltlight;text-align:center;">Copyright © 2011–2020 Kayo Live Stream™. All rights reserved. Email: <a href="" style="color:deepskyblue;font-size:17px;font-family:proxima_nova_ltlight;">support@kaygo.com</a></p>
</div>
    
</div>

</div>

<!--Blank Space-->        
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br>
</div>

<!--Payment Option-->        

        

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:dimgray;border:1px solid dimgray;">

<!--Blank Space-->
<br>


<center style="color:gold;font-size:17px;font-family:proxima_nova_ltlight;">We accept:

<img src="Kaygo images\Payment icons\westren1.png" alt="Westren Union" title="Westren Union" style="height:40px;">

     
<img src="Kaygo images\Payment icons\mastercard.png" alt="Master Card" title="Master Card" style="height:44px;">

     
<img src="Kaygo images\Payment icons\paypal6.png" alt="Paypal" title="Paypal" style="height:37px;">

     
<img src="Kaygo images\Payment icons\visa6.png" alt="Visa" title="Visa" style="height:40px;">

     
<img src="Kaygo images\Payment icons\bitcoin.png" alt="Bit-coin" title="Bit-coin" style="height:40px;">

     
<img src="Kaygo images\Payment icons\webmoney.png" alt="Web-Money" title="Web-Money" style="height:40px;">
</center>

<!--Blank Space-->        
<br>

</div>


</body>

</html>
