$(document).ready(function() {


    jQuery.ajaxSetup({async: false});
//     $(function() {

    var btnUpload = $('#inner_banner_upload');
    var status = $('#status');
    new AjaxUpload(
            btnUpload,
            {
                action: site_url + '/content_controller/upload_banner_image/',
                name: 'uploadfile',
                onSubmit: function(file, ext) {
                    if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                        // extension is not allowed
                        // status.text('Only JPG, PNG or GIF files are
                        // allowed');
                        $("#files").html(
                                "Only JPG, PNG or GIF files are allowed");
                        return false;
                    }
                    // status.text('Uploading...Please wait');
                    // $("#sta").html("<img src='loader.gif' />");

                },
                onComplete: function(file, response) {

                    //	alert(response);
                    // On completion clear the status
                    // status.text('');
                    $("#files").html("Uploading....");
                    // Add uploaded file to list
                    if (response != "error") {
                        $('#files').html(
                                '<img src="' + base_url + '/uploads/inner_page_banners/' + response
                                + '" width="250" /><br />');
                        banner_file_name = response;

                        document.getElementById('banner_file_name').value = response;

                    } else {
                        $('#files').html('Error');

                        // $('<li></li>').appendTo('#files').text(file).addClass('error');
                    }
                }
            });






//    jQuery.ajaxSetup({async: false});
////     $(function() {
//   // var slider_no = $('#slider_no').val();
//    var btnxUpload = $('#slider_upload');
//    var status = $('#status');
//    
//    alert(status);
//    new AjaxUpload(
//            btnxUpload,
//            {
//                action: site_url + '/content_controller/upload_banner_image/',
//                name: 'uploadfile',
//                onSubmit: function(file, ext) {
//                    if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
//                        // extension is not allowed
//                        // status.text('Only JPG, PNG or GIF files are
//                        // allowed');
//                        $("#files").html(
//                                "Only JPG, PNG or GIF files are allowed");
//                        return false;
//                    }
//                    // status.text('Uploading...Please wait');
//                    // $("#sta").html("<img src='loader.gif' />");
//
//                },
//                onComplete: function(file, response) {
//
//                    //	alert(response);
//                    // On completion clear the status
//                    // status.text('');
//                    $("#files").html("Uploading....");
//                    // Add uploaded file to list
//                    if (response != "error") {
//                        $('#files').html(
//                                '<img src="' + base_url + '/uploads/inner_page_banners/' + response
//                                + '" width="250" /><br />');
//                        banner_file_name = response;
//
//                        document.getElementById('banner_file_name').value = response;
//
//                    } else {
//                        $('#files').html('Error');
//
//                        // $('<li></li>').appendTo('#files').text(file).addClass('error');
//                    }
//                }
//            });
//

//    });





//var btnUpload=$('#jd_pdf_en');
//		var status=$('#status');
//		new AjaxUpload(btnUpload, {
//			action: site_url + '/occupations/upload/jd_pdf_en',
//			name: 'jd_pdf_eng',
//			onSubmit: function(file, ext){
//				 if (! (ext && /^(jpg)$/.test(ext))){ 
//                    // extension is not allowed 
//					alert('Only JPG is allowed');
//					return false;
//				}
//				//status.text('Uploading...Please wait');
//				
//				
//			},
//			onComplete: function(file, response){
//				//On completion clear the status
//				//status.text('');
//					//alert(1);
//				//Add uploaded file to list
//				
//				
//				if(response!="error"){
//					//alert(response);
//					
//					
//                                        $("#jd_pdf_eng").attr('value',response);
//                                        $("#jd_pdf_eng_file").html('<a href="'+base_url+"uploads/occupation/eng/"+response+'" target="_blank">'+response+'</a>');
//				} else{
//					$("#jd_pdf_eng").attr('value','');
//                                        $("#jd_pdf_eng_file").html('');
//				}
//			}
//		});
//
//var btnUpload1=$('#jd_pdf_si');
//		var status=$('#status');
//		new AjaxUpload(btnUpload1, {
//			action: site_url + '/occupations/upload/jd_pdf_si',
//			name: 'jd_pdf_sin',
//			onSubmit: function(file, ext){
//				 if (! (ext && /^(pdf)$/.test(ext))){ 
//                    // extension is not allowed 
//					alert('Only PDF is allowed');
//					return false;
//				}
//				//status.text('Uploading...Please wait');
//				
//				
//			},
//			onComplete: function(file, response){
//				//On completion clear the status
//				//status.text('');
//					$("#sta").html("");
//				//Add uploaded file to list
//				if(response!="error"){
//                                        $("#jd_pdf_sin").attr('value',response);
//                                        $("#jd_pdf_sin_file").html('<a href="'+base_url+"uploads/occupation/sin/"+response+'" target="_blank">'+response+'</a>');
//				} else{
//					$("#jd_pdf_sin").attr('value','');
//                                        $("#jd_pdf_eng_file").html('');
//				}
//			}
//		});
//var btnUpload2=$('#jd_pdf_ta');
//		var status=$('#status');
//		new AjaxUpload(btnUpload2, {
//			action: site_url + '/occupations/upload/jd_pdf_ta',
//			name: 'jd_pdf_tam',
//			onSubmit: function(file, ext){
//				 if (! (ext && /^(pdf)$/.test(ext))){ 
//                    // extension is not allowed 
//					alert('Only PDF is allowed');
//					return false;
//				}
//				//status.text('Uploading...Please wait');
//				
//				
//			},
//			onComplete: function(file, response){
//				//On completion clear the status
//				//status.text('');
//					
//				//Add uploaded file to list
//				if(response!="error"){
//                                        $("#jd_pdf_tam").attr('value',response);
//                                        $("#jd_pdf_tam_file").html('<a href="'+base_url+"uploads/occupation/tam/"+response+'" target="_blank">'+response+'</a>');
//				} else{
//					$("#jd_pdf_tam").attr('value','');
//                                        $("#jd_pdf_tam_file").html('');
//				}
//			}
//		});
//    




});