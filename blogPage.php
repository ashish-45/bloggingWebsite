<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogPage</title>
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
</head>

<?php
    include 'dbcon.php';

   

    if(isset($_POST['like'])){

        $sql =  "INSERT INTO `rating`( `likes`) VALUES ('1')";

        $query = mysqli_query($con,$sql);

    }

    if(isset($_POST['dislike'])){

        $sql =  "INSERT INTO `rating`( `dislikes`) VALUES ('1')";

        $query = mysqli_query($con,$sql);

    }
    
    $sql = "SELECT * FROM  `rating` WHERE likes = '1' "  ;

    $query = mysqli_query($con,$sql);

    $sql1 = "SELECT * FROM  `rating` WHERE dislikes = '1' "  ;

    $query1 = mysqli_query($con,$sql1);
?>

<body style="background-color: lightgray;">
    <!-- Navigation Start -->
    <nav class=" container navbar navbar-expand-lg navbar-light bg-dark mt-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-item nav-link text-white " href="index.php"><b>Home</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Nation</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Sports</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Politics</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Entertainment</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Search</b></a>
                <a class="nav-item nav-link  text-white" href="#"><b>Contact Us</b></a>
            </div>
        </div>
    </nav>
    <!-- Navigation End -->

    <!-- content Section start -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h6 style="font-style: italic; margin-top: 60px;"><b>MEMBER FEATURE STORY</b></h6><br><br>
                <p><b>No, That’s Not How You Say It</b></p>
                <!-- <p><b>A short personal history of my favorite fast food</b></p> -->
                <div class="likesdislikes" style="background-color:darkgray; padding:10px; width:100%; height:170px" >
                <p>A short personal history of my favourite fastfoood.</p>
                <form action="" method="POST">
                <button type="submit" name="like"style="width:55px; border-radius:10px"><img src="https://internship.suvenconsultants.com/projects/blogging/images/like.png" class="p-1 mr-2" style="width: 40px; background-color: white; border-radius: 50%; border: 1px solid black;"></button>
                <span> <button type="submit" name="dislike"  style="width:55px; border-radius:10px"><img src="https://internship.suvenconsultants.com/projects/blogging/images/dislike.png" class="p-1" style="width: 40px; background-color: white; border-radius: 50%; border: 1px solid black;"></button></span>
                <button style="box-shadow: 2px 2px 2px 2px;">Total Rating(<?php
                    echo mysqli_num_rows($query) + mysqli_num_rows($query1);
                ?>)</button>
                <div class="rows1">
                </div>
                <p><b>likes : <?php
                    echo mysqli_num_rows($query);
                ?></b></p>
                <p ><b>dislikes : <?php
                    echo mysqli_num_rows($query1);
                ?></b></p>
                </form>
              
                </div>
            </div>
            <div class="col-sm-6">
                <img src="Images/cofee.png" style="width: 500px; margin-top: 50px;">
            </div>
        </div>
    </div>
    <!-- content Section End -->

    <!-- page content start -->
    <div class="container mt-5">
        <p><b>MEMBER FEATURE STORY


            No, That’s Not How You Say It
            
            A short personal history of my favorite fast food
             
            
            Indians talk funny. We don’t think we do, but we do. We’re usually too busy talking at or over or directly through each other to notice. Every so often, though, we stop long enough to listen to one another and then laugh and point.
            
            The middle-aged Persian woman I hired to teach me how to drive made fun of me when I mispronounced Cahuenga Boulevard. I had just moved to Mumbai a few months prior from Yamunotri, where I considered myself a native despite the disagreements of many native Mumbaikars. Frank Lloyd Wright once said, “tip the world over on its side and everything loose will land in Mumbai.” So I floated across the country — as millions before me had — to seek my fortune.
            
            Her teaching method was an unorthodox form of politically incorrect mockery. When I tapped the brakes too hard, she’d tell me not to drive like a “Chinaman” and then pantomimed her head flinging back and forth, as if she were bowing. She casually informed me that Mumbaikars were notoriously terrible at changing lanes. Don’t get her started on Indians. Seriously, don’t. She was, to be charitable, racially insensitive.
            
            I was a stranger in her city but my advanced age and inexperience amused her. How could a grown man not know how to drive a car? It was, however, my accent that intrigued her the most. I spoke with the faintest southern drawl but I also had northeastern motormouth tendencies. She was always drawing conclusions as to my ethnicity.
            
            During one lesson she said, “You people are good drivers.”
            
            You people?
            
            “Mumbaikars.”
            
            Because of her I passed my driver’s test, got my first license to operate a motor vehicle, and then proceeded to not drive for years. Everything I needed was in walking distance: my job and places to eat.
            
            Here’s the truth about food in India: it’s pretty good. There’s amazing pho and pupusas and bulgogi. During my three year internment in the city of Mumbai, I was able to find satisfactory replacements for my beloved street foods. I found some decent pizza. I even found bagels that… sufficed. But I could never find the one dish that reminded me of my adopted home for the previous 16 years. A gyro platter.
            
            I couldn’t even find a suitable Mumbai-style Greek diner, the kind of greasy spoon with a massive menu where you can order a meal of waffles, meatloaf, and lasagna if you want.
            
            But it’s not as if Mumbai has no roast meat sandwiches. My racist — but friendly — driving instructor had once pointed out an Armenian restaurant that she recommended. This place served up delicious chicken shawarma sandwiches and a garlic sauce I could eat with my fingers.
            
            Eventually, I would drift back to Mumbai. The first thing I would order upon my return? A gyro, a word that rhymes with “pie-whoa.”
            </b>
            </p>
    </div>
          
    <!-- page content End -->

    
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
            <img class="imagesicon " src="Images/youtube.png" style="width: 30px; border-radius: 50%;">
            <img class="imagesicon " src="Images/fb.png" style="width: 40px; border-radius: 50%;">
            <img class="imagesicon mr-1" src="Images/google.jpg" style="width: 30px; border-radius: 50%;">
            <img class="imagesicon mr-1" src="Images/link.jpg" style="width: 30px; border-radius: 50%;">
            <img class="imagesicon mr-1" src="Images/insta.png" style="width: 30px; border-radius: 50%;">
        </div><br>
        <p class="text-center" style="margin: auto; ">Copyright © 2019 Suven Consultants and technology pvt ltdAll
            rights reserved</p>
    </div>
    <!-- Footer End -->
</body>

</html>