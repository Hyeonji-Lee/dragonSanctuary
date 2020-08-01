<?php

//Language variables used for Messages Page

$lang['access_title'] = "Your Private Messages";
$lang['access'] = "This page allows you to read and send private messages.  Your received messages are listed below.  
                      Messages that have not yet been read are marked as <i>unread</i>.  Messages from <i>SYSTEM</i> are messages from the automated reward system.<br>";
$lang['denied_title'] = "Private Message Access Denied";
$lang['denied'] = "Access to the Private Message system is denied.  If you are not logged in, please Log In to access the message center.
                      If you are logged in, it is possible that the site admin banned your account from using the message system.";
$lang['read_title'] = "Reading Message From ";
$lang['read_empty'] = "<br>You currently do not have any private messages.  <br><b><a href='newpm'>Click Here</a></b> to send a new message.";
$lang['send_title'] = "새 메세지 보내기";   //"Send a new Private Message"
$lang['nonexist_title'] = "Cannot find pricate message";
$lang['nonexist'] = "The message you have attempted to access does not exist.  It is possible that it was deleted or that it never was sent in the first place.";
$lang['send'] = "이 페이지에서는 개인 메세지를 보낼 수 있습니다. 메세지를 보내려면 아래의 양식을 작성하세요. 메세지 스팸을 최소화하기 위해, 모든 BBCode 와 링크코드는 사용이 불가능하고, 오로지 텍스트만 허용됩니다.<br />";
//"This page allows you to send a new private message.  Use the form below to send the message.
//In order to minimize PM spam, all BBCode and Link Code has been disabled, so only text is allowed.<br />"
$lang['delete_title'] = "Message Deleted Successfully";
$lang['delete'] = "The message has been deleted successfully. <a href='../../messages'>Click Here</a> to view your messages.";
$lang['message_error'] = "Message Error";
$lang['messagenotfound_title'] = "Message Does Not Exist";
$lang['error'] = "An error has occurred with message";
$lang['error_friend'] = "It appears that the user only accepts private messages from his/her friends.";
$lang['error_user'] = "The user you have specified does not exist in our system.  Please go back and make sure the recepient's username is correct.";
$lang['error_blank'] = "We're sorry, but we could not send your PM because you left something blank.  Please make sure that you have added a message title and message content to your PM.";
$lang['sent_title'] = "메시지 발송 성공";   //"Your PM has been sent"
$lang['sent'] = "메시지를 보냈습니다. <a href='../messages'>여기를 클릭</a>하여 연락처 페이지로 돌아갈 수 있습니다.";
//"Your PM has been sent.  You may <a href='../messages'>Click Here</a> to return to the message center."
$lang['outbox_title'] = "'s sent items";
$lang['outbox'] = "This page displays the folder Outbox, in which messages can be reviewed by the sender.";
$lang['outbox_empty'] = "You currently do not have any sent items to view.";
$lang['draft_title'] = "'s draft items";
$lang['draft'] = "This page displays the folder Draft, in which you can continue to edit and send the messages out.";
$lang['draft_empty'] = "You currently do not have any drafts available to post.";
$lang['draft_edit_title'] = "Edit Draft From ";
$lang['draft_edit'] = "This page allows you to edit an old draft. You can send out this draft at any time you want, or simply save it as a new draft.<br />";
$lang['draft_conflict'] = "메시지 임시 보관함을 발송하는 동안은 임시로 이 메시지를 저장할 수 없습니다.";
//"You cannot save this message as draft while forwarding it to Outbox!"
$lang['draft_sent'] = "Successfully saved message to draft.";
$lang['draft_edited'] = "Successfully edited old draft.";
$lang['report_title'] = "Reporting Private Message";
$lang['report'] = "Here is the reported message below: <br /><br />";
$lang['reported_title'] = "Report submitted";
$lang['reported'] = "You have submitted the report successfully, an admin will go over it soon.";

?>