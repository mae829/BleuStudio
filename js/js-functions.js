//SLIDINGBOX FUNCTIONS
$(document).ready(function(){
	//Vertical Sliding
		$('.boxgrid.slidedown').hover(function(){
			var $coverWidth = $(".cover").width();
			var $coverHeight = $(".cover").height();
			$(".cover", this).stop().animate({top:-$coverHeight},{queue:false,duration:300});
		}, function() {
			$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:300});
		});
});
//set box size with preview's size when window finishes loading
$(window).load(function(){
		var $coverWidth = $(".cover").width();
		var $coverHeight = $(".cover").height();
		$(".boxgrid").width($coverWidth).height($coverHeight);
});



//GROJECT.IMAGESWITCH FUNCTIONS
$(document).ready(function(){
		var Idx = 1;
		var ChangeImage = function(){
			//If the image still animating, stop it and start the new one
			$("#mainImage").ImageStop(true,true);
			$("#mainImage").ImageSwitch({NewImage: $(".thumbImage").eq(Idx).attr("src").replace("-100x100","")});		
			//Mark which thumbnail is displaying
			$(".thumbImage").css("opacity","0.5");
			$(".thumbImage").eq(Idx).css("opacity","1");
			//Set the next image will be display
			Idx++;
			if(Idx>3){
				Idx = 0;
			}
			//Start preload the next image
			$.ImagePreload($(".thumbImage").eq(Idx).attr("src").replace("-100x100",""));			
		};
		//When a thumbnail's clicked
		$(".thumbImage").click(function(){
			Idx = $(".thumbImage").index(this);
			ChangeImage();
		});		
		
});



//CONTACT FORM 
$(document).ready(function(){
	$(".errormsg").hide();
	$(".successmsg").hide();
	$('#contact').ajaxForm(function(data) {
		if(data==1){
			$('#success').fadeIn("slow").css({
				"color" : "#00b0ff",
				"text-transform" : "uppercase"
			});
			$('#bademail').fadeOut("slow");
			$('#badserver').fadeOut("slow");
			$('#contact').fadeOut("slow");
			cosole.log(data);
		}
		else if(data==2){
			$('#badserver').fadeIn("slow").css({
				'color' : 'red', 
				'text-transform' : 'uppercase'
			});
		}
		else if(data==3){
			$('#bademail').fadeIn("slow").css({
				'color' : 'red', 
				'text-transform' : 'uppercase'
			});
		}
	});
});

