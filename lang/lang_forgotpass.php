<?php
//Language variables used for Forgotpass Page
$lang['title'] = "비밀번호 재설정 요청";   //"Request Password Reset"
$lang['default'] = "비밀번호를 잊어버렸을 경우, 아래의 양식에 따라 아이디와 이메일 주소를 작성하여 제출하면 비밀번호를 재설정 할 수 있는 링크를 이메일로 보내드립니다.<br><br>";
//"So, you've forgotten your password?  Don't worry, it happens to the best of us.  Simply fill out the form below with your username and email address and we'll email you a link to reset your password.<br><br>"
$lang['invalidcode_error'] = "잘못된 활성화 코드";   //"Incorrect activation code"
$lang['invalidcode'] = "입력하신 활성화 코드가 올바르지 않습니다. 무효한 코드입니다.";   //"The activation code you entered is incorrect. It is possible that the code is invalid."
$lang['reset_title'] = "비밀번호 재설정";   //"Reset Password"
$lang['reset'] = "계속하려면 아이디, 이메일, 비밀번호 재설정 코드를 입력하세요. 비밀번호 재설정 코드는 이 사이트에 가장 최근 설정한 이메일에서 찾을 수 있습니다.<br>";
//"Enter your username, email and password reset code to proceed, the code can be found in the last email you have received from this site.<br>"
$lang['success_title'] = "성공적으로 비밀번호가 재설정 되었습니다.";   //"Password Reset Successfully"
$lang['success'] = "{$mysidia->input->post("username")}님의 비밀번호가 재설정 되었습니다.<br>";   //"Dear {$mysidia->input->post("username")},<br>Your password has been reset successfully.<br>"
$lang['instruction'] = "지금 새 비밀번호로 <a href='../login'>로그인</a>하실 수 있습니다. 그리고 비밀번호를 변경하실 수 도있습니다.";   //"You may now <a href='../login'>Log In</a> with this new password.  You can also change the password to something that is easier to remember once you are logged in."
$lang['password_error'] = "비밀번호 재설정 오류";   //"Error with password Reset"
$lang['match'] = "오류가 발생하였습니다. 아이디와 이메일을 정확하게 입력하셨는지 다시 한번 확인해 주세요.";   //"There's been an error.  The details you entered do not match any user in our system!  We cannot reset your password at this time. Please make sure you enter both username and email correctly.
$lang['email_title'] = "비밀번호 재설정 이메일 전송";   //"Password Reset Email Sent"
$lang['email'] = "비밀번호를 재설정하는 방법에 대한 자세한 설명을 이메일로 보내드렸습니다. 계속 하려면 수신된 이메일을 읽고 비밀번호 재설정 코드를 입력하세요.";   //"We have sent you an email with detailed instruction on how to reset your password, please read it and enter the password reset code to proceed."
$lang['logged_title'] = "이미 로그인 되어있습니다.";   //"You are already logged in"
$lang['logged'] = "이미 로그인 되어있습니다. 회원은 이 곳에 접근할 수 없습니다.";   //"You are already logged in, only guests can access this page."
?>