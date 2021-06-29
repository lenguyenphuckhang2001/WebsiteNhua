<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />


    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Công Ty TNHH Hạt Nhựa Nguyên Sinh Bốn Phương</title>
</head>

<body>
    <!-- Header -->
    <div class="nav-click"></div>
  <div class="topheader">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="row">
            <a href="/">
                <img src="./images/logo_1.jpg" class="imglogo"></h1>
            </a>
          </div>
        </div>
        <div class="col-md-10 text-center">
          <div class="row ">
            <p>CÔNG TY TNHH HẠT NHỰA NGUYÊN SINH BỐN PHƯƠNG</p>
            <p><img src="./images/slogan.png" class="imgslogan"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-menu"></use>
            </svg>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">Bốn Phương</span>
              <a href="#" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="index.php">Trang Chủ</a>
              </li>
              <li class="nav__item">
                <a href="product.php">Sản Phẩm</a>
              </li>
              <li class="nav__item">
                <a href="#">Tin Tức</a>
              </li>
              <li class="nav__item">
                <a href="tuyendung.php">Tuyển Dụng</a>
              </li>
              <li class="nav__item">
                <a href="contactpage.php">Liên Hệ</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
        <!-------------------------PRODUCT-------------------------------------->
        <section class="section latest__products" id="latest">
            <div class="container" data-aos="fade-up" data-aos-duration="1200">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides latest-center">
                        <li class="glide__slide">
                            <div class="product">
                                <div class="product__footer">
                                    <section class="category__section section" id="category">
                                        <div class="category__container" data-aos="fade-up" data-aos-duration="1200">
                                            <div class="category__center"></div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- End Main -->
        <!-- Footer -->
        <footer id="footer" class="section footer">
            <div class="container">
                <div class="footer__top">
                    <div class="footer-top__box">
                        <h3>Danh Mục</h3>
                        <a href="#">Trang Chủ</a>
                        <a href="#">Sản Phẩm</a>
                        <a href="#">Giới Thiệu</a>
                        <a href="#">Tin Tức</a>
                        <a href="#">Liên Hệ</a>
                    </div>
                    <div class="footer-top__box">
                        <h3>Giải đáp</h3>
                        <a href="#">Sản Phẩm</a>
                        <a href="#">Các Thủ Tục</a>
                        <a href="#">Giấy Phép</a>
                    </div>
                    <div class="footer-top__box">
                        <h3>Thành Viên</h3>
                        <a href="https://www.facebook.com/luong.h.quyen.9">Lương Hà Tố Quyên-1951010191</a>
                        <a href="https://www.facebook.com/cobe.maket.902">Nguyễn Huỳnh Trang Thanh-1951010198</a>
                        <a href="#">Trần Thị Lan Anh-1951010199</a>
                        <a href="#">Lê Nguyễn Trọng Nhân-1951010207</a>
                        <a href="#">Đỗ Duy Anh Bảo-1951010236</a>
                    </div>
                    <div class="footer-top__box">
                        <h3>Theo Dõi</h3>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google"></i> </a>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer-bottom__box">
                </div>
                <div class="footer-bottom__box">
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- PopUp -->

        <!-- Go To -->

        <a href="#header" class="goto-top scroll-link">
            <svg>
                <use xlink:href="./images/sprite.svg#icon-arrow-up"></use>
            </svg>
        </a>


        <!-- Glide Carousel Script -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
        <!-- Animate On Scroll -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Custom JavaScript -->
        <script src="./js/products.js"></script>
        <script src="./js/index.js"></script>
        <script src="./js/slider.js"></script>

</body>

</html>