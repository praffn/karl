if (typeof contactForm !== 'undefined') void function () {

  var formEle = document.querySelector('.contact_form');
  var errorsEle = document.querySelector('.contact_form-errors');

  // Input elements
  var nameInput = document.querySelector('#contact_form-name');
  var emailInput = document.querySelector('#contact_form-email');
  var subjectInput = document.querySelector('#contact_form-subject');
  var bodyInput = document.querySelector('#contact_form-body');

  var submitButton = document.querySelector('.contact_form-submit');

  function getValues () {
    return {
      name: nameInput.value,
      email: emailInput.value,
      subject: subjectInput.value,
      body: bodyInput.value
    };
  }

  function checkValues(data) {
    var errors = [];
    if (!data.name) {
      errors.push('You must supply your name');
    }
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
        errmsg.push('<i class="fa fa-exclamation fa-fw"></i> ' + errors[i]);
      } else {
        errmsg.push('<i class="fa fa-exclamation fa-fw"></i> ' + errors[i] + '<br>');
      }
    }
    errorsEle.innerHTML = errmsg.join('');
  }




  formEle.addEventListener('submit', function(e) {
    e.preventDefault();

    var values = getValues();
    if (checkValues(values)) {
      sendMail(values, function(response) {
        if (response.success) success();
      });
    }

    return false;
  });

  function sendMail (values, callback) {
    var req = new XMLHttpRequest();
    req.open('POST', formEle.action, true);
    req.onreadystatechange = function() {
      if (req.readyState === req.DONE) {
        callback(JSON.parse(req.response));
      }
    }
    req.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    req.send('mail=' + JSON.stringify(values));
  }

  function success() {
    nameInput.value = '';
    emailInput.value = '';
    subjectInput.value = '';
    bodyInput.value = '';

    submitButton.innerHTML = '<i class="fa fa-check fa-fw"></i> Email sent!';
    formEle.classList.add('success');
  }

}();
