
$(document).ready(function() {

    $('#news_form').validate({
        rules: {
            title: {
                required: true
            },
            lstatus: {
                required: true
            },
            news_content: {
                required: true
            },
            pstatus: {
                required: true
            }
        },
        messages: {
            title: {
                required: "Please Enter title"
            },
            news_content: {
                required: " Please Fill the content"
            },
            lstatus: {
                required: "please fill whether news is latest or not"
            },
            pstatus: {
                required: "please fill whether news is published or not"
            }
        },
        submitHandler: function(form) {
            var news_content = encodeURIComponent(CKEDITOR.instances.news_content.getData());
            //var news_content=$('#news_content').val();
            $.ajax({
                type: "POST",
                url: site_url + '/news_controller/addNews',
                data: $('#news_form').serialize() + " &news_content=" + news_content,
                success: function(msg) {
                    if (msg == 1) {

                        $('#rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                        setTimeout("location.href=site_url+'/news_controller/manage_news'", 100);
                    }
                    else
                    {
                        $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');

                    }
                }
            })
        }
    });



    $('#news_form_edite').validate({
        rules: {
            title: {
                required: true
            },
            news_content: {
                required: true
            },
            lstatus: {
                required: true
            },
            pstatus: {
                required: true
            }
        },
        messages: {
            title: {
                required: "Please Enter title"
            },
            news_content: {
                required: "Please Fill the content"
            },
            lstatus: {
                required: "please fill whether news is latest or not"
            },
            pstatus: {
                required: "please fill whether news is published or not"
            }
        },
        submitHandler: function(form) {
            var news_content = encodeURIComponent(CKEDITOR.instances.news_content.getData());
            $.ajax({
                type: "POST",
                url: site_url + '/news_controller/editeNews',
                data: $('#news_form_edite').serialize() + '&news_content=' + news_content,
                success: function(msg) {
                    if (msg == 1) {
                        $('rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                        setTimeout("location.href=site_url+'/news_controller/manage_news'", 100);
                    }
                    else
                    {
                        $('rtn_msg').html('<div class="warning canhide">Update Unsuccessfull</div>')
                    }
                }

            })


        }

    });

    $('#brand_form').validate({
        rules: {
            title: {
                required: true
            },
            status: {
                required: true
            }
        },
        messages: {
            title: {
                required: "This filled is required"
            },
            status: {
                required: "Mark the status"
            }
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: site_url + '/product_controller/addNewbrand',
                data: $('#brand_form').serialize(),
                success: function(msg) {
                    if (msg == 1) {
                        $('rtn_msg').html('<div class="success canhide">Successfully Added.</div>');
                        setTimeout("location.href=site_url+'/product_controller/manage_brands'", 100);
                    }
                    else
                    {
                        $('rtn_msg').html('<div class="warning canhide">Update Unsuccessfull</div>')
                    }
                }

            })

        }
    });

    $('#prod_form').validate({
        rules: {
            product_cat_id:{
                required:true
            },
            title:{
                required:true
            },
            brand_id:{
                required:true
            },
            m_title:{
                required:true
            },
            product_content:{
                required:true
            },
            picbg:{
                required:true
            },
            picFileName:{
                required:true
            },
            avai:{
                required:true
            },
            online:{
                required:true
            },
            
            status:{
               required:true 
            }
        },
        messages: {
            product_cat_id:{
                required:"This fieled is required"
            },
            title:{
                required:"This fieled is required"
            },
            brand_id:{
                required:"This fieled is required"
            },
            m_title:{
                required:"This fieled is required"
            },
            product_content:{
                required:"This fieled is required"
            },
            picbg:{
                required:"This fieled is required"
            },
            picFileName:{
                required:"This fieled is required"
            },
            avai:{
                required:"This fieled is required"
            },
            online:{
                required:"This fieled is required"
            },
            
            status:{
               required:"This fieled is required"
            }
        },
        submitHandler: function(form) {
             var products_content = encodeURIComponent(CKEDITOR.instances.product_content.getData());
           // alert(product_content);
            $.ajax({
                type: "POST",
                url: site_url + '/product_controller/addNewproduct',
                data: $('#prod_form').serialize()+'&product_content'+products_content,
                success: function(msg) {
                    if (msg == 1) {
                        $('rtn_msg').html('<div class="success canhide">Successfully Added.</div>');
                        location.reload();
                    }
                    else
                    {
                        $('rtn_msg').html('<div class="warning canhide">Update Unsuccessfull</div>')
                    }
                }

            })
        }



    });







    $('#brand_form_edite').validate({
        rules: {
            title: {
                required: true
            },
            status: {
                required: true
            }
        },
        messages: {
            title: {
                required: "This fieled is required"
            },
            status: {
                required: "Select the status"
            }
        },
        submitHandler: function(form) {
            //  var status = $('input[name=status]:checked').val();
            $.ajax({
                type: "POST",
                url: site_url + '/product_controller/saveEditebrand',
                data: $('#brand_form_edite').serialize(),
                success: function(msg) {
                    if (msg == 1) {
                        $('rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                        setTimeout("location.href=site_url+'/product_controller/manage_brands'", 100);
                    }
                    else
                    {
                        $('rtn_msg').html('<div class="warning canhide">Update Unsuccessfull</div>');
                    }
                }
            })
        }

    });
    $('#edite_prod_cat_form').validate({
        rules: {
             title:{
                  required: true
             },
              picbg:{
                  required: true
              },
            parent_cat_id:{
                required: true
            },
            status:{
                required: true
            }        
        },
        messages: {
            title:{
                   required: "This fieled is required"
             },
              picbg:{
                   required: "This fieled is required"
              },
            parent_cat_id:{
                  required: "This fieled is required"
            },
            status:{
                  required: "This fieled is required"
            }
        },
        submitHandler: function(form) {
            $.ajax({
                type:"POST",
                url: site_url +'/product_controller/saveEditeproductcat',
                data: $('#edite_prod_cat_form').serialize(),
                success: function(msg) {
                    if (msg == 1) {
                        $('rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                        setTimeout("location.href=site_url+'/product_controller/manage_categories'", 100);
                    }
                    else
                    {
                        $('rtn_msg').html('<div class="warning canhide">Update Unsuccessfull</div>');
                    }
                }
            })

        }


    });
    
    $('#edit_prod_form').validate({
      rules:{
      product_cat_id:{
          required:true
      },
       title:{
           required:true
       },
       brand_id:{
           required:true
       },
       m_title:{
           required:true
       },
       product_content:{
           required:true
       },
       picbg:{
           required:true
       },
       picFileName:{
           required:true
       },
       avai:{
           required:true
       },
       online:{
           required:true
       },
       
       status:{
            required:true
       }
      },
      messages:{
          product_cat_id:{
          required:"This Field is required"
      },
       title:{
           required:"This Field is required"
       },
       brand_id:{
           required:"This Field is required"
       },
       m_title:{
           required:"This Field is required"
       },
       product_content:{
           required:"This Field is required"
       },
       picbg:{
           required:"This Field is required"
       },
       picFileName:{
           required:"This Field is required"
       },
       avai:{
           required:"This Field is required"
       },
       online:{
           required:"This Field is required"
       },
       
       status:{
            required:"This Field is required"
       }
          
      },
      submitHandler: function(form) {
            var product_content = encodeURIComponent(CKEDITOR.instances.product_content.getData());
            $.ajax({
                type: "POST",
                url: site_url + '/product_controller/saveEditeproducts',
                data: $('#edit_prod_form').serialize(),
                success: function(msg) {
                    if (msg == 1) {
                        $('rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                        setTimeout("location.href=site_url+'/product_controller/manage_products'", 100);
                    }
                    else
                    {
                        $('rtn_msg').html('<div class="warning canhide">Update Unsuccessfull</div>');
                    }
                }
            })

        }
       
       
       
       
    });
    
    

    $('#slider_form').validate({
        rules: {
            slider_order: {
                required: true
            },
            slider_title: {
                required: true
            },
            slider_link: {
                required: true
            },
            slider_content: {
                required: true
            },
            picFileName: {
                required: true
            },
            slider_no: {
                required: true
            },
            picbg: {
                required: true
            }

        },
        messages: {
            slider_order: {
                required: "This field is required"
            },
            slider_title: {
                required: "This field is required"
            },
            slider_link: {
                required: "This fieled is required"
            },
            slider_content: {
                required: "Fill the content"
            },
            picFileName: {
                required: "This field is required"
            },
            slider_no: {
                required: "This field is required"
            },
            picbg: {
                required: "This field is required"
            }

        },
        submitHandler: function(form) {
            //  var slider_content=encodeURIComponent(CKEDITOR.instances.slider_content.getData());
            $.ajax({
                type: "POST",
                url: site_url + '/slider_controller/addsliderimage',
                data: $('#slider_form').serialize(),
                success: function(msg) {
                    if (msg == 1) {
                        $('#rtn_msg').html(
                                '<div class="success canhide">Successfully added.</div>');

                        location.reload();

                    }
                    else
                    {
                        $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');

                    }
                }
            })
        }


    });
//    $.ajax({
//        type: "POST",
//        url: site_url + '/slider_controller/addsliderimage',
//        data: "slider_order=" + slider_order + "& picFileName="
//        + picFileName + "& slider_no=" + slider_no + "& slider_title=" + slider_title + '&picbg=' + picbg + '&content_text=' + content_text + '&slider_link=' + slider_link,
//        success: function(msg) {
//            // alert(msg);
//
//            if (msg == 1) {
//                $('#rtn_msg').html(
//                    '<div class="success canhide">Successfully added.</div>');
//
//                location.reload();
//            /*
//                 * setTimeout( "location.href =
//                 * site_url+'/tour_packages_controller/manage_tour_packages/';",
//                 * 100);
//                 */
//
//            } else {
//
//                $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');
//
//            // $('#rtn_msg')
//            // .html(msg);
//
//            }
//
//        }
//
//    });




    $('#prod_cat_form').validate({
        rules: {
            title: {
                required: true
            },
            picbg: {
                required: true
            },
            parent_cat_id: {
                required: true
            },
            status: {
                required: true
            }
        },
        messages: {
            title: {
                required: "This filled is required"
            },
            picbg: {
                required: "Upload the image"
            },
            parent_cat_id: {
                required: "Select parent Category"
            },
            status: {
                required: "select status"
            }
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: site_url + '/product_controller/saveNewproductcat',
                data: $('#prod_cat_form').serialize(),
                success: function(msg) {
                    if (msg == 1) {
                        $('rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                        // setTimeout("location.href=site_url+'/product_controller/manage_brands'", 100);
                        location.reload();
                    }
                    else
                    {
                        $('rtn_msg').html('<div class="warning canhide">Update Unsuccessfull</div>');
                    }
                }
            })
        }
    });

    $('#slider_form_main').validate({
        rules: {
            picFileName: {
                required: true
            },
            picbg: {
                required: true
            },
            slider_order: {
                required: true
            },
            slider_title: {
                required: true
            },
            slider_link: {
                required: true
            },
            slider_content: {
                required: true
            }

        },
        messages: {
            picFileName: {
                required: "This Filled is required"
            },
            picbg: {
                required: "This Filled is required"
            },
            slider_order: {
                required: "This Filled is required"
            },
            slider_title: {
                required: "This Filled is required"
            },
            slider_link: {
                required: "This Filled is required"
            },
            slider_content: {
                required: "This Filled is required"
            }

        },
        submitHandler: function(form) {
            // alert('ads');die();
            $.ajax({
                type: "POST",
                url: site_url + '/slider_controller/addsliderimagemain',
                data: $('#slider_form_main').serialize(),
                success: function(msg) {
                    // echo(msg);die();
                    if (msg == 1) {
                        $('rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                        // setTimeout("location.href=site_url+'/product_controller/manage_brands'", 100);
                        location.reload();
                    }
                    else
                    {
                        $('rtn_msg').html('<div class="warning canhide">Update Unsuccessfull</div>');
                    }

                }
            })
        }
    });

    $('#album_cat_form').validate({
        rules: {
            title: {
                required: true
            },
            albums: {
                required: true
            },
            status: {
                required: true
            }
        },
        messages: {
            title: {
                required: "This field is required"
            },
            albums: {
                required: "This field is required"
            },
            status: {
                required: "This field is required"
            }

        },
        submitHandler: function(form) {
            // alert('ads');die();
            $.ajax({
                type: "POST",
                url: site_url + '/album_controller/addNewAlbumcategory',
                data: $('#album_cat_form').serialize(),
                success: function(msg) {
                    // echo(msg);die();
                    if (msg == 1) {
                        $('#rtn_msg').html('<div class="success canhide" >Successfully added </div>');
                        setTimeout("location.href=site_url+'/album_controller/manage_album_categories'", 100);
                    }
                    else
                    {
                        $('rtn_msg').html('<div class="warning canhide">Update Unsuccessfull</div>');
                    }

                }
            })
        }

    });






});



function updateContent() {

    var content_text = encodeURIComponent(CKEDITOR.instances.content_text
            .getData());
    var content_id = $('#content_id').val();
    var inner_banner = $('#banner_file_name').val();

    $.ajax({
        type: "POST",
        url: site_url + '/content_controller/updatecontentbyid',
        data: "content_text=" + content_text + "& content_id="
                + content_id + "&inner_banner=" + inner_banner,
        success: function(msg) {
            // alert(msg);

            if (msg == 1) {
                $('#rtn_msg')
                        .html(
                        '<div class="success canhide">Successfully updated.</div>');

            } else {
                $('#rtn_msg')
                        .html(
                        '<div class="warning canhide">An error occured.</div>');

            }

        }

    });

}



function addsliderimage() {

    var slider_order = $('#slider_order').val();
    var picFileName = $('#picFileName').val();
    var picbg = $('#picbg').val();
    var slider_no = $('#slider_no').val();
    var slider_title = $('#slider_title').val();
    var slider_link = $('#slider_link').val();
    var content_text = encodeURIComponent(CKEDITOR.instances.slider_content
            .getData());




    $.ajax({
        type: "POST",
        url: site_url + '/slider_controller/addsliderimage',
        data: "slider_order=" + slider_order + "& picFileName="
                + picFileName + "& slider_no=" + slider_no + "& slider_title=" + slider_title + '&picbg=' + picbg + '&content_text=' + content_text + '&slider_link=' + slider_link,
        success: function(msg) {
            // alert(msg);

            if (msg == 1) {
                $('#rtn_msg').html(
                        '<div class="success canhide">Successfully added.</div>');

                location.reload();
                /*
                 * setTimeout( "location.href =
                 * site_url+'/tour_packages_controller/manage_tour_packages/';",
                 * 100);
                 */

            } else {

                $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');

                // $('#rtn_msg')
                // .html(msg);

            }

        }

    });

}


function addNewalbum() {
    var title = $('#title').val();
    var status = $('input[name=status]:checked').val();
    var picbg = $('#picbg').val();
    // alert(status);
    $.ajax({
        type: "POST",
        url: site_url + '/album_controller/addNewalbum',
        data: " title=" + title + " &status=" + status + " &picbg=" + picbg,
        success: function(msg) {
            if (msg == 1) {
                $('#rtn_msg').html('<div class="success canhide">Successfully added.</div>');
                location.reload();
            }
            else
            {
                $('#rtn_msg').html('<div class="warning canhide">An Error occurred  </div>');
            }
        }
    });
}

function  addNewalbumcategory() {
    var title = $('#title').val();
    var albums = $('#albums').val();
    var status = $('input[name=status]:checked').val();

    // alert(title);

    $.ajax({
        type: "POST",
        url: site_url + '/album_controller/addNewAlbumcategory',
        data: "title=" + title + " &albums=" + albums + " &status=" + status,
        success: function(msg) {
            if (msg == 1) {
                $('#rtn_msg').html('<div class="success canhide" >Successfully added </div>');
                setTimeout("location.href=site_url+'/album_controller/manage_album_categories'", 100);
            }
            else
            {
                $('#rtn_msg').html('<div class="warning canhide">An Error occurred  </div>');
            }

        }

    });
}

function updatealbum() {
    var album_id = $('#album_id').val()
    var title = $('#title').val();
    var status = $('input[name=status]:checked').val();
    var picbg = $('#picbg').val();

    $.ajax({
        type: "POST",
        url: site_url + '/album_controller/updateAlbum',
        data: "album_id=" + album_id + " &title=" + title + " &status=" + status + " &picbg=" + picbg,
        success: function(msg) {
            if (msg == 1) {
                $('#rtn_msg').html('<div class="success canhide">Successfully added .</div>');
                //location.reload();
                setTimeout("location.href=site_url+'/album_controller/manage_albums'", 100);

            }
            else
            {
                $('#rtn_msg').html('<div class="">An Error occured </div>');
            }

        }


    });



}

function edit_main_slider() {

    // alert($('#edit_main_slider_form').serialize()); 
    //    var slider_order = $('#slider_order').val();
    //    var picFileName = $('#picFileName').val();
    //    var picbg = $('#picFileName_bg').val();
    //    var slider_no = $('#slider_no').val();
    //    var slider_title = $('#slider_title').val();
    //    var slider_id=$('#slider_id').val();
    //    var slider_content=$('#slider_content').val();
    var content_text = encodeURIComponent(CKEDITOR.instances.slider_content.getData());

    $.ajax({
        type: "POST",
        url: site_url + '/slider_controller/update_main_slider',
        data: $('#edit_main_slider_form').serialize() + '&content_text=' + content_text,
        success: function(msg) {

            if (msg == 1) {
                $('#rtn_msg').html(
                        '<div class="success canhide">Successfully Updated.</div>');
                //     setTimeout("location.href=site_url+'/slider_controller/manage_main_slider'", 100);
                setTimeout("location.href=site_url+'/slider_controller/manage_product_slider'", 100);  // manage_product_slider()
            } else {

                $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');

            }

        }

    });

}


function addspcloffrsliderimage() {

    var slider_order = $('#slider_order').val();
    var picFileName = $('#picFileName').val();
    var slider_no = $('#spcl_ofrs_slider_no').val();
    var spcl_ofr_ttle = $('#spcl_ofr_ttle').val();
    var spcl_afr_discnt = $('#spcl_afr_discnt').val();
    var spcl_ofr_lnk = $('#spcl_ofr_lnk').val();

    $.ajax({
        type: "POST",
        url: site_url + '/spcl_ofrs_slider_controller/addslclofrsliderimage',
        data: "slider_order=" + slider_order + "& picFileName="
                + picFileName + "& slider_no=" + slider_no + "& spcl_ofr_ttle=" + spcl_ofr_ttle + "& spcl_afr_discnt=" + spcl_afr_discnt + "& spcl_ofr_lnk=" + spcl_ofr_lnk,
        success: function(msg) {
            //alert(msg);

            if (msg == 1) {
                $('#rtn_msg')
                        .html(
                        '<div class="success canhide">Successfully added.</div>');

                location.reload();
                /*
                 * setTimeout( "location.href =
                 * site_url+'/tour_packages_controller/manage_tour_packages/';",
                 * 100);
                 */
            } else {
                $('#rtn_msg')
                        .html(
                        '<div class="warning canhide">An error occured.</div>');

                // $('#rtn_msg')
                // .html(msg);

            }

        }

    });

}




function updatespcloffrsliderimage() {

    var slider_order = $('#slider_order').val();
    var picFileName = $('#picFileName').val();
    var slider_no = $('#spcl_ofrs_slider_no').val();
    var spcl_ofr_ttle = $('#spcl_ofr_ttle').val();
    var spcl_afr_discnt = $('#spcl_afr_discnt').val();
    var spcl_ofr_lnk = $('#spcl_ofr_lnk').val();
    var spcl_ofrs_slider_id = $('#spcl_ofrs_slider_id').val();

    $.ajax({
        type: "POST",
        url: site_url + '/spcl_ofrs_slider_controller/updateslclofrsliderimage',
        data: "slider_order=" + slider_order + "& picFileName="
                + picFileName + "& slider_no=" + slider_no + "& spcl_ofr_ttle=" + spcl_ofr_ttle + "& spcl_afr_discnt=" + spcl_afr_discnt + "& spcl_ofr_lnk=" + spcl_ofr_lnk + "& spcl_ofrs_slider_id=" + spcl_ofrs_slider_id,
        success: function(msg) {
            //alert(msg);

            if (msg == 1) {
                $('#rtn_msg')
                        .html(
                        '<div class="success canhide">Successfully saved.</div>');

                //  location.reload();

                setTimeout("location.href =site_url+'/spcl_ofrs_slider_controller/manage_spcl_ofrs_slider/';", 100);


            } else {

                $('#rtn_msg')
                        .html(
                        '<div class="warning canhide">An error occured.</div>');

                // $('#rtn_msg')
                // .html(msg);
            }

        }

    });

}












function savesliderorder(id) {
    //alert(id);


    var slider_ordr = $('#slider_ordr_' + id).val();
    // alert(slider_ordr);


    $.ajax({
        type: "POST",
        url: site_url + '/slider_controller/savesliderorder',
        data: "slider_ordr=" + slider_ordr + "& id="
                + id,
        success: function(msg) {
            //  alert(msg);

            if (msg == 1) {

                location.reload();
                /*
                 * setTimeout( "location.href =
                 * site_url+'/tour_packages_controller/manage_tour_packages/';",
                 * 100);
                 */

            } else {



                // $('#rtn_msg')
                // .html(msg);

            }

        }

    });










}


function savespclofrsliderorder(id) {
    //alert(id);


    var slider_ordr = $('#slider_ordr_' + id).val();     //alert(slider_ordr);


    $.ajax({
        type: "POST",
        url: site_url + '/spcl_ofrs_slider_controller/savesliderorder',
        data: "slider_ordr=" + slider_ordr + "& id="
                + id,
        success: function(msg) {
            //alert(msg);

            if (msg == 1) {

                location.reload();
                /*
                 * setTimeout( "location.href =
                 * site_url+'/tour_packages_controller/manage_tour_packages/';",
                 * 100);
                 */

            } else {



                // $('#rtn_msg')
                // .html(msg);

            }

        }

    });


}



function deletetourpackage(id) {

    if (confirm('Do you really need to delete this Tour Package ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/tour_packages_controller/deletetourpackage',
            data: "id=" + id,
            success: function(msg) {
                // alert(msg);
                if (msg == 1) {
                    // document.getElementById(trid).style.display='none';
                    $('#tour_pck_' + id).hide();
                } else if (msg == 2) {
                    // alert('Cannot be deleted as it is already assigned to
                    // Item Types');
                }
            }

        });

    }

}

function deletetouralbums(id) {

    if (confirm('Do you realy need to delete this album ?'))
    {
        $.ajax({
            type: "POST",
            url: site_url + '/album_controller/deleteourAlbum',
            data: "id=" + id,
            success: function(msg) {
                // alert(msg);
                if (msg == 1) {
                    $('#album_' + id).hide();
                }
                else if (msg == 2) {

                }
            }

        });
    }
}

function deleteOuralbumscat(id) {
    if (confirm('Do you realy need to delete this album category?'))
    {
        $.ajax({
            type: "POST",
            url: site_url + '/album_controller/deleteourAlbumcategory',
            data: "id=" + id,
            success: function(msg) {
                if (msg == 1) {
                    //alert(msg);
                    $('#album_' + id).hide();
                }
                else if (msg == 2) {

                }
            }
        });
    }
}

function deleteNews(id) {
    if (confirm('Do you need to delete this News ?'))
    {
        $.ajax({
            type: "POST",
            url: site_url + '/news_controller/deleteNews',
            data: "id=" + id,
            success: function(msg) {
                if (msg == 1) {
                    //  alert(msg);
                    $('#news_' + id).hide();
                }
                else if (msg == 2)
                {

                }
            }

        });
    }
}

function deletproductCats(id) {
    if (confirm('Do you need to delete this Product Category ?'))
    {
        $.ajax({
            type: "POST",
            url: site_url + '/product_controller/deleteProductcats',
            data: "id=" + id,
            success: function(msg) {
                if (msg == 1) {
                    $('#productcats_' + id).hide();
                }
                else if (msg == 2) {

                }
            }
        });
    }

}

function deletproducts(id) {
    if (confirm('Do you need to delete this Product  ?'))
    {
        $.ajax({
            type: "POST",
            url: site_url + '/product_controller/deleteProducts',
            data: "id=" + id,
            success: function(msg) {
                if (msg == 1) {
                    $('#products_' + id).hide();
                }
                else if (msg == 2) {

                }
            }
        });
    }

}



function deleteBrands(id) {
    if (confirm('Do you need to delete this Brand ?'))
    {
        $.ajax({
            type: "POST",
            url: site_url + '/product_controller/deleteBrand',
            data: "id=" + id,
            success: function(msg) {
                if (msg == 1) {
                    $('#brands_' + id).hide();
                }
                else if (msg == 2) {

                }
            }

        });

    }


}







function updatetourpackage() {

    var tour_desc = encodeURIComponent(CKEDITOR.instances.tour_desc.getData());
    var tour_name = $('#tour_name').val();
    var tour_package_id = $('#tour_package_id').val();

    $.ajax({
        type: "POST",
        url: site_url + '/tour_packages_controller/updatetourpackage',
        data: "tour_desc=" + tour_desc + "& tour_name=" + tour_name
                + "& tour_package_id=" + tour_package_id,
        success: function(msg) {
            // alert(msg);

            if (msg == 1) {
                $('#rtn_msg')
                        .html(
                        '<div class="success canhide">Successfully updated.</div>');

                // location.reload();
                setTimeout(
                        "location.href = site_url+'/tour_packages_controller/manage_tour_packages/';", 100);

            } else {
                $('#rtn_msg')
                        .html(
                        '<div class="warning canhide">An error occured.</div>');

            }

        }

    });

}




function deletetourpackage(id) {

    if (confirm('Do you really need to delete this Slider image ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/slider_controller/deletesliderimage',
            data: "id=" + id,
            success: function(msg) {
                // alert(msg);
                if (msg == 1) {
                    // document.getElementById(trid).style.display='none';
                    $('#slider_' + id).hide();
                } else if (msg == 2) {
                    // alert('Cannot be deleted as it is already assigned to
                    // Item Types');
                }
            }

        });

    }

}


function addCategory() {

    var description = $("#description").val();
    var parent_id = $("#parent_id").val();


    $.ajax({
        type: 'POST',
        url: site_url + '/gallery_controller/addCategory',
        data: 'desc=' + description + '&p_id=' + parent_id,
        async: false,
        contentType: false,
        success: function(msg) {
            if (msg == 1) {
                alert('Gallery category created succefully !');

                setTimeout("location.href =site_url+'/gallery_controller/viewCategories/';", 100);
            }
            else {
                alert('Error occured, please try again !');
            }

        }


    });


}

function deleteCategory(id) {

    var cat_id = id;

    if (confirm('If you delete this Category all the products under this category will also be deleted. Do you want to proceed ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/product_category/product_category_controller/deleteCategory',
            data: "id=" + cat_id,
            success: function(msg) {
                if (msg == 1) {
                    $('#cat_rtn_msg').html('<div class="success canhide">Successfully Deleted.</div>');
                    location.reload();
                }
                else {
                    $('#cat_rtn_msg').html('<div class="success canhide">Error Occured.</div>');
                    location.reload();
                }

            }

        });

    }

}

function deleteProduct(prod_id) {
    if (confirm('Do you really need to delete this product ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/products/product_controller/deleteProduct',
            data: "prod_id=" + prod_id,
            success: function(msg) {
                if (msg == 1) {
                    $('#cat_rtn_msg').html('<div class="success canhide">Successfully Deleted.</div>');
                    location.reload();
                } else {
                    $('#cat_rtn_msg').html('<div class="success canhide">Error Occured.</div>');
                    location.reload();
                }

            }

        });

    }

}


function deleteFeature(feature_id) {

    if (confirm('Do you really need to delete this feature ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/products/product_controller/deleteFeature',
            data: "feature_id=" + feature_id,
            success: function(msg) {
                if (msg == 1) {
                    $('#cat_rtn_msg').html('<div class="success canhide">Successfully Deleted.</div>');
                    location.reload();
                }
                else {
                    $('#cat_rtn_msg').html('<div class="success canhide">Error Occured.</div>');
                    location.reload();
                }

            }

        });

    }

}


function addFeature() {

    var feature = $("#feature").val();

    if (feature == '') {
        alert('Please enter the Feature Name !');
        return;
    }
    else {
        $.ajax({
            type: 'POST',
            url: site_url + '/products/product_controller/addFeature/',
            data: "feature=" + feature,
            async: false,
            success: function(msg) {

                if (msg == 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully added.</div>');

                    location.reload();

                } else {

                    $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');

                }

            }


        });
    }




}



function addBrand() {

    var brand = $("#brand").val();

    //    var showfirst = $("#showfirst").val();
    var status = $("#status").val();

    if (brand == '') {
        alert('Please enter the Brand Name !');
        return;
    }
    else {
        $.ajax({
            type: 'POST',
            url: site_url + '/products/product_controller/addBrand/',
            //            data: "brand=" + brand + '&showfirst=' + showfirst + '&status=' + status,
            data: "brand=" + brand + '&status=' + status,
            async: false,
            success: function(msg) {

                if (msg == 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully added.</div>');

                    location.reload();

                } else {
                    $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');

                }

            }


        });
    }

}

function deleteBrand(brand_id) {

    if (confirm('If you delete this brand all the products under this brand will also be deleted. Do you want to proceed ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/products/product_controller/deleteBrand',
            data: "brand_id=" + brand_id,
            success: function(msg) {
                if (msg == 1) {
                    $('#cat_rtn_msg').html('<div class="success canhide">Successfully Deleted.</div>');
                    location.reload();
                }
                else {
                    $('#cat_rtn_msg').html('<div class="success canhide">Error Occured.</div>');
                    location.reload();
                }

            }

        });

    }

}

function addSubCat() {

    var sub_cat = $("#sub_cat").val();
    var parent_cat = $("#parent_cat").val();
    var status = $("#status").val();

    if (sub_cat == '') {
        alert('Please enter the Sub Category Name !');
        return;
    }
    else {
        $.ajax({
            type: 'POST',
            url: site_url + '/products/product_controller/addSubCat/',
            data: "sub_cat=" + sub_cat + '&parent_cat=' + parent_cat + '&status=' + status,
            async: false,
            success: function(msg) {

                if (msg == 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully added.</div>');

                    location.reload();

                } else {
                    $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');

                }

            }

        });
    }




}

function deleteSubCat(sub_id) {

    if (confirm('If you delete this Sub Category all the brands and products under this Sub Category  will also be deleted. Do you want to proceed ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/products/product_controller/deleteSubCat',
            data: "sub_id=" + sub_id,
            success: function(msg) {
                if (msg == 1) {
                    $('#cat_rtn_msg').html('<div class="success canhide">Successfully Deleted.</div>');
                    location.reload();
                }
                else {
                    $('#cat_rtn_msg').html('<div class="success canhide">Error Occured.</div>');
                    location.reload();
                }

            }

        });

    }

}


function add_product_category() {


    var picFileName = $('#picFileName').val();
    var category = $("#category").val();
    var status = $('input[name=status]:checked').val();
    var parent_cat_id = $('#parent_cat_id').val();

    if (category == '') {
        alert("Please enter the Category Name !");
        return;
    }
    else {
        $.ajax({
            type: "POST",
            url: site_url + '/product_category/product_category_controller/addCategory/',
            data: "category=" + category + "&picFileName=" + picFileName + "&status=" + status + '&parent_cat_id=' + parent_cat_id,
            success: function(msg) {
                // alert(msg);

                if (msg == 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully added.</div>');

                    location.reload();

                } else {

                    $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');

                }
            }

        });
    }



}

function edit_product_category() {

    var cat_id = $('#cat_id').val();
    var picFileName = $('#picFileName').val();
    var category = $("#category").val();
    var status = $('input[name=status]:checked').val();
    var parent_cat_id = $('#parent_cat_id').val();

    $.ajax({
        type: "POST",
        url: site_url + '/product_category/product_category_controller/editCategory/',
        data: "cat_id=" + cat_id + "&category=" + category + "&picFileName=" + picFileName + "&status=" + status + '&parent_cat_id=' + parent_cat_id,
        success: function(msg) {
            //             alert(msg);

            if (msg == 1) {
                $('#rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                setTimeout("location.href=site_url + '/products/product_controller/loadCategories'", 100);

            } else {

                $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');

            }

        }

    });

}


function edit_sub_category() {

    var sub_cat = $('#sub_cat').val();
    var sub_id = $('#sub_id').val();
    var parent_cat = $("#parent_cat").val();
    var status = $('input[name=status]:checked').val();

    $.ajax({
        type: "POST",
        url: site_url + '/products/product_controller/edit_sub_category/',
        data: "sub_id=" + sub_id + "&sub_cat=" + sub_cat + "&parent_cat=" + parent_cat + "&status=" + status,
        success: function(msg) {
            //             alert(msg);

            if (msg == 1) {
                $('#rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                setTimeout("location.href=site_url + '/products/product_controller/loadSubCategories'", 100);

            } else {

                $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');

            }

        }

    });

}


function edit_brand(id) {


    $.ajax({
        type: "POST",
        url: site_url + '/products/product_controller/edit_brand/',
        data: $('#edit_brand_form').serialize(),
        success: function(msg) {

            if (msg == 1) {
                $('#rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
                setTimeout("location.href=site_url + '/products/product_controller/loadBrands'", 100);

            } else {

                $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');

            }

        }

    });

}



function ajaxloadsubcats(id) {


    $.ajax({
        type: "POST",
        url: site_url + '/products/product_controller/ajaxloadsubcats/',
        data: "id=" + id,
        success: function(msg) {
            $('#sub_cats').html(msg);
        }
    });

}
function add_product() {


    var product_name = $('#product_name').val();
    var model = $('#model').val();
    var brand = $('#brand').val();
    var picFileName1 = $('#picFileName1').val();
    var picFileName2 = $('#picFileName2').val();
    var availability = $('input[name=availability]:checked').val();
    var online = $('input[name=online]:checked').val();
    var status = $('input[name=status]:checked').val();
    var cart_link = $('#cart_link').val();
    var features = encodeURIComponent(CKEDITOR.instances.features.getData());
    var sub_products = $('#sub_products').val();

    var is_monthly = '';
    var is_hot = '';
    if ($('#is_monthly').is(':checked') == true) {
        is_monthly = '1';
    } else {
        is_monthly = '0';
    }

    if ($('#is_hot').is(':checked') == true) {
        is_hot = '1';
    } else {
        is_hot = '0';
    }


    if (product_name == '') {
        alert("Please enter the Product Name !");
        return;
    }
    else if (model == '') {
        alert('Please enter the model !');
    }
    else {

        // var str = $('#prod_form').serialize();
        $.ajax({
            type: "POST",
            url: site_url + '/products/product_controller/add_product/',
            data: "product_name=" + product_name + "& model=" + model + "& brand=" + brand +
                    "& picFileName1=" + picFileName1 + "& picFileName2=" + picFileName2 + "& availability=" + availability + "& online=" + online +
                    "& status=" + status + "& cart_link=" + cart_link + "& features=" + features + "& sub_products=" + sub_products + '&is_monthly=' + is_monthly + '&is_hot=' + is_hot,
            success: function(msg) {
                //                alert(msg); 
                if (msg == '' || 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully added.</div>');

                    location.reload();

                } else {

                    $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');
                }

            }

        });
    }

}


function edit_product() {

    var product_name = $('#product_name').val();
    var model = $('#model').val();
    var brand = $('#brand').val();
    var picFileName1 = $('#picFileName1').val();
    var picFileName2 = $('#picFileName2').val();
    var availability = $('input[name=availability]:checked').val();
    var online = $('input[name=online]:checked').val();
    var status = $('input[name=status]:checked').val();
    var cart_link = $('#cart_link').val();
    var features = encodeURIComponent(CKEDITOR.instances.features.getData());
    var product_cat = $('#product_cat').val();
    var product_id = $('#product_id').val();
    var is_monthly = '';
    var is_hot = '';
    if ($('#is_monthly').is(':checked') == true) {
        is_monthly = '1';
    } else {
        is_monthly = '0';
    }

    if ($('#is_hot').is(':checked') == true) {
        is_hot = '1';
    } else {
        is_hot = '0';
    }



    if (product_name == '') {
        alert("Please enter the Product Name !");
        return;
    }
    else {
        $.ajax({
            type: "POST",
            url: site_url + '/products/product_controller/edit_product/',
            data: "product_name=" + product_name + "& model=" + model + "& brand=" + brand + "& picFileName1=" + picFileName1 + "& picFileName2=" + picFileName2 + "& availability=" + availability + "& online=" + online + "& status=" + status + "& cart_link=" + cart_link + "& features=" + features +
                    "& product_cat=" + product_cat + "& product_id=" + product_id + '&is_monthly=' + is_monthly + '&is_hot=' + is_hot,
            success: function(msg) {
                //  alert(msg);

                if (msg == 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully Updated.</div>');

                    //  location.reload();
                    setTimeout("location.href=site_url+'/products/product_controller/loadProducts'", 100);

                } else {

                    $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');

                }

            }

        });
    }



}


////////////////////Album//////////////////////

function add_album() {

    var title = $('#title').val();

    if (title == '') {
        alert("Please enter the Album Title !");
        return;
    }
    else {
        $.ajax({
            type: "POST",
            url: site_url + '/album/album_controller/addAlbum/',
            data: $('#add_album_form').serialize(),
            success: function(msg) {

                if (msg == '' || 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully added.</div>');

                    location.reload();
                } else {

                    $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');

                }

            }

        });
    }
}

function deleteAlbum(album_id) {

    if (confirm('If you delete this Album all Categories under this album  will also be deleted. Do you want to proceed ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/album/album_controller/deleteAlbum',
            data: "album_id=" + album_id,
            success: function(msg) {
                if (msg == 1) {
                    $('#cat_rtn_msg').html('<div class="success canhide">Successfully Deleted.</div>');
                    location.reload();
                }
                else {
                    $('#cat_rtn_msg').html('<div class="success canhide">Error Occured.</div>');
                    location.reload();
                }
            }
        });
    }
}


function edit_album() {


    var title = $('#title').val();

    if (title == '') {
        alert("Please enter the Album Title !");
        return;
    } else {
        $.ajax({
            type: "POST",
            url: site_url + '/album/album_controller/editAlbum/',
            data: $('#edit_album_form').serialize(),
            success: function(msg) {

                if (msg == 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully Updated.</div>');

                    setTimeout("location.href=site_url+'/album/album_controller/viewAlbums'", 100);

                } else {

                    $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');
                }

            }

        });
    }
}

///////////////////Album category //////////////////////////////////

function deleteAlbumCategory(album_cat_id) {

    if (confirm('If you delete this Album Categories all images under this album  will also be deleted. Do you want to proceed ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/album/album_controller/deleteAlbumCategory',
            data: "album_cat_id=" + album_cat_id,
            success: function(msg) {
                if (msg == 1) {
                    $('#cat_rtn_msg').html('<div class="success canhide">Successfully Deleted.</div>');
                    location.reload();
                }
                else {
                    $('#cat_rtn_msg').html('<div class="success canhide">Error Occured.</div>');
                    location.reload();
                }
            }
        });
    }
}


function add_album_category() {

    var title = $('#cat_title').val();

    if (title == '') {
        alert("Please enter the Album Title !");
        return;
    }
    else {
        $.ajax({
            type: "POST",
            url: site_url + '/album/album_controller/addAlbumCategory/',
            data: $('#add_album_category_form').serialize(),
            success: function(msg) {

                if (msg == '' || 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully added.</div>');

                    location.reload();

                } else {

                    $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');

                }

            }

        });
    }
}

function edit_album_category() {
    var title = $('#cat_title').val();

    if (title == '') {
        alert("Please enter the Album Category Title !");
        return;
    } else {
        $.ajax({
            type: "POST",
            url: site_url + '/album/album_controller/editAlbumCategory/',
            data: $('#edit_album_category_form').serialize(),
            success: function(msg) {

                if (msg == 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully Updated.</div>');

                    setTimeout("location.href=site_url+'/album/album_controller/viewAlbumCategories'", 100);

                } else {

                    $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');

                }

            }

        });
    }
}



///////////////////Album Images /////////////////////////////
function savesCoverImage(id) {

    var is_cover_image = $('#cover_pic' + id).val();

    $.ajax({
        type: "POST",
        url: site_url + '/album/album_controller/change_cover_image',
        data: "is_cover_image=" + is_cover_image + "& id=" + id,
        success: function(msg) {
            //alert(msg);

            if (msg == 1) {

                location.reload();

            } else {

            }

        }

    });
}

function deleteAlbumImage(album_image_id) {

    if (confirm('Do you want to delete this image ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/album/album_controller/deleteAlbumImage',
            data: "album_image_id=" + album_image_id,
            success: function(msg) {
                if (msg == 1) {
                    $('#cat_rtn_msg').html('<div class="success canhide">Successfully Deleted.</div>');
                    location.reload();
                }
                else {
                    $('#cat_rtn_msg').html('<div class="success canhide">Error Occured.</div>');
                    location.reload();
                }
            }
        });
    }
}
/////////////////////////////////////////////////////////////////

function changeProductStatus(id, status, type) {

    $.ajax({
        type: "POST",
        url: site_url + '/products/product_controller/edit_product_status',
        data: "product_id=" + id + '&status=' + status + '&type=' + type,
        success: function(msg) {
            if (msg == 1) {
                location.reload();
            }
            else {
                location.reload();
            }
        }
    });
}

///////////////////////News////////////////////////////////////////////

//function add_news() {
//
//    var title = $('#title').val();
//    var content_text = encodeURIComponent(CKEDITOR.instances.news_content.getData());
//
//    if (title == '') {
//        alert("Please enter the News Title !");
//        return;
//    } else if (content_text == '') {
//        alert("Please enter the News Content !");
//        return;
//    } else {
//        $.ajax({
//            type: "POST",
//            url: site_url + '/news/news_controller/addNews/',
//            data: $('#add_news_form').serialize() + '&news_content=' + content_text,
//            success: function(msg) {
//
//                if (msg == '' || 1) {
//                    $('#rtn_msg').html(
//                            '<div class="success canhide">Successfully added.</div>');
//
//                    location.reload();
//                } else {
//                    $('#rtn_msg').html('<div class="warning canhide">An error occured.</div>');
//                }
//            }
//        });
//    }
//}
//function add_news() {
//    $(document).ready(function() {
//
//        $('#news_form').validate({
//            rules: {
//                title: {
//                    required: true,
//                },
//                lstatus: {
//                    required: true,
//                },
//                news_content: {
//                    required: true,
//                },
//                pstatus: {
//                    required: true,
//                }
//            },
//            messages: {
//                title: {
//                    required: "Please Enter title",
//                },
//                news_content: {
//                    required: " Please Fill the content",
//                },
//                lstatus: {
//                    required: "please fill whether news is latest or not",
//                },
//                pstatus: {
//                    required: "please fill whether news is published or not",
//                },
//            },
//            submitHandler: function(form) {
//                var news_content = $('#news_content').val();
//                $.ajax({
//                    type: "POST",
//                    url: site_url + '/news_controller/addNews',
//                    data: $('#news_form').serialize() + " &news_content=" + news_content,
//                    success: function(msg) {
//                        if (msg == 1) {
//
//                            $('#rtn_msg').html('<div class="success canhide">Successfully Updated.</div>');
//                            setTimeout("location.href=site_url+'/news_controller/manage_news'", 100);
//                        }
//                        else
//                        {
//                            $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');
//
//                        }
//                    }
//                })
//            }
//        });






//    });









function edit_news() {
    var title = $('#title').val();
    var content_text = encodeURIComponent(CKEDITOR.instances.news_content.getData());

    if (title == '') {
        alert("Please enter the News Title !");
        return;
    } else if (content_text == '') {
        alert("Please enter the News Content !");
        return;
    } else {
        $.ajax({
            type: "POST",
            url: site_url + '/news/news_controller/editNews/',
            data: $('#edit_news_form').serialize() + '&news_content=' + content_text,
            success: function(msg) {

                if (msg == 1) {
                    $('#rtn_msg').html(
                            '<div class="success canhide">Successfully Updated.</div>');

                    setTimeout("location.href=site_url+'/news/news_controller/viewNews'", 100);

                } else {

                    $('#rtn_msg').html('<div class="warning canhide">No change was made.</div>');

                }

            }

        });
    }
}
