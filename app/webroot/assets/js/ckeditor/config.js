/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = '/assets/js/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/assets/js/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '/assets/js/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = '/assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = '/assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '/assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
