<?php

    class ExploreLakeView extends View{

	    public function index(){
	        $mysidia = Registry::get("mysidia");
		    $document = $this->document;
            $document->setAlign(new Align("center"));   //가운데 정렬
            $document->setTitle("<div style='text-align:center;'>호수</div>");
            $document->add(new Comment());
            $document->add(new Comment("<img src='../picuploads/png/explorelake.png' style='display: block; margin-left: auto; margin-right: auto;'>"));
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

			    if($random >= 1 && $random <= 30){
                    $species = "마이크로드래곤";     //흔한 종
                    $newadopt = new StockAdopt($species);
                    $newadopt->append($mysidia->user->username);
                    $adoptIMG = $mysidia->db->select("adoptables", array("eggimage"), "id = '10'")->fetchColumn();
                    $document->add(new Comment("<img src='$adoptIMG' alt='$species IMG' /><br>", FALSE));
                    $document->add(new Comment());
                    $document->add(new Comment("<b>$species</b>의 알을 발견했습니다!", FALSE));   //"Oh look! You found a $species! It's pretty common."
                }
                elseif($random >= 31 && $random <= 60){
                    $species = "리버호스";     //흔한 종
                    $newadopt = new StockAdopt($species);
                    $newadopt->append($mysidia->user->username);
                    $adoptIMG = $mysidia->db->select("adoptables", array("eggimage"), "id = '13'")->fetchColumn();
                    $document->add(new Comment("<img src='$adoptIMG' alt='$species IMG' /><br>", FALSE));
                    $document->add(new Comment());
                    $document->add(new Comment("<b>$species</b>의 알을 발견했습니다!", FALSE));   //"Oh look! You found a $species! It's pretty common."
                }
                elseif($random >= 61 && $random <= 80){
                    $species = "앰피니르";     //조금희귀
                    $newadopt = new StockAdopt($species);
                    $newadopt->append($mysidia->user->username);
                    $adoptIMG = $mysidia->db->select("adoptables", array("eggimage"), "id = '9'")->fetchColumn();
                    $document->add(new Comment("<img src='$adoptIMG' alt='$species IMG' /><br>", FALSE));
                    $document->add(new Comment());
                    $document->add(new Comment("<b>$species</b>의 알을 발견했습니다!", FALSE));   //"Oh look! You found a $species! It's pretty common."
                }
                elseif($random >= 81 && $random <= 100){
                    $item = "수석";
                    $qty = 1;
                    $newitem = new StockItem($item);
                    $newitem->append($qty, $mysidia->user->username);
                    $itemIMG = $mysidia->db->select("items", array("imageurl"), "id = '14'")->fetchColumn();
                    $document->add(new Comment("<center><img src='$itemIMG' alt='$item IMG' /><br>", FALSE));
                    $document->add(new Comment());
                    $document->add(new Comment("<b>$item</b>을(를) 획득했습니다.", FALSE));   //"Oh look! You found a <b>$item</b>!"
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