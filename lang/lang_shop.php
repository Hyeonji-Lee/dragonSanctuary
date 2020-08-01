<?php

//Language variables used for Shop Page

$lang['access'] = "상점";   //"Welcome to the shop";
$lang['denied'] = "당신은 상점 이용이 금지되어 있습니다. 관리자에게 문의하시기 바랍니다.";   //"It appears that you have been banned from shopping. Please contact an administrator for assistance.";
$lang['none'] = "<br>현재 이용가능한 상점이 없으므로 나중에 오시기 바랍니다.";   //"<br>Currently there is no active shop available, please come back later.";
$lang['select'] = "방문할 상점을 선택하세요.<br>";   //"Please select a shop for you to visit:<br>";
$lang['empty'] = "이 상점은 현재 비어있습니다. 오류가 의심된다면 관리자에게 문의하세요.<br>";   //"<br>The shop is currently empty, please contact an admin if you believe this is a mistake.";
$lang['welcome'] = "{$mysidia->input->get("shop")}";   //"Welcome to {$mysidia->input->get("shop")}";
$lang['select_item'] = "구매할 아이템을 선택하세요.:";   //"Please select the items to buy:";
$lang['select_adopt'] = "입양할 드래곤 알을 선택하세요.:";   //"Please select an adoptable to buy:";
$lang['invalid_quantity'] = "구매할 아이템의 수량을 입력하세요.<br>";   //"You have yet to specify the quantity of items to buy...<br>";
$lang['full_quantity'] = "구매할 수 있는 수량을 초과했거나, 인벤토리에 소지할 수 있는 아이템 개수를 초과하였습니다.<br>";   //"It seems that you are trying to purchase too many items, the new quantity has exceeded the cap specified by admin...<br>";
$lang['purchase_item'] = "{$mysidia->input->post("itemname")}을(를) {$mysidia->input->post("quantity")} 개 구매했습니다. 총 구매 가격: ";   //"You have purchased Item {$mysidia->input->post("quantity")} {$mysidia->input->post("itemname")} at a cost of: ";
$lang['purchase_adopt'] = "{$mysidia->input->post("adopttype")}을(를) 구매했습니다.";   //"You have purchased Adoptable {$mysidia->input->post("adopttype")} at a cost of: ";
$lang['money'] = "골드가 부족하거나 수량을 잘못 입력했습니다.<br>";   //"It seems that you either do not have enough money to afford this transaction, or that you have entered an invalid value for the field quantity...<br>";

?>