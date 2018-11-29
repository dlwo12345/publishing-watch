<!DOCTYPE html>
<!-- ie8이하에서 접속 했을때 다른페이지로 보내버리기 X-UA-Compatible와 충돌 이슈가 있다고 하여 문서 상단에 삽입하였음-->
<!--[if lte IE 8]>
    <script type="text/javascript">
        window.location="/watch/ieUp.html"; 
    </script>
<![endif]-->
<html lang="ko">

  <head>
    <!-- charset 설정 -->
    <meta charset="UTF-8">
    <!-- ie 호환성보기 무시 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 모바일을 위한 viewport설정 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>반응형 홈페이지</title>
    <!--Chrome, Safari, IE -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Firefox, Opera  -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- 웹 아이콘 연결 -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- 초기화 코드 연결 -->
    <link rel="stylesheet" href="./css/common.css">
    <!-- 메인css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- 벤더프리픽스 한번에 해결해주는 스크립트 -->
    <script src="js/prefixfree.min.js"></script>
    <!-- jquery -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- 메인 script -->
    <script src="js/main.js"></script>
  </head>

  <body>
    <?php
        include('./header.php');
    ?>
      <section class="section_slider">
        <h2 class="hide">슬라이드</h2>
        <div class="slide_container">
          <ul class="slide_panel">
            <li>
              <img src="./img/bg-1.jpg" alt="">
              <ul class="slide_content clear">
                <li class="fl"><img src="./img/item-1-1.png" alt="배경이미지(건물)"></li>
                <li class="fl">
                  <img src="./img/text.png" alt="슬라이드 텍스트">
                </li>
              </ul>
            </li>
            <li>
              <img src="./img/bg-3.jpg" alt="배경이미지(우주)">
              <ul class="slide_content clear">
                <li class="fl">
                  <img src="./img/text.png" alt="슬라이드 텍스트">
                </li>
              </ul>
            </li>
            <li>
              <img src="./img/bg-2.jpg" alt="">
              <ul class="slide_content clear">
                <li class="fl">
                  <img src="./img/text.png" alt="슬라이드 텍스트">
                </li>
                <li class="fl"><img src="./img/item-2-2.png" alt="배경이미지(운동하고있는 여자)"></li>

              </ul>
            </li>
          </ul>
          <ul class="slide_dot">
            <li class="on">슬라이드 버튼1번</li>
            <li>슬라이드 버튼2번</li>
            <li>슬라이드 버튼3번</li>
          </ul>
          <div class="slide_prev"><i class="fa fa-angle-left fa-5x" aria-hidden="true"></i></div>
          <div class="slide_next"><i class="fa fa-angle-right fa-5x" aria-hidden="true"></i></div>
        </div>
      </section>
      <section class="section_pageIntro">
       <h2 class="hide">페이지 소개</h2>
        <ul class="clear">
          <li class="fl">
            <img src="./img/column-service1.jpg" alt="페이지 소개 사진1(바다 위에 떠있는 보트사진)">
            <h3>PHARETRA NULLAM EUISMOD</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam excepturi, aperiam ullam impedit. Obcaecati ullam culpa quam labore, quasi unde.</p>
          </li>
          <li class="fl">
            <img src="./img/column-service2.jpg" alt="페이지 소개 사진1(남자 모델과 여자 모델이 다정하게 서있는 모습)">
            <h3>ORNARE RIDICULUS IPSUM</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam excepturi, aperiam ullam impedit. Obcaecati ullam culpa quam labore, quasi unde.</p>
          </li>
          <li class="fl">
            <img src="./img/column-service3.jpg" alt="페이지 소개 사진1(톱니바퀴 사진)">
            <h3>PORTA AENEAN TRISTIQUE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam excepturi, aperiam ullam impedit. Obcaecati ullam culpa quam labore, quasi unde.</p>
          </li>
        </ul>
      </section>
      <section class="section_video">
       <h2 class="hide">비디오</h2>
        <video autoplay loop muted>
          <source src="./img/time.mp4" type="video/mp4">
          <source src="./img/time.webm" type="video/webm">
          <source src="./img/time.ogg" type="video/ogg">
        </video>
      </section>
      <section class="section_technology">
       <h2 class="hide">우리 기술 소개</h2>
        <ul class="clear">
          <li class="technology_text fl">
            <h3>All Our Watches<br><span>WE USE THE LATEST TECHNOLOGY</span></h3>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur. Praesent commodo cursus
              magna, vel scelerisque nisl consectetur.</p>
            <a href="#">Discover More<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </li>
          <li class="fl"><img src="./img/featured-image.jpg" alt="톱니바퀴 모양의 배경 이미지"></li>
        </ul>
      </section>
      <section class="section_carousel">
        <h2>LATEST PRODUCTS</h2>
        <a href="#">View All Watches<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        <div class="carousel_view">
            <ul class="carousel_list clear">
               <li class="fl">
                   <a href="#">
                       <img src="img/carousel1.jpg" alt="캐러셀 시계이미지1">
                       <div class="carousel_list_text">
                           <h4>SUB MARINER</h4>
                           <p>Fashion, Photograph, Vacation</p>
                       </div>
                   </a>
               </li>
                <li class="fl">
                   <a href="#">
                       <img src="img/carousel2.jpg" alt="캐러셀 시계이미지2">
                       <div class="carousel_list_text">
                           <h4>NAUTILUS</h4>
                           <p>Identity, Sport, Website</p>
                       </div>
                    </a>
                </li>
               <li class="fl">
                   <a href="#">
                       <img src="img/carousel3.jpg" alt="캐러셀 시계이미지3">
                       <div class="carousel_list_text">
                           <h4>AQUADANT</h4>
                           <p>Leather, Sport, Website</p>
                       </div>
                    </a>
                </li>
               <li class="fl">
                   <a href="#">
                       <div class="carousel_list_img"><img src="img/carousel4.jpg" alt="캐러셀 시계이미지4"></div>
                       <div class="carousel_list_text">
                           <h4>SUPERIOR SERIES</h4>
                           <p>Identity, Leather</p>
                       </div>
                    </a>
                </li>
               <li class="fl">
                   <a href="#">
                       <img src="img/carousel5.jpg" alt="캐러셀 시계이미지5">
                       <div class="carousel_list_text">
                           <h4>YATCH MASTER</h4>
                           <p>Branding, Classic, Identity</p>
                       </div>
                    </a>
                </li>
               <li class="fl">
                   <a href="#">
                       <img src="img/carousel6.jpg" alt="캐러셀 시계이미지6">
                       <div class="carousel_list_text">
                           <h4>AQUADANT</h4>
                           <p>Leather, Sport, Website</p>
                       </div>
                    </a>
                </li>
               <li class="fl">
                   <a href="#">
                        <img src="img/carousel7.jpg" alt="캐러셀 시계이미지7">
                        <div class="carousel_list_text">
                           <h4>SKY DWELLER</h4>
                           <p>Fashion, Photograph, Website</p>
                       </div>
                    </a>
                </li>
            </ul>
        </div>
        <p class="carousel_prev"><i class="fa fa-angle-left fa-5x" aria-hidden="true"></i></p>
        <p class="carousel_next"><i class="fa fa-angle-right fa-5x" aria-hidden="true"></i></p>

      </section>
      <section class="section_aboutus">
        <ul class="clear">
          <li class="fl">
            <h3>A LITTLE ABOUT US</h3>
            <p>Inspiration Can Be Found Everywhere</p>
          </li>
          <li class="fl">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur reiciendis ad dolorem perspiciatis repellendus ipsa itaque maxime ut, facere! Accusantium cupiditate excepturi facilis quos necessitatibus tenetur saepe veritatis velit
              provident. Consequatur debitis odio accusamus officiis, itaque impedit ab eaque aspernatur illum magnam aut nesciunt, repellat quod illo aperiam voluptatem corrupti.</p>
          </li>
        </ul>
      </section>
      <section class="section_award">
        <h3>AWARD WINNING</h3>
        <p>Geneva, 2014</p>
        <a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </section>
      <section class="section_news">
        <h3 class="hide">news area</h3>
        <ul class="clear">
          <li class="news_video fl">
            <h4>VIDEO TOUR</h4>
            <p>Small Caption Here</p>
            <div>
              <video loop muted controls>
                <source src="./img/95027799.mp4" type="video/mp4">
              </video>
            </div>
          </li>
          <li class="news_recent fl">
            <h4>RECENT NEWS</h4>
            <p><a href="#">Read All News<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            <ul>
              <li class="clear">
                <img class="fl" src="./img/sum1.jpg" alt="바다 위에 떠있는 보트사진">
                <div class="fl">
                  <h5>SEM PORTA MOLLIS PARTURIENT</h5>
                  <p>
                    <i class="fa fa-clock-o" aria-hidden="true"></i> 21 Mar 2014
                  </p>
                </div>
              </li>
              <li class="clear">
                <img class="fl" src="./img/sum2.jpg" alt="톱니바퀴 이미지">
                <div class="fl">
                  <h5>NULLAM LOREM MATTIS PURUS</h5>
                  <p>
                    <i class="fa fa-clock-o" aria-hidden="true"></i> 21 Mar 2014
                  </p>
                </div>
              </li>
              <li class="clear">
                <img class="fl" src="./img/sum3.jpg" alt="썸네일 트럭 이미지">
                <div class="fl">
                  <h5>NIBH SEM SIT ULLAMCORPER</h5>
                  <p>
                    <i class="fa fa-clock-o" aria-hidden="true"></i> 21 Mar 2014
                  </p>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </section>
      <?php
        include('./footer.php');
      ?>
  </body>
  <script>
    $(document).ready(function() {
      slide();
      carousel();
      menuScroll();
      mobile_menu();

    });

  </script>

</html>
