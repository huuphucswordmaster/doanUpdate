<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="./CSS/swiper-bundle.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-6.4.0-web/css/all.min.css">
</head>

<body>
    <div id="main">
        <div class="Logo">
            <img src="./img/logo.png" class="logo-home" alt="">
        </div>
        <div class="bars">
            <i class="fa-solid fa-bars"></i>
        </div>
        <audio controls id="myAudio" loop>
            <source src="y2meta.com - Xomu - Lanterns (128 kbps).mp3">
        </audio>
        <div id="Main-Slider" class="swiper mySwiper">
            <div class="wrapper swiper-wrapper">
                <div class="slider swiper-slide">
                    <img src="./img/img1.jpeg" alt="" class="image">
                    <div class="slider-title">
                        <h2>Du Lịch Hà Nội - Sa Pa</h2>
                        <span class="text">Khám phá vùng đất tuyệt đẹp của Sa Pa - một điểm đến không thể bỏ qua ở Việt
                            Nam. <br></span>
                        <a href="#" class="button-link">CHI TIẾT TOUR</a>
                    </div>
                </div>

                <div class="slider swiper-slide">
                    <img src="./img/img2.jpg" alt="" class="image">
                    <div class="slider-title">
                        <h2>Du lịch Vịnh Hạ Long</h2>
                        <span class="text">Khám phá Thế giới Tuyệt đẹp trong lòng Vịnh Hạ Long - Một hành trình không
                            thể bỏ lỡ. <br></span>
                        <a href="#" class="button-link">CHI TIẾT TOUR</a>
                    </div>
                </div>
                <div class="slider swiper-slide">
                    <img src="./img/img3.jpg" alt="" class="image">
                    <div class="slider-title">
                        <h2>Du Lịch Phố cổ Hội An</h2>
                        <span class="text">Trải nghiệm lịch sử và văn hóa tuyệt vời tại Phố cổ Hội An - Nơi gìn giữ
                            những bí mật của đất Việt.</span>
                        <a href="" class="button-link">CHI TIẾT TOUR</a>
                    </div>
                </div>
                <div class="slider swiper-slide">
                    <img src="./img/img4.jpg" alt="" class="image">
                    <div class="slider-title">
                        <h2>Du Lịch Phú Quốc</h2>
                        <span class="text">Khám phá bí ẩn đảo ngọc Phú Quốc - Nơi hội tụ thiên nhiên hoang sơ và tiện
                            nghi hiện đại. <br></span>
                        <a href="" class="button-link">CHI TIẾT TOUR</a>
                    </div>
                </div>
                <div class="slider swiper-slide">
                    <img src="./img/img5.jpg" alt="" class="image">
                    <div class="slider-title">
                        <h2>Du Lịch Mekong</h2>
                        <span class="text">Chợ nổi với đầy những màu sắc, mùi hương, và hương vị đậm chất địa phương.
                            <br></span>
                        <a href="" class="button-link">CHI TIẾT TOUR</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div id="main-content">

        </div>
    </div>
    <!-- Modal -->
    <div class="modal">
        <div class="modal_overlay">
        </div>
        <div class="modal_container">
            <div class="modal_container_list">
                <ul>
                    <li><a href="">TRANG CHỦ</a></li>
                    <li class="js-register-btn"><a href="#">ĐĂNG KÝ (NHẬN KHUYẾN MÃI)</a></li>
                    <li><a href="">GIỚI THIỆU</a></li>
                    <li><a href="">SẢN PHẨM</a></li>
                    <li><a href="">TIN TỨC</a></li>
                    <li><a href="">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>
        <!-- modal register -->
        <div class="modal_container modal_container-register">
            <div class="modal_container_input">
                <form action="reg.php" method="post">
                    <input type="text" name="fullname" required="" placeholder="Nhập Họ Và Tên">
                    <input type="text" name="email" required="" placeholder="Nhập Email">
                    <input type="text" name="username" required="" placeholder="Tên Đăng Nhập">
                    <input type="text" name="phone" required="" placeholder="Nhập Số điện thoại">
                    <input type="password" name="password" required="" placeholder="Nhập Mật khẩu">
                    <div class="register-control">
                        <input type="submit" name="btn-reg" class="js-register" value="Đăng Ký">
                        <p>Nếu bạn đã có tài khoản hãy đăng nhập để nhận thêm khuyến mãi <a class="js-btn-Login" href="#">Đăng Nhập !!!</a></p>
                    </div>
                </form>
            </div>

        </div>
        <!-- Modal login -->
        <div class="modal_container modal_container-login">
            <div class="modal_container_input">
                <form action="xulidangnhap.php" method="post">
                    <input type="text" name="username" required="" placeholder="Tên Đăng Nhập">
                    <input type="password" name="password" required="" placeholder="Nhập Mật khẩu">
                    <div class="login-control">
                        <input type="submit" class="js-login" value="Đăng Nhập">
                        <p>Bạn chưa có tài khoản hãy <a class="js-btn-Register" href="#">Đăng ký !!!</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Swiper JS -->
    <script src="./JS/swiper-bundle.min.js"></script>
    <script src="./JS/main.js"></script>

    <script>
        document.addEventListener("click", function() {
            var audio = document.getElementById("myAudio");
            audio.play();
        });
    </script>
</body>

</html>