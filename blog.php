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
    <!-- blog.php css -->
    <link rel="stylesheet" href="./css/blog.css">
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
          <h2>BLOG 3 COLUMNS<br><span>Caption placed here</span></h2>
        </div>
      </section>
      <section class="section_blog_grid">
        <ul class="clear">
          <li class="fl">
            <div><img src="./img/blog_img01.jpg" alt=""></div>
            <div>
              <h3>SEDIAL EIUSMOD TEMPOR</h3>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> 03 Dec 2013 &nbsp; &nbsp; / &nbsp; &nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> John Doe
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
              <p><a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            </div>
          </li>
          <li class="fl">
            <div><img src="./img/blog_img02.jpg" alt=""></div>
            <div>
              <h3>DONEC LUCTUS IMPERDIET</h3>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> 03 Dec 2013 &nbsp; &nbsp; / &nbsp; &nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> John Doe
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
              <p><a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            </div>
          </li>
          <li class="fl">
            <div><img src="./img/blog_img03.jpg" alt=""></div>
            <div>
              <h3>MAGNA PARS STUDIORUM</h3>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> 03 Dec 2013 &nbsp; &nbsp; / &nbsp; &nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> John Doe
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
              <p><a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            </div>
          </li>
          <li class="fl">
            <div><img src="./img/blog_img04.jpg" alt=""></div>
            <div>
              <h3>EIUSMOD TEMPOR INCIDUNT</h3>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> 03 Dec 2013 &nbsp; &nbsp; / &nbsp; &nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> John Doe
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
              <p><a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            </div>
          </li>
          <li class="fl">
            <div><img src="./img/blog_img05.jpg" alt=""></div>
            <div>
              <h3>STANDARD POST FORMAT TITLE</h3>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> 03 Dec 2013 &nbsp; &nbsp; / &nbsp; &nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> John Doe
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
              <p><a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            </div>
          </li>
          <li class="fl">
            <div><img src="./img/blog_img06.jpg" alt=""></div>
            <div>
              <h3>DIEM CERTAM INDICERE</h3>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> 03 Dec 2013 &nbsp; &nbsp; / &nbsp; &nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> John Doe
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
              <p><a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            </div>
          </li>
          <li class="fl">
            <div><img src="./img/blog_img07.jpg" alt=""></div>
            <div>
              <h3>PARTURIENT MONTES</h3>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> 03 Dec 2013 &nbsp; &nbsp; / &nbsp; &nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> John Doe
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
              <p><a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            </div>
          </li>
          <li class="fl">
            <div><img src="./img/blog_img08.jpg" alt=""></div>
            <div>
              <h3>NIHILNE TE NOCTURNU</h3>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> 03 Dec 2013 &nbsp; &nbsp; / &nbsp; &nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> John Doe
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
              <p><a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            </div>
          </li>
          <li class="fl">
            <div><img src="./img/blog_img09.jpg" alt=""></div>
            <div>
              <h3>DIEM CERTAM INDICERE</h3>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i> 03 Dec 2013 &nbsp; &nbsp; / &nbsp; &nbsp;
                <i class="fa fa-user" aria-hidden="true"></i> John Doe
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis mollitia modi, iusto. Laboriosam alias eos excepturi laudantium at consequuntur recusandae.</p>
              <p><a href="#">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
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
