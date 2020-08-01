<?php
class GuideView extends View {
	public function index() {
        $mysidia = Registry::get("mysidia");
		$document = $this->document;
		$document->setTitle ( "가이드" );
		$document->add ( new Comment () );
        $document->add ( new Comment ("
            <a href='http://dragonsanctuary.modoo.at/?link=ff3zx2rp'>세계관</a><br>
            <a href='http://dragonsanctuary.modoo.at/?link=hfghokqk'>드래곤 도감</a><br>
        ") );
    } // end index

}

?>