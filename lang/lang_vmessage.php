<?php

//Language variables used for Visitor Messages Page

$lang['view_title'] = "Viewing Conversation";
$lang['view'] = "conversation between {$mysidia->input->get("id")} and {$mysidia->input->get("id2")}<br><br>";
$lang['view_empty'] = "No VM has been found between the two users.";
$lang['view_nonexist'] = "An error has occurred. The visitor message does not exist.";
$lang['user_nonexist'] = "You have yet to specify the users conversation to read.";
$lang['user_same'] = "Cannot view convo between the same user...";
$lang['edit_title'] = "댓글 수정하기";   //"Editing Profile Comment"
$lang['edit_denied'] = "You do not have permission to edit this profile comment.";
$lang['edit_default'] = "댓글을 수정하려면 아래의 텍스트 영역에 새 댓글을 작성하고, 댓글 수정 버튼을 클릭하세요.";
//Please edit the content of profile comment from the textbox below
$lang['edit_success'] = "댓글이 수정되었습니다.";   //The message has been successfully edited
$lang['delete_title'] = "댓글 삭제";   //Deleting Profile Comment
$lang['delete_denied'] = "You do not have permission to delete this profile comment.";
$lang['delete_success'] = "댓글이 삭제되었습니다.";   //The message has been successfully deleted

?>