<?php
class MypageView extends View {
	public function index() {
        $mysidia = Registry::get("mysidia");
		$document = $this->document;
		$document->setTitle ( "마이페이지" );
		$document->add ( new Comment () );
        $document->add ( new Comment ("
            <a href='./account'>내 계정 관리</a><br>
            <a href='./myadopts'>내 아지트</a><br>
            <a href='./inventory'>인벤토리</a><br>
        ") );
    } // end index

}

?>