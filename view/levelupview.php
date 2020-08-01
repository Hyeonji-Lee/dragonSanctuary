<?php

use Resource\Collection\ArrayList;
use Resource\Utility\Curl;

class LevelupView extends View{

	public function click(){
	    $mysidia = Registry::get("mysidia");
		$document = $this->document;
        $adopt = $this->getField("adopt");
		$reward = $this->getField("reward")->getValue();
		$document->setTitle("{$adopt->getName()}을(를) 돌봐 주었습니다.");
        //		$document->setTitle("{$this->lang->gave} {$adopt->getName()} one {$this->lang->unit}");
        $document->add(new Comment("<br>"));


		$image = $adopt->getImage("gui");
		$image->setLineBreak(TRUE);
		$summary = new Division;
		$summary->setAlign(new Align("center"));
        $summary->add($image);
        $summary->add(new Comment("<br>{$adopt->getName()}을(를) 한 번 돌봐주었습니다."));   //"{$this->lang->gave}{$adopt->getName()} one {$this->lang->unit}"
        $summary->add(new Comment($this->lang->encourage));
        $summary->add(new Comment("<br> {$reward}{$mysidia->settings->cost}를 얻었습니다."));
        //        $summary->add(new Comment("<br> You have earned {$reward} {$mysidia->settings->cost} for leveling up this adoptable. "));
        $summary->add(new Comment("현재 보유금액: {$mysidia->user->getcash()}{$mysidia->settings->cost}"));
        //$summary->add(new Comment("You now have {$mysidia->user->getcash()} {$mysidia->settings->cost}"));
        $document->add($summary);
	}

	public function siggy(){

	}

	public function daycare(){
		$mysidia = Registry::get("mysidia");
		$document = $this->document;
        $document->setTitle($this->lang->daycare_title);
        $document->add(new Comment());
        $document->addLangvar($this->lang->daycare, TRUE);
        $document->add(new Comment());

		$daycare = $this->getField("daycare");
        $adopts = $daycare->getAdopts();
		$daycareTable = new Table("daycare", "", FALSE);
		$daycareTable->setBordered(FALSE);
		$total = $daycare->getTotalAdopts();
        $index = 0;

		for($row = 0; $row < $daycare->getTotalRows(); $row++){
	        $daycareRow = new TRow("row{$row}");
            for($column = 0; $column < $daycare->getTotalColumns(); $column++){
			    $adopt = new OwnedAdoptable($adopts[$index]);
				$cell = new ArrayList;
				$cell->add(new Link("levelup/click/{$adopt->getAdoptID()}", $adopt->getImage("gui"), TRUE));
				$cell->add(new Comment($daycare->getStats($adopt)));
				$daycareCell = new TCell($cell, "cell{$index}");
                $daycareCell->setAlign(new Align("center", "center"));
				$daycareRow->add($daycareCell);
				$index++;
				if($index == $total) break;
            }
            $daycareTable->add($daycareRow);
		}

        $document->add($daycareTable);
		if($pagination = $daycare->getPagination()) $document->addLangvar($pagination->showPage());
	}
}
?>