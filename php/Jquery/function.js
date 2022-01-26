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
    /// submit button =====================================================
    $("#register").submit(function(e) {
        e.preventDefault();
        if ($("#nom_prenom").val() == "") {
            $("#noms").addClass("border border-danger");
            $("#nom_area").html("Champs vide").addClass("text-danger");
        }

        if ($("#telephone").val() == "") {
            $("#phone").addClass("border border-danger");
            $("#tel").html("Champs vide").addClass("text-danger");
        }

        if ($("#email").val() == "") {
            $("#emaills").addClass("border border-danger");
            $("#emails").html("Champs vide").addClass("text-danger");
        }

        if ($("#genre").val() == "") {
            $("#genres").addClass("border border-danger");
            $("#sex").html("Veuillez selectionnez").addClass("text-danger");
        }

        if ($("#password").val() == "") {
            $("#pass").addClass("border border-danger");
            $("#passwords").html("Champs vide").addClass("text-danger");
        }

        if ($("#confirmpassword").val() == "") {
            $("#passwordconf").addClass("border border-danger");
            $("#passconfirm").html("Champs vide").addClass("text-danger");
        }else{
          if($("#password").val() != $("#confirmpassword").val()){
            $("#passwordconf").addClass("border border-danger");
            $("#passconfirm").html("password incorrect!").addClass("text-danger");

          }
        }

        
    });
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