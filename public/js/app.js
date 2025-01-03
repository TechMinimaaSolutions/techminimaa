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

 // Function to animate counter
 function animateValue(element, start, end, duration) {
  let current = start;
  const range = end - start;
  const increment = end > start ? 1 : -1;
  const stepTime = Math.abs(Math.floor(duration / range));
  
  const timer = setInterval(function() {
      current += increment;
      if (element.classList.contains('rating')) {
          element.textContent = current.toFixed(1) + ' / 5';
      } else if (element.classList.contains('percentage')) {
          element.textContent = current + '%';
      } else {
          element.textContent = current + '+';
      }
      
      if (current == end) {
          clearInterval(timer);
      }
  }, stepTime);
}

// Function to animate rating
function animateRating(element, start, end, duration) {
  let current = start;
  const increment = 0.1;
  const steps = Math.floor((end - start) / increment);
  const stepTime = Math.floor(duration / steps);
  
  const timer = setInterval(function() {
      current += increment;
      if (current <= end) {
          element.textContent = current.toFixed(1) + ' / 5';
      } else {
          clearInterval(timer);
          element.textContent = end.toFixed(1) + ' / 5';
      }
  }, stepTime);
}

// Create the intersection observer
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
      // If the element is in view
      if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
          // Add class to prevent re-animation
          entry.target.classList.add('animated');
          
          // Start appropriate animation based on element class
          if (entry.target.classList.contains('projects')) {
              animateValue(entry.target, 0, 100, 2000);
          } else if (entry.target.classList.contains('ongoing')) {
              animateValue(entry.target, 0, 21, 1500);
          } else if (entry.target.classList.contains('performance')) {
              animateValue(entry.target, 0, 95, 2000);
          } else if (entry.target.classList.contains('rating')) {
              animateRating(entry.target, 0, 4.6, 2000);
          }
      }
  });
}, {
  threshold: 0.1 // Trigger when at least 10% of the element is visible
});

// Observe all counter elements
document.querySelectorAll('.counter').forEach((counter) => {
  observer.observe(counter);
});


 

