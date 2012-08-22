var editor, html = '';
var CKEDITOR_BASEPATH = './js/ckeditor/';

function loadEditor(id,editorType)
{
    var instance = CKEDITOR.instances[id];
    if(instance)
    {
        CKEDITOR.remove(instance);
    }
    editor = CKEDITOR;
    editor.config.toolbar = editorType;
    editor.config.enterMode = CKEDITOR.ENTER_BR;
    editor.config.entities = false;
    editor.config.basicEntities = false;
    
    editor.config.extraPlugins = 'autogrow,placeholder';

    editor.config.autoGrow_maxHeight = 800;
    editor.config.removePlugins = 'resize';   

  		editor.config.toolbar_full =
    	[
    	    ['Source','-','Save','NewPage','Preview','-','Templates'],
    	    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
    	    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    	    ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
    	    '/',
    	    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    	    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
    	    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    	    ['BidiLtr', 'BidiRtl'],
    	    ['Link','Unlink','Anchor'],
    	    ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
    	    '/',
    	    ['Styles','Format','Font','FontSize'],
    	    ['TextColor','BGColor'],
    	    ['Maximize', 'ShowBlocks','-','About'],
	    	['CreatePlaceholder']
    	];
    	
  		editor.config.toolbar_normal =
    	[
    	    ['Source','-','Templates'],
    	    ['Cut','Copy','Paste','PasteText','PasteFromWord'],
    	    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    	    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    	    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
    	    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    	    ['Link','Unlink','Anchor'],
    	    ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
    	    ['Styles','Format','Font','FontSize'],
    	    ['TextColor','BGColor'],
    	    ['Maximize', 'ShowBlocks'],
    	  	['CreatePlaceholder']
    	];  
	    	 	 
	    editor.config.toolbar_basic =
	    [
	        ['Source','Undo','Redo'],
	        ['Bold','Italic','Underline', '-', 'NumberedList', 'BulletedList'],
	        ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	        ['Image', 'Link', 'Unlink'],
	        ['Maximize'],
	        ['CreatePlaceholder']
	    ];
	    
	    editor.config.toolbar_minimal =
		[
		    ['Bold', '-','Undo','Redo','-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','Maximize']
		];	    
    //CKFinder.SetupCKEDITOR(editor, "/ckfinder/"); 
    CKFinder.setupCKEditor( editor, './ckfinder/' );
	editor.replaceAll();  
}