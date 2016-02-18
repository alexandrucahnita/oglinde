$ (document).ready(function(){
	$(".more").prepend($("<i class='fa fa-chevron-circle-right'></i>"));



	 $("#content img").addClass("img");
	 $("#content img").addClass("img-responsive");



	 //image fix in blog


	 var maincontentParent = $("#content").find("div.wp-caption").parent().parent().parent().width();
	 console.log(maincontentParent);

	 $(".wp-caption").css("width", maincontentParent);
	 $(".wp-caption").css("position", "relative");
	 $(".wp-caption").css("left", "-50%");
	 $(".wp-caption").css("margin-left", "-30px");

	 //fix above css if media query under 1000px
});