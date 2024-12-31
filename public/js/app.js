// Add console log to verify script loading
console.log('Script loading...', new Date().toISOString());

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded');
//for header mobile menu
var toggleOpen = document.getElementById('toggleOpen');
var toggleClose = document.getElementById('toggleClose');
var collapseMenu = document.getElementById('collapseMenu');
var contactBtn = document.getElementById('contactBtn');

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
// document.addEventListener('DOMContentLoaded', function() {


contactBtn.addEventListener('click', function () {
  console.log('clicked');
  document.getElementById('contact')?.scrollIntoView({
    behavior: 'smooth',
    block: 'start'
  });
});

// });

        // Mobile menu elements
        const toggleOpen = document.getElementById('toggleOpen');
        const toggleClose = document.getElementById('toggleClose');
        const collapseMenu = document.getElementById('collapseMenu');
        const contactBtn = document.getElementById('contactBtn');

        // Debug log for elements
        console.log('Elements found:', {
            toggleOpen: !!toggleOpen,
            toggleClose: !!toggleClose,
            collapseMenu: !!collapseMenu,
            contactBtn: !!contactBtn
        });

        // Mobile menu handling
        if (toggleOpen && toggleClose && collapseMenu) {
            function handleClick() {
                collapseMenu.style.display = 
                    collapseMenu.style.display === 'block' ? 'none' : 'block';
            }

            toggleOpen.addEventListener('click', handleClick);
            toggleClose.addEventListener('click', handleClick);
        }

        // Contact button handling
        if (contactBtn) {
            contactBtn.addEventListener('click', function() {
                console.log('Contact button clicked');
                const contactSection = document.getElementById('contact');
                
                if (contactSection) {
                    contactSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                } else {
                    console.error('Contact section not found');
                }
            });
        }
    } catch (error) {
        console.error('Error in script:', error);
    }
});