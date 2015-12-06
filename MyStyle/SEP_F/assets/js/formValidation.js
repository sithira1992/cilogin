/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validateNIC(pinputId, pmsgId) {

    var inputId = '#' + pinputId;
    var msgId = '#' + pmsgId;
    var re = /^[0-9]{9}[vVxX]$/;

    var nic = $(inputId).val();

    if (!re.test(nic)) {
        $(msgId).html("<div style=\"color:#FF0000\">invalid NIC (eg : 123456789v)</div>");
    }
    else {
        $(msgId).html("");

    }
}

function validatePhone(pinputId, pmsgId) {

    var inputId = '#' + pinputId;
    var msgId = '#' + pmsgId;
    var re = /([0-9]{10})/;

    var nic = $(inputId).val();

    if (!re.test(nic)) {
        $(msgId).html("<div style=\"color:#FF0000\">invalid phone number (eg : 0112123123)</div>");
    }
    else {
        $(msgId).html("");

    }
}

function requiredField(pinputId, pmsgId) {

    var inputId = '#' + pinputId;
    var msgId = '#' + pmsgId;

    var text = $(inputId).val();

    if(text=="" || text==null || text==" ") {
        $(msgId).html("<div style=\"color:#FF0000\">required..</div>");
        return false;
    }
    else {
        $(msgId).html("");
        return true;
    }
}
