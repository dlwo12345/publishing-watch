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
    <!-- page.php css -->
    <link rel="stylesheet" href="./css/page.css">
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
      <section class="section_page_title_wrap">
        <div class="section_page_title">
          <h2>ABOUT US<br><span>Example Of About Us Page</span></h2>
        </div>
      </section>
      <section class="section_technology">
        <ul class="clear">
          <li class="fl"><img src="./img/featured-image.jpg" alt="기술 배경이미지"></li>
          <li class="technology_text fl">
            <h3><span>MOLLIS DOLOR RISUS RIDICULUS</span></h3>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
              odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero.</p>
            <a href="#">Learn More<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </li>
        </ul>
      </section>
      <section class="section_wecando">
        <h3>
            WHAT WE CAN DO<br>
            <span>Example of service page</span>
        </h3>
      </section>
      <section class="section_page_grid">
        <ul class="clear">
          <li class="fl">
            <div class="fl"><i class="fa fa-trophy fa-2x" aria-hidden="true"></i></div>
            <div class="fl">
              <h3>WORK WITH CHAMPION</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
            </div>
          </li>
          <li class="fl">
            <div class="fl"><i class="fa fa-signal fa-2x" aria-hidden="true"></i></div>
            <div class="fl">
              <h3>WORK WITH CHAMPION</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
            </div>
          </li>
          <li class="fl">
            <div class="fl"><i class="fa fa-user fa-2x" aria-hidden="true"></i></div>
            <div class="fl">
              <h3>WORK WITH CHAMPION</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
            </div>
          </li>
          <li class="fl">
            <div class="fl"><i class="fa fa-edit fa-2x" aria-hidden="true"></i></div>
            <div class="fl">
              <h3>WORK WITH CHAMPION</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
            </div>
          </li>
          <li class="fl">
            <div class="fl"><i class="fa fa-comment fa-2x" aria-hidden="true"></i></div>
            <div class="fl">
              <h3>WORK WITH CHAMPION</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
            </div>
          </li>
          <li class="fl">
            <div class="fl"><i class="fa fa-power-off fa-2x" aria-hidden="true"></i></div>
            <div class="fl">
              <h3>WORK WITH CHAMPION</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
            </div>
          </li>
          <li class="fl">
            <div class="fl"><i class="fa fa-cloud fa-2x" aria-hidden="true"></i></div>
            <div class="fl">
              <h3>WORK WITH CHAMPION</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
            </div>
          </li>
          <li class="fl">
            <div class="fl"><i class="fa fa-truck fa-2x" aria-hidden="true"></i></div>
            <div class="fl">
              <h3>WORK WITH CHAMPION</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
            </div>
          </li>
          <li class="fl">
            <div class="fl"><i class="fa fa-wrench fa-2x" aria-hidden="true"></i></div>
            <div class="fl">
              <h3>WORK WITH CHAMPION</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
            </div>
          </li>
        </ul>
      </section>
      <?php
        include('./footer.php');
    ?>
  </body>
  <script>
    $(document).ready(function() {
      menuScroll();
      mobile_menu();
    });
  </script>

</html>
