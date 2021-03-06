<?php

class VmessageView extends View{

    public function view(){
	    $mysidia = Registry::get("mysidia");
		$document = $this->document;		
	    $document->setTitle($this->lang->view_title);
        $document->addLangvar($this->lang->view);

		$vmList = new TableBuilder("vmlist", "", FALSE);
		$vmessages = $this->getField("vmessages");
        $iterator = $vmessages->iterator();	
        while($iterator->hasNext()){
		    $vmessage = $iterator->next();
	        $vmList->buildRow($vmessage->view());
        }		
        $document->add($vmList);		
	}
	
	public function edit(){
	    $mysidia = Registry::get("mysidia");
		$document = $this->document;
		$document->setTitle($this->lang->edit_title);	
		
		$vmessage = $this->getField("vmessage");		
	    if($mysidia->input->post("submit")){
			$document->addLangvar($this->lang->edit_success);
			return;
		}	
		
		$editForm = new FormBuilder("editform", "", "post");
		$editForm->buildTextArea("vmtext", $vmessage->getcontent())
				 ->buildButton("댓글 수정", "submit", "submit");
        //"Edit Message", "submit", "submit"
		$document->addLangvar($this->lang->edit_default);		   
        $document->add($editForm);	
	}

    public function delete(){
		$document = $this->document;
		$document->setTitle($this->lang->delete_title);
		$document->addLangvar($this->lang->delete_success);		
	}
}
?>