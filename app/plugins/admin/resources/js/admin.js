function togglepopover(id)
{
	$('i[rel=popovercontentlist][id!=popover-id-'+id+']').popover('hide');
	$('i[id=popover-id-' + id +']').popover('toggle');
}
$(document).ready(function(){
	
	$("[rel=popover]").popover();
	$("[rel=tooltipform]").tooltip(
	{
		placement:'right'
	});	
	$("[rel=tooltipimageslist]").tooltip(
	{
		placement:'left'
	});	
	$("[rel=tooltipmenu]").tooltip(
	{
		placement:'right'
	});		
	$("[rel=tooltip]").tooltip(
	{
		placement:'top'
	});	
	$("[rel=popovercontentlist]").popover(
	{
		placement:'right',
		trigger:'manual'
	});
	$("[rel=popoverconstantlist]").popover(
	{
		placement:'right',
	});		
	$("[rel=popoverimageslist]").popover(
	{
		placement:'left'
	});			
	$('#myTab a:first').tab('show');
	$('#myTab a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		  $('i[rel=popovercontentlist]').popover('hide');
		})	
	var url = document.location.toString();
	if (url.match('#')) {
	    $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
	} 
	$(".tablesort").tablesorter(); 
});