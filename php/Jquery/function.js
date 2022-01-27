"use strict";
$(document).ready(function(){
    $("#password").on("input propertychange", function(){
      if ($("#password").val() =="") {
        $("#view").attr("hidden", true);
        $("#icon").addClass("fa fa-eye-slash");
    }else{
        $("#view").attr("hidden", false);
        $("#icon").addClass("fa fa-eye-slash 2x");
    }
    }); 
    // supression des eurerrrrrrrr ================================

 $("#nom_prenom").keyup(function() {
        $("#noms").removeClass("border border-danger");
        $("#nom_area").html("").removeClass("text-danger");
    });
    // supression des eurerrrrrrrr ================================

    $("#telephone").keyup(function() {
        $("#phone").removeClass("border border-danger");
        $("#tel").html("").removeClass("text-danger");
    });
    // supression des eurerrrrrrrr ================================

    $("#email").keyup(function() {
        $("#emaills").removeClass("border border-danger");
        $("#emails").html("").removeClass("text-danger");
        $("#email").removeClass("text-danger");
    });
    // supression des eurerrrrrrrr ================================

    $("#genre").change(function() {
        $("#genres").removeClass("border border-danger");
        $("#sex").html("").removeClass("text-danger");
    });
    // supression des eurerrrrrrrr ================================

    $("#password").keyup(function() {
        $("#pass").removeClass("border border-danger");
        $("#passwords").html("").removeClass("text-danger");
    });
    // supression des eurerrrrrrrr ================================
    $("#confirmpassword").keyup(function() {
        $("#passwordconf").removeClass("border border-danger");
        $("#passconfirm").html("").removeClass("text-danger");
    });
    $("#passwords").keyup(function() {
        $("#pass-area").html("").removeClass("text-danger");
        $("#passwording").removeClass("border border-danger");
    });
    // supression des eurerrrrrrrr ================================
    $("#confirms").keyup(function() {
        $("#confirm-area").html("").removeClass("text-danger");
        $("#confirmation").removeClass("border border-danger");
    });
    /// submit button =====================================================
    
    $("#accepter").click(function(){
        $(this).is(':checked') ? $('#condition').prop('disabled', false) : $('#condition').prop('disabled', true);

    });
   
});
// $(document).ready(function() {
//     // target the link
//     $(".toggle_hide_password").on('click', function(e) {
//       e.preventDefault()
  
//       // get input group of clicked link
//       var input_group = $(this).closest('.input-group')
  
//       // find the input, within the input group
//       var input = input_group.find('input.form-control')
  
//       // find the icon, within the input group
//       var icon = input_group.find('i')
  
//       // toggle field type
//       input.attr('type', input.attr("type") === "text" ? 'password' : 'text')
  
//       // toggle icon class
//       icon.toggleClass('fa-eye-slash fa-eye')
//     });
//   });

  /////=====================Page enrgistrement code==============================
//   $(document).ready(function() {
   
// });

