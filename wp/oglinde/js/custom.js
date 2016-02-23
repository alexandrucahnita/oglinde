$ (document).ready(function(){
	$(".more").prepend($("<i class='fa fa-chevron-circle-right'></i>"));



	 $("#content img").addClass("img");
	 $("#content img").addClass("img-responsive");



	 //image fix in blog


	 var maincontentParent = $("#content").find("div.wp-caption").parent().parent().parent().width();
	 console.log(maincontentParent);

	 // $(".wp-caption").css("width", maincontentParent);
	 // $(".wp-caption").css("position", "relative");
	 // $(".wp-caption").css("left", "-50%");
	 // $(".wp-caption").css("margin-left", "-30px");

	// page collapsibel
	//$(".page-collapsible h3").collpase();


if ($('body').hasClass("page-collapsible")) {
		console.log("coll");
		$('h3').each(function(){ 
			var $targetID = 'hello';
			//
			$(this).nextUntil("h3").wrapAll('<div class="collapse" id="' + $targetID + '" />');
    		$(this).nextUntil("h3").andSelf().wrapAll('<div class="blaaa" />');
			$(this).wrap('<a class="btn btn-primary" role="button" data-toggle="collapse" href="#' + $targetID + '" aria-expanded="false" aria-controls="' + $targetID + '" />');
		});
	 } else {

	 }

});