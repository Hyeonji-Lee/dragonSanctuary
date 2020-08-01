<?php

use Resource\Native\String;
use Resource\Collection\LinkedHashMap;

class MessagesView extends View{
	
	public function index(){
	    $mysidia = Registry::get("mysidia");
		$document = $this->document;
	    $document->setTitle($this->lang->access_title);
        $document->addLangvar($this->lang->access, TRUE);
 
		$document->add(new Image("templates/icons/fans.gif"));
		$document->add(new Link("messages/newpm", "Send a new PM", TRUE));
		$document->add(new Image("templates/icons/fans.gif"));
		$document->add(new Link("messages/draft", "Work on an old draft", TRUE));
		$document->add(new Image("templates/icons/fans.gif"));
		$document->add(new Link("messages/outbox", "Visit my Outbox", TRUE));
		
        $pagination = $this->getField("pagination");
		$stmt = $this->getField("stmt")->get();
        if($stmt->rowCount() == 0){
		    $document->addLangvar($this->lang->read_empty);
		    return;
		}
		
		$fields = new LinkedHashMap;
		$fields->put(new String("messagetitle"), NULL);
		$fields->put(new String("fromuser"), new String("getProfile"));
		$fields->put(new String("status"), new String("getStatus"));
		$fields->put(new String("datesent"), NULL);
		$fields->put(new String("id::read"), new String("getReadLink"));
		$fields->put(new String("id::delete"), new String("getDeleteLink"));
		
	    $pmTable = new TableBuilder("pmtable", 650);
		$pmTable->setAlign(new Align("center"));
		$pmTable->buildHeaders("Message Title", "FromUser", "Status", "Date Received", "ReadPM", "Delete");
		$pmTable->setHelper(new MessageTableHelper);
		$pmTable->buildTable($stmt, $fields);		
		$document->add($pmTable);
		$document->addLangvar($pagination->showPage());
	}
	
	public function read(){
		$mysidia = Registry::get("mysidia");
		$message = $this->getField("message");		
		$document = $this->document;
		$document->setTitle($mysidia->lang->read_title.$this->message->fromuser);
		$document->add($message->getMessage());	
	}
	
	public function newpm(){
		$mysidia = Registry::get("mysidia");
		$document = $this->document;
		
	    if($mysidia->input->post("submit")){
			$document->setTitle($mysidia->lang->global_action_complete);
			if($mysidia->input->post("draft") == "yes") $document->addLangvar($this->lang->draft_sent);
			elseif($mysidia->input->post("draftedit") == "yes") $document->addLangvar($this->lang->draft_edited);
			else{
				$document->setTitle($this->lang->sent_title);
				$document->addLangvar($this->lang->sent);
			}
			return;
		}
		
	    $document->setTitle($mysidia->lang->send_title);
		$document->addLangvar($mysidia->lang->send);		
        $message = new PrivateMessage;
		if($mysidia->input->get("id")) $user = $mysidia->input->get("id");
		$editor = $message->getEditor();	
		
        $pmForm = new Form("pmform", "", "post");
		$pmForm->add(new Comment("메세지 수신인 : ", FALSE));   //"Message Recipient: ", FALSE
		$pmForm->add(new TextField("recipient", $user, 50));
		$pmForm->add(new Comment("메세지 제목 : ", FALSE));   //"Message Title: ", FALSE
		$pmForm->add(new TextField("mtitle", "", 25));
		$pmForm->add(new Comment("메세지 내용 : ", FALSE));   //"Message Text: ", FALSE
		$pmForm->add(new Comment($editor->editor("mtext", "여기에 메세지를 입력하세요.")));   //"mtext", "Enter your message here."
		$pmForm->add(new CheckBox("메세지의 복사본을 보냅니다.", "outbox", "yes"));   //"Send a Copy to Outbox", "outbox", "yes"
		$pmForm->add(new CheckBox("임시 보관함에 저장합니다.", "draft", "yes"));   //"Save as Draft", "draft", "yes"
		$pmForm->add(new Button("메세지 보내기", "submit", "submit"));   //"Send PM", "submit", "submit"
		$document->add($pmForm);
	}
	
	public function delete(){
		$document = $this->document;
		$document->setTitle($this->lang->delete_title);
        $document->addLangvar($this->lang->delete);
	}
	
	public function outbox(){
		$mysidia = Registry::get("mysidia");
		$document = $this->document;
	    $document->setTitle($mysidia->user->username.$this->lang->outbox_title);
        $document->addLangvar($this->lang->outbox);
		
        $pagination = $this->getField("pagination");
        $folder = $this->getField("folder");
        $document->add($folder); 
		$document->addLangvar($pagination->showPage());
	}
	
	public function outboxread(){
		$document = $this->document;
		$message = $this->getField("message");
	    $document->setTitle($this->lang->read_title.$message->fromuser);  
		$document->add($message->getMessage());
	}
	
	public function outboxdelete(){
		$document = $this->document;
		$document->setTitle($this->lang->delete_title);
        $document->addLangvar($this->lang->delete);
	}
	
	public function draft(){
		$mysidia = Registry::get("mysidia");
		$document = $this->document;
	    $document->setTitle($mysidia->user->username.$this->lang->draft_title);
        $document->addLangvar($this->lang->draft);
		   
		$pagination = $this->getField("pagination");
        $folder = $this->getField("folder");
        $document->add($folder); 
		$document->addLangvar($pagination->showPage());
	}
	
	public function draftedit(){
		$mysidia = Registry::get("mysidia");
		$document = $this->document;		
		$document->setTitle($this->lang->draft_edit_title.$mysidia->user->username);
		$document->addLangvar($this->lang->draft_edit);		
		$message = $this->getField("message");
		$editor = $message->getEditor();		
        $draftForm = new Form("pmform", "../newpm", "post");

		$draftForm->add(new Comment("메세지 수신인 : ", FALSE));   //"Message Recipient: ", FALSE
		$draftForm->add(new TextField("recipient", $message->touser, 50));
		$draftForm->add(new Comment("메세지 제목 : ", FALSE));   //Message Title: ", FALSE
		$draftForm->add(new TextField("mtitle", $message->messagetitle, 25));
		$draftForm->add(new Comment("메세지 내용 : ", FALSE));   //"Message Text: ", FALSE
		$draftForm->add(new Comment($editor->editor("mtext", $message->format($message->messagetext))));
		$draftForm->add(new CheckBox("메세지의 복사본을 보냅니다.", "outbox", "yes"));   //"Send a Copy to Outbox", "outbox", "yes"
		$draftForm->add(new CheckBox("임시 보관함에 저장합니다.", "draft", "yes"));   //"Save as Draft", "draft", "yes"
		$draftForm->add(new PasswordField("hidden", "draftid", $message->mid));
		$draftForm->add(new Button("메세지 보내기", "submit", "submit"));   //"Send PM", "submit", "submit"
		$document->add($draftForm);
	}
	
	public function draftdelete(){
		$document = $this->document;
		$document->setTitle($this->lang->delete_title);
        $document->addLangvar($this->lang->delete);
	}
	
	public function report(){
		$mysidia = Registry::get("mysidia");
		$document = $this->document;		
		if($mysidia->input->post("submit")){		
			$document->setTitle($this->lang->reported_title);
			$document->addLangvar($this->lang->reported);
			return;
		}				
		$message = $this->getField("message");
		$admin = $this->getField("admin");
		
	    $reportForm = new Form("reportform", "", "post");
	    $reportForm->add(new Comment("Report Message to: ", FALSE));
	    $reportForm->add(new TextField("recipient", $admin->username));
	    $reportForm->add(new Comment("Reasons for Reporting this Message: ", FALSE));
	    $reportForm->add(new TextField("reason", "Spam", 50));
	    $reportForm->add(new PasswordField("hidden", "mtitle", $message->messagetitle));
	    $reportForm->add(new PasswordField("hidden", "mtext", $message->messagetext));
	    $reportForm->add(new Button("Report", "submit", "submit"));	
		
		$document->setTitle($this->lang->report_title);
		$document->addLangvar($this->lang->report);
		$document->add($reportForm); 
	}
}
?>