<?php
include('../admin/connection.php')
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>travel</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../Link/bootstrap.min.css">
    <script src="/Link/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@800&family=Kalam:wght@300;400;700&family=Kanit:ital,wght@0,400;0,500;0,600;0,800;1,400;1,600;1,700&family=Kumbh+Sans:wght@300;500;600;800;900&family=Montserrat:wght@300;400;500;600;800;900&family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,600&family=Raleway:wght@300;600;700;900&family=Rubik+Distressed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Travel/travel.css">
</head>

<body>
    <header>
        <a href="#" class="logo">travel <span>.</span></a>
        <nav class="navbar">
            <ul>
                <li><a href="#home" class="active">home</a></li>
                <li><a href="#feature">feature</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#gallery">gallery</a></li>
                <li><a href="#review">review</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
        <div class="fas fa-bars"></div>
    </header>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="video">
            <video src="../about_image/Guide to Tokyo with 村上虹郎.mp4" loop muted autoplay></video>
        </div>


        <div class="content">
            <h1>explore new places, <br> adventure awaits.</h1>
            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
        </div>

        <div class="form-container">
            <form action="">
                <h3>search your destination</h3>

                <span>location</span>
                <input type="text" placeholder="place you want to visit">

                <span>guest number</span>
                <input type="text" placeholder="number of people">

                <span>arrivals</span>
                <input type="date">

                <span>leaving</span>
                <input type="date">

                <input type="submit" value="search">
            </form>
        </div>
    </section>

    <!-- feature section start -->
    <section class="feature" id="feature">
        <h1 class="heading"><span>f</span>eatured <span>l</span>ocation</h1>
        <div class="card-container">
            <!-- <img src="../feature_image/" alt=""> -->

            <?php
            $sql_query     = "SELECT * FROM `tb_feature` LIMIT 4";
            $result        =  $con->query($sql_query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo  '
                    <div class="card">
                    <span class="discount">' . $row['discount'] . '</span>
                    <img src="../feature_image/' . $row['photo'] . '" alt="">
                    <div class="content">
                        <h3 class="title">' . $row['title'] . '</h3>
                        <p>' . $row['title_detail'] . '</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#"><button class="btn">cheak out!</button></a>
                    </div>
                 </div>
                ';
                }
            }

            ?>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <h1 class="heading"><span>a</span>bout <span>u</span>s</h1>
        <?php
        $sql_query     = "SELECT * FROM `tb_about` LIMIT 1";
        $result        =  $con->query($sql_query);
        if ($result->num_rows > 0) {
            while ($row  = $result->fetch_assoc()) {

                echo '
                <div class="row">
                    <div class="image">
                        <img src="../about_image/' . $row['photo'] . '" alt="">
                    </div>
                    <div class="content">
                        <h3>' . $row['content'] . '</h3>
                        <p>' . $row['title'] . '</p>
                        <a href="#"><button class="btn btn1">read more</button></a>
                        <a href="#"><button class="btn">get started</button></a>
                    </div>
                </div>
                ';
            }
        }
        ?>


    </section>

    <!--  gallery section start -->
    <section class="gallery" id="gallery">
        <h1 class="heading"><span>g</span>allery</h1>
        <div class="box-container">

            <?php
            $sql_select   = "SELECT * FROM `tb_gallery` LIMIT 9";
            $res_select   = $con->query($sql_select);
            if ($res_select->num_rows > 0) {
                while ($row  = $res_select->fetch_assoc()) {

                    echo '
                <div class="box">
                <img src="../gallery_iamge/' . $row['photo'] . '" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-search"></a>
                    </div>
                 </div>
                ';
                }
            }

            ?>
            <!-- <div class="box">
                <img src="../image/g1.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
            <div class="box">
                <img src="../image/g2.jfif" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
            <div class="box">
                <img src="../image/g3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
            <div class="box">
                <img src="../image/g4.jfif" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
            <div class="box">
                <img src="../image/g5.jfif" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div>
            <div class="box">
                <img src="../image/g6.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-search"></a>
                </div>
            </div> -->
        </div>
    </section>

    <!--review section start -->
    <sectoin id="review">
        <div class="review">
            <h1 class="heading"><span>r</span>eview</h1>
            <div class="box-container">

                <?php
                $sql_data    = "SELECT * FROM `tb_review` LIMIT 6";
                $res         = $con->query($sql_data);
                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                        echo   '
                    
                    <div class="box">
                    <div class="image">
                        <img src="../review_image/' . $row['photo'] . '" alt="">
                    </div>
                    <div class="content">
                        <h3>' . $row['name'] . '</h3>
                        <p>' . $row['title'] . '</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                    ';
                    }
                }

                ?>

            </div>
        </div>
    </sectoin>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>c</span>ontact <span>u</span>s</h1>
        <iframe width="100%" heigth="300px" outline="none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.814880630721!2d101.70603582296232!3d3.1435155903898497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3628e49a5899%3A0x10d9f6bdc9709df5!2sJapan%20Travel%20Bureau%20Malaysia!5e0!3m2!1sen!2skh!4v1669570679951!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="row">
            <div class="contact-info">
                <div class="box">
                    <h3><i class="fas fa-home"></i> address</h3>
                    <p>japan, <br>
                        toyko, <br>
                        400321.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-envelope"></i> email</h3>
                    <p>dt8393430@gmail.com</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-phone"></i> phone</h3>
                    <p>+123 389 454</p>
                </div>
            </div>

            <div class="contact-form-container">
                <form action="">
                    <h3>get in touch</h3>
                    <div class="inputBox">
                        <input type="text" placeholder="full name">
                        <input type="email" placeholder="email">
                    </div>
                    <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
                    <input type="submit" value="message">
                </form>
            </div>
        </div>
    </section>


    <section>
        <?php
        $sql_signup  = "SELECT * FROM `tb_signup` LIMIT 1 ";
        $result      = $con->query($sql_signup);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo  '
                    
                <div class="newsletter">
                    <h1>' . $row['title'] . '</h1>
                    <p>' . $row['detail'] . '</p>

                    <form action="">
                        <input type="email" name="" id="" placeholder="enter your email">
                        <input type="submit" value="sign up">
                    </form>

                </div>
                    
                    ';
            }
        }

        ?>


    </section>


    <!-- section footer -->
    <section class="footer">
        <h1 class="credit">created by <span>ms. thai dymong</span> | all rights reserved.</h1>
        <div class="icons">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </section>
</body>
<script src="../Travel/travel.js"></script>

</html>