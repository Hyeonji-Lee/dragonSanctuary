<?php

//Language variables used for Myadopts Page

$lang['title'] = "내 아지트"; //Your Adoptables
$lang['default'] = "이 페이지에서 드래곤을 관리할 수 있습니다. 드래곤을 관리하거나 드래곤의 설정을 변경하려면 드래곤을 클릭하세요";
//"This page allows you to manage all of your adoptables.  Click on an adoptable to manage them or change their settings.";
$lang['empty'] = "현재 보유하고 있는 드래곤이 없습니다.";    //"You currently do not have any adoptables.";
$lang['permission'] = "다른 유저의 드래곤을 관리할 수 있는 권한이 없습니다.";   //"You do not have permission to manage adoptables of other users.";
$lang['nonfound_title'] = "드래곤을 찾을 수 없습니다.";   //"Adoptable not found";
$lang['nonfound'] = "존재하지 않는 드래곤이거나, 타인의 드래곤일 수 있습니다.";
//"It appears that the specified adoptable either does not exist at all, or does not belong to you.";
$lang['voters'] = "아래의 리스트는 당신의 드래곤을 마지막으로 돌봐 준 최근 10명의 유저들을 보여줍니다. 원한다면 돌봐 준 사람들의 프로필을 볼 수도 있고 메시지를 보낼 수도 있습니다.";
//"The chart below shows the last 10 people who clicked on your adoptable.  You can also view their profiles or send them a PM if you wish.";
$lang['clicks'] = "<br>다음 레벨에 필요한 클릭 수: ";   //"<br>Clicks Required for Level Increase: ";
$lang['maximum'] = "이 드래곤은 최대 레벨 입니다."; //"This adoptable is at its maximum level";
$lang['stats'] = "의 상태";//"'s Statistics:";
$lang['bbcode'] = "BBCode";   //"BBCodes for ";
$lang['bbcode_info'] = "이 페이지에서 당신의 드래곤에 대한 BB코드와 HTML코드를 얻을 수 있습니다. 아래의 코드를 사용하여 당신의 드래곤을 웹사이트나 포럼에 게시할 수 있습니다.
                        많은 사람들이 드래곤을 돌봐 줄수록(클릭) 드래곤이 더 빨리 자랄 수 있다는 것을 기억해 주세요.
                        <br><br> Ctrl A로 코드를 모두 선택하고 Ctrl C로 코드를 복사하여, 다른 웹사이트에 Ctrl V로 붙여 넣을 수 있습니다.";
//"This page allows you to get BBCodes and HTML codes for your adoptables.  Use the codes below to show off your adoptables on forums and websites.
//Remember, your adoptables grow faster the more clicks they get.<br><br>To select a code you can press CTRL-A to select all and then press CTRL-C to copy the code.
//Then on your website or forum post, you can press CTRL-P to paste the code.";
$lang['rename'] = "이름 변경";   //"Rename ";
$lang['trade'] = "교환 상태 설정";    //"Setting trade status for ";
$lang['pound'] = "버리기";    //"Pound ";
$lang['rename_default'] = "이 페이지에서 드래곤의 이름을 변경할 수 있습니다.";   //"This page allows you to rename ";
$lang['rename_details'] = "이름을 변경하려면 아래 칸에 새 이름을 써주세요. 문자, 숫자, 공백만 유효합니다.";
//". To rename this adoptable simply type the new name in the box below.  Valid names may only contain letters, numbers and spaces.";
$lang['rename_error'] = "이름을 변경할 수 없습니다.";  //"Cannot rename";
$lang['rename_owner'] = "원래의 드래곤 소유자만이 이름을 변경할 수 있습니다."; //"The site admin has specified that only original owners can rename their adoptables.";
$lang['rename_frozen_title'] = "드래곤이 동결되어 있어 이름을 변경할 수 없습니다.";  //"Rename Denied Because Adopt is Frozen";
$lang['rename_frozen'] = "현재 드래곤이 동결되어 있어 이름을 변경할 수 없습니다.";    //"You cannot rename this adoptable because it is currently frozen.  Please ";
$lang['rename_frozen2'] = "";   //"this adoptable before renaming it.";
$lang['rename_success_title'] = "이름 변경";//"Rename Successful";
$lang['rename_success'] = "이름을 성공적으로 변경하였습니다.";   //"You have successfully renamed ";
$lang['trade_allow'] = "이 드래곤은 교환할 수 있습니다.";  //"The adoptable's trade status is now For Trade";
$lang['trade_disallow'] = "이 드래곤은 교환할 수 없습니다.";   //"The adoptable's trade status is now Not for Trade";
$lang['freeze'] = "드래곤 동결/해동";   //"Freeze or Unfreeze Adoptable: ";
$lang['freeze_default'] = "이 페이지에서 당신의 드래곤을 동결시킬 수 있습니다. 드래곤을 동결시키면 현재 드래곤의 레벨을 유지할 수 있습니다.";
//"This page allows you to freeze an adoptable.  Freezing an adoptable allows you to keep it at its current level.";
$lang['freeze_warning'] = "<b>경고:</b> 드래곤을 동결하면 동결되어 있는 동안은 돌봐 줄 수 (클릭 할 수)없으며, 성장 단계도 고정됩니다.<br>
                           동결을 푸시려면 해동하기를 클릭하여 드래곤의 동결을 풀 수 있습니다.";
//"<b>WARNING:</b> Freezing an adoptable REJECTS any clicks that the adoptable receives while it is frozen.
//Users who click on this adoptable while it is frozen will see a message stating that their click DID NOT COUNT towards this adoptable's leveling.  By enabling
//a freeze on this adoptable you are essentially rejecting all further clicks until the adoptable is unfrozen.  In addition, some management features of this adoptable may be disabled until you unfreeze it.";
$lang['freeze_success'] = " 동결 성공";//" Frozen Successfully";
$lang['freeze_reverse'] = " 해동 성공";//" Unfrozen Successfully";
$lang['default'] = "이 페이지에서 당신의 모든 드래곤들을 관리할 수 있습니다.  클릭하여 드래곤을 관리하거나 설정을 변경하세요.";
// $lang['default'] = "This page allows you to manage all of your adoptables.  Click on an adoptable to manage them or change their settings.";
$lang['empty'] = "현재 가지고있는 펫이 없습니다.";
// $lang['empty'] = "You currently do not have any adoptables.";
$lang['permission'] = "다른 사용자의 드래곤을 관리할 권한이 없습니다.";
// $lang['permission'] = "You do not have permission to manage adoptables of other users.";
$lang['nonfound_title'] = "드래곤을 찾을 수 없습니다";
// $lang['nonfound_title'] = "Adoptable not found";
$lang['nonfound'] = "지정된 드래곤이 더이상 존재하지 않거나 소유하고 있지 않습니다.";
// $lang['nonfound'] = "It appears that the specified adoptable either does not exist at all, or does not belong to you.";
$lang['voters'] = "아래의 차트는 당신의 드래곤을 돌봐 준 최근 10명의 사람들을 보여줍니다.  그들의 프로필을 보거나 메세지를 보낼 수 있습니다.";
// $lang['voters'] = "The chart below shows the last 10 people who clicked on your adoptable.  You can also view their profiles or send them a PM if you wish.";
$lang['clicks'] = "<br>레벨업을 하기위해 필요한 클릭수: ";
// $lang['clicks'] = "<br>Clicks Required for Level Increase: ";
$lang['maximum'] = "이 드래곤은 최고레벨입니다.";
// $lang['maximum'] = "This adoptable is at its maximum level";
$lang['stats'] = "의 상태:";
// $lang['stats'] = "'s Statistics:";
$lang['bbcode'] = "HTML코드 ";
// $lang['bbcode'] = "BBCodes for ";
$lang['bbcode_info'] = "이 페이지에서 당신의 드래곤에 대한 HTML코드를 얻을 수 있습니다. 아래의 코드를 사용하여 당신의 드래곤을 웹사이트나 포럼에 게시할 수 있습니다.
                        드래곤을 게시하면 다른 유저들, 드래곤 생츄어리에 가입하지 않은 사람들도 그 드래곤을 돌봐줄 수 있습니다.
                        많은 사람들이 드래곤을 돌봐줄수록(클릭할수록) 드래곤이 더 빨리 자랄 수 있다는 것을 명심하세요.
                        <br><br> Ctrl+C로 코드를 복사하여, 다른 웹사이트에 Ctrl+V로 붙여 넣어 드래곤을 게시해보세요.";
/* $lang['bbcode_info'] = "This page allows you to get BBCodes and HTML codes for your adoptables.  Use the codes below to show off your adoptables on forums and websites.
Remember, your adoptables grow faster the more clicks they get.<br><br>To select a code you can press CTRL-A to select all and then press CTRL-C to copy the code.
Then on your website or forum post, you can press CTRL-P to paste the code.";*/
$lang['rename'] = "이름 변경 ";
// $lang['rename'] = "Rename ";
/*$lang['trade'] = "교환을 위한 세팅 ";
// $lang['trade'] = "Setting trade status for ";*/
$lang['pound'] = "버리기 ";
// $lang['pound'] = "Pound ";
$lang['rename_default'] = "이 페이지에서 이름을 변경할 수 있습니다 ";
// $lang['rename_default'] = "This page allows you to rename ";
$lang['rename_details'] = ".이름을 변경하려면 아래의 박스에 새 이름을 적으세요.  문자, 숫자, 공백만 가능합니다.";
// $lang['rename_details'] = ". To rename this adoptable simply type the new name in the box below.  Valid names may only contain letters, numbers and spaces.";
$lang['rename_error'] = "이름 변경불가";
// $lang['rename_error'] = "Cannot rename";
$lang['rename_owner'] = "원래의 드래곤 소유자만이 이름을 변경할 수 있습니다.";
// $lang['rename_owner'] = "The site admin has specified that only original owners can rename their adoptables.";
$lang['rename_frozen_title'] = "드래곤이 동결되어 이름변경이 거부됨";
// $lang['rename_frozen_title'] = "Rename Denied Because Adopt is Frozen";
$lang['rename_frozen'] = "동결된 드래곤은 이름을 변경할 수 없습니다.";
// $lang['rename_frozen'] = "You cannot rename this adoptable because it is currently frozen.  Please ";
$lang['rename_frozen2'] = "이 드래곤이름을 변경하기 전에.";
// $lang['rename_frozen2'] = "this adoptable before renaming it.";
$lang['rename_success_title'] = "이름 변경 완료";
// $lang['rename_success_title'] = "Rename Successful";
$lang['rename_success'] = "성공적으로 이름이 변경되었습니다 ";
// $lang['rename_success'] = "You have successfully renamed ";
/*$lang['trade_allow'] = "이 드래곤은 교환할 수 있습니다";
// $lang['trade_allow'] = "The adoptable's trade status is now For Trade";
$lang['trade_disallow'] = "이 드래곤은 교환할 수 없습니다";
// $lang['trade_disallow'] = "The adoptable's trade status is now Not for Trade";*/
$lang['freeze'] = "동결/해동 ";
// $lang['freeze'] = "Freeze or Unfreeze Adoptable: ";
$lang['freeze_default'] = "이 페이지에서 드래곤을 동결할 수 있습니다.  드래곤을 동결하면 현재 레벨이 유지됩니다.";
// $lang['freeze_default'] = "This page allows you to freeze an adoptable.  Freezing an adoptable allows you to keep it at its current level.";
$lang['freeze_warning'] = "<b>경고:</b> 드래곤을 동결하면 동결되어 있는 동안은 돌봐 줄 수 (클릭 할 수)없으며, 성장 단계도 고정됩니다.<br>
                           동결을 푸시려면 해동하기를 클릭하여 드래곤의 동결을 풀 수 있습니다.";
/*$lang['freeze_warning'] = "<b>WARNING:</b> Freezing an adoptable REJECTS any clicks that the adoptable receives while it is frozen.
Users who click on this adoptable while it is frozen will see a message stating that their click DID NOT COUNT towards this adoptable's leveling.  By enabling
a freeze on this adoptable you are essentially rejecting all further clicks until the adoptable is unfrozen.  In addition, some management features of this adoptable may be disabled until you unfreeze it.";*/
$lang['freeze_success'] = "동결되었습니다.";
// $lang['freeze_success'] = " Frozen Successfully";
$lang['freeze_reverse'] = "해동되었습니다.";
// $lang['freeze_reverse'] = " Unfrozen Successfully";
?>