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
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
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
    <!-- portfolio.php css -->
    <link rel="stylesheet" href="./css/portfolio.css">
    <!-- 벤더프리픽스 한번에 해결해주는 스크립트 -->
    <script src="js/prefixfree.min.js"></script>
    <!-- jquery -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- 메인 script -->
    <script src="js/main.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


  </head>

  <body>
    <?php
        include('./header.php');
    ?>
      <section class="section_page_title_wrap">
        <div class="section_page_title">
          <h2>PORTFOLIO MODERN 3 COLUMNS WITH FILTER<br><span>Caption placed here</span></h2>
        </div>
      </section>
      <!--isotope 시작 -->
      <section class="portfolio_cont_wrap">
        <div class="portfolio_cont">
          <ul class="portfolio_menu clear">
            <li class="on fl" data-filter="*"><a href="#">ALL</a></li>
            <li class="fl" data-filter=".watch1"><a href="#">CLASSIC</a></li>
            <li class="fl" data-filter=".watch2"><a href="#">LEATHER</a></li>
            <li class="fl" data-filter=".watch3"><a href="#">SPORT</a></li>
          </ul>
          <ul class="portfolio_sortbox clear">
            <li class="all watch2">
              <a href="#">
                <div class="sortbox_img_wrap"><img src="img/carousel1.jpg" alt=""></div>
                <div class="portfolio_sortbox_text">
                  <h4>SUB MARINER</h4>
                  <p>Fashion, Photograph, Vacation</p>
                </div>
              </a>
            </li>
            <li class="all watch1">
              <a href="#">
                <div class="sortbox_img_wrap"><img src="img/carousel2.jpg" alt=""></div>
                <div class="portfolio_sortbox_text">
                  <h4>SUB MARINER</h4>
                  <p>Fashion, Photograph, Vacation</p>
                </div>
              </a>
            </li>
            <li class="all watch3">
              <a href="#">
                <div class="sortbox_img_wrap"><img src="img/carousel3.jpg" alt=""></div>
                <div class="portfolio_sortbox_text">
                  <h4>SUB MARINER</h4>
                  <p>Fashion, Photograph, Vacation</p>
                </div>
              </a>
            </li>
            <li class="all watch2">
              <a href="#">
                <div class="sortbox_img_wrap"><img src="img/carousel1.jpg" alt=""></div>
                <div class="portfolio_sortbox_text">
                  <h4>SUB MARINER</h4>
                  <p>Fashion, Photograph, Vacation</p>
                </div>
              </a>
            </li>
            <li class="all watch1">
              <a href="#">
                <div class="sortbox_img_wrap"><img src="img/carousel2.jpg" alt=""></div>
                <div class="portfolio_sortbox_text">
                  <h4>SUB MARINER</h4>
                  <p>Fashion, Photograph, Vacation</p>
                </div>
              </a>
            </li>
            <li class="all watch3">
              <a href="#">
                <div class="sortbox_img_wrap"><img src="img/carousel3.jpg" alt=""></div>
                <div class="portfolio_sortbox_text">
                  <h4>SUB MARINER</h4>
                  <p>Fashion, Photograph, Vacation</p>
                </div>
              </a>
            </li>
            <li class="all watch2">
              <a href="#">
                <div class="sortbox_img_wrap"><img src="img/carousel1.jpg" alt=""></div>
                <div class="portfolio_sortbox_text">
                  <h4>SUB MARINER</h4>
                  <p>Fashion, Photograph, Vacation</p>
                </div>
              </a>
            </li>
            <li class="all watch1">
              <a href="#">
                <div class="sortbox_img_wrap"><img src="img/carousel2.jpg" alt=""></div>
                <div class="portfolio_sortbox_text">
                  <h4>SUB MARINER</h4>
                  <p>Fashion, Photograph, Vacation</p>
                </div>
              </a>
            </li>
            <li class="all watch3">
              <a href="#">
                <div class="sortbox_img_wrap"><img src="img/carousel3.jpg" alt=""></div>
                <div class="portfolio_sortbox_text">
                  <h4>SUB MARINER</h4>
                  <p>Fashion, Photograph, Vacation</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <?php
        include('./footer.php');
    ?>
  </body>
  <script>
    /* 이미지 로딩받아오는데 시간차이 해결을 위해서 ready-> load로 변경 */
    $(window).load(function() {
      menuScroll();
      mobile_menu();
      hong_isotope();
    });

  </script>

</html>
