// 캐러셀 시작
function carousel() {
  var auto = null;
  var $carousel_list = null;
  var $section_carousel = null;
  var $carousel_prev = null;
  var $carousel_next = null;

  function start() {
    init();
    eventInit();
  }

  function init() {
    $carousel_list = $('.carousel_list');
    $section_carousel = $('.section_carousel');
    $carousel_prev = $('.carousel_prev');
    $carousel_next = $('.carousel_next');
  }

  function eventInit() {
    // 왼쪽 화살표 눌렀을때
    $carousel_prev.click(function() {
      carousel_prevMove();
    });

    // 오른쪽 화살표 눌렀을때
    $carousel_next.click(function() {
      carousel_nextMove();
    });

    // 자동실행
    carousel_autoPlay();

    // 자동실행 멈춤
    carousel_autoPlayStop();
    // 자동실행 재시작
    carousel_autoPlayRestart();

    // 리사이즈 사이즈 재조정
    resize();
  }
  // 자동실행
  function carousel_autoPlay() {
    auto = setInterval(function() {
      carousel_nextMove();
    }, 5000);
  }
  // 자동실행 멈춤
  function carousel_autoPlayStop() {
    /* 마우스 올렸을때 캐러셀 자동 멈춤 */
    $(".carousel_view").mouseenter(function() {
      clearInterval(auto);
    });
  }
  // 자동실행 재시작
  function carousel_autoPlayRestart() {
    $(".carousel_view").mouseleave(function() {
      carousel_autoPlay();
    });
  }
  // 다음버튼 눌렀을때,자동실행 실제 동작하는 부분
  function carousel_prevMove() {
    $carousel_list.stop().animate({
      'margin-left': '0px'
    }, function() {
      $carousel_list.children('li').last().prependTo('.carousel_list');
      $carousel_list.css({
        marginLeft: -$carousel_list.children('li').outerWidth(true)
      });
    });
  }

  // 이전버튼 눌렀을때 실제 동작하는 부분
  function carousel_nextMove() {
    $carousel_list.stop().animate({
      'margin-left': -$carousel_list.children('li').outerWidth(true) * 2
    }, function() {
      $carousel_list.children('li').first().appendTo('.carousel_list');
      $carousel_list.css({
        'margin-left': -$carousel_list.children('li').outerWidth(true)
      });
    });
  }

  // 화면크기 조정시 화면 재설정
  function resize() {
    $(window).resize(function() {
      init();
    });
  }
  start();
}
// 캐러셀 끝


// 슬라이드 시작
function slide() {
  var wid = 0;
  var now_num = 0;
  var slide_length = 0;
  var auto = null;
  var $section_slider = null;
  var $dotli = null;
  var $panel = null;
  var $panelLi = null;
  
  function start(){
      init();
      slideEvent();
  }
  // 변수 초기화
  function init() {
    wid = $('.slide_container').width();
    now_num = $('.slide_dot>li.on').index();
    $section_slider = $(".section_slider");
    $dotli = $('.slide_dot>li');
      slide_length = $dotli.length;
    $panel = $('.slide_panel');
    $panelLi = $panel.children('li');
      
  }

  // 이벤트 묶음
  function slideEvent() {

    // 슬라이드 하단 dot버튼 클릭했을때
    $dotli.click(function() {
      now_num = $(this).index();
      slideMove();
    });

    // 이후 버튼 클릭했을때
    $('.slide_next').click(function() {
      nextChkPlay();
    });

    // 이전 버튼 클릭했을때
    $('.slide_prev').click(function() {
      prevChkPlay();
    });

    // 오토플레이
     autoPlay();

    // 오토플레이 멈춤
    autoPlayStop();

    // 오토플레이 재시작
    autoPlayRestart();

    // 화면크기 재설정 되었을때
    resize();
  }

  // 자동실행 함수
  function autoPlay() {
    auto = setInterval(function() {
      nextChkPlay();
    }, 5000);
  }

  // 자동실행 멈춤
  function autoPlayStop() {
    $section_slider.mouseenter(function() {
      clearInterval(auto);
    });
  }


  // 자동실행 멈췄다가 재실행
  function autoPlayRestart() {
    $section_slider.mouseleave(function() {
      auto = setInterval(function() {
        nextChkPlay();
      }, 5000);
    });
  }

  // 이전 버튼 클릭시 조건 검사후 슬라이드 무브
  function prevChkPlay() {
    if (now_num == 0) {
      now_num = slide_length - 1;
    } else {
      now_num--;
    }
    slideMove();
  }

  // 이후 버튼 클릭시 조건 검사후 슬라이드 무브
  function nextChkPlay() {
    if (now_num == slide_length - 1) {
      now_num = 0;
    } else {
      now_num++;
    }
    slideMove();
  }

  // 슬라이드 무브
  function slideMove() {
    $panelLi.find('li').stop().fadeOut();
    $panel.stop().animate({
      'margin-left': -wid * now_num
    }, function() {
      $panelLi.eq(now_num).find('li:first-child').stop().fadeIn(500, function() {
        $panelLi.eq(now_num).find('li:last-child').stop().fadeIn();
      });
    });

    $dotli.removeClass('on');
    $dotli.eq(now_num).addClass('on');
  }

  // 화면크기 조정시 화면 재설정
  function resize() {
    $(window).resize(function() {
      init();
      $panel.css({
        'margin-left': -wid * now_num
      });
    });
  }
  start();
}
// 슬라이드 끝


function menuScroll() {
  var now_scroll = 0;
  var $header_wrap = $(".header_wrap");
  $(window).scroll(function() {
    now_scroll = $(window).scrollTop();
    if (now_scroll <= 10) {
      $header_wrap.addClass('on');
    } else {
      $header_wrap.removeClass('on');
    }
  })
}
function mobile_menu(){
    /* 변수 선언 */
    var $menu = null;
    var $right_gnb = null; // 영역 전체
    var $depth1_wrap = null;
    var $depth1 = null;
    var $depth1_btn = null;
    
    /* 시작 함수 */
    function start(){
        init();
        init_event();
    }
    /* 변수 초기화 함수 */
    function init(){
        $menu = $('.mobile_menu_btn');
        $right_gnb = $('.right_gnbWrap'); // 영역 전체
        $depth1_wrap = $('.right_gnb>li');
        $depth1 = $depth1_wrap.children('ul');
        $depth1_btn = $depth1_wrap.children('a');
    }
    /* 이벤트 함수 */
    function init_event(){
        
        /* 모바일 메뉴 버튼 클릭했을때 모바일 메뉴영역 나오게 하기 */
        $menu.click(function(event){
            event.preventDefault();
            $right_gnb.addClass('on');
        });
        
        /* x버튼 눌렀을때 모바일 메뉴 닫기 */
        $('.mobile_close').click(function(event){
            event.preventDefault();

            $right_gnb.removeClass('on');
            
            // x버튼 누르면 시간차 약간두고 소메뉴 닫히게 하기
            setTimeout(function(){
                $depth1_btn.removeClass('on');
                $depth1.slideUp();
            },300)
        });
        
        /* depth1의 각메뉴 클릭시 depth2 나오게 하기 */
        $depth1_btn.click(function(event){
            event.preventDefault();
            var $this = $(this);
            var $this_ul = $this.siblings('ul');

            var check = $this.hasClass('on');
            if(check){
                $this.removeClass('on');
                $this_ul.stop(true,true).slideUp();
            }else{
                $depth1_btn.removeClass('on');
                $depth1.stop().slideUp();
                $this.addClass('on');
                $this_ul.stop(true,true).slideDown();
            }
        });
        
        /* 디바이스 크기 변경시 모바일 메뉴영역 숨기기 */
        $(window).resize(function(){
            $right_gnb.removeClass('on');
        });
    }
    start(); // 시작 호출
}
function hong_isotope(){
    var $portfolio_sortbox = $(".portfolio_sortbox");
    var $portfolio_menuli = $(".portfolio_menu li");
  /*isotope 시작*/
    $portfolio_sortbox.isotope({ // 정렬할 박스들 감싸는 부모 클래스 이름
      // options
      itemSelector: '.all', // 정렬할 박스들 클래스 이름
      layoutMode: 'fitRows' // 정렬시 옵션
    });

    $portfolio_menuli.click(function(e){ // 버튼 클릭 시
        e.preventDefault(); // a태그 기능 정지
        $portfolio_menuli.removeClass("on"); // 활성화되어있는 버튼 클래스on제거
        $(this).addClass("on"); // 클릭한 버튼 활성화
        var selector = $(this).attr('data-filter'); 
        // 정렬시킬 박스들의 클래스 이름 받아오기
        $portfolio_sortbox.isotope({ filter: selector });
        // 정렬시작 구문
    });
/*isotope 끝*/  
}
