<?php

use Resource\Collection\LinkedList;

class ShopView extends View{

	public function index(){
		$document = $this->document;
	    $document->setTitle($this->lang->access);
        $document->add(new Comment(""));

		$typeForm = new Form("shoptypes", "shop", "post");
		$typeSelection = new DropdownList("shoptype");
		$typeSelection->add(new Option("아이템", "itemshop"));   //"Itemshop", "itemshop"
		$typeSelection->add(new Option("드래곤", "adoptshop"));   //"Adoptshop", "adoptshop"
		$typeForm->add($typeSelection);
		$typeForm->add(new Button("입장", "submit", "submit"));   //"Go"
		$document->add($typeForm);

		$shopList = $this->getField("shopList");
	    $document->addLangvar($this->lang->select);
		$shopTable = new TableBuilder("shoplist");
		$shopTable->setAlign(new Align("center", "middle"));
		#$shopTable->buildHeaders(" ", "파는 물건", "종류", "상점명", "설명", "할인률", "입장하기");	  //"Image", "Category", "Type", "Name", "Description", "Sales Tax", "Enter"
        $shopTable->buildHeaders("<p style=text-align:center;>상점입장</p>", "<p style=text-align:center;>설명</p>", "<p style=text-align:center;>할인률</p>");
	    $shopTable->setHelper(new ShopTableHelper);

		$iterator = $shopList->iterator();
		while($iterator->hasNext()){
            $entry = $iterator->next();
		    $shop = $shopList->createshop($entry->getKey());
			$cells = new LinkedList;

            $cells->add(new TCell($shopTable->getHelper()->getShopStatus($shop)));
            if($shop->status=="open"){
                $cells->add(new TCell($shop->description));
            }
            else{
                $cells->add(new TCell("CLOSED"));
            }
            $cells->add(new TCell($shopTable->getHelper()->getSalestax($shop->salestax)));
			/*$cells->add(new TCell($shopList->getshopimage($shop->imageurl)));
			$cells->add(new TCell($shop->category));
			$cells->add(new TCell($shop->shoptype));
			$cells->add(new TCell($shop->shopname));
			$cells->add(new TCell($shop->description));
			$cells->add(new TCell($shopTable->getHelper()->getSalestax($shop->salestax)));
			$cells->add(new TCell($shopTable->getHelper()->getShopStatus($shop)));*/
			$shopTable->buildRow($cells);
		}
        $document->add($shopTable);
	}

	public function browse(){
		$document = $this->document;
        if($this->lang->welcome=="Food Store") {
            $document->setTitle("식료품점");
        }
        else if($this->lang->welcome=="Drug Store") {
            $document->setTitle("약국");
        }
		else {
            $document->setTitle($this->lang->welcome);
        }
        $shop = $this->getField("shop");
        $shop->display();
	}

	public function purchase(){
        $mysidia = Registry::get("mysidia");
		$cost = $this->getField("cost");
		$document = $this->document;

	    if($mysidia->input->post("shoptype") == "itemshop"){   //"itemshop"
		    $document->setTitle($this->lang->global_transaction_complete);
	        $document->addLangvar("{$this->lang->purchase_item}{$cost->getValue()} {$mysidia->settings->cost}");
            $document->add(new Comment("<br><a href='/inventory'>내 인벤토리</a>"));
		}
		elseif($mysidia->input->post("shoptype") == "adoptshop"){   //"adoptshop"
            $document->setTitle($this->lang->global_transaction_complete);
	        $document->addLangvar("{$this->lang->purchase_adopt}{$cost->getValue()} {$mysidia->settings->cost}");
		}
		else return;
	}
}
?>