<?php
class DragonView extends View {
	public function index() {
        $mysidia = Registry::get("mysidia");
		$document = $this->document;
		$document->setTitle ( "드래곤" );
		$document->add ( new Comment () );
        $document->add ( new Comment ("
            <a href='./adopt'>무료 분양소</a><br>
            <a href='./pound'>보호소</a><br>
        ") );
    } // end index

}

?>