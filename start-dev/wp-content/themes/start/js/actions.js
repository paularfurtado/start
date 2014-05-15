var $j = jQuery.noConflict();
$j(document).ready(function(){
	$j('em.tooltip[title]').qtip({
	   show: 'mouseover',
	   hide: 'mouseout',
	   tip: true,
	   style: {
		   name: 'blue',
		   tip: true
		}
	});
});