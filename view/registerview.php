<meta charset="utf-8" />

<?php

class RegisterView extends View{
	
	public function index(){
	    $mysidia = Registry::get("mysidia");
		$document = $this->document;		
	    if($mysidia->input->post("submit")){
		    $document->setTitle($this->lang->success_title);
            $document->addLangvar($this->lang->success.$mysidia->input->post("username").$this->lang->success2);	
			return;
		}

        $document->setTitle($this->lang->title);
        $document->addLangvar($this->lang->default);		
		$registerForm = new Form("regform", "", "post");
		
		$requiredField = new FieldSet("required");
		$requiredField->add(new Legend("필수 정보"));
        //		$requiredField->add(new Legend("Required Info"));

		$requiredField->add(new Comment("ID: ", FALSE, "b"));
        //      $requiredField->add(new Comment("Username: ", FALSE, "b"));

        $requiredField->add(new Comment("글자,숫자,기호 포함 가능. 20자 이내. 단 숫자로만 된 ID는 불가능합니다."));
        //        $requiredField->add(new Comment("Your username may be up to 20 characters long with letters, numbers and spaces only."));

        $requiredField->add(new TextField("username"));
        $requiredField->add(new Comment("비밀번호: ", FALSE, "b"));
        //        $requiredField->add(new Comment("Password: ", FALSE, "b"));

        $requiredField->add(new Comment("글자, 숫자, 특수기호 포함하여 20자 이내. * 나 ! 같은 특수기호 사용을 보안성 향상을 위해 추천합니다. "));
        //        $requiredField->add(new Comment("Your password may be up to 20 characters long and may contain letters, numbers, spaces and special characters. The use of a special character, such as * or ! is recommended for increased security. "));

        $requiredField->add(new Comment("비밀번호 등록", FALSE));
        //        $requiredField->add(new Comment("Enter Password ", FALSE));

		$requiredField->add(new PasswordField("password", "pass1", "", FALSE));
        $requiredField->add(new Comment("비밀번호 확인", FALSE));
        //        $requiredField->add(new Comment(" Confirm Password ", FALSE));

        $requiredField->add(new PasswordField("password", "pass2", "", TRUE));
        $requiredField->add(new Comment("이메일 주소: ", FALSE, "b"));
        //        $requiredField->add(new Comment("Email Address: ", FALSE, "b"));

        $requiredField->add(new Comment("사용가능한 주소를 등록하세요."));
        //        $requiredField->add(new Comment("Enter a valid email address for yourself."));

        $requiredField->add(new PasswordField("email", "email", "", TRUE));
        $registerForm->add($requiredField);

        $additionalField = new FieldSet("additional");
        $additionalField->add(new Legend("추가 정보"));
        //        $additionalField->add(new Legend("Additional Info"));

        $additionalField->add(new Comment("생일: ", FALSE, "b"));
        //        $additionalField->add(new Comment("Birthday: ", FALSE, "b"));

        $additionalField->add(new Comment("(월/일/년도)     예시(03/26/2002)"));
        //        $additionalField->add(new Comment("(mm/dd/yyyy)"));

        $additionalField->add(new TextField("birthday"));
		$additionalField->add(new Comment("프로필 이미지: ", FALSE, "b"));
        //		$additionalField->add(new Comment("Avatar: ", FALSE, "b"));

        $additionalField->add(new Comment("http://www. 로 시작하는 프로필 이미지의 링크 주소를 입력하세요"));
        //        $additionalField->add(new Comment("Enter the url of your avatar beginning with http://www."));

        $additionalField->add(new TextField("avatar", "templates/icons/default_avatar.gif"));
		$additionalField->add(new Comment("닉네임: ", FALSE, "b"));
        //		$additionalField->add(new Comment("Nickname: ", FALSE, "b"));

        $additionalField->add(new Comment("부적절한 단어를 사용한 닉네임은 제재 당할 수 있습니다."));
        //        $additionalField->add(new Comment("A nickname for yourself, do not use inappropriate words! "));

        $additionalField->add(new TextField("nickname"));
		$additionalField->add(new Comment("성별: ", FALSE, "b"));
        //		$additionalField->add(new Comment("Gender: ", FALSE, "b"));

        $additionalField->add(new Comment("남, 여 or 알려지지 않음"));
        //        $additionalField->add(new Comment("Male, Female or Not specified"));


        $genderList = new RadioList("gender");	
		$genderList->add(new RadioButton("남", "gender", "male"));
        //		$genderList->add(new RadioButton("Male", "gender", "male"));

        $genderList->add(new RadioButton("여", "gender", "female"));
        //        $genderList->add(new RadioButton("Female", "gender", "female"));

        $genderList->add(new RadioButton("알려지지 않음", "gender", "unknown"));
        //        $genderList->add(new RadioButton("Unknown", "gender", "unknown"));

        $genderList->check("unknown");
        $additionalField->add($genderList);

		$additionalField->add(new Comment("좋아하는 색깔: ", FALSE, "b"));
        //		$additionalField->add(new Comment("Favorite Color: ", FALSE, "b"));

        $additionalField->add(new Comment("좋아하는 색깔.  ex) 빨강, 노랑, 파랑 등... "));
        //        $additionalField->add(new Comment("Your favorite color. Red, Yellow, Blue, who knows? "));

        $additionalField->add(new TextField("color"));
		$additionalField->add(new Comment("프로필: ", FALSE, "b"));
        //		$additionalField->add(new Comment("Biography: ", FALSE, "b"));

        $additionalField->add(new Comment("원하신다면 자기소개를 써 주세요"));
        //        $additionalField->add(new Comment("Enter a bio for yourself, if you want to."));

        $additionalField->add(new TextArea("bio", "", 4, 50));
		$registerForm->add($additionalField);
		
		$securityField = new FieldSet("security");
		$securityField->add(new Legend("스팸 예방 보안질문"));
        //		$securityField->add(new Legend("Anti-Spam Security Question"));

		$securityField->add(new Comment("질문: ", FALSE, "b"));
        //		$securityField->add(new Comment("Question: ", FALSE, "b"));

		$securityField->add(new Comment($mysidia->settings->securityquestion));
		$securityField->add(new Comment("답변: ", FALSE, "b"));
        //		$securityField->add(new Comment("Answer: ", FALSE, "b"));

		$securityField->add(new TextField("answer"));
		$securityField->add(new CheckBox("<a href='tos' target='_blank'>드래곤 보호구역의 서비스 약관에 동의합니다", "tos", "yes"));
        //		$securityField->add(new CheckBox("I agree to the <a href='tos' target='_blank'>Terms of Service", "tos", "yes"));

		$securityField->add(new PasswordField("hidden", "ip", $_SERVER['REMOTE_ADDR'], TRUE));
		$securityField->add(new Button("등록", "submit", "submit"));
        //		$securityField->add(new Button("Register", "submit", "submit"));

		$registerForm->add($securityField);
		$document->add($registerForm);
	}              
}
?>