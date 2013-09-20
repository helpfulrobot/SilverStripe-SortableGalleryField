<?php


class GalleryImageController extends Controller {
	
	//basic security for controller
	static $allowed_actions = array(
		'Sort' => 'ADMIN'
	);

	function init(){
		
		parent::init();		

	}
	
	function Sort() {
		
		$pageID = $_GET['pageID'];
		$newPosition  = $_GET['newPosition'];
		$oldPosition  = $_GET['oldPosition'];
		
		$Images = DataObject::get('Image', '"ParentID" = 8');
		$Images = DataList::create('Image')->where('"ParentID" = '.$pageID)->sort('SortOrder ASC');
 		
		$loop = 0;
		$newSortOrder = 0;
		foreach($Images as $Image){
			
			if ($loop == $newPosition) { $newSortOrder++; }
			$Image->SortOrder = $newSortOrder;
			if ($loop == $oldPosition) { $newSortOrder--;  $Image->SortOrder = $newPosition; }
			
			$Image->write();
			
			$loop++;
			$newSortOrder++;
		}
				
	}

	
}
