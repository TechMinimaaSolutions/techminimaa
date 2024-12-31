//for header mobile menu
var toggleOpen = document.getElementById('toggleOpen');
var toggleClose = document.getElementById('toggleClose');
var collapseMenu = document.getElementById('collapseMenu');

function handleClick() {
  if (collapseMenu.style.display === 'block') {
    collapseMenu.style.display = 'none';
  } else {
    collapseMenu.style.display = 'block';
  }
}

toggleOpen.addEventListener('click', handleClick);
toggleClose.addEventListener('click', handleClick);

//for contact us today button
var contactBtn = document.getElementById('contactBtn');
contactBtn.addEventListener('click', function () {
  document.getElementById('contact')?.scrollIntoView({
    behavior: 'smooth',
    block: 'start'
  });
});

// Start Review Script
$('.owl-carousel').owlCarousel({
  loop: true,
  responsiveClass: true,
  dots: false,
  nav: true,
  smartSpeed: 1000,
  navText: [" ", " "],
  items: 1,
  autoplay: true,
  responsive: {
      768: {
          items: 2,
      },
      1024: {
          items: 3,
      }
  }
});
setInterval(function () {
  var target = $(".owl-item.active .review-item").data('target');
  $(".content-list").find("#" + target).show().siblings().hide();
}, 100);
$('.owl-next').addClass("btn-active");
$('.owl-prev,.owl-next').click(function () {
  $(this).addClass("btn-active").siblings().removeClass("btn-active");
});
// End Review Script


 // FAQ Script
 $('.ques').click(function () {
  $(this).parent().toggleClass('active').find('.ans').slideToggle();
  $(this).parent().siblings(".faq-item").removeClass('active').find('.ans').slideUp();
  
});

