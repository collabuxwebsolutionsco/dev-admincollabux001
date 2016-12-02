$(document).ready(function() {
	$('#datatable_tabletools').dataTable({
        "sDom" : "<'dt-top-row'Tlf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row'<'col-sm-6'i><'col-sm-6 text-right'p>>",
        "oTableTools" : {
          "aButtons" : [{
            "sExtends" : "collection",
            "sButtonText" : 'Save <span class="caret" />',
            "aButtons" : ["csv", "xls", "pdf"]
          }],
          "sSwfPath" : "/smart-admin/js/plugin/datatables/media/swf/copy_csv_xls_pdf.swf"
        },
        "fnInitComplete" : function(oSettings, json) {
          $(this).closest('#dt_table_tools_wrapper').find('.DTTT.btn-group').addClass('table_tools_group').children('a.btn').each(function() {
            $(this).addClass('btn-sm btn-default');
          });
        }
    });

    /*****************/
	/**  Add/Edit SSS **/
	/*****************/

    var $sss_validator = $("#frm-sss").validate({
		rules: {
		    'salary_from': { required: true },
		    'salary_to': { required: true },
		    'base_salary': { required: true },
		    'ec': { required: true },
		    'er': { required: true },
		    'ee': { required: true }
		},
		messages: {
			'salary_from': "Please enter the Salary Range From.",
			'salary_to': "Please enter the Salary Range To.",
			'base_salary': "Please enter the Base Salary.",
			'ec': "Please enter the EC.",
			'er': "Please enter the ER.",
			'ee': "Please enter the EE."
		},
		highlight: function (element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function (element) {
			$(element).closest('.form-group').removeClass('has-error').removeClass('has-success').addClass('has-success');
		},
		errorElement: 'span',
		errorClass: 'help-block',
		errorPlacement: function (error, element) {
			if (element.parent('.input-group').length) {
			    error.insertAfter(element.parent());
			} else {
			    error.insertAfter(element);
			}
		}
	});

	$("#btn-add").click(function(){
	    $("#modal-sss-label").text('Add Record');
	    $("#hdn-sss-id").val('');
	    $sss_validator.resetForm();
	});

	$(".btn-sss-edit").click(function(){
		var id = $(this).data('id');

	    $sss_validator.resetForm();
	    $("#modal-sss-label").text('Edit Record');
	    $("#hdn-sss-id").val(id);

	    sss_setting.show(id, function (data) {			
			$('#txt-from').val(data.result.salary_from.toFixed(2));
			$('#txt-to').val(data.result.salary_to.toFixed(2));
			$('#txt-base').val(data.result.base_salary.toFixed(2));
			$('#txt-ec').val(data.result.ec.toFixed(2));
			$('#txt-er').val(data.result.er.toFixed(2));
			$('#txt-ee').val(data.result.ee.toFixed(2));
			$('#txt-total').val(data.result.total.toFixed(2));
		});
	    
	});

	$('#frm-sss').on('submit', function (event) {
		event.preventDefault();

		var $valid = $("#frm-sss").valid();

    	if (!$valid) {
		    $sss_validator.focusInvalid();
		    return false;
		}

		var id = $("#hdn-sss-id").val();
		var salary_from = $('#txt-from').val();
		var salary_to = $('#txt-to').val();
		var base_salary = $('#txt-base').val();
		var ec = $('#txt-ec').val();
		var er = $('#txt-er').val();
		var ee = $('#txt-ee').val();
		var total = $('#txt-total').val();

		if (id == "") {
			//Adds
			var sss_obj = {
				'salary_from' : salary_from,
				'salary_to' : salary_to,
				'base_salary' : base_salary,
				'ec' : ec,
				'er' : er,
				'ee' : ee,
				'total' : total
			};

			sss_setting.store(sss_obj, function (data) {
				if (data.status == 'OK') {
					$("#frm-sss").find('.error').addClass('hide');
					$("#frm-sss").find('.success').removeClass('hide');

					setTimeout(function() {
					 window.location.href = '/setting/sss';
					 window.location.reload(true);
					}, 1000);
					
				}
				else {
					$("#frm-sss").find('.error').removeClass('hide');
					$("#frm-sss").find('.success').addClass('hide');
					$("#frm-sss").find('.error').text(data.error);				
				}
			});
		} else {
			//Edit
			var sss_obj = {
				'id' : id,
				'salary_from' : salary_from,
				'salary_to' : salary_to,
				'base_salary' : base_salary,
				'ec' : ec,
				'er' : er,
				'ee' : ee,
				'total' : total
			};

			sss_setting.update(sss_obj, function (data) {
				if (data.status == 'OK') {
					$("#frm-sss").find('.error').addClass('hide');
					$("#frm-sss").find('.success').removeClass('hide');

					setTimeout(function() {
					 window.location.href = '/setting/sss';
					 window.location.reload(true);
					}, 1000);
				}
				else {
					$("#frm-sss").find('.error').removeClass('hide');
					$("#frm-sss").find('.success').addClass('hide');
					$("#frm-sss").find('.error').text(data.error);		
				}
			});
		}
		
	});	

    /*****************/
	/** Archive SSS **/
	/*****************/

	$('.btn-sss-archive').on('click', function () {
		var id = $(this).data('id');
		$("#modal-remove-footer").show();
		$('#hdn-archive-sss-id').val(id);		
		$("#lbl-archive-sss-confirmation").text('Are you sure you want to archive this setting?');
	});

	$("#chk-archive-all").click(function(){
	   var all = $("#chk-archive-all").prop("checked");


	   if (all) {
	   	$(".chk-archive").prop("checked","true");	   	
	   } else {
	   	$(".chk-archive").removeAttr("checked");
	   }	   
	});	

	$("#btn-multi-archive").click(function(){
	    var selected = false;

	    var selectedRecord = $(".chk-archive");			
		
		for (i=0;i<selectedRecord.length;i++){
			if (selectedRecord[i].checked){
				selected = true;
				break;
			}
		}
		
		$("#modal-remove-footer").show();
		$('#hdn-archive-sss-id').val('');	

		if (selected){
			$("#lbl-archive-sss-confirmation").text('Are you sure you want to archive selected settings?');
		} else {
			$("#lbl-archive-sss-confirmation").text('Please select record to archive.');
			$("#modal-remove-footer").hide();
		}		
	});

	$('#frm-archive-sss').on('submit', function (event) {
		event.preventDefault();

		var id = $('#hdn-archive-sss-id').val();

		if (id != ''){
			//single delete
			var sss_obj = { 'id' : id };

			sss_setting.destroy(sss_obj, function (data) {
				if (data.status == 'OK') {
					$("#frm-archive-sss").find('.error').addClass('hide');
					$("#frm-archive-sss").find('.success').removeClass('hide');

					setTimeout(function() {
					 window.location.href = '/setting/sss';
					 window.location.reload(true);
					}, 1000);
				}
				else {
					$("#frm-archive-sss").find('.error').removeClass('hide');
					$("#frm-archive-sss").find('.success').addClass('hide');
					$("#frm-archive-sss").find('.error').text(data.error);	
				}
			});
		} else {
			//multiple delete
			var selectedRecord = $(".chk-archive");			
			var arraySelectedID = new Array;

			var c = 0;
			for (i=0;i<selectedRecord.length;i++){
				if (selectedRecord[i].checked){
					arraySelectedID[c]	= selectedRecord[i].attributes[3].nodeValue;
					c++;
				}
			}	

			var sss_obj = { 'id' : arraySelectedID };	
	
			sss_setting.multiDestroy(sss_obj, function (data) {
				if (data.status == 'OK') {
					$("#frm-archive-sss").find('.error').addClass('hide');
					$("#frm-archive-sss").find('.success').removeClass('hide');

					setTimeout(function() {
					 window.location.href = '/setting/sss';
					 window.location.reload(true);
					}, 1000);
				}
				else {
					$("#frm-archive-sss").find('.error').removeClass('hide');
					$("#frm-archive-sss").find('.success').addClass('hide');
					$("#frm-archive-sss").find('.error').text(data.error);	
				}
			});	
		}

		
	});		

	$("#txt-ec").keyup(function(){
	    computeTotal();	    
	});
	$("#txt-er").keyup(function(){
	    computeTotal();
	});
	$("#txt-ee").keyup(function(){
	    computeTotal();
	});

	$("#txt-ec").focusout(function(){
	   var val = parseFloat($("#txt-ec").val());
	   $("#txt-ec").val(val.toFixed(2));
	});
	$("#txt-er").focusout(function(){
	   var val = parseFloat($("#txt-er").val());
	   $("#txt-er").val(val.toFixed(2));
	});
	$("#txt-ee").focusout(function(){
	    var val = parseFloat($("#txt-ee").val());
	   $("#txt-ee").val(val.toFixed(2));
	});

	$("#txt-from").focusout(function(){
	    var val = parseFloat($("#txt-from").val());
	   $("#txt-from").val(val.toFixed(2));
	});
	$("#txt-to").focusout(function(){
	    var val = parseFloat($("#txt-to").val());
	   $("#txt-to").val(val.toFixed(2));
	});
	$("#txt-base").focusout(function(){
	    var val = parseFloat($("#txt-base").val());
	   $("#txt-base").val(val.toFixed(2));
	});
 
});

function computeTotal(){
	var ec = parseFloat($("#txt-ec").val());
	var er = parseFloat($("#txt-er").val());
	var ee = parseFloat($("#txt-ee").val());
	var total; 

	total = ec + er + ee;

	$("#txt-total").val(total.toFixed(2));
}