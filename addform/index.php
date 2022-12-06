<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/regular.min.css" 
    integrity="sha512-k2UAKyvfA7Xd/6FrOv5SG4Qr9h4p2oaeshXF99WO3zIpCsgTJ3YZELDK0gHdlJE5ls+Mbd5HL50b458z3meB/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
        rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="cssfolder/indexphp.css">
</head>

<body>
    <div class="super-container">
        <div class="contact-row">
            <div class="question-div">
                <h5>HAVE ANY QUESTION</h5>
            </div>
            <div class="contact-div">
                <h5>(0009)41455-564589414</h5>
            </div>
            <div class="contact-email">
                <h5>info@gayacollege.com</h5>
            </div>
            <div class="reg-loging">
                <button>REGISTER</button>
                <h3>/</h3>
                <button>LOGIN</button>
            </div>
        </div>

        <div id="navbar">
            <div class="logo">
                <img src="images/coll-logo2.jpg" alt="">
            </div>
            <div class="college-name">
                <h1>GAYA COLLEGE, GAYA</h1>
            </div>
            <div class="menu">
                <ul class="menu-list">
                    <li class="home"> <a href=""> Home</a></li>
                    <li class="courses"> <a href="">Courses</a>
                       
                    <li class="addmisson"><a href="">Addmisson</a></li>
                    <li class="result"><a href="">Result</a></li>
                    <li class="about"><a href="">About</a></li>
                </ul>
            </div>
        </div>


        <div>
            <div class="img1">
                <img class="IMGG" id="IMG1" src="images/capm1.jpg" alt="">
            </div>
            <div class="img1">
                <img class="IMGG" id="IMG2" src="images/capm3.jpg" alt="">
            </div>
            <div class="img1">
                <img class="IMGG" id="IMG3" src="images/capm5.jpg" alt="">
            </div>
        </div>
        <div class="slide-btn">
            <button onclick="previous()">PREV</button>
            <button onclick="next()">NEXT</button>
        </div>


        <div class="course-selection">
            <h1>Choose your course</h1>

            <div class="coure-para">
                <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet.Cras laoreet gravida lectus,<br>
                     at viverra lorem venenatis in.  Aenean id varius quam. Nullam bibendum interdum dui, ac tempor loremconvallis ut
                    </p>
            </div>

            <div class="course-search">
                <div class="search-field">
                    <input type="text" placeholder="course">
                </div>

                <div class="search-field">
                    <input type="text" placeholder="level">
                </div>

                <div class="search-button">
                    <input type="button" value="SEARCH COURES" id>
                    <input type="button" id="arrow-btn" value=">">
                </div>

            </div>
        </div>

        <div class="course-card">
            <div class="card" style="width: 18rem;">
                <img src="images/cour1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">LEARN MORE</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="images/cour2.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">LEARN MORE</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="images/cour3.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">LEARN MORE</a>
                </div>
            </div>

        </div>
        <div class="footer">
            <div class="conta-info">
                <h4>Contact</h4>

                <div class="contact-Icone">
                    <p><i class="fa-solid fa-house"></i></p>
                    <p><i class="fa-solid fa-phone"></i></p>
                    <p><i class="fa-brands fa-facebook"></i></p>
                    <p><i class="fa-brands fa-twitter"></i></p>
                </div>
            </div>


            <div class="quick-menu">

                <h4>Quick Menu</h4>
                <div class="quick-list">
                    <h5>Home</h5>
                    <h5>About Us</h5>
                    <h5>Contact Us</h5>
                    <h5>Services</h5>
                    <h5>Notice</h5>
                </div>
            </div>
            <div class="useful-link">

                <h4>Useful Link</h4>
                <div class="useful-list">
                    <h5>Courses</h5>
                    <h5>Events</h5>
                    <h5>News</h5>
                    <h5>Teachers</h5>
                    <h5>FAQ</h5>
                </div>

            </div>
            <div class="notificatin">

                <h4>Nofication</h4>
                <div class="footer-info">
                    <p><span>*</span>Represents a repeated fragment <br>
                        of the track list, allowing a <br>
                        large number of columns that <br>
                        exhibit a recurring to <br>
                        pattern to be written in <br>
                        a more compact form.</p>

                    <p><span>*</span>Please fiil own examination <br>
                        as soon posible, after finished date of
                        <br> examination form will be not second chance.
                    </p>
                </div>
            </div>
        </div>

    </div>
    </div>
    <script src="jsfolder/indexphp.js"></script>
</body>

</html>