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
  const headerHeight = 80;
  const elementPosition = contactSection.getBoundingClientRect().top;
  const offsetPosition = elementPosition + window.pageYOffset - headerHeight;
  window.scrollTo({
      top: offsetPosition,
      behavior: 'smooth'
  });
}