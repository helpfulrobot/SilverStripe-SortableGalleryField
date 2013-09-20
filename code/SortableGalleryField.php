<?php
/**
 * Extension of the UploadField to add sorting of files
 *
 * @author bummzack
 */
class SortableGalleryField extends UploadField 
{
	
	public function Field($properties = array()) {
		//Requirements::javascript(THIRDPARTY_DIR . '/jquery-ui/jquery-ui.js');
		Requirements::javascript(SORTABLEGALLERY_DIR . '/javascript/SortableGalleryField.js');
		Requirements::css(SORTABLEGALLERY_DIR . '/css/SortableUploadField.css');
		return parent::Field($properties);
	}
	
}
