<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-firestore.js"></script>
    <title>Blog Website</title>
</head>

<body style="background-color: lightgray;">


<?php

        include 'dbcon.php';

        $sql =  "INSERT INTO `signup`( `count`) VALUES (' ')";

        $query = mysqli_query($con,$sql);

        $sql = 'SELECT * FROM  `visitor`';

        $query = mysqli_query($con,$sql);

        $sql1 = 'SELECT * FROM  `signup`';

        $query1 = mysqli_query($con,$sql1);
?>


    <!-- header start -->
    <div class="container mt-3" style="display: flex;justify-content: space-between;">
        <div class="rightsideheader">
            <h1><b>Blogging</b></h1>
        </div>
        <div class="leftsideheader">
            <form class="form-inline my-2 my-lg-0">
               <a href="index.php"> <button type="button" class="btn btn-secondary mr-2 mb-1" data-toggle="modal"
                    data-target="#exampleModal">
                    Logout
                </button></a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <h5 class="modal-title " id="exampleModalLabel" style="margin: auto;">Join Blogging.</h5>
                            <p class="text-center">Create an account to personalize your
                                homepage, follow your favorite authors and
                                publications, applaud stories you love, and
                                more.</p>
                                                       
                            <p class="text-center">To make Blogging work, we log user data and share it with
                                service providers. Click “Sign up” above to accept Blogging’s
                                Terms of Service & Privacy Policy.</p>
                        </div>
                    </div>
                </div>
                <input class="form-control mr-sm-2" type="search" placeholder="Google Search"
                    style="border-radius: 7px;">
            </form><br>
            <button>Total View  = <?php echo  mysqli_num_rows($query);?></button>
            <button>Total User = <?php echo  mysqli_num_rows($query1);?></button>
        </div>
    </div>
    <!-- header End -->


    <!-- navigation start -->
    <nav class=" container navbar navbar-expand-lg navbar-light bg-dark mt-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-item nav-link text-white " href="#"><b>Home</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Nation</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Sports</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Politics</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Entertainment</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Search</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Contact Us</b></a>
            </div>
        </div>
    </nav>
    <!-- navigation End -->

    <!-- content Section start -->

    <div class="container">
        <div class="row">
            <div class="col-sm-4 mt-2">
                <img src="Images/twitter.jpg" style="width: 200px;">
                <div style="margin-top: 10px;">
                    <h4>Should Twitter Get Rid of Follower Counts?</h4>
                    <p>The possibility feels closer than ever</p>
                    <p>Cool Neha in All Things Creative</p>
                    <p><b>JAN 9. 5 min read</b></p>

                </div>

            </div>
            <div class="col-sm-4">
                <div class="row" style="display: flex; flex-direction: column;" style="height: 50px;">
                    <div style="display: flex; ">
                        <img src="Images/html.jpg"
                            style="width: 100px; height: 100px; border: 1px solid black; margin-right: 10px ;margin-top: 2px; margin-left: 10px;">
                        <p>Html, a standardized system for tagging text files to achieve font, colour, graphic, and
                            hyperlink effects on WWW pages.</p>
                    </div>
                    <div style="display: flex;">
                        <img src="Images/cs.png"
                            style="width: 100px; height: 100px; border: 1px solid black; margin-right: 10px; margin-top: 2px; margin-left: 10px;">
                        <p>Html, a standardized system for tagging text files to achieve font, colour, graphic, and
                            hyperlink effects on WWW pages.</p>
                    </div>
                    <div style="display: flex;">
                        <img src="Images/js.png"
                            style="width: 100px; height: 100px; border: 1px solid black; margin-right: 10px; margin-top: 2px; margin-left: 10px;">
                        <p>Html, a standardized system for tagging text files to achieve font, colour, graphic, and
                            hyperlink effects on WWW pages.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4  mt-2">
                <a href="blogPage.php"> <img src="Images/cofee.png" style="width: 350px;"></a>
                <div style="margin-top: 10px;">
                    <a href="blogPage.html" style="text-decoration: none; color: black;">
                        <h4> No,That's Not How You Say It.</h4>
                    </a>
                    <p>A short Personal history of my favourite fast Food.
                        <a href="blogPage.php">(Read More....)</a>
                    </p>
                    <p>VIP Singh</p>
                    <p><b>JAN 29. 8 min read</b></p>
                </div>

            </div>
        </div>
    </div>
    <!-- content section End -->

    <!-- blog banner start -->

    <div class="container p-5"
        style="display: flex; justify-content: space-between; background-color: lightsteelblue; border: 1px solid black;">
        <div class="content">
            <h2>Welcome to Blogging,<br>Where Words Matter</h2>
            <p>we deliver the best stories and ideas on the topics you <br> care about most straight to your homepage,
                app or
                inbox.</p>
        </div>
        <div class="images1">
            <img src="Images/medium1.png" width="200px">
        </div>
    </div>
    <!-- blog banner end -->


    <!-- alternate content section -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mt-2">
                <img src="Images/notepad.jpg" style="width: 250px;">
                <div style="margin-top: 10px;">
                    <h4>A few good reasons why you should learn to code</h4>
                    <p>You might be wondering if learning to code is something you should...</p>
                    <p>Rocky Jagtiani</p>
                    <p><b>Jan 9 · 5 min read</b></p>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="row" style="display: flex; flex-direction: column;" style="height: 50px;">
                    <div style="display: flex; ">
                        <img src="Images/investing.png"
                            style="width: 100px; height: 100px; border: 1px solid black; margin-right: 10px ;margin-top: 2px; margin-left: 10px;">
                        <p>Only buy something that you’d be perfectly happy to hold if the market shut down for 10
                            years.</p>
                    </div>
                    <div style="display: flex;">
                        <img src="Images/summer.jpg"
                            style="width: 100px; height: 100px; border: 1px solid black; margin-right: 10px; margin-top: 15px; margin-left: 10px;">
                        <p>When I figured out how to work my grill, it was quite a moment. I discovered that summer is a
                            completely different experience when you know how to grill.</p>
                    </div>
                    <div style="display: flex;">
                        <img src="Images/chain.jpg"
                            style="width: 100px; height: 100px; border: 1px solid black; margin-right: 10px; margin-top: 2px; margin-left: 10px;">
                        <p>Chains of habit are too light to be felt until they are too heavy to be broken.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4  mt-2">
                <img src="Images/ocen1.jpg" style="width: 300px;">
                <div style="margin-top: 10px;">
                    <h4>Deep space radio waves baffle astronomers; aliens not ruled out.</h4>
                    <p>Every time we see something we’ve never seen before that is an opportu..</p>
                    <p>Enzyme Snehar</p>
                    <p><b>Jan 29 · 8 min read</b></p>
                </div>

            </div>
        </div>
    </div>
    <!-- end content section -->

    <!-- Footer Start -->
    <div class="container bg-dark text-white p-3" style="flex-direction: column;">
        <div style="display: flex; justify-content: center;">
            <p class="mr-2 footerSection">About Us</p>
            <p class="mr-2 footerSection">Privacy Policy</p>
            <p class="mr-2 footerSection">Newsletter</p>
            <p class="mr-2 footerSection">Sitemap</p>


        </div>
        <div class="follw" style="display: flex; justify-content: center;">
            <h5>FOLLOW US ON</h5>
        </div><br>
        <div class="icons" style="display: flex; justify-content: center;">
            <img class="imagesicon" src="Images/youtube.png" style="width: 30px; border-radius: 50%;">
            <img class="imagesicon" src="Images/fb.png" style="width: 40px; border-radius: 50%;">
            <img class="imagesicon" src="Images/google.jpg" style="width: 30px; border-radius: 50%;">
            <img class="imagesicon" src="Images/link.jpg" style="width: 30px; border-radius: 50%;">
            <img class="imagesicon" src="Images/insta.png" style="width: 30px; border-radius: 50%;">
        </div><br>
        <p class="text-center" style="margin: auto; ">Copyright © 2019 Suven Consultants and technology pvt ltdAll
            rights reserved</p>
    </div>
    <!-- Footer End -->
    <script src="index.js"></script>
</body>

</html>