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
document.addEventListener('DOMContentLoaded', function() {
  const contactBtn = document.getElementById('contactBtn');
  if (contactBtn) {
      contactBtn.addEventListener('click', function() {
          document.getElementById('contact')?.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
          });
      });
  }
});
