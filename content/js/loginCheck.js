function loginChk() {
  $.ajax({
    url: '../../check/loginCheck.php',
    type: 'POST',
    data: {
      ajaxUserID: userID.value,
      ajaxPassword: userPassword.value
    },
    success: function (data) {
      alert(data);
    }
  });
}

