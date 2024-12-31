// Add console log to verify script loading
console.log('Script loading...', new Date().toISOString());

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded');

    try {
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