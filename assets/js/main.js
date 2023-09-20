






var versionUpdate = (new Date()).getTime();
var script = document.createElement("script");
script.type = "text/javascript";
script.src = "https://api2.gtftech.com/scripts/queryform.min.ssl.js?v=" + versionUpdate;
document.body.appendChild(script);
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1600:{
            items:3
        },
        1920:{
            items:3
        }
    }
});

$('.nav-link-custom').on('click',function (e) {
    // e.preventDefault();
  
    var target = this.hash,
    $target = $(target);
  
   $('html, body').stop().animate({
     'scrollTop': $target.offset().top-70
    }, 500, 'swing', function () {
     window.location.hash = target;
    });
  });

//   For Close Your Navbar In Mobile On Click A Tag
  $(document).ready(function(){
    $(".nav-item-2").click(function(){
      $(".collapse").removeClass("show");
    });
  });

//   End Here For Close Your Navbar In Mobile On Click A Tag

$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
       $('#header_menu').addClass('fixed-header');
    } else {
       $('#header_menu').removeClass('fixed-header');
    }
});

function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
}

$(document).ready(function(){
    $('.toggle').click(function(){
      $('.sidebar-contact').toggleClass('active')
      $('.toggle').toggleClass('active')
    })
})

$(document).ready(function() {
    $(".sub-residential").click(function() {
      $(".residential-sub-menu").addClass("active");
      $(".commerical-sub-menu").removeClass("active");
    });
  
    $(".btn-close").click(function() {
      $(".residential-sub-menu").removeClass("active");
    });
  
    $(".sub-commerical").click(function() {
      $(".commerical-sub-menu").addClass("active");
      $(".residential-sub-menu").removeClass("active");
    });
  
    $(".btn-close").click(function() {
      $(".commerical-sub-menu").removeClass("active");
    });
  
    // Auto-close sub-menus on scroll
    $(window).scroll(function() {
      var scrollPosition = $(window).scrollTop();
      if (scrollPosition >= 80) {
        $(".residential-sub-menu, .commerical-sub-menu").removeClass("active");
      }
    });
});

$('.openmodal').click(function(){
    $("#enqodal").modal('show');
})