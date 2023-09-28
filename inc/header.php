<!DOCTYPE html>
<html>
    <head>
        <title>Basic website</title>
        <meta name="language" content="English">
        <meta name="description" content="It's a website about Education ">
        <meta name="keyword" content="Blog, cms Blog">
        <meta name="author" content="Sinkia">
        
        <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="style.css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $("#slider").nivoSlider({
                    effect:'random',
                    slices:10,
                    animspeed:500,
                    PauseTime:5000,
                    startslide:0,//set starting slide(from 0 index)
                    directionNav:false,
                    directionNavHide:false,//only show in hover
                    controlNav:false,//1.2.3...
                    controlNavThumbs:false,//use thumbnails for control nav
                    pauseOnHover:true,//stop animation while hoveriong
                    manualAdvance:false,//force manual transation
                    captionOpacity:0.8,//universal caption capaciyt
                    beforechange:function(){},
                    afterChange:function(){},
                    slideShowEnd:function(){}//triggers after all slide has shown


                });
            });
        </script>
    </head>

    <body>
        <div class="headersection templete clear">
            <a href="index.php">
                <div class="logo">
                    <img src="images/logo.png"alt="logo"/>
                    <h2>Website Title</h2>
                    <p>website description</p>

                </div>
            </a>
            <div class="social clear">
                <div class="icon clear">
            <a href="#" target="_blank">< i calss="fa fa-facebook"></i></a>
            <a href="#" target="_blank">< i calss="fa fa-twiter"></i></a>
            <a href="#" target="_blank">< i calss="fa fa-linkeden"></i></a>
            <a href="#" target="_blank">< i calss="fa fa-google-pluse"></i></a>
                </div>
                <div class="searchbtn clear">
                <form action="" method="post">
                    <input type="text" name="keyword"placeholder="search keyword..."/>
                    <input type="submit" name="submit"value="search"/>
                </form>
                </div>
            </div>
        </div>
        <div class="navsection templete">
            <url>
                <li><a id ="active" href=""index.php>HOME</a></li>
                <li><a href=""about.php>ABOUT</a></li>
                <li><a href=""contact.php>CONTACT</a></li>
            </url>
        </div>