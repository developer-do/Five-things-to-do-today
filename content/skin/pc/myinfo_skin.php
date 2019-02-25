<h1><?= $row['userName'] ?>님의 정보입니다.</h1>
<table>
  <tbody>
    <tr>
      <th>이름</th>
      <td><?= $row['userName'] ?></td>
    </tr>
    <tr>
      <th>생년월일</th>
      <td><?= $row['userBirthDay'] ?></td>
    </tr>
    <tr>
      <th>이메일</th>
      <td><?= $row['userEmail'] ?></td>
    </tr>
    <tr>
      <td colspan="2"><button id="myinfoChange">정보수정</button></td>
    </tr>
  </tbody>
</table>

<div id="infoUpdate" class="displayNone">
  <form action="/check/myInfoChange.php" method="POST">
    <table>
      <tbody>
        <tr>
          <th>이름</th>
          <td><input type="text" name="userName" id="userName" value="<?= $row['userName'] ?>"></td>
        </tr>
        <tr>
          <th>생년월일</th>
          <td><input type="text" name="userBirthDay" id="userBirthDay" value="<?= $row['userBirthDay'] ?>"></td>
        </tr>
        <tr>
          <th>이메일</th>
          <td><input type="email" name="userEmail" id="userEmail" value="<?= $row['userEmail'] ?>"></td>
        </tr>
        <tr>
          <th colspan="2">비밀번호를 변경하지 않으실거면 빈칸으로 남겨주세요.</th>
        </tr>
        <tr>
          <th>변경할 비밀번호</th>
          <td><input type="password" name="userPassword" id="userPassword" value=""></td>
        </tr>
        <tr>
          <th>비밀번호 확인</th>
          <td><input type="password" name="userPasswordChk" id="userPasswordChk" value=""></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" id="submitBtn" value="수정완료"></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>