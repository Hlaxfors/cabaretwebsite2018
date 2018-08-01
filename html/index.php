<?php

include './includes.php';

?>


<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="./resources/icons/logo/rewindlogo.png" type="image/x-icon">
    <title>Playback: Save The Spiegletent</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="maincontainer">
        <?=generateHeader('home')?>
        <!-- Content -->
        <div class="row content">
            <div class="row gallery">
                <div class="col-lg-1 padding">
                    <!--padding-->
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="block">
                            <div class="mx-auto">
                                <img class="galImgLeft gal" src="./resources/photos/IMG_9033.JPG">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="block">
                            <div class="mx-auto">
                                <img class="galImgTopLeft gal" src="./resources/photos/IMG_9039.JPG">
                                <img class="galImgTopRight gal" src="./resources/photos/IMG_9046.JPG">
                                <img class="galImgBottom gal" src="./resources/photos/IMG_9061.JPG">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="block">
                            <div class="mx-auto">
                                <span class="galtitle">
                                    Gallery
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row infoContainer">
                <span class="when">
                    <span class="whenTitle">
                    When is it?
                    </span>
                    <br>
                    Wednesday, Aug 22 \\ Thursday, Aug 23
                    <br>
                    <span class="time">7:00PM</span>
                    <span class="time">7:00PM</span>
                </span>
                <div class="row location">
                    <div class="row entrance">
                        <div class="col-lg-3">
                            <!-- padding -->
                        </div>
                        <div class="col-lg-6 entryText">
                            <span class="entryTitle">
                                ENTRY
                            </span>
                            <br>
                            35 Johnston Street, Collingwood
                            <br>
                            Limited parking along Johnston and Wellington streets.
                        </div>
                        <div class="col-lg-3">
                            <!-- padding -->
                        </div>
                    </div>
                    <div class="row mapContainer">
                        <div class="col-lg-3">
                            <!-- padding -->
                        </div>
                        <div class="col-lg-6">
                            <iframe class="map" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJybn7Uh5D1moRx4FeofSRk1o&key=AIzaSyCdAC_XKtTFFy65yNmw8zg4ipVTnkvn7fk" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-3">
                            <!-- padding -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<!-- 
    
    theme color
    #ea2728 
    
-->