<?php

    class ExploreWastelandView extends View{

	    public function index(){
	        $mysidia = Registry::get("mysidia");
		    $document = $this->document;
            $document->setAlign(new Align("center"));   //가운데 정렬
            $document->setTitle("<div style='text-align:center;'>황무지</div>");
            $document->add(new Comment());
            $document->add(new Comment("<img src='../picuploads/png/explorewasteland.png' style='display: block; margin-left: auto; margin-right: auto;'>"));
            $document->add(new Comment());
		    include 'inc/global.php';	//탐험가능횟수(전역변수)
			
            if ($mysidia->user->lastday != $today) {// 횟수가 남아도 날짜 같지않으면 초기화
            	$mysidia->user->exploretimes = 0;
                $mysidia->db->update("users", array("exploretimes" => 0), "username = '{$mysidia->user->username}'");
            	$mysidia->db->update("users", array("lastday" => $today), "username = '{$mysidia->user->username}'");
            }
		    $mysidia->db->update("users", array("exploretimes" => ++$mysidia->user->exploretimes), "username = '{$mysidia->user->username}'");
            if ($mysidia->user->exploretimes <= $explorecount) {
			    $random = rand(1,100);

			    if($random >= 1 && $random <= 40){
                    $species = "마이크로드래곤";     //흔한 종
                    $newadopt = new StockAdopt($species);
                    $newadopt->append($mysidia->user->username);
                    $adoptIMG = $mysidia->db->select("adoptables", array("eggimage"), "id = '10'")->fetchColumn();
                    $document->add(new Comment("<img src='$adoptIMG' alt='$species IMG' /><br>", FALSE));
                    $document->add(new Comment());
                    $document->add(new Comment("<b>$species</b>의 알을 발견했습니다!", FALSE));   //"Oh look! You found a $species! It's pretty common."
                }
                elseif($random >= 41 && $random <= 70){
                    $species = "이그니스 무스텔라";     //조금 희귀함
                    $newadopt = new StockAdopt($species);
                    $newadopt->append($mysidia->user->username);
                    $adoptIMG = $mysidia->db->select("adoptables", array("eggimage"), "id = '23'")->fetchColumn();
                    $document->add(new Comment("<img src='$adoptIMG' alt='$species IMG' /><br>", FALSE));
                    $document->add(new Comment());
                    $document->add(new Comment("<b>$species</b>의 알을 발견했습니다!", FALSE));   //"Oh look! You found a $species! It's pretty common."
                }
                elseif($random >= 71 && $random <= 79){
                    $species = "데몬";     //희귀함
                    $newadopt = new StockAdopt($species);
                    $newadopt->append($mysidia->user->username);
                    $adoptIMG = $mysidia->db->select("adoptables", array("eggimage"), "id = '26'")->fetchColumn();
                    $document->add(new Comment("<img src='$adoptIMG' alt='$species IMG' /><br>", FALSE));
                    $document->add(new Comment());
                    $document->add(new Comment("<b>$species</b>의 알을 발견했습니다!", FALSE));   //"Oh look! You found a $species! It's pretty common."
                }
                elseif($random == 80){
                    $species = "아트라우다";     //희귀함
                    $newadopt = new StockAdopt($species);
                    $newadopt->append($mysidia->user->username);
                    $adoptIMG = $mysidia->db->select("adoptables", array("eggimage"), "id = '28'")->fetchColumn();
                    $document->add(new Comment("<img src='$adoptIMG' alt='$species IMG' /><br>", FALSE));
                    $document->add(new Comment());
                    $document->add(new Comment("검은색 결정을 발견했습니다!!", FALSE));
                }
                elseif($random >=81 && $random <= 85){
                    $item = "검은파편";
                    $qty = 1;
                    $newitem = new StockItem($item);
                    $newitem->append($qty, $mysidia->user->username);
                    $itemIMG = $mysidia->db->select("items", array("imageurl"), "id = '19'")->fetchColumn();
                    $document->add(new Comment("<center><img src='$itemIMG' alt='$item IMG' /><br>", FALSE));
                    $document->add(new Comment());
                    $document->add(new Comment("<b>$item</b>을(를) 획득했습니다.", FALSE));   //"Oh look! You found a <b>$item</b>!"
                }
                elseif($random >= 81 && $random <= 100){
                    $document->add(new Comment("아무것도 발견하지 못했습니다.", FALSE));   //"You didn't find anything. Better luck next time."
                }
                else{
                    $document->add(new Comment("오류가 발생했습니다.", FALSE));   //"Oops! Something went wrong."
                }
            }
            else{
//            	echo "<script>alert(\""+$mysidia->user->exploretimes+"\");</script>";
//            	echo "<script>alert(\""+$mysidia->user->lastday+"\");</script>";
            	//echo "<script>alert(\""+$today+"\");</script>";
            	$document->add(new Comment("오늘의 탐험 가능 횟수가 더 이상 남아있지 않습니다.", FALSE));   //"It seems you have explored too much today, why don't you take a rest?"
            }
	    }
    }
    
?>