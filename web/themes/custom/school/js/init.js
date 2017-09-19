jQuery(function ($) {
    $('.main-navigation').onePageNav({
        currentClass: 'active'
    });    
    (function () {
        var bodyEl = document.body,                
                openbtn = document.getElementById('open-button'),
                closebtn = document.getElementById('close-button'),
                isOpen = false;

        function init() {
            initEvents();
        }

        function initEvents() {
            openbtn.addEventListener('click', toggleMenu);
            if (closebtn) {
                closebtn.addEventListener('click', toggleMenu);
            }            
        }
        function toggleMenu() {
            if (isOpen) {
                classie.remove(bodyEl, 'show-menu');
            }
            else {
                classie.add(bodyEl, 'show-menu');
            }
            isOpen = !isOpen;
        }
        init();
    })();
});