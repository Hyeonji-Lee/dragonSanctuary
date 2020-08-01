<?php

//Language variables used for Inventory Page

$lang['inventory'] = "보유중인 아이템";
// $lang['inventory'] = "Here is the list of every item you own";
$lang['inventory_empty'] = "현재 보유중인 아이템이 없습니다.";
// $lang['inventory_empty'] = "You currently do not have any items in inventory.";
$lang['select_title'] = "드래곤 선택";
// $lang['select_title'] = "Select an adoptable";
$lang['select'] = "아이템을 사용할 드래곤을 선택하세요.<br>";
// $lang['select'] = "Now you need to choose an adoptable to use this item:<br>";
$lang['item_error'] = "아이템 사용 중 에러가 발생했습니다";
// $lang['item_error'] = "An error has occurred while manipulating item";
$lang['use_none'] = "인벤토리에 존재하지 않는 아이템입니다.";
// $lang['use_none'] = "It appears that you do not have this item in your inventory.";
$lang['use_fail'] = "선택된 펫에 아이템을 사용할 수 없습니다.";
// $lang['use_fail'] = "It seems that item can not be used on the adoptable selected.";
$lang['use_effect'] = "아이템 효과 적용이 거부되었습니다, 골드와 노력이 낭비되었습니다!";
// $lang['use_effect'] = "The item refuses to take effect, what a waste of money and effort!";
$lang['sell_empty'] = "판매할 아이템의 양을 구체적으로 명시하지 않았습니다...<br>";
// $lang['sell_empty'] = "You have yet to specify the quantity of items to sell...<br>";
$lang['sell_none'] = "인벤토리에 존재하지 않는 아이템입니다.";
// $lang['sell_none'] = "It appears that you do not have this item in your inventory.";
$lang['sell_quantity'] = "당신이 가진 아이템보다 더 많은 아이템을 팔려는 것으로 보입니다, 이 작업은 불가능합니다.<br>";
// $lang['sell_quantity'] = "It seems that you wish to sell more items than you already own, this action is invalid.<br>";
$lang['sell'] = "판매한 아이템: ";
// $lang['sell'] = "You have sold ";
$lang['sell2'] = "<br>성공적으로 판매하였습니다.";
// $lang['sell2'] = "successfully and earned some money back.<br>";
$lang['toss_confirm'] = "버리기 전에!";
// $lang['toss_confirm'] = "Confirm your Action";
$lang['toss_warning'] = "{$mysidia->input->post("itemname")}을(를) 정말 버리시겠습니까?<br> 
	                     버린 아이템은 인벤토리에서 영구적으로 삭제됩니다.<br>";
// $lang['toss_warning'] = "Are you sure you wish to toss {$mysidia->input->post("itemname")}?<br>
//	                     It will be permanently removed from your inventory, and this action cannot be undone!<br>";
$lang['toss_none'] = "이 아이템이 인벤토리에 없습니다.";
// $lang['toss_none'] = "It appears that you do not have this item in your inventory.";
$lang['toss'] = " ";
// $lang['toss'] = "You have successfully removed ";
$lang['toss2'] = "을(를) 버렸습니다.";
// $lang['toss2'] = " from your inventory.";
?>