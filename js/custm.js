$(document).ready(function(){
	$('#myslideshow').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoWidth:true,
		autoplay:true,
		stagePadding:100,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
});
$(document).ready(function(){
	$('#myslides').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		stagePadding:100,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
});

$(document).ready(function(){
	$('#slider').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
});

$(document).ready(function(){
	$('#crausel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
});


$(document).ready(function(){
	$('#prime').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
});

$(document).ready(function(){
	$('#pass').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
});

$(document).ready(function(){
	$('#list').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
});


$(document).ready(function(){
	$('#list1').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
});

$(document).ready(function(){
	$('#list2').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
});


$(document).ready(function(){
	$('#list3').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
});


$(document).ready(function(){
	$('#pass95').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		autoplay:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
});

$(document).ready(function(){
		$("#signup").click(function(){
			var name = $("#name").val();
			var email = $("#email").val();
			var pass = $("#password").val();
			var mobile = $("#mobile").val();
			
			
			console.log(name);
			console.log(email);
			console.log(pass);
			console.log(mobile);
			var data = new FormData();
			data.append('N_name',name);
			data.append('N_email',email);
			data.append('N_pass',pass);
			data.append('N_mobile',mobile);
			
			console.log(data);
			
			$.ajax({
				type:'POST',
				url:'admin/ajax/user.php',
				contentType:false,
				processData:false,
				data:data,
				success:function(response){
					console.log(response);
				}
			});
			
		});
		
		

	
	});
	
	