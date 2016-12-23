function slide_handle_left() {
	var to_change = $(".sl-img.current");
	var last      = $(".imgs img:last");
	var prev;
	if (!to_change.prev().length) {
		prev = last;
	}
	else {
		prev = to_change.prev();
	}
	to_change.removeClass('current');
	prev.addClass('current');
}

function slide_handle_right() {
	var to_change = $(".sl-img.current");
	var first     = $(".imgs img:first");
	var next;
	if (!to_change.next().length) {
		next = first;
	}
	else {
		next = to_change.next();
	}
	to_change.removeClass('current');
	next.addClass('current');
}

function bullet_handle(){
	var images    = $(".imgs").children().length;
	var i 		  = 0;
	for (i = 0; i < images; i++) {
		var bullet = $('#bull-'+(i+1).toString());
		bullet.click(function() {
			var current= $('.sl-img.current');
			var image  = $('.imgs img').eq($(this).index());
			current.removeClass('current');
			image.addClass('current');
		});
	}
}

$(document).ready(function() {
	var left_arr  = $(".sl-l");
	var right_arr = $(".sl-r");
	var slider 	  = $(".slider");
	var log_in    = $(".log-in");
	var background= $(".back");
	var modal 	  = $(".logmodal");
	var x		  = $(".close");
	var news_btn  = $("#news");
	var news      = $(".news");
	var contacts_btn  = $("#contacts");
	var contacts  = $(".contacts");
	var log       = $(".log");
	var reg       = $(".reg");
	var log_form  = $("#log");
	var reg_form  = $("#reg");
	var nick	  = $(".dropdown");
	var logout    = $(".logout");
	var lout 	  = $("#logout");
	var password  = $(".password");
	var openeye   = $(".openeye");
	var closeeye  = $(".closeeye");
	var del 	  = $(".delete");
	var edit	  = $(".edit");
	var editbtn	  = $(".editbtn");
	var addbtn    = $(".addbtn");
	var addmodal  = $(".addmodal");
	var addnewsmodal  = $(".addnewsmodal");
	var addnewsbtn  = $(".addnewsbtn");
	var addnewssubmit = $(".addnewssubmit");
	var addsubmit = $(".addsubmit");
	var widen	  = $(".wrapper");
	var doc       = $(document);
	var int;
	

	slider.hover(function() {
		left_arr.fadeIn('slow', function() {
			
		});
		right_arr.fadeIn('slow', function() {
			
		});
	}, function() {
		left_arr.fadeOut('slow', function() {
			
		});
		right_arr.fadeOut('slow', function() {
			
		});

	});

	widen.hover(function() {
		$(this).animate({
			height: $('img',this).height(),
			},
			400, function() {
			/* stuff to do after animation is complete */
		});
	}, function() {
		$(this).animate({
			height: 200,
			},
			400, function() {
			/* stuff to do after animation is complete */
		});
	});

	left_arr.click(slide_handle_left);
	right_arr.click(slide_handle_right);
	bullet_handle();
	log_in.click(function(event) {
		background.show();
		modal.show();
	});

	edit.click(function(event) {
		background.show();
		modal.show();
		int =  $(this).parent().parent().attr('id');
	});

	editbtn.click(function(event) {
		$.ajax({
				url: 'edit.php',
				type: 'POST',
				data: {pass: $('#pass').val(), name: $('#name').val(), surname: $('#surname').val(), id: int}
			})
			.done(function() {
				console.log("success");
				location.reload();	
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
				});

	addsubmit.click(function(event) {
		$.ajax({
			url: 'adduser.php',
			type: 'POST',
			data: {pass: $('#addpass').val(), name: $('#addname').val(), surname: $('#addsurname').val(), email: $('#addemail').val()}
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
			
		});
		
	});

	addnewssubmit.click(function(event) {
		if ($('#addtitle').val()) {
			$.ajax({
			url: 'addnews.php',
			type: 'POST',
			data: {category: $('#addcategory').val(), title: $('#addtitle').val(), text: $('#addtext').val(), imglink: $('#addimglink').val(), vidlink: $('#addvidlink').val()}
		})
		.done(function() {
			console.log("success");
			location.reload();
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
			
		});
		}
		
		
	});


	background.click(function(event) {
		modal.hide();
		addmodal.hide();
        addnewsmodal.hide();
		background.hide();
	});
	x.click(function(event) {
		modal.hide();
		addmodal.hide();
        addnewsmodal.hide();
		background.hide();
	});
	// news_btn.click(function(event) {
	// 	$("body").animate({
	// 		scrollTop: news.offset().top,
	// 		},
	// 		500);
	// });
// 	$(window).scroll(function() {
//     if($(this).scrollTop() > 10){
//         $('.header').animate({
//         	height: '40px',
//         	},
//         	400, function() {

//         });
//     } else {
//          $('.header').animate({
//         	height: '120px',
//         	},
//         	400, function() {
        
//         });
//     }
// });
	

	addbtn.click(function(event) {
		background.show();
		addmodal.show();
	});

	addnewsbtn.click(function(event) {
		background.show();
		addnewsmodal.show();
	});

	contacts_btn.click(function(event) {
		$("body").animate({
			scrollTop: contacts.offset().top,
			},
			500);
	});

	log.click(function(event) {
		reg.addClass('small');
		$(this).removeClass('small');
		reg_form.removeClass('current');
		log_form.addClass('current');
	});

	reg.click(function(event) {
		log.addClass('small');
		$(this).removeClass('small');
		log_form.removeClass('current');
		reg_form.addClass('current');
	});
	nick.hover(function() {
		logout.slideDown(0, function() {
			
		});
	}, function() {
		/* Stuff to do when the mouse leaves the element */
	});

	lout.click(function(event) {
		$.ajax({
			url: 'logout.php'
		})
		.done(function() {
			console.log("success");
			window.location = 'index.php';
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});

	del.click(function(event) {
		$.ajax({
			url: 'delete.php',
			type: 'POST',
			data: {id: $(this).parent().parent().attr('id')}
		})
		.done(function() {
			console.log("success");
			location.reload();
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});



	openeye.click(function(event) {
		password.attr('type', 'text');
		openeye.hide(0, function() {
			
		});
		closeeye.slideDown(0, function() {
			
		});
	});

	closeeye.click(function(event) {
		password.attr('type', 'password');
		closeeye.hide(0, function() {
			
		});
		openeye.slideDown(0, function() {
			
		});
			
	});

	logout.hover(function() {
		/* Stuff to do when the mouse enters the element */
	}, function() {
		$(this).hide('slow', function() {
			
		});
	});

});