	$(document).ready(function(){
		
		var saveOrder = function(){	
		    var data = getOrder($('#sortableTreeList'));
		    $.ajax({
		        url: window.HOME + 'admin/do/content/saveFromJsList/',
		        type: 'post',
		        data: { data: data },
		        error: function(){
		            alert('An error occurred while saving!');
		        }
		    })
		};		

		$('#sortableTreeList').nestedSortable({
			disableNesting: 'no-nest',
			forcePlaceholderSize: true,
			handle: 'div',
			helper:	'clone',
			items: 'li',
			maxLevels: 30,
			opacity: .6,
			placeholder: 'placeholder',
			revert: 250,
			tabSize: 25,
			tolerance: 2,
			toleranceElement: '> div',
			update: saveOrder
		});
		
		var saveOrderGallery = function(){	
		    var data = getOrder($('#sortableTreeListGallery'));
		    $.ajax({
		        url: window.HOME + 'admin/do/content/saveFromJsListGallery/',
		        type: 'post',
		        data: { data: data },
		        error: function(){
		            alert('An error occurred while saving!');
		        }
		    })
		};		

		$('#sortableTreeListGallery').nestedSortable({
			disableNesting: 'no-nest',
			forcePlaceholderSize: true,
			handle: 'div',
			helper:	'clone',
			items: 'li',
			maxLevels: 1,
			opacity: .6,
			placeholder: 'placeholder',
			revert: 250,
			tabSize: 25,
			tolerance: 'pointer',
			toleranceElement: '> div',
			update: saveOrderGallery
		});		
		var saveOrderNews = function(){	
		    var data = getOrder($('#sortableTreeListNews'));
		    $.ajax({
		        url: window.HOME + 'admin/do/content/saveFromJsListNews/',
		        type: 'post',
		        data: { data: data },
		        error: function(){
		            alert('An error occurred while saving!');
		        }
		    })
		};		
		
		$('#sortableTreeListNews').nestedSortable({
			disableNesting: 'no-nest',
			forcePlaceholderSize: true,
			handle: 'div',
			helper:	'clone',
			items: 'li',
			maxLevels: 1,
			opacity: .6,
			placeholder: 'placeholder',
			revert: 250,
			tabSize: 25,
			tolerance: 'pointer',
			toleranceElement: '> div',
			update: saveOrderNews
		});			
		
	});




