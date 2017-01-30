'use strict';
var MMS = MMS || {
    'membership' : {},
};

//MEMBERSHIP
MMS.membership = function() {
    var member_id = null;
    $('#membership-register').submit(function(event){      
       event.preventDefault(); // Stop form from submitting normally
       var form_data = new FormData($('#membership-register')[0]);
        $.ajax({
            data: form_data,
            url: '/membership',
            type: 'POST',
            contentType: false,
            processData: false,
            enctype: "multipart/form-data",
            files: true,
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $('#_token').val());
            },
            success: function(response){
                if(response.errors) {
                    $("#errors h3").remove();  
                    $("#errors h5").remove(); 
                    $("#errors p").remove();  
                    $('#membership-fail-modal').modal('show');
                    $("#errors").append('<h3>' + response.message + '</h3');

                    for (var property in response.errors) {
                        $("#errors").append('<h5><strong>*' + property + '</strong></h5');
                        for(var i=0; i<response.errors[property].length; i++) {
                            $("#errors").append('<p>- ' + response.errors[property][i] + '</p');
                        }
                    } 
                } else {
                    window.location.reload(true);
                }
            }
        });
    });
    /*VIEW EDIT*/
    $("a[data-target=#edit-member-modal]").click(function(event) 
    {
        member_id = $(this).attr('id');
        event.preventDefault();
        $.ajax({
            url: '/membership/' + member_id,
            data: {format: 'json'},
            type: 'GET',
            dataType: 'json',
            success: function(response){
                $("#edit_id").val(response.id);
                $("#edit_first_name").val(response.first_name);
                $("#edit_last_name").val(response.last_name);
                $("#edit_contact_num").val(response.contact_number);
                $("#edit_mail_address").val(response.mail_address);
                $("#edit_ranking").val(response.ranking);
                document.getElementById('edit_thumbnail').getElementsByTagName('img')[0].src = '/images/member/'+response.pic;
            }
        });
    });
    /*UPDATE*/
    $('#membership-update').submit(function(event){      
       event.preventDefault(); // Stop form from submitting normally
       var form_data = new FormData($('#membership-update')[0]);
        $.ajax({
            data: form_data,
            url: '/membership/'+member_id+'/update',
            type: 'POST',
            contentType: false,
            processData: false,
            enctype: "multipart/form-data",
            files: true,
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $('#_token').val());
            },
            success: function(response){
                if(response.errors) {
                    $("#errors h3").remove();  
                    $("#errors h5").remove(); 
                    $("#errors p").remove();  
                    $('#membership-fail-modal').modal('show');
                    $("#errors").append('<h3>' + response.message + '</h3');

                    for (var property in response.errors) {
                        $("#errors").append('<h5><strong>*' + property + '</strong></h5');
                        for(var i=0; i<response.errors[property].length; i++) {
                            $("#errors").append('<p>- ' + response.errors[property][i] + '</p');
                        }
                    } 
                } else {
                    window.location.reload(true);
                }
            }
        });
    });
    /*VIEW DELETE*/
    $("a[data-target=#delete-member-modal]").click(function(event) 
    {
        member_id = $(this).attr('id');
        event.preventDefault();
        $.ajax({
            url: '/membership/' + member_id,
            data: {format: 'json'},
            type: 'GET',
            dataType: 'json',
            success: function(response){
                $("#member_id").text(response.id);
                $("#name").text(response.first_name+' '+response.last_name);
                $("#contact_num").text(response.contact_number);
                $("#mail_address").text(response.mail_address);
                $("#points").text(response.points);
            }
        });
    });
    /*DELETE*/
    $("#delete-member-button").click(function(event) 
    {
        $.ajax({
            url: '/membership/' + member_id,
            data: {format: 'json'},
            type: 'DELETE',
            dataType: 'json',
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $('#_token').val());
            },
            success: function(response){
                window.location.reload(true);
            }
        });
    });
};