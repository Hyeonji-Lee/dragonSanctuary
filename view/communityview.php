<?php
class CommunityView extends View {
	public function index() {
        $mysidia = Registry::get("mysidia");
		$document = $this->document;
		$document->setTitle ( "커뮤니티" );
		$document->add ( new Comment () );
        $document->add ( new Comment ("
            <a href='./levelup/daycare'>양룡장</a><br>
            <a href='http://dragonsanctuary.modoo.at'>공식 홈페이지</a><br>
        ") );
    } // end index

}

?>