<?php
use Resource\Collection\LinkedList;
class Itemshop extends Model{
    public $sid;
    public $category;
    public $shopname;
    public $shoptype;
    public $description;
    public $imageurl;
    public $status;
    public $restriction;
    public $salestax;
    public $items;
    protected $total = 0;
    public function __construct($shopname){
        // Fetch the database info into object property
	    $mysidia = Registry::get("mysidia");
	    $row = $mysidia->db->select("shops", array(), "shopname ='{$shopname}'")->fetchObject();
	    if(!is_object($row)) throw new Exception("Invalid Shopname specified");
	    // loop through the anonymous object created to assign properties
        foreach($row as $key => $val){
            $this->$key = $val;
        }
        $this->items = $this->getitemnames();
	    $this->total = (is_array($this->items))?count($this->items):0;
    }
    public function getcategory(){
	    $mysidia = Registry::get("mysidia");
	    $stmt = $mysidia->db->select("shops", array(), "category ='{$this->category}'");
        $cate_exist = ($row = $stmt->fetchObject())?TRUE:FALSE;
	    return $cate_exist;
    }
    public function getshop(){
	    $mysidia = Registry::get("mysidia");
	    if(empty($this->shopname)) $shop_exist = FALSE;
	    else{
	        $stmt = $mysidia->db->select("shops", array(), "shopname ='{$this->shopname}'");
		    $shop_exist = ($row = $stmt->fetchObject())?TRUE:FALSE;
	    }
	    return $shop_exist;
    }
    public function getitemnames(){
  	    if(!$this->items){
		    $mysidia = Registry::get("mysidia");
		    $stmt = $mysidia->db->select("items", array("itemname"), "shop ='{$this->shopname}'");
		    $items = array();
		    while($item = $stmt->fetchColumn()){
		        $items[] = $item;
		    }
		    return $items;
	    }
	    else return $this->items;
    }
    public function gettotal(){
	    return $this->total;
    }
    //rpg 상점
    public function display(){
        $mysidia = Registry::get("mysidia");
        $document = $mysidia->frame->getDocument();
        //$document->addLangvar($mysidia->lang->select_item);
        if($this->gettotal() == 0){
            $document->addLangvar($mysidia->lang->empty);
            return FALSE;
        }
        # Choose the NPC image based on the name of the shop
        switch ($this->shopname) {
            case "Food Store":   //"Crossed Road"
                $npc_img = "/picuploads/png/shopnpc_itemshop.png";
                #Based on the random number, sets a quote for $npc_text
                $num = Rand (1,6);
                switch ($num) {
                    case 1: $npc_text = "저희 식품은 안전합니다."; break;   //"Time is money."
                    case 2: $npc_text = "어서오세요~ 호갱.. 아니 고객님^^"; break;   //"Isn't icecream super?"
                    case 3: $npc_text = "식료품점에 오신것을 환영합니다!"; break;   //"Welcome to {$this->shopname}!"
                    case 4: $npc_text = "교수님 사랑합니다♡"; break;   //"Off to see the wizard?"
                    case 5: $npc_text = "드래곤에게 도움이되는 식품을 팔고 있습니다."; break;   //"Tomorrow is another day..."
                    case 6: $npc_text = "고기들이 아주 신선해요!";
                }
                break;   //"PHP is cool!"
            case "Drug Store":
                $npc_img = "/picuploads/png/shopnpc_drugstore.png";
                #Based on the random number, sets a quote for $npc_text
                $num = Rand (1,6);
                switch ($num) {
                        case 1: $npc_text = "진료는 의사에게, 약은 약사에게"; break;
                        case 2: $npc_text = "약물 오남용은 건강을 해칩니다."; break;
                        case 3: $npc_text = "어서오세요~ 호갱.. 아니 고객님^^"; break;
                        case 4: $npc_text = "드래곤에게 사용할 수 있는 약품을 팔고 있습니다."; break;
                        case 5: $npc_text = "쀼익~!@#$%!#*&"; break;
                        case 6: $npc_text = "교수님 사랑합니다♡";
                }
                break;
            default;
                $npc_img = "/picuploads/png/shopnpc_test.png";
                $npc_text = "{$this->shopname}";
                break;
        }
        # let's begin rendering the page
        $document->add(new Comment("
            <style>
                .s_top {
                  overflow:hidden;
                  display: block;
                }
                .sc_npc_text{
                  width: 300px;
                  float: left;
                  position: relative;
                  height: 70px;
                  padding: 15px;
                  margin: 10px;
                  margin-top: 180px;
                  font-family: 'Nanum Gothic', 'Trebuchet MS', Helvetica, sans-serif;
                  overflow: auto;
                }
                .sc_npc_img{
                  width: 40%;
                  float: left;
                }
                .sc_item {
                  display: inline-table;
                  padding: 5px;
                  text-align: center;
                  font-family: 'Nanum Gothic', 'Trebuchet MS', Helvetica, sans-serif;
                  font-size: 14px;
                  margin-bottom: 3px;
                }
                .s_panel {
                  border-radius: 2px;
                  border: 1px solid #CCC;
                  background-color: #FBFDF2;
                }
            </style>
            <!-- START Container for Text and NPC -->
                <div class='s_top s_container'>
                    <div class='s_panel sc_npc_text'>{$npc_text}</div>
                    <div class='sc_npc_img'><img  src='{$npc_img}' height='300'></div>
                </div>
            <!-- END Container for Text and NPC -->
            <!-- START Container for Items -->
                  <div class='s_container'>
        ", FALSE));
        # Now render each item the store has
        foreach($this->items as $stockitem){
              $item = $this->getitem($stockitem);
              #descriptions of the item functions
            switch ($item->function) {
                /*case "Click1": $usage = "<br/><b>use:</b> Feed a pet to give them {$item->value} EXP."; break;
                case "Click2": $usage = "<br/><b>use:</b> Feed a pet to set their EXP to {$item->value}."; break;
                case "Click3": $usage = "<br/><b>use:</b> Resets EXP earned today to 0."; break;
                case "Level1": $usage = "<br/><b>use:</b> Raises the Level of your pet by {$item->value}."; break;
                case "Level2": $usage = "<br/><b>use:</b> Sets the Level of your pet to {$item->value}."; break;
                case "Level3": $usage = "<br/><b>use:</b> Makes your pet Level 0 again!"; break;
                case "Gender": $usage = "<br/><b>use:</b> Swaps the gender of your pet to its opposite!"; break;*/
                default;
                    $usage = "";
                    break;
            }
            # Now let's render each item icon, name, price and tooltip
            $document->add(new Comment("
                <div class='s_panel sc_item'>
                <img rel='tooltip' title='{$item->description} <em>{$usage}</em>' src='{$item->imageurl}'/><br/>
                  <b>{$item->itemname}</b>
                  <br/>
                  {$item->price} {$mysidia->settings->cost}<br/>
                ", FALSE));
            # Building the Buy form
            $buyForm = new FormBuilder("buyform", "../purchase/{$mysidia->input->get("shop")}", "post");
            $buyForm->setLineBreak(FALSE);
            $buyForm->buildPasswordField("hidden", "action", "purchase")
                    ->buildPasswordField("hidden", "itemname", $item->itemname)
                    ->buildPasswordField("hidden", "shopname", $shop->shopname)
                    ->buildPasswordField("hidden", "shoptype", "itemshop")
                    ->buildPasswordField("hidden", "salestax", $shop->salestax);
            $quantity = new TextField("quantity", "1");
            $quantity->setSize(3);
            $quantity->setMaxLength(3);
            $quantity->setLineBreak(FALSE);
            $buy = new Button("Buy", "buy", "buy");
            $buy->setLineBreak(FALSE);
            $buyForm->add($quantity);
            $buyForm->add($buy);
            # Actually adding in the Quantity field Buy button now
             $document->add($buyForm);
            # Now we finish off the item by closing its div
            $document->add(new Comment("</div>", FALSE));
        }
        # And that's a wrap
        $document->add(new Comment("</div><!-- END Container for Items -->", FALSE));
    }  #END display function
    /*public function display(){
	    $mysidia = Registry::get("mysidia");
	    $document = $mysidia->frame->getDocument();
	    $document->addLangvar($mysidia->lang->select_item);
        if($this->gettotal() == 0){
            $document->addLangvar($mysidia->lang->empty);
		    return FALSE;
        }
	    $itemList = new TableBuilder("shop");
	    $itemList->setAlign(new Align("center", "middle"));
        $itemList->buildHeaders("Image", "Category", "Name", "Description", "Price", "Buy");
	    $itemList->setHelper(new ShopTableHelper);
	    foreach($this->items as $stockitem){
	  	    $item = $this->getitem($stockitem);
		    $cells = new LinkedList;
	        $cells->add(new TCell(new Image($item->imageurl)));
		    $cells->add(new TCell($item->category));
		    $cells->add(new TCell($item->itemname));
		    $cells->add(new TCell($item->description));
		    $cells->add(new TCell($item->price));
		    $cells->add(new TCell($itemList->getHelper()->getItemPurchaseForm($this, $item)));
		    $itemList->buildRow($cells);
        }
	    $document->add($itemList);
    }*/
    public function getitem($itemname){
	  return new StockItem($itemname);
    }
    public function purchase(Item $item){
        $mysidia = Registry::get("mysidia");
	    if($item->owner != $mysidia->user->username) Throw new NoPermissionException('Something is very very wrong, please contact an admin asap.');
	    else{
            $item->quantity = $mysidia->input->post("quantity");
	        $cost = $item->getcost($this->salestax, $item->quantity);
		    $moneyleft = $mysidia->user->money - $cost;
		    if($moneyleft >= 0 and $item->quantity > 0){
                $purchase = $item->append($item->quantity, $item->owner);
                $mysidia->db->update("users", array("money" => $moneyleft), "username = '{$item->owner}'");
                $status = TRUE;
            }
	        else throw new InvalidActionException($mysidia->lang->money);
	    }
	    return $status;
    }
    public function rent($item, $period){
    }
    public function execute($action){
    }
  	protected function save($field, $value){
		$mysidia = Registry::get("mysidia");
		$mysidia->db->update("shops", array($field => $value), "sid='{$this->sid}' and shoptype = 'adoptshop'");
	}
}
?> 