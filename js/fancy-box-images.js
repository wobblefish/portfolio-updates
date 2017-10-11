/* global $ */
$(document).ready(function() {
	$(".fancybox").fancybox();
	
	$('.fancybox-iframe').load( function() {
	$('.fancybox-iframe').contents().find("head").append($("<style type='text/css'>  img{width:100%;}  </style>"));
	$(".fancybox").fancybox({
		width    : '100%', 
		height   : '100%', 
		autoSize    : false, 
		closeClick  : false, 
		fitToView   : true, 
		autoScale   : true, 
		openEffect  : 'fade', 
		closeEffect : 'fade', 
		type : 'image'
		});    		
});
});