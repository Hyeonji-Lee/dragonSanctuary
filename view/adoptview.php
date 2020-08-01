<?php

class AdoptView extends View{

	public function index(){
	    $mysidia = Registry::get("mysidia");
		$document = $this->document;

	    if($mysidia->input->post("submit")){
		    $aid = $this->getField("aid")->getValue();
			$name = $this->getField("name")->getValue();
			$eggImage = $this->getField("eggImage")->getValue();
			$image = new Image($eggImage);
			$image->setLineBreak(TRUE);

            $document->setTitle("{$name}을(를) 입양했습니다.");
            //            $document->setTitle("{$name} adopted successfully");

			$document->add($image);
			$document->addLangvar("드래곤 이름 : {$name}");
            //			$document->addLangvar("Congratulations!  You just adopted {$name}.  You can now manage {$name} on the ");

            //			$document->add(new Link("myadopts", "Myadopts Page."));
			$document->add(new Comment(""));
			$document->add(new Link("myadopts/manage/{$aid}", "{$name}의 관리페이지"));
            //			$document->add(new Link("myadopts/manage/{$aid}", "Click Here to Manage {$name}"));
			$document->add(new Comment(""));
			$document->add(new Link("myadopts/bbcode/{$aid}", "{$name}의 HTML 코드"));
            //			$document->add(new Link("myadopts/bbcode/{$aid}", "Click Here to get BBCodes/HTML Codes for {$name}"));

			$document->add(new Comment(""));
			$document->addLangvar("");
            //			$document->addLangvar("Be sure and");
			$document->add(new Link("levelup/click/{$aid}", "이 곳을 클릭하여"));
            //			$document->add(new Link("levelup/{$aid}", "feed "));
			$document->addLangvar("{$name}를 돌봐 줄 수 있습니다.");
            //			$document->addLangvar("{$name} with clicks so that they grow!");
		    return;
		}

		$document->setTitle($mysidia->lang->title);
        $document->addLangvar((!$mysidia->user->isloggedin)?$mysidia->lang->guest:$mysidia->lang->member);
        $document->add(new Comment(""));
        $adoptForm = new Form("form", "adopt", "post");
		$adoptTitle = new Comment("입양 가능한 드래곤");
        //		$adoptTitle = new Comment("Available Adoptables");
		$adoptTitle->setHeading(3);
		$adoptForm->add($adoptTitle);
		$adoptTable = new Table("table", "", FALSE);

		$adopts = $this->getField("adopts");
		for($i = 0; $i < $adopts->length(); $i++){
		    $row = new TRow;
		    $idCell = new TCell(new RadioButton("", "id", $adopts[$i]->getID()));
			$imageCell = new TCell(new Image($adopts[$i]->getEggImage(), $adopts[$i]->getType()));
			$imageCell->setAlign(new Align("center"));

			$type = new Comment($adopts[$i]->getType());
			$type->setBold();
            $description = new Comment($adopts[$i]->getDescription(), FALSE);
			$typeCell = new TCell;
            $typeCell->add($type);
            $typeCell->add($description);

		    $row->add($idCell);
			$row->add($imageCell);
			$row->add($typeCell);
            $adoptTable->add($row);
		}

		$adoptForm->add($adoptTable);
		$adoptSubtitle = new Comment(" ");
        //		$adoptSubtitle = new Comment("Adopt");
		$adoptSubtitle->setHeading(3);
		$adoptForm->add($adoptSubtitle);
		$adoptForm->add(new Comment("드래곤 이름: ", FALSE));
        //		$adoptForm->add(new Comment("Adoptable Name: ", FALSE));
		$adoptForm->add(new TextField("name"));
		$adoptForm->add(new Comment(""));
        $adoptForm->add(new Button("입양하기", "submit", "submit"));
        //      $adoptForm->add(new Button("Adopt Me", "submit", "submit"));

        $document->add($adoptForm);
	}
}
?>