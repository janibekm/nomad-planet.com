/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'mn';
	config.extraPlugins = 'filebrowser';
	config.allowedContent = true;
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = CKEDITOR.baseHref + 'kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = CKEDITOR.baseHref + 'kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = CKEDITOR.baseHref + 'kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = CKEDITOR.baseHref + 'kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = CKEDITOR.baseHref + 'kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = CKEDITOR.baseHref + 'kcfinder/upload.php?opener=ckeditor&type=flash';
};
