void function () {

  var email = ['k', 'd', '.', 'm', 'l', 'o', 'h', 'o', 'r', 'b', '@', 'l', 'r', 'a', 'k'];
  var phone = ['0', '9', '3', '1', '2', '1', '0', '3', '5', '4', '+'];

  var emailTarget = document.querySelector('.injectEmail');
  var phoneTarget = document.querySelector('.injectPhone');

  emailTarget.href = 'mailto:' + email.reverse().join('');
  emailTarget.innerHTML = email.join('');

  phoneTarget.href = 'tel:' + phone.reverse().join('');
  phoneTarget.innerHTML = phone.join('');

}();
