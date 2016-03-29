// JavaScript Document
$(document).ready(function() {

       $("#teacher_class").multiselect({
           header: "Choose an Option!",
           selectedList: 4
       });


	$(".search-bar").on('click',function () {
		$(".search-box").toggle("fade" )
	});

	//tooltip
	$("[data-toggle='toolti0p']").tooltip();

	if($(".bxslider").length){
		$('.bxslider').bxSlider({
			mode: 'fade'
		});
	}

	if($(".bxslider2").length){
		$('.bxslider2').bxSlider({
			pagerCustom: '#bx-pager',
			mode: 'fade'
		});
	}

	if($(".gallery").length){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	}


	if($("#owl-carousel").length){

		var owl = $("#owl-carousel");

		owl.owlCarousel({
		  items : 4, //10 items above 1000px browser width
		  itemsDesktop : [1000,3], //5 items between 1000px and 901px
		  itemsDesktopSmall : [900,3], // betweem 900px and 601px
		  itemsTablet: [600,2], //2 items between 600 and 0
		  itemsMobile : [480,1] // itemsMobile disabled - inherit from itemsTablet option
		});

		// Custom Navigation Events
		$(".next").on('click',function(){
			owl.trigger('owl.next');
		})
		$(".prev").on('click',function(){
			owl.trigger('owl.prev');
		});
	}
	if($(".chart").length){
		$('.chart').easyPieChart({});
	}
	if($(".accordion_cp").length){
		  //custom animation for open/close
		$.fn.slideFadeToggle = function(speed, easing, callback) {
			return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
		};

		$('.accordion_cp').accordion({
			defaultOpen: 'section1',
			cookieName: 'nav',
			speed: 'slow',
			animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
				elem.next().stop(true, true).slideFadeToggle(opts.speed);
			},
			animateClose: function (elem, opts) { //replace the standard slideDown with custom function
				elem.next().stop(true, true).slideFadeToggle(opts.speed);
			}
		});
	}

	//load branch based on regions
	$(".regions").change(function (e) {
		e.preventDefault();
		var code = $(this).val();
		$.ajax({
			type: "POST",
			url: "load_branch.php",
			data: {'code': code },
			success: function (html) {
				$(".branchs").html(html);
			}
		});
	});





    $('.view_student_list').click(function(){
        // alert('asdfasdfasdf');
                // $('.menus').show();
if($(this).parents('.class_details').find('.student_list_front,.menus').is(":visible")) {
        $(this).parents('.class_details').find('.student_list_front,.menus').hide();
   }
        // alert('asdfasdfasdf');
      else {          // $('.menus').show();
        $(this).parents('.class_details').find('.student_list_front,.menus').show();
    }
    });






	$('.booking').click(function(){
		$('.enroll_now').show();
	});
	$('.confirmation_no').click(function(){
		$('.enroll_now').hide();
	});
	$('.tempstudent_field').hide();
	$('.add_temp').hide();
    var addrow = 1;



    $('.add_student').click(function(){
        var row_count = parseInt($('.student_list_front tr #student_count').last().val())+1;
        var count = row_count;

        	$(this).parents('.class_details').find('.student_list_front').last().append('<tr><td>'+count+'<input type="hidden" id="student_count" value="'+count+'"></td><td>'+$('.tempstudent_field').html()+'<input type="hidden" class="temp_student_final" name="temp_student_final[]" value=""></td><td>Present</td></tr>');
        	// commented by kalai
            // $('.student_list_front').last().append('<tr><td>'+count+'<input type="hidden" id="student_count" value="'+count+'"></td><td><input type="text" name=temp[] value=""></td><td>Present</td></tr>');
            addrow++;
            count++;
    });



    // newly added by kalai
    var student_data = [];
   	$('.tempstudent_data li').each(function(){
   		student_data.push($(this).text());
   	});
    $( document).on('focus',".temp_text", function(){
		$(this).autocomplete({
			source: student_data,
	 	});
	});
    $('.student_remove').click(function(e){
        e.preventDefault();
        if( addrow > 1 ){
        $(this).parents('.class_details').find('.student_list_front tr').last().remove();
        addrow--;
    }
    });
    $('.click_submit').click(function() {
$(this).parents('.class_details').find('.view_student_list').hide();
});



	$('.confirmation_yes').click(function(e){
		e.preventDefault();
		var course_id = $('.course_id').val();
		var user_id = $('.confirmation_user_id').val();
		$.ajax({
			type: "POST",
			url: "student_enroll.php",
			data: {'code': course_id,'user_id': user_id},
			success: function (html) {
				if(html=='added'){
					$('.enroll').remove();
					$('.enroll_now').hide();
				}
			}
		});
	});

	$.validate({
	form : '#stu_reg,#tec_reg,#contact_form,#sign_form',
	modules : 'date, security,file',
    onError : function($form) {
      alert('Please fill all the fields');
	  return false;
    },
    onElementValidate : function(valid, $el, $form, errorMess) {
      console.log('Input ' +$el.attr('name')+ ' is ' + ( valid ? 'VALID':'NOT VALID') );
    }
	});
    $('#my-textarea').restrictLength( $('#max-length-element') );
        
    //newly added by kalai
    $('[name="submit_attendance"]').submit(function(){
  		// $( document).on('change',".previousbranch", function(){
		// 	$(this).siblings('.temp_student_final').val($(this).val());
		// });
		// $( document).on('blur',".temp_text", function(){
		// 	alert("blur");
		// 	$(this).siblings('.temp_student_final').val($(this).siblings('.temp_student_final').val()+ ',' +$(this).val());
		// });
    	$(".previousbranch").each(function(){
			$(this).siblings('.temp_student_final').val($(this).val());
		});
		$(".temp_text").each(function(){
			$(this).siblings('.temp_student_final').val($(this).siblings('.temp_student_final').val()+ ',' +$(this).val());
		});
    	var values = [];
    	$('input[name=student]').each(function () {
    		if ($(this).is(':checked') == true) 
               values.push(this.value);   		
        });


        
        formData = $(this).serialize();
        formData.push(values);
        alert(formData);
        $.ajax({
            type: "POST",
            url: "submit_attendance.php",
            data: formData,
        });
    });

});

//var map;
//		var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
//
//		var MY_MAPTYPE_ID = 'custom_style';
//
//		function initialize() {
//
//		  var featureOpts = [
//			{
//			  stylers: [
//				{ hue: '#b1e7b8' },
//				{ visibility: 'simplified' },
//				{ gamma: 0.5 },
//				{ weight: 0.5 }
//			  ]
//			},
//			{
//			  elementType: 'labels',
//			  stylers: [
//				{ visibility: 'on' }
//			  ]
//			},
//			{
//			  featureType: 'water',
//			  stylers: [
//				{ color: '#b1e7b8' }
//			  ]
//			}
//		  ];
//
//		  var mapOptions = {
//			zoom: 12,
//			center: brooklyn,
//			mapTypeControlOptions: {
//			  mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
//			},
//			mapTypeId: MY_MAPTYPE_ID
//		  };
//
//		  map = new google.maps.Map(document.getElementById('map-canvas'),
//			  mapOptions);
//
//		  var styledMapOptions = {
//			name: 'Custom Style'
//		  };
//
//		  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
//
//		  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
//		}
//
//		google.maps.event.addDomListener(window, 'load', initialize);
