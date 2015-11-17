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

void function () {

  var email = ['k', 'd', '.', 'm', 'l', 'o', 'h', 'o', 'r', 'b', '@', 'l', 'r', 'a', 'k'];
  var phone = ['0', '9', ' ', '3', '1', ' ', '2', '1', ' ', '0', '3', ' ', '5', '4', '+'];

  var emailTarget = document.querySelector('.injectEmail');
  var phoneTarget = document.querySelector('.injectPhone');

  emailTarget.href = 'mailto:' + email.reverse().join('');
  emailTarget.innerHTML = email.join('');

  phoneTarget.href = 'tel:' + phone.reverse().join('');
  phoneTarget.innerHTML = phone.join('');

}();



// if (typeof work !== 'undefined') void function() {

//   var URL = '/wp-json/posts';
//   var ARTICLECONTAINER = document.querySelector('.work .container');
//   console.log(ARTICLECONTAINER);

//   function get (tag) {
//     return new Promise (function(resolve, reject) {
//       var req = new XMLHttpRequest();
//       req.open('GET', URL, true);
//       req.onreadystatechange = function() {
//         if (req.readyState === req.DONE) {
//           resolve(JSON.parse(req.response));
//         }
//       };
//       req.send();
//     });
//   }

//   function render(data) {
//     console.log(data);
//   }

//   function Article(data) {
    
//   }

//   function init() {
//     get().then(function(response) {
//       render(response);
//     });
//   }

//   init();

// }();
