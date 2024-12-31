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
function scrollToContact() {
  const contactSection = document.getElementById('contact');
  
  if (!contactSection) {
      console.error('Contact section not found');
      return;
  }
  
  // Check for smooth scroll support
  if ('scrollBehavior' in document.documentElement.style) {
      contactSection.scrollIntoView({ 
          behavior: 'smooth',
          block: 'start'
      });
  } else {
      // Fallback for browsers that don't support smooth scrolling
      const headerHeight = 80;
      const elementPosition = contactSection.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.pageYOffset - headerHeight;
      
      window.scrollTo(0, offsetPosition);
  }
}