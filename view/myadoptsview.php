<?php

use Resource\Native\String;
use Resource\Collection\LinkedList;
use Resource\Collection\LinkedHashMap;

class MyadoptsView extends View{

	public function index(){
	    $mysidia = Registry::get("mysidia");
		$document = $this->document;
	    $document->setTitle($this->lang->title);

        $pagination = $this->getField("pagination");
		$stmt = $this->getField("stmt")->get();
		if($stmt->rowCount() == 0){
		    $document->addLangvar($this->lang->empty);
		    return;
		}
        $document->add(new Comment(""));
	    $adoptTable = new TableBuilder("adopttable", 650);
		$adoptTable->setAlign(new Align("center", "middle"));
		$adoptTable->buildHeaders("성별", "이름/종류", "모습", "클릭 수", "레벨");
        //		$adoptTable->buildHeaders("Gender", "Name/Type", "Image", "Clicks", "Level");


		while($aid = $stmt->fetchColumn()){
		    $adopt = new OwnedAdoptable($aid);
			$cells = new LinkedList;
		    $cells->add(new TCell($adopt->getGender("gui")));
			$cells->add(new TCell("<em>{$adopt->getName()}</em> / {$adopt->getType()}"));   //"<em>{$adopt->getName()}</em> the {$adopt->getType()}"
			$cells->add(new TCell(new Link("myadopts/manage/{$aid}", $adopt->getImage("gui"))));
			$cells->add(new TCell($adopt->getTotalClicks()));
			$cells->add(new TCell($adopt->getCurrentLevel()));
			$adoptTable->buildRow($cells);
		}
		$document->add($adoptTable);
		$document->addLangvar($pagination->showPage());
	}

	public function manage(){
		$mysidia = Registry::get("mysidia");
		$aid = $this->getField("aid")->getValue();
		$name = $this->getField("name")->getValue();
		$image = $this->getField("image");

		$document = $this->document;
		$document->setTitle("{$name} 관리하기");  //"Managing {$name}"
        $document->add(new Comment());
		$document->add($image);
        $document->add(new Comment());
		$document->add(new Comment("여기서 {$name}을(를) 관리할 수 있습니다.  다음의 항목들을 선택하여 관리하세요!"));
        //"<br><br>This page allows you to manage {$name}.  Click on an option below to change settings.<br>"
        $document->add(new Comment());

		$document->add(new Image("templates/icons/add.gif"));
		$document->add(new Link("levelup/click/{$aid}", "{$name}을(를) 돌보기", TRUE));
        //		$document->add(new Link("levelup/click/{$aid}", " Level Up {$name}", TRUE));

		$document->add(new Image("templates/icons/stats.gif"));
		$document->add(new Link("myadopts/stats/{$aid}", "  {$name}의 상태", TRUE));
        //		$document->add(new Link("myadopts/stats/{$aid}", " Get Stats for {$name}", TRUE));

		$document->add(new Image("templates/icons/bbcodes.gif"));
		$document->add(new Link("myadopts/bbcode/{$aid}", " {$name}의 HTML코드", TRUE));
        //		$document->add(new Link("myadopts/bbcode/{$aid}", " Get BBCodes / HTML Codes for {$name}", TRUE));

        $document->add(new Image("templates/icons/title.gif"));
        $document->add(new Link("myadopts/rename/{$aid}", "{$name}의 이름 변경", TRUE));
        //		$document->add(new Link("myadopts/rename/{$aid}", " Rename {$name}", TRUE));

		/*$document->add(new Image("templates/icons/trade.gif"));
		$document->add(new Link("myadopts/trade/{$aid}", " {$name}의 교환 상태를 변경한다.", TRUE));
        //		$document->add(new Link("myadopts/trade/{$aid}", " Change Trade status for {$name}", TRUE));*/

		$document->add(new Image("templates/icons/freeze.gif"));
		$document->add(new Link("myadopts/freeze/{$aid}", "{$name}을(를) 동결/해동", TRUE));
        //		$document->add(new Link("myadopts/freeze/{$aid}", " Freeze or Unfreeze {$name}", TRUE));

		$document->add(new Image("templates/icons/delete.gif"));
		$document->add(new Link("pound/pound/{$aid}", "{$name}을(를) 버리기", TRUE));
        //		$document->add(new Link("pound/pound/{$aid}", " Pound {$name}", TRUE));

	}

	public function stats(){
		$mysidia = Registry::get("mysidia");
		$adopt = $this->getField("adopt");
		$image = $this->getField("image");
		$stmt = $this->getField("stmt")->get();

		$document = $this->document;
        $document->setTitle($adopt->getName().$this->lang->stats);
        $document->add($image);
		$document->add($adopt->getStats());
        $document->addLangvar("<h2>{$adopt->getName()}을(를) 돌봐준 사람들</h2><br>{$this->lang->voters}<br><br>");
        //$document->addLangvar("<h2>{$adopt->getName()}'s Voters:</h2><br>{$this->lang->voters}<br><br>");

        $fields = new LinkedHashMap;
		$fields->put(new String("username"), new String("getUsername"));
		$fields->put(new String("date"), NULL);
		$fields->put(new String("username::profile"), new String("getProfileImage"));
		$fields->put(new String("username::message"), new String("getPMImage"));

	    $voterTable = new TableBuilder("voters", 500);
		$voterTable->setAlign(new Align("center"));
        $voterTable->buildHeaders("ID", "돌봐준 날짜", "프로필", "메세지");
		//$voterTable->buildHeaders("User", "Date Voted", "Profile", "PM");
		$voterTable->setHelper(new UserTableHelper);
		$voterTable->buildTable($stmt, $fields);
		$document->add($voterTable);
	}

	public function bbcode(){
		$mysidia = Registry::get("mysidia");
		$adopt = $this->getField("adopt");
        $imageLink = $adopt->getImage();
		$document = $this->document;
		$document->setTitle($adopt->getName().$this->lang->bbcode);
		$document->addLangvar($this->lang->bbcode_info);
		$document->add(new Comment("<br>"));

        /*$forumComment = new Comment("BB코드");
        //$forumComment = new Comment("Forum BBCode: ");
		$forumComment->setUnderlined();
        $forumcode = "[url={$mysidia->path->getAbsolute()}levelup/click/{$adopt->getAdoptID()}][img]{$mysidia->path->getAbsolute()}levelup/siggy/{$adopt->getAdoptID()}[/img][/url]";
	    $forumArea = new TextArea("forumcode", $forumcode, 4, 50);
		$forumArea->setReadOnly(TRUE);

		$altComment = new Comment("BB코드 2");
        //$altComment = new Comment("Alternative BBCode: ");
        $altComment->setUnderlined();
        $altcode = "[url={$mysidia->path->getAbsolute()}levelup/click/{$adopt->getAdoptID()}][img]{$mysidia->path->getAbsolute()}get/{$adopt->getAdoptID()}.gif\"[/img][/url]";
	    $altArea = new TextArea("altcode", $altcode, 4, 50);
		$altArea->setReadOnly(TRUE);*/

        $htmlComment = new Comment("HTML코드");
		//$htmlComment = new Comment("HTML BBCode: ");
		$htmlComment->setUnderlined();
        $htmlcode = "<a href='{$mysidia->path->getAbsolute()}levelup/click/{$adopt->getAdoptID()}' target='_blank'><img src='{$mysidia->path->getAbsolute()}siggy.php?id={$adopt->getAdoptID()}' border=0></a>";
                     //<img src='{$imageLink}' border=0></a>";
        	         //<img src='{$mysidia->path->getAbsolute()}levelup/siggy/{$adopt->getAdoptID()}' border=0></a>";
	    $htmlArea = new TextArea("htmlcode", $htmlcode, 4, 50);
		$htmlArea->setReadOnly(TRUE);

        $snsComment = new Comment("SNS게시용");
		$snsComment->setUnderlined();
        $snscode = "저의 드래곤을 돌봐주세요! {$mysidia->path->getAbsolute()}levelup/click/{$adopt->getAdoptID()}";
	    $snsArea = new TextArea("snscode", $snscode, 4, 50);
		$snsArea->setReadOnly(TRUE);

		/*$document->add($forumComment);
		$document->add($forumArea);
		$document->add($altComment);
		$document->add(($mysidia->settings->usealtbbcode == "yes")?$altArea:new Comment("The Admin has disabled Alt BBCode for this site."));*/
		$document->add($htmlComment);
		$document->add($htmlArea);
        $document->add($snsComment);
		$document->add($snsArea);
	}

	public function rename(){
		$mysidia = Registry::get("mysidia");
		$adopt = $this->getField("adopt");
		$image = $this->getField("image");
		$document = $this->document;

		if($mysidia->input->post("submit")){
			$document->setTitle($this->lang->rename_success_title);
            $document->add(new Comment());
			$document->add($image);
			$message = "<br>{$this->lang->rename_success}{$mysidia->input->post("adoptname")}.
					    You can now manage {$mysidia->input->post("adoptname")} on the";
			$document->addLangvar($message);
			$document->add(new Link("myadopts/manage/{$adopt->getAdoptID()}", "My Adopts Page"));
			return;
		}

		$document->setTitle("{$adopt->getName()}의 {$this->lang->rename}");   //($this->lang->rename.$adopt->getName())
        $document->add(new Comment());
		$document->add($image);
		$document->addLangvar("<br />{$this->lang->rename_default} {$this->lang->rename_details}<br />");
        //"<br />{$this->lang->rename_default}{$adopt->getName()}{$this->lang->rename_details}<br />"

		$renameForm = new FormBuilder("renameform", "", "post");
        $renameForm->buildTextField("adoptname")->buildButton("이름 변경", "submit", "submit");
        //$renameForm->buildTextField("adoptname")->buildButton("Rename Adopt", "submit", "submit");
		$document->add($renameForm);
	}

	/*public function trade(){
		$mysidia = Registry::get("mysidia");
		$aid = $this->getField("aid")->getValue();
		$image = $this->getField("image");
        $message = $this->getField("message")->getValue();
		$document = $this->document;
        $document->setTitle($this->lang->trade);
		$document->add($image);
		$document->addLangvar($message);
	}*/

	public function freeze(){
		$mysidia = Registry::get("mysidia");
		$adopt = $this->getField("adopt");
		$image = $this->getField("image");
        $message = $this->getField("message")->getValue();
		$document = $this->document;
		$document->setTitle($this->lang->freeze);
        $document->add(new Comment());

		if($mysidia->input->get("confirm") == "confirm"){
            $document->addLangvar($message);
            $document->add(new Link("myadopts/manage/{$adopt->getAdoptID()}", "My Adopts Page"));
	    }
	    else{
		    $document->add($image);
            $document->add(new Comment());
			$document->add(new Comment("<br /><b>{$adopt->getName()}의 현재 상태: "));
            //$document->add(new Comment("<br /><b>{$adopt->getName()}'s Current Status: "));

		    if($adopt->isfrozen() == "yes"){
			    $document->add(new Image("templates/icons/freeze.gif", "Frozen"));
				$document->add(new Comment("동결<br<br>"));
                //$document->add(new Comment("Frozen<br<br>"));
				$document->add(new Comment($this->lang->freeze));
				$document->add(new Image("templates/icons/unfreeze.gif", "Unfreeze"));
                $document->add(new Link("myadopts/freeze/{$adopt->getAdoptID()}/confirm", "해동하기", TRUE));
                //$document->add(new Link("myadopts/freeze/{$adopt->getAdoptID()}/confirm", "Unfreeze this Adoptable", TRUE));
			}
			else{
			    $document->add(new Image("templates/icons/unfreeze.gif", "Not Frozen"));
				$document->add(new Comment("동결되어있지 않음.<br><br>"));
                //$document->add(new Comment("Not Frozen<br><br>"));
				$document->add(new Comment($this->lang->freeze));
				$document->add(new Image("templates/icons/freeze.gif", "Greeze"));
				$document->add(new Link("myadopts/freeze/{$adopt->getAdoptID()}/confirm", "동결하기", TRUE));
                //$document->add(new Link("myadopts/freeze/{$adopt->getAdoptID()}/confirm", "Freeze this Adoptable", TRUE));
			}
            $document->add(new Comment("<br><br>"));
            $document->add(new Image("templates/icons/warning.gif"));
			$document->addLangvar($this->lang->freeze_warning);
	    }
	}
}
?>