SilverStripe-SortableGalleryField
=================================

Bulk upload images into a silverstripe, drag and drop reordering. Choose files from desktop or images previously uploaded



SAMPLE USAGE
============



<?php
class GalleryPage extends Page {
	
	static $has_many = array(  	 	
		'Images' => 'Image'  
	);
	
	function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$f = new SortableGalleryField('Images', 'My Images'); 
		$fields->addFieldToTab('Root.Images', $f);
		
		return $fields;
	}
}