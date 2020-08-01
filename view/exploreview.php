<?php
class ExploreView extends View {
	public function index() {
		$document = $this->document;
		$mapTitle = $this->mapTitle;
		
		$document->setTitle ( "탐험" );
		$document->add ( new Comment () );
		$document->add ( new Comment ( "<div style='text-align:left;'> 이 아름다운 섬 속에는 알수없는 여러가지 것들이 숨겨져 있습니다. 어느 지역을 탐험해 볼까요?</div>" ) );
		// $document->add(new Comment("<div style='text-align:left;'>You have decided to take some of your pets exploring down in the park. It's a beautiful day and you'd just love an adventure right about now...</div><br /><br><iframe href='map' frameborder='0' height='600' width='600'></iframe>"));
		$mapTitle = new Comment ( "<div style='text-align:center;'>드래곤 보호구역 지도</div>" );
		$mapTitle->setHeading ( 3 );
		$document->add ( $mapTitle );
		$document->add ( new Comment ( "<div style='text-align:center;'>아래 지도에서 탐험할 지역을 선택하세요.</div>" ) );
		$document->add ( new Comment ( "<img name='dsmap' src='../picuploads/png/dsmap.png' usemap='#DS_map' style='display: block; margin-left: auto; margin-right: auto;'>" ) );
		
		$document->add ( new Comment ( '<map name="DS_map">
                    <area alt="숲" href="explore/forest" shape="rect" coords="368,31,437,103" />
                    <area alt="바다" href="explore/sea" shape="rect" coords="386,477,488,537" />
                    <area alt="호수" href="explore/lake" shape="rect" coords="323,151,424,213" />
                    <area alt="산" href="explore/mountain" shape="rect" coords="259,255,319,312" />
                    <area alt="황무지" href="explore/wasteland" shape="rect" coords="176,450,312,510" />
                </map>' ) );
	} // end index
	
	public function exploreButton($areaname, $customtext = "") {
		$document = $this->document;
		/* Text-Only Links */
		/* Custom Link Text */
		$document->add ( new Comment ( "
				<form id='exploreform' action='/explore{$areaname}' name='exploreform' method='post' role='form'>
				<input id='area' name='area' type='hidden' value='{$areaname}'>
				<button id='{$areaname}' class='btn-violet btn-sm' style='display: inline;' value='explore' name='{$areaname}' type='submit '>
				{$customtext}
				</button>
				</form>
				", FALSE ) );
		return;
	} // END exploreButton
	
	public function forest() {
		$mysidia = Registry::get ( "mysidia" );
		$document = $this->document;
		$document->setAlign ( new Align ( "center" ) ); // 가운데 정렬
		$document->setTitle ( "<div style='text-align:center;'>숲</div>" );
		$document->add ( new Comment () );
		$document->add ( new Comment ( "<img src='../picuploads/png/exploreforest.png' style='display: block; margin-left: auto; margin-right: auto;'>" ) );
		$document->add ( new Comment () );
        $document->add ( new Comment ("나무들이 울창한 숲입니다. 산들바람에 나뭇잎들이 부딫히는 소리가 들려옵니다. 햇빛이 나무 사이로 은은하게 새어나오고 있고, 공기도 맑군요. 곳곳에 맛있는 버섯들도 보입니다.") );
        $document->add ( new Comment () );
		$this->exploreButton ( "forest", "탐험하기" );
	}
	
	public function sea() {
		$mysidia = Registry::get ( "mysidia" );
		$document = $this->document;
		$document->setAlign ( new Align ( "center" ) ); // 가운데 정렬
		$document->setTitle ( "<div style='text-align:center;'>바다</div>" );
		$document->add ( new Comment () );
		$document->add ( new Comment ( "<img src='../picuploads/png/exploresea.png' style='display: block; margin-left: auto; margin-right: auto;'>" ) );
		$document->add ( new Comment () );
        $document->add ( new Comment ("드넓은 바다가 펼쳐져 있습니다. 시원한 바닷바람이 불어오고, 작은 파도들이 바위에 부딫히고 있습니다. 선착장 주변엔 크고 작은 선박들이 모여있습니다.") );
        $document->add ( new Comment () );
		$this->exploreButton ( "sea", "탐험하기" );
	}

    public function lake() {
		$mysidia = Registry::get ( "mysidia" );
		$document = $this->document;
		$document->setAlign ( new Align ( "center" ) ); // 가운데 정렬
		$document->setTitle ( "<div style='text-align:center;'>호수</div>" );
		$document->add ( new Comment () );
		$document->add ( new Comment ( "<img src='../picuploads/png/explorelake.png' style='display: block; margin-left: auto; margin-right: auto;'>" ) );
		$document->add ( new Comment () );
        $document->add ( new Comment ("숲을 지나 깊고 거대한 호수를 발견하였습니다. 보석같이 생긴 돌들이 호수 주변에 많이 있네요. 호수에 사는 드래곤들도 곳곳에 보입니다.") );
        $document->add ( new Comment () );
		$this->exploreButton ( "lake", "탐험하기" );
	}

    public function mountain() {
		$mysidia = Registry::get ( "mysidia" );
		$document = $this->document;
		$document->setAlign ( new Align ( "center" ) ); // 가운데 정렬
		$document->setTitle ( "<div style='text-align:center;'>산</div>" );
		$document->add ( new Comment () );
		$document->add ( new Comment ( "<img src='../picuploads/png/exploremountain.png' style='display: block; margin-left: auto; margin-right: auto;'>" ) );
		$document->add ( new Comment () );
        $document->add ( new Comment ("높은 산에 도착했습니다. 주변엔 등산을 하려는 사람들과 약초를 캐고있는 사람들로 시끌벅적 합니다.") );
        $document->add ( new Comment () );
		$this->exploreButton ( "mountain", "탐험하기" );
	}

    public function wasteland() {
		$mysidia = Registry::get ( "mysidia" );
		$document = $this->document;
		$document->setAlign ( new Align ( "center" ) ); // 가운데 정렬
		$document->setTitle ( "<div style='text-align:center;'>황무지</div>" );
		$document->add ( new Comment () );
		$document->add ( new Comment ( "<img src='../picuploads/png/explorewasteland.png' style='display: block; margin-left: auto; margin-right: auto;'>" ) );
		$document->add ( new Comment () );
        $document->add ( new Comment ("썰렁한 바람소리가 들리는 황무지에 도착했습니다. 잡초가 듬성듬성 자라있는것 빼고는 정말 아무것도 없군요. 하지만 드래곤은 황무지에도 존재합니다.") );
        $document->add ( new Comment () );
		$this->exploreButton ( "wasteland", "탐험하기" );
	}
} // end ExploreView

?>