$(document).ready(function(){




// added by siva
//  check the table content is empty or not start
$('.search_report').click(function() {

var tbody_tuep = $("#tue_permanent");
var tbody_tuet = $("#tue_temporarly");
if (tbody_tuep.children().length == 0 && tbody_tuet.children().length == 0) {
   // alert("tue_false");
    $('#report_table_tue').css("display","none");
     $('#tue_cation').css("display","none");
    $("#report_table_tue").next("br").remove();
     
}
else {
    // alert("tue_true");
}

var tbody_wedp = $("#wed_permanent");
var tbody_wedt = $("#wed_temporarly");
if (tbody_wedp.children().length == 0 && tbody_wedt.children().length == 0) {
   // alert("wed_false");
    $('#report_table_wed').css("display","none");
     $('#wed_cation').css("display","none");
    $("#report_table_wed").next("br").remove();

}
else {
    // alert("wed_true");
}

var tbody_thup = $("#thu_permanent");
var tbody_thut = $("#thu_temporarly");
if (tbody_thup.children().length == 0 && tbody_thut.children().length == 0) {
   // alert("thu_false");
    $('#report_table_thu').css("display","none");
     $('#thu_cation').css("display","none");
    $("#report_table_thu").next("br").remove();

}
else {
    // alert("thu_true");
}

var tbody_frip = $("#fri_permanent");
var tbody_frit = $("#fri_temporarly");
if (tbody_frip.children().length == 0 && tbody_frit.children().length == 0) {
   // alert("fri_false");
   $('#report_table_fri').css("display","none");
    $('#fri_cation').css("display","none");
    $("#report_table_fri").next("br").remove();
}
else {
    // alert("fri_true");
}

var tbody_satp = $("#sat_permanent");
var tbody_satt = $("#sat_temporarly");
if (tbody_satp.children().length == 0 && tbody_satt.children().length == 0) {
   // alert("sat_false");
    $('#report_table_sat').css("display","none");
    $('#sat_cation').css("display","none");
    $("#report_table_sat").next("br").remove();
   // $("br").remove();
}
else {
     // alert("sat_true");
    // $('#report_table_sat').addClass("sss");
    // $(this).parents('.report_table').hide();
      // alert("sat_welcome");
}

var tbody_sunp = $("#sun_permanent");
var tbody_sunt = $("#sun_temporarly");
if (tbody_sunp.children().length == 0 && tbody_sunt.children().length == 0) {
   // alert("sun_false");
    $('#report_table_sun').css("display","none");
     $('#sun_cation').css("display","none");
      $("#report_table_sun").next("br").remove();
     // $("br").remove();
}
else {
    // alert("sun_true");
}

var tbody_monp = $("#mon_permanent");
var tbody_mont = $("#mon_temporarly");
if (tbody_monp.children().length == 0 && tbody_mont.children().length == 0) {
   // alert("mon_false");
    $('#report_table_mon').css("display","none");
     $('#mon_cation').css("display","none");
      $("#report_table_mon").next("br").remove();

}
else {
    // alert("mon_true");
}

});
//  check the table content is empty or not end



 //postevent datetimepicker settings
 $( ".dropdown-menu" ).addClass( "new_align" );
    $(function(){
        $('#startdate,#enddate').datepicker({
            // format:'Y-m-d H:i',
            // format: 'dd-mm-yyyy',
            format: 'yyyy-mm-dd',
            onShow:function( ct ){
                this.setOptions({
                    maxDate:$('#enddate').val()?$('#enddate').val():false
                })
            },
            timepicker:false,
            validateOnBlur:true,
            minDate:'+1970/01/02',
            onClose:function( ct ){
                $('#datetimepicker1').focus();
            },
        });
        //commented by kalai
        // $('#enddate').datetimepicker({
        //     format:'Y-m-d H:i',
        //     onShow:function( ct ){
        //         var start_date = ($('#startdate').val());
        //         var replace_date = start_date.replace(/-/g,'/');
        //         var spilit_date = replace_date.split(/ +/);
        //         this.setOptions({
        //             minDate:$('#startdate').val()?spilit_date[0]:false,
        //             minTime:$('#startdate').val()?spilit_date[1]:false,
        //         })
        //     },
        //     timepicker:true,
        //     validateOnBlur:true,
        // });

        //newly added by kalai
        $('#starttime,#endtime').datetimepicker({
            datepicker:false,
            timepicker:true,
            validateOnBlur:false,
        });
        $('#starttime,#endtime').change(function (e) {
            $(this).val($(this).val().split(' ')[1]);
        });
        $('#startdatetime').datetimepicker({
            format:'Y-m-d H:i',
            onShow:function( ct ){
                this.setOptions({
                    maxDate:$('#enddate').val()?$('#enddate').val():false
                })
            },
            timepicker:true,
            validateOnBlur:true,
            minDate:'+1970/01/02',
            onClose:function( ct ){
                $('#datetimepicker1').focus();
            },
        });
    });// end postevent datetimepicker settings

    $('.deactivate').click(function(e){
        var selected = [];
        $.each($("input[name='selector[]']:checked"),function(){ 
            selected.push($(this).val());
        });
        window.location.href="view_schedules.php?deactivate_id="+ selected;       
    });

    //load branch based on regions
	$(".regions").change(function (e) {
		e.preventDefault();
		var code = $(this).val();
		$.ajax({
			type: "POST",
			url: "load_branch.php",
			data: {'code': code },
			success: function (html) {
                if(html== 'nil'){
                    $('.branchs,.teacher,.classs,.subjects').empty();
                    alert('no branch available');
                }
                else{
                    $(".branchs").html('<option>Select branch</option>'+html);
                }

			}
		});
	});

    $(".branchs").change(function (e) {
		e.preventDefault();
		var code = $(this).val();
		$.ajax({
			type: "POST",
			url: "load_teacher.php",
			data: {'code': code },
			success: function (html) {
                if(html == 'nil'){
                    $('.teacher,.classs,.subjects').empty();
                  // alert('No teacher available');
                }else{
                    $(".teacher").html('<option>Select teacher</option>'+html);
                }

			}
		});
	});

    // $(".teachers_report").change(function (e) {
    //     e.preventDefault();
    //     var code = $(this).val();
    //     $.ajax({
    //         type: "POST",
    //         url: "load_branch_report.php",
    //         data: {'code': code },
    //         success: function (html) {
    //             if(html == 'nil'){
    //                 $('.teacher,.classs,.subjects').empty();
    //               // alert('No teacher available');
    //             }else{
    //                 $(".branchs_report").html('<option>Select branch</option>'+html);
    //             }

    //         }
    //     });
    // });
    
	
	
	
	
	// $(".branches_time").change(function (e) {
		// e.preventDefault();
		// var code = $(this).val();
		// $.ajax({
			// type: "POST",
			// url: "load_teacher_time.php",
			// data: {'code': code },
			// success: function (html) {
                // if(html == 'nil'){
                    // $('.teacher,.classs,.subjects').empty();
                  // // alert('No teacher available');
                // }else{
                    // $(".teacher").html('<option>Select teacher</option>'+html);
                // }
// 
			// }
		// });
	// });
	
	






$('#edit_class_allocate').submit(function() {
        var error = 0;
        var check_count_edit=$('.student_list_checkbox:checked').size();
        var num_seats_edit=$("#edit_num_of_seats").val();            
        if (!($('.student_list_checkbox').is(':checked'))) {
            error = 1
            
            alert("Please select atleast one student");
            // alert(num_seats_edit);
            //  alert(check_count_edit);
        }

        if (error) {
            return false;
        } 

                
              else if (check_count_edit <= num_seats_edit) {
                     alert("Added successfully");
            
             //     alert(num_seats_edit);
             // alert(check_count_edit);
                    return true;
                }
                else {
                   
                     alert("No seats are available");
                    // alert(num_seats_edit);
                    // alert(check_count_edit);
                    return false;
        }

    });





$('#add_class_allocate').submit(function() {
        var error = 0;
        var check_count=$('.student_list_checkbox:checked').size();
        var num_seats=$("#num_seats").val();
            // $.urlParam('branch_id'); 
            // $.urlParam('classid');      
            // $.urlParam('sche_id');
           
//               <?php 
//               $sche_id=$_GET['sche_id'];
//  $num_of_seats_row=mysql_query("select num_of_seats from class_schedules where class_schedules_id='$sche_id'");
//  $num_of_seats_array=mysql_fetch_assoc($num_of_seats_row);
//  $num_of_seats=implode("", $num_of_seats_array);

// ?>
            
        if (!($('.student_list_checkbox').is(':checked'))) {
            error = 1
            
            alert("Please select atleast one student");
            // alert(num_seats);
            //  alert(check_count);
        }

        if (error) {
            return false;
        } 

                
              else if (check_count <= num_seats) {
                     alert("Added successfully");
            
             //     alert(num_seats);
             // alert(check_count);
                    return true;
                }
                else {
                   
                     alert("No seats are available");
                    // alert(num_seats);
                    // alert(check_count);
                    return false;
                



            // alert(check_count);





            // return true;
        }

    });





	
	
	
	
    // commented by kalai
    // $(".teacher").change(function (e) {
		// e.preventDefault();
		// var code = $(this).val();
// 
		// $.ajax({
			// type: "POST",
			// url: "load_class.php",
			// data: {'code': code },
			// success: function (html) {
                // if(html == 'nil'){
                    // $('.classs,.subjects').empty();
                    // alert('No classes available');
                // }else{
				    // $(".classs").html('<option>Select Class</option>'+html);
                // }
			// }
		// });
	// });

    $(document).on('change','.classs',function (e) {
		e.preventDefault();
		var code = $(this).val();
		var current = $(this).parents('.clone_content');
		$.ajax({
			type: "POST",
			url: "load_subject.php",
			data: {'code': code },
			success: function (html) {
                if(html == 'nil'){
                    $('.subjects').empty();
                   // alert('No teacher available');
                }else{
				    current.find(".subjects").html('<option>Select subject</option>'+html);
                }
			}
		});
	});


	// add button for class schedule 
	$(document).on('click','.add_button',function (e) {
		e.preventDefault();
		var clone_id = parseInt($(this).parents('.one_day').find('.clone_content:first').find('.clone_content_count').val())+1;
		$(this).parents('.one_day').find('.clone_content:first').find('.clone_content_count').val(clone_id);
		var element = $(this).parents('.one_day').find('.clone_content:last');
		var new_element = element.clone();
		// add dynamic id for each fiels
		// new_element.find('.branches_time').attr('name',new_element.find('.branches_time').attr('name').slice(0, -1)+clone_id);
		// new_element.find('.classs').attr('name',new_element.find('.classs').attr('name').slice(0, -1)+clone_id);
		// new_element.find('.subjects').attr('name',new_element.find('.subjects').attr('name').slice(0, -1)+clone_id);
		// new_element.find('.starttime').attr('name',new_element.find('.starttime').attr('name').slice(0, -1)+clone_id);
		// new_element.find('.endtime').attr('name',new_element.find('.endtime').attr('name').slice(0, -1)+clone_id);
		// When clone content set default values
		new_element.find('.branches_time').prop('selectedIndex',0);
		new_element.find('.classs').prop('selectedIndex',0);
		new_element.find('.subjects').empty();
		new_element.find('.starttime').prop('selectedIndex',0);
		new_element.find('.endtime').prop('selectedIndex',0);
        new_element.find('.num_of_seats').prop('value','');
		//remove day from grid
		new_element.find('.input_schedule').remove();
		new_element.find('.remove_button').show();
		$(new_element).insertAfter($(this).parents('.one_day').find('.clone_content:last'));
	});



	
	// remove button for class schedule
	$(document).on('click','.remove_button',function () {
		$(this).parents('.clone_content').remove();
	});
	$(document).on('change','.days',function(){
		// var current = $(this).parents('.clone_content');
        var current = $(this).parents('.input_schedule').siblings('.clone_content');
		if(this.checked){
			current.find('.branches_time').removeAttr('disabled');
			//var tst = $(this).parents('.clone_content .branches_time');
			// $.each(tst,function(){
				// alert($(this).html());
				// $(this).removeAttr('disabled');
			// });
			current.find('.classs').removeAttr('disabled');
			current.find('.subjects').removeAttr('disabled');
			current.find('.starttime').removeAttr('disabled');
			current.find('.endtime').removeAttr('disabled');
            current.find('.num_of_seats').removeAttr('disabled');
            // current.find('.remove_button').removeAttr('disabled');
			current.siblings('.sch_add_btn').find('.add_button').removeAttr('disabled');
		}else{
			current.find('.branches_time').attr('disabled','disabled');
			// $('.branches_time',current).each(function(){
				// $(this).attr('disabled','disabled');
			// });
			current.find('.classs').attr('disabled','disabled');
			current.find('.subjects').attr('disabled','disabled');
			current.find('.starttime').attr('disabled','disabled');
			current.find('.endtime').attr('disabled','disabled');
            current.find('.num_of_seats').attr('disabled','disabled');
            current.find('.remove_button').attr('disabled','disabled');
			current.siblings('.sch_add_btn').find('.add_button').attr('disabled','disabled');   
		}
	});


 

    $('.btn_submit').click(function(){
  
        var box = $('.days:checked').length;
       
        if(box>=1 ){
                 
                  $('.days').each(function () {
                    if($(this).is(':checked')){
                  
                    element = $(this).parents('.input_schedule').siblings('.clone_content');
                    element.find('select').each(function(){
                            if($(this).val() == ""){
                                 // if($(this).val() == "" || $(this).parents('val() == ""){
                                    
                            $(this).addClass('error');
                             

                        }
                        else{
                            $(this).removeClass('error');  
                        
                        }
                    });
                    
                    }
                   

              });   
              if(element.find('select').hasClass('error')){
                       return false;
                      
                    }
                    else{
                        $('#add_class').submit();
                        
                    }   
        }else{
           
            element = $(this).parents('.form_submit').siblings('.clone_content');
            // return false;
            // if((box==0) && (element.find('select').hasClass('error')){
            //     alert("yes");
            //        element.removeClass('error');  
            //         return false;
            // }
            //  else{
            //     alert("Please select atleast one day");
            //     return false;
            //  }
        }   
 });

 


    $(".get_button").click(function () {
        // var region_id = $('.regions').val();
        var form_data = $('#add_class').serialize();
        // var branch_id = $('.branchs').val();
        // var class_id = $('.classs').val();
        // var clss_id = class_id.split('-');
        // var subject_id = $('.subjects').val();
        // var teacher_id = $('.teacher').val();
        // var s_date = $('#startdate').val();
        // var stime = $('#starttime').val();
        // var etime = $('#endtime').val();
        // var days =  [];
        // $("input[name='days[]']:checked").each(function(i) {
	    //        days['days[]'].push($(this).val());
        //  });
        //alert(form_data);

        
        $.ajax({
                type: "POST",
                url: "student_list.php",
                data: form_data,

                success: function (data) {

                    if(data=='nil'){
                        $('.schdule_student_list').empty();
                        alert('Student not available');

                    }else if(data=='already'){
                        alert('already your selected subject was allocated to this teacher');
                    }
                    else{

                        $('.schdule_student_list').html("<tr><th></th><th>Student Name</th><th>Branchname</th><th>Class</th><th>subject</td></tr>"+ data);
                        $('.selectall,.allocate_button').show();
                    }
                }
            });


    });







 $('.checkall').click(function() {
    if ($(this).is(':checked')) {
        $(".student_list_checkbox").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $(".student_list_checkbox").each(function () {
                $(this).prop("checked", false);
            });
        }
    });










 
// $(".checkall").change(function () {
//     $("input:checkbox").prop('checked', $(this).prop("checked"));
// });



    $('.selectall').click(function() {
    if ($(this).is(':checked')) {
        $(".schdule_student_list input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $(".schdule_student_list input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });



    $('.print').click(function() {
        var print_content = $('.print_area').html();
        var branch=$('.branchs option:selected').text();
        var teacher=$('.teacher option:selected').text();
        var classs=$('.classs option:selected').text();
        var subject=$('.subjects option:selected').text();
        var from_date=$('#startdate').val();
        var to_date=$('#enddate').val();
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><style>table,th,tr,td{border:1px solid #000;}</style><title></title>');
        mywindow.document.write('</head><body >');
        // // mywindow.document.write('<table style="border: 1px solid black;padding: 10px"><tr><th>Branch</th><th>StudentName</th><th>Day</th><th>Date</th><th>Start_time</th><th>End_time</th><th>Type</th></td><tr>');
        // // mywindow.document.write('<tr><td>'+branch+'</td><td>'+teacher+'</td><td>'+classs+'</td><td>'+subject+'</td><td>'+from_date+'</td><td>'+to_date+'</td><tr></table>');
        mywindow.document.write(print_content);
        mywindow.document.write('</body></html>');
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10
        mywindow.print();
        mywindow.close();
        return true;
    });
    
$('.year').click(function() {
$('.dropdown-menu').hide();
 
 
});


});
