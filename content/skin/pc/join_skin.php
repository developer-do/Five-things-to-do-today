<div class="form_wrap">
  <form action="<?= ROOT_CHECK ?>/memberIdCheck.php" id="joinForm" method="POST">
    <div>
      <label for="userID">아이디</label>
      <input type="text" name="userID" id="userID" required />
      <input type="button" id="checkID" value="아이디 중복확인" />
    </div>
    <div>
      <label for="userName">이름</label>
      <input type="text" name="userName" id="userName" required />
    </div>
    <div>
      <label for="userPassword">비밀번호</label>
      <input type="password" name="userPassword" id="userPassword" required />
    </div>
    <div>
      <label for="userPassword">비밀번호 확인</label>
      <input type="password" name="userPasswordChk" id="userPasswordChk" required />
    </div>
    <div>
      <label for="userBirthDay">생년월일</label>
      <input type="text" name="userBirthDay" id="userBirthDay" placeholder="ex)2000/10/10 => 20001010" required />
    </div>
    <div>
      <label for="userEmail">이메일</label>
      <input type="email" name="userEmail" id="userEmail" required />
    </div>
    <div>
      <input type="button" id="lastChk" value="확인" disabled />
      <input type="submit" id="formSubmitBtn" value="가입하기" disabled />
    </div>
  </form>
</div>