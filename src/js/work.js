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
