/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = 'http://oto.com/admin/assets/js/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = 'http://oto.com/admin/assets/js/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = 'http://oto.com/admin/assets/js/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = 'http://oto.com/admin/assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = 'http://oto.com/admin/assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = 'http://oto.com/admin/assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
