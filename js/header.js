$(function () {
  function fnHeaderMotion() {
    if (
      (winW < 1000 && scrY >= 35) /* mobile */ ||
      (winW >= 1000 && scrY >= 105) /* deskTop */
    ) {
      $(`header`).addClass("active");
    } else {
      $(`header`).removeClass("active");
    } //if

    if (scrY >= 100) {
      $(`.top-btn`).fadeIn(200);
    } else {
      $(`.top-btn`).fadeOut(200);
    }
  } //fnHeaderMotion

  fnHeaderMotion();
  $(window)
    .scroll(function () {
      fnHeaderMotion();
    })
    .resize(function () {
      fnHeaderMotion();
    });

  $(`.top-btn`).click(function () {
    /* window.scrollTo({top:0,behavior:'smooth'}) */
    $("body,html").stop().animate({ scrollTop: 0 });
  });

  /* gnb-lg--------------------------------------------------------------------------------- */
  $(`.gnb-lg>ul`).mouseenter(function () {
    $(`.gnb-lg>ul>li>ul`).stop().slideDown(300);
    TweenMax.to(".gnb-lg svg .bar", 0.8, {
      morphSVG: ".gnb-lg svg .triangle",
      ease: Linear.easeNone,
    });
  });
  $(`.gnb-lg`).mouseleave(function () {
    $(`.gnb-lg>ul>li>ul`).stop().slideUp(300);
    TweenMax.to(".gnb-lg svg .bar", 0.3, {
      morphSVG: ".gnb-lg svg .barCopy",
      ease: Linear.easeNone,
    });
  });

  //-----------------------------------------------

  $(".mbtn").click(function () {
    $(this).toggleClass("active");
    $(".gnb-sm").stop().fadeToggle().toggleClass("active");
    TweenMax.to(".gnb-sm.active .inner .bar", 0.8, {
      morphSVG: ".gnb-sm .inner .triangle",
      ease: Elastic.easeIn,
    });
    TweenMax.to(".gnb-sm:not(.active) .inner .bar", 0.3, {
      morphSVG: ".gnb-sm .inner .barCopy",
      ease: Elastic.easeIn,
    });
    $(".gnb-sm .inner>ul>li>ul").stop().slideUp();
    $(".gnb-sm .inner>ul>li>a").removeClass("active");
  });

  $(".gnb-sm .inner>ul>li>a").click(function (e) {
    e.preventDefault();
    $(".gnb-sm .inner>ul>li>ul").stop().slideUp();
    $(this).siblings("ul").stop().slideToggle();
    $(".gnb-sm .inner>ul>li>a").not($(this)).removeClass("active");
    $(this).toggleClass("active");
  }); //click menu

  //------------------------------------------------

  $("#favorite").on("click", function (e) {
    e.preventDefault()
    var bookmarkURL = window.location.href;
    var bookmarkTitle = document.title;
    var triggerDefault = false;
    if (window.sidebar && window.sidebar.addPanel) {
      // Firefox version < 23
      window.sidebar.addPanel(bookmarkTitle, bookmarkURL, "");
    } else if (
      (window.sidebar &&
        navigator.userAgent.toLowerCase().indexOf("firefox") > -1) ||
      (window.opera && window.print)
    ) {
      // Firefox version >= 23 and Opera Hotlist
      var $this = $(this);
      $this.attr("href", bookmarkURL);
      $this.attr("title", bookmarkTitle);
      $this.attr("rel", "sidebar");
      $this.off(e);
      triggerDefault = true;
    } else if (window.external && "AddFavorite" in window.external) {
      // IE Favorite

      window.external.AddFavorite(bookmarkURL, bookmarkTitle);
    } else {
      // WebKit - Safari/Chrome

      alert(
        (navigator.userAgent.toLowerCase().indexOf("mac") != -1
          ? "Cmd"
          : "Ctrl") + "+D 키를 눌러 즐겨찾기에 등록하실 수 있습니다."
      );
    }

    return triggerDefault;
  });
}); //document.ready
