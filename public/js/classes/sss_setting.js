var sss_setting = new SssSetting();

function SssSetting(){
    
}

SssSetting.prototype.store = function (param, callback) {
	CSRF = $("meta[name='csrf-token']").attr('content');

	data = { 
				_token: CSRF,
				salary_from : param.salary_from,
				salary_to : param.salary_to,
				base_salary : param.base_salary,
				ec : param.ec,
				er : param.er,
				ee : param.ee,
				total : param.total
			};

	$.ajax({
		url: '/sssSetting/ajaxStore',
		type: 'POST',
		dataType: "json",
		data: data,
		success: function(data){
			if (callback)
				callback(data);
		}, error:function (xhr, error, ajaxOptions, thrownError){
			console.log(xhr.responseText);
		}
	});
}

SssSetting.prototype.show = function (id, callback) {
	CSRF = $("meta[name='csrf-token']").attr('content');

	$.ajax({
		url: '/sssSetting/' + id + '/ajaxShow/',
		type: 'POST',
		dataType: "json",
		data: {_token: CSRF},
		success: function(data){
			if (data.status == 'OK')
				callback(data);
		}, error:function (xhr, error, ajaxOptions, thrownError){
			console.log(xhr.responseText);
		}
	});
}

SssSetting.prototype.update = function (param, callback) {
	CSRF = $("meta[name='csrf-token']").attr('content');

	data = { 
				_token: CSRF,
				salary_from : param.salary_from,
				salary_to : param.salary_to,
				base_salary : param.base_salary,
				ec : param.ec,
				er : param.er,
				ee : param.ee,
				total : param.total
			};

	$.ajax({
		url: '/sssSetting/' + param.id + '/ajaxUpdate',
		type: 'POST',
		dataType: "json",
		data: data,
		success: function(data){
			if (callback)
				callback(data);
		}, error:function (xhr, error, ajaxOptions, thrownError){
			console.log(xhr.responseText);
		}
	});
}

SssSetting.prototype.destroy = function (param, callback) {
	CSRF = $("meta[name='csrf-token']").attr('content');

	data = { 
				_token: CSRF
			};

	$.ajax({
		url: '/sssSetting/' + param.id + '/ajaxDestroy',
		type: 'POST',
		dataType: "json",
		data: data,
		success: function(data){
			if (callback)
				callback(data);
		}, error:function (xhr, error, ajaxOptions, thrownError){
			console.log(xhr.responseText);
		}
	});
}

SssSetting.prototype.multiDestroy = function (param, callback) {
	CSRF = $("meta[name='csrf-token']").attr('content');

	data = { 
				_token: CSRF,
				ids : param.id
			};	
	$.ajax({
		url: '/sssSetting/ajaxMultiDestroy',
		type: 'POST',
		dataType: "json",
		data: data,
		success: function(data){
			if (callback)
				callback(data);
		}, error:function (xhr, error, ajaxOptions, thrownError){
			console.log(xhr.responseText);
		}
	});
}