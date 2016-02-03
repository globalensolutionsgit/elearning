$(document).ready(function(){
 //postevent datetimepicker settings
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
                    alert('No teacher available');
                }else{
                    $(".teacher").html('<option>Select teacher</option>'+html);
                }

			}
		});
	});
    // commented by kalai
    $(".teacher").change(function (e) {
		e.preventDefault();
		var code = $(this).val();

		$.ajax({
			type: "POST",
			url: "load_class.php",
			data: {'code': code },
			success: function (html) {
                if(html == 'nil'){
                    $('.classs,.subjects').empty();
                    alert('No classes available');
                }else{
				    $(".classs").html('<option>Select Class</option>'+html);
                }
			}
		});
	});

    $(".classs").change(function (e) {
		e.preventDefault();
		var code = $(this).val();
		$.ajax({
			type: "POST",
			url: "load_subject.php",
			data: {'code': code },
			success: function (html) {
                if(html == 'nil'){
                    $('.subjects').empty();
                    alert('No teacher available');
                }else{
				    $(".subjects").html('<option>Select subject</option>'+html);
                }
			}
		});
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
    $('.allocate_button').click(function() {
        if($('#startdate').val() == ''){
            alert('Choose start date');
            return false;
        }
        if($('#starttime').val() == ''){
            alert('Choose start time');
            return false;
        }
        if($('#endtime').val() == ''){
            alert('Choose end time');
            return false;
        }
        if(jQuery('#days input[type=checkbox]:checked').length<=0) {
            alert('Select atleast one day');
            return false;
        }
        else if(jQuery('.schdule_student_list input[type=checkbox]:checked').length<=0) {
            alert('Select atleast one student');
            return false;
        }
        else{
            return true;
        }
    });

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

});
