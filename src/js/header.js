(function() {

  var header = document.querySelector('.header');
  var CLASS = 'scrolled';
  var DISTANCE = 200;

  var lastScrollY = 0;


  window.addEventListener('scroll', processScroll);

  function processScroll(e) {

    if (lastScrollY > DISTANCE && lastScrollY > window.scrollY) {
      header.classList.remove(CLASS);
    } else if (window.scrollY > DISTANCE) {
      header.classList.add(CLASS);
    } else {
      header.classList.remove(CLASS);
    }

    return lastScrollY = window.scrollY;
    
  }

})();
