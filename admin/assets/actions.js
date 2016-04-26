

jQuery(document).ready(function(){


	// Place ID's of all required fields here.
	required = ["firstname", "lastname", "phone", "zip", "email","username","password","latitude","longitude","sel1","sel2","sel3","sel4","sel5"];

	// If using an ID other than #email or #error then replace it here
	firstname = jQuery("#firstname");
	lastname = jQuery("#lastname");
	phone = jQuery("#phone");
	username = jQuery("#username");
	password = jQuery("#password");
	zip = jQuery("#zip");	
	email = jQuery("#email");
	//date = jQuery("#date");	
	errornotice = jQuery("#error");
	// The text to show up within a field when it is incorrect
	emptyerror = "Please fill out this field.";
	emailerror = "Invalid Email";
	phoneerror = "Invalid Phone";
	// $("#password").val('');
	 // $("#password").val('');
	jQuery("#consult_form").submit(function() { 
											
		//Validate required fields
	//	alert('test');
	// $("#password").val('');
		for (i=0;i<required.length;i++) {
			var input = jQuery('#'+required[i]);
			if ((input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == emptyerror)) {
				input.addClass("error_input_field");
				// $('#information_bar').addClass('error_h');
			} 
			else {
				input.removeClass("error_input_field");
				// $('#information_bar').removeClass('error_h');
			}
		}

// $('#check').on('input', function(e) {
//         if(this.value.length <= 3) {
//             $('#check').css('border', "1px solid red");
//         } 
        



        
//         else {
//         $('#check').css('border', "1px solid black");
//             $('input[type="submit"]').prop('disabled', false);
//         }
//     });






	var value = $('#phone').val().replace(/^\s\s*/, '').replace(/\s\s*$\./, '');
    var intRegex = /^[0-9\-\+\.]+$/;
    if(!intRegex.test(value)) {
			phone.addClass("error_input_field");
			
    }

	// Validate the e-mail.

		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
			email.addClass("error_input_field");
			$('#information_bar').addClass('error_h');
			//email.val(emailerror);
		}
		
		// diagnosis select field
		
		// if ($('#relationship').val() == "Please Select...") {
		// 	$('#relationship_field').addClass('error_h');
		// }
		// else {$('#relationship_field').removeClass('error_h'); }

		// if ($('#diagnosis').val() == "Please Select...") {
		// 	$('#diagnosis_field').addClass('error_h');
		// }
		// else {$('#diagnosis_field').removeClass('error_h'); }


/*		if ($('#message').val() == "Message") {
			$('#message').addClass("error_input_field");		
		} else {
			$('#message').removeClass("error_input_field");
		} */

		// if (jQuery('#nonconfidential').not(':checked')) {
		// 	jQuery('#nonconfidential').next().addClass("error_label");
		// 	$('#terms').addClass('error_h');
		// }
		// if (jQuery('#nonconfidential').is(':checked')) {
		// 	jQuery('#nonconfidential').next().removeClass("error_label");
		// 	$('#terms').removeClass('error_h');
		// }

if ($('#sel1').val() == "Select Region") {
	
			$('#sel1').addClass('error_input_field');
			// $('#relationship_field').addClass('error_h');
			// $('#sel1').addClass('error_input_field');
		}
		else {
			$('#sel1').removeClass('error_input_field');
			
			// $('#relationship_field').removeClass('error_h');
			// $('#sel1').removeClass('error_input_field'); 
		}

		if ($('#sel2').val() == "Select branch") {
			
			$('#sel2').addClass('error_input_field');
			// $('#diagnosis_field').addClass('error_h');
			// $('#sel2').addClass('error_input_field');
		}
		else {
			
			$('#sel2').removeClass('error_input_field');
			// $('#diagnosis_field').removeClass('error_h');
			// $('#sel2').removeClass('error_input_field'); 
		}
		if ($('#sel3').val() == "Select Class") {
	
			$('#sel3').addClass('error_input_field');
			// $('#relationship_field').addClass('error_h');
			// $('#sel1').addClass('error_input_field');
		}
		else {
			$('#sel3').removeClass('error_input_field');
			
			// $('#relationship_field').removeClass('error_h');
			// $('#sel1').removeClass('error_input_field'); 
		}

		if ($('#sel4').val() == "Select branch") {
			
			$('#sel4').addClass('error_input_field');
			// $('#diagnosis_field').addClass('error_h');
			// $('#sel2').addClass('error_input_field');
		}
		else {
			
			$('#sel4').removeClass('error_input_field');
			// $('#diagnosis_field').removeClass('error_h');
			// $('#sel2').removeClass('error_input_field'); 
		}
		

		if ($('.sel5').val() == "Select class") {
			
			$('.sel5').addClass('error_input_field');
			// $('#diagnosis_field').addClass('error_h');
			// $('#sel2').addClass('error_input_field');
		}
		else {
			
			$('.sel5').removeClass('error_input_field');
			// $('#diagnosis_field').removeClass('error_h');
			// $('#sel2').removeClass('error_input_field'); 
		}









		
		//if any inputs on the page have the class 'error_input_field' the form will not submit
		if (jQuery(":input").hasClass("error_input_field") || jQuery("span").hasClass("error_label") || jQuery("p").hasClass("error_label") || jQuery("textarea").hasClass("error_input_field") || jQuery("select").hasClass("select_error")) {
			return false;
		} else {
			errornotice.hide();
			// var options = $('#teacher_class > option:selected');
   //       if(options.length == 0){
             // alert('please select all fields');
             
		 
			return true;
		
		}

	});
	
	
	
	jQuery.fn.clearOnFocus = function(){
    return this.focus(function(){
        var v = jQuery(this).val();
        jQuery(this).val( v === this.defaultValue ? '' : v );
    }).blur(function(){
        var v = jQuery(this).val();
        jQuery(this).val( v.match(/^\s+$|^$/) ? this.defaultValue : v );
    });
 
	};

	jQuery('input.input_field').clearOnFocus();

	// $('.meet_our_clients_list').find('div').hide();
	// $('.meet_our_clients_list').find('li').click(function(){
	// 	$(this).children('div').slideDown();
	// 	$(this).siblings().children('div').slideUp();
	// });

 // 	$('.clients_result_list').find('div').hide();
	//  $('.clients_result_list').find('li').click(function() {
	// 	$(this).children('div').slideDown();
	// 	$(this).siblings().children('div').slideUp();
 //     });
	 
	 
	 
	// $('.custom_dropdown, .custom_dropdown input').toggle(function(){
	// 	$(this).children('ul').show();
	// 	}, function(){
	// 	$(this).children('ul').hide();
	// });

	// $('.custom_dropdown').find('li').click(function() {
	// 	$(this).parent().parent().children('input').val($(this).html());
	// 	$(this).parent().hide();
	// }); 

jQuery("#add_class_report").submit(function() {

if ($('#report_select1').val() == "") {
			
			$('#report_select1').addClass('error_input_field');
	
			// $('#diagnosis_field').addClass('error_h');
			// $('#sel2').addClass('error_input_field');
		}
		else {
			
			$('#report_select1').removeClass('error_input_field');
		
			// $('#diagnosis_field').removeClass('error_h');
			// $('#sel2').removeClass('error_input_field'); 
		}


if ($('#report_select2').val() == "") {
			
			$('#report_select2').addClass('error_input_field');
		
			// $('#diagnosis_field').addClass('error_h');
			// $('#sel2').addClass('error_input_field');
		}
		else {
			
			$('#report_select2').removeClass('error_input_field');
	
			// $('#diagnosis_field').removeClass('error_h');
			// $('#sel2').removeClass('error_input_field'); 
		}

if ($('.report_select3').val() == "") {
	
			
			$('.report_select3').addClass('error_input_field');
	

		
			// $('#diagnosis_field').addClass('error_h');
			// $('#sel2').addClass('error_input_field');
		}
		else {
			
			$('.report_select3').removeClass('error_input_field');
		
			// $('#diagnosis_field').removeClass('error_h');
			// $('#sel2').removeClass('error_input_field'); 
		}




if ($('.report_select4').val() == "") {
			
			$('.report_select4').addClass('error_input_field');
			
			// $('#diagnosis_field').addClass('error_h');
			// $('#sel2').addClass('error_input_field');
		}
		else {
			
			$('.report_select4').removeClass('error_input_field');
		
			// $('#diagnosis_field').removeClass('error_h');
			// $('#sel2').removeClass('error_input_field'); 
		}

if (jQuery(".report_select4").hasClass("error_input_field") || jQuery(".report_select3").hasClass("error_input_field") || jQuery(".report_select2").hasClass("error_input_field") || jQuery(".report_select1").hasClass("error_input_field")) {
			// alert("test false");
			return false;
		} else {
			errornotice.hide();
			return true;
		}







});



//  validation for add_branch_form start


jQuery("#edit_user_form").submit(function() { 	




for (i=0;i<required.length;i++) {
	var input = jQuery('#'+required[i]);
	if ((input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == emptyerror)) {
	input.addClass("error_input_field");
	// $('#information_bar').addClass('error_h');
	} 
	else {
	input.removeClass("error_input_field");
		// $('#information_bar').removeClass('error_h');
		}
	}






	var value = $('#phone').val().replace(/^\s\s*/, '').replace(/\s\s*$\./, '');
    var intRegex = /^[0-9\-\+\.]+$/;
    if(!intRegex.test(value)) {
			phone.addClass("error_input_field");
			
    }

	// Validate the e-mail.

		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
			email.addClass("error_input_field");
			$('#information_bar').addClass('error_h');
			//email.val(emailerror);
		}




	
	
		
		// diagnosis select field
		
		// if ($('#relationship').val() == "Please Select...") {
		// 	$('#relationship_field').addClass('error_h');
		// }
		// else {$('#relationship_field').removeClass('error_h'); }

		// if ($('#diagnosis').val() == "Please Select...") {
		// 	$('#diagnosis_field').addClass('error_h');
		// }
		// else {$('#diagnosis_field').removeClass('error_h'); }


/*		if ($('#message').val() == "Message") {
			$('#message').addClass("error_input_field");		
		} else {
			$('#message').removeClass("error_input_field");
		} */

		// if (jQuery('#nonconfidential').not(':checked')) {
		// 	jQuery('#nonconfidential').next().addClass("error_label");
		// 	$('#terms').addClass('error_h');
		// }
		// if (jQuery('#nonconfidential').is(':checked')) {
		// 	jQuery('#nonconfidential').next().removeClass("error_label");
		// 	$('#terms').removeClass('error_h');
		// }

// if ($('#sel1').val() == "Select Region") {
	
// 			$('#sel1').addClass('error_input_field');
// 			// $('#relationship_field').addClass('error_h');
// 			// $('#sel1').addClass('error_input_field');
// 		}
// 		else {
// 			$('#sel1').removeClass('error_input_field');
			
// 			// $('#relationship_field').removeClass('error_h');
// 			// $('#sel1').removeClass('error_input_field'); 
// 		}

		if ($('#sel2').val() == "Select branch") {
			
			$('#sel2').addClass('error_input_field');
			// $('#diagnosis_field').addClass('error_h');
			// $('#sel2').addClass('error_input_field');
		}
		else {
			
			$('#sel2').removeClass('error_input_field');
			// $('#diagnosis_field').removeClass('error_h');
			// $('#sel2').removeClass('error_input_field'); 
		}
// 		if ($('#sel3').val() == "Select Class") {
	
// 			$('#sel3').addClass('error_input_field');
// 			// $('#relationship_field').addClass('error_h');
// 			// $('#sel1').addClass('error_input_field');
// 		}
// 		else {
// 			$('#sel3').removeClass('error_input_field');
			
// 			// $('#relationship_field').removeClass('error_h');
// 			// $('#sel1').removeClass('error_input_field'); 
// 		}

		if ($('#sel4').val() == "Select branch") {
			
			$('#sel4').addClass('error_input_field');
			// $('#diagnosis_field').addClass('error_h');
			// $('#sel2').addClass('error_input_field');
		}
		else {
			
			$('#sel4').removeClass('error_input_field');
			// $('#diagnosis_field').removeClass('error_h');
			// $('#sel2').removeClass('error_input_field'); 
		}
		

// 		if ($('.sel5').val() == "Select class") {
			
// 			$('.sel5').addClass('error_input_field');
// 			// $('#diagnosis_field').addClass('error_h');
// 			// $('#sel2').addClass('error_input_field');
// 		}
// 		else {
			
// 			$('.sel5').removeClass('error_input_field');
// 			// $('#diagnosis_field').removeClass('error_h');
// 			// $('#sel2').removeClass('error_input_field'); 
// 		}









		
		//if any inputs on the page have the class 'error_input_field' the form will not submit
		if (jQuery(":input").hasClass("error_input_field") || jQuery("span").hasClass("error_label") || jQuery("p").hasClass("error_label") || jQuery("textarea").hasClass("error_input_field") || jQuery("select").hasClass("select_error")) {
			return false;
			// alert("test1");

		} else {
			errornotice.hide();
			return true;
		}
	});




//  validation for add_branch_form start

jQuery("#add_branch_form").submit(function() { 	

for (i=0;i<required.length;i++) {
	var input = jQuery('#'+required[i]);
	if ((input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == emptyerror)) {
	input.addClass("error_input_field");
	// $('#information_bar').addClass('error_h');
	} 
	else {
	input.removeClass("error_input_field");
		// $('#information_bar').removeClass('error_h');
		}
	}






	var value = $('#phone').val().replace(/^\s\s*/, '').replace(/\s\s*$\./, '');
    var intRegex = /^[0-9\-\+\.]+$/;
    if(!intRegex.test(value)) {
			phone.addClass("error_input_field");
			
    }

	// Validate the e-mail.

		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
			email.addClass("error_input_field");
			$('#information_bar').addClass('error_h');
			//email.val(emailerror);
		}




//if any inputs on the page have the class 'error_input_field' the form will not submit
		if (jQuery(":input").hasClass("error_input_field") || jQuery("span").hasClass("error_label") || jQuery("p").hasClass("error_label") || jQuery("textarea").hasClass("error_input_field") || jQuery("select").hasClass("select_error")) {
			return false;
			// alert("test1");

		} else {
			errornotice.hide();
			return true;
		}
	});   //  validation for add_branch_form end



//  validation for edit_branch_form start
	
jQuery("#edit_branch_form").submit(function() { 	

for (i=0;i<required.length;i++) {
	var input = jQuery('#'+required[i]);
	if ((input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == emptyerror)) {
	input.addClass("error_input_field");
	// $('#information_bar').addClass('error_h');
	} 
	else {
	input.removeClass("error_input_field");
		// $('#information_bar').removeClass('error_h');
		}
	}

	var value = $('#phone').val().replace(/^\s\s*/, '').replace(/\s\s*$\./, '');
    var intRegex = /^[0-9\-\+\.]+$/;
    if(!intRegex.test(value)) {
			phone.addClass("error_input_field");
			
    }

	// Validate the e-mail.

		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
			email.addClass("error_input_field");
			$('#information_bar').addClass('error_h');
			//email.val(emailerror);
		}

	
		//if any inputs on the page have the class 'error_input_field' the form will not submit
		if (jQuery(":input").hasClass("error_input_field") || jQuery("span").hasClass("error_label") || jQuery("p").hasClass("error_label") || jQuery("textarea").hasClass("error_input_field") || jQuery("select").hasClass("select_error")) {
			return false;
			// alert("test1");

		} else {
			errornotice.hide();
			return true;
		}
	}); //  validation for edit_branch_form end





// validation for add_subject_form start

jQuery("#add_subject_form").submit(function() { 	

for (i=0;i<required.length;i++) {
	var input = jQuery('#'+required[i]);
	if ((input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == emptyerror)) {
	input.addClass("error_input_field");
	// $('#information_bar').addClass('error_h');
	} 
	else {
	input.removeClass("error_input_field");
		// $('#information_bar').removeClass('error_h');
		}
	}
		
	//if any inputs on the page have the class 'error_input_field' the form will not submit
		if (jQuery(":input").hasClass("error_input_field") || jQuery("select").hasClass("select_error")) {
			return false;
			// alert("test1");

		} else {
			errornotice.hide();
			return true;
		}
	});  // validation for add_subject_form end

// validation for edit_subject_form start

jQuery("#edit_subject_form").submit(function() { 	

for (i=0;i<required.length;i++) {
	var input = jQuery('#'+required[i]);
	if ((input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == "") || (input.val() == emptyerror)) {
	input.addClass("error_input_field");
	// $('#information_bar').addClass('error_h');
	} 
	else {
	input.removeClass("error_input_field");
		// $('#information_bar').removeClass('error_h');
		}
	}
		
	//if any inputs on the page have the class 'error_input_field' the form will not submit
		if (jQuery(":input").hasClass("error_input_field") || jQuery("select").hasClass("select_error")) {
			return false;
			// alert("test1");

		} else {
			errornotice.hide();
			return true;
		}
	});  // validation for edit_subject_form end




}); //  document ready end

  
  