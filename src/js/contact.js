if (typeof contactForm !== 'undefined') void function () {

  var formEle = document.querySelector('.contact_form');
  var errorsEle = document.querySelector('.contact_form-errors');

  // Input elements
  var emailInput = document.querySelector('#contact_form-email');
  var subjectInput = document.querySelector('#contact_form-subject');
  var bodyInput = document.querySelector('#contact_form-body');

  function getValues () {
    return {
      email: emailInput.value,
      subject: subjectInput.value,
      body: bodyInput.value
    };
  }

  function checkValues(data) {
    var errors = [];
    if (!data.email) {
      errors.push('You must supply an email');
    }
    if (!data.subject) {
      errors.push('Your message must have a subject line');
    }
    if (!data.body) {
      errors.push('Your message must contain a... message...');
    }

    if (errors.length > 0) {
      reportErrors(errors);
      return false;
    } else {
      return true;
    }

  }

  function reportErrors (errors) {
    var errmsg = [];
    for (var i = 0; i < errors.length; i++) {
      if (i === errors.length - 1) {
        errmsg.push(errors[i]);
      } else {
        errmsg.push(errors[i] + '<br>');
      }
    }
    errorsEle.innerHTML = errmsg.join('');
  }




  formEle.addEventListener('submit', function(e) {
    e.preventDefault();

    var values = getValues();
    if (checkValues(values)) {
      sendMail(values, function(response) {
        console.log(response);
      });
    }

    return false;
  });

  function sendMail (values, callback) {
    var req = new XMLHttpRequest();
    req.open('POST', formEle.action, true);
    req.onreadystatechange = function() {
      if (req.readyState === req.DONE) {
        callback(req.response);
      }
    }
    req.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    req.send('mail=' + JSON.stringify(values));
  }

}();
