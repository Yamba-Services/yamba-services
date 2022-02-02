<?php include_once 'header.php' ?>
<section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material" method="POST" id="register">
                    <div class="text-center">
                        <img src="../assets/images/auth/logo.png" alt="logo.png" width="100px" height="100px" class=" img-circle">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                </div>
                                <div class="col-12">
                                <div class="text-center" id="message">
                                </div>
                            </div>
                        
                            </div>
                            <br>
                            <div class="form-group form-primary">
                                <input type="text" name="nom_prenom" id="nom_prenom" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Nom & Prenoms</label>
                                <span class="form-bar" id="noms"></span>
                                <label class="float-label">Nom & Prenoms <span class="text-danger">*</span></label>
                                <div id="nom_area"></div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="telephone" id="telephone" class="form-control">
                                <span class="form-bar" id="phone"></span>
                                <label class="float-label">Téléphone <span class="text-danger">*</span></label>
                                <div id="tel"></div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="email" name="email" id="email" class="form-control">
                                <span class="form-bar" id="emaills"></span>
                                <label class="float-label">Addresse Email <span class="text-danger">*</span></label>
                                <div id="emails"></div>
                            </div>
                            <div class="form-group form-primary">
                                <select name="genre" id="genre" class=" form-control">
                                    <option value="">Genre</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                                <span class="form-bar" id="genres"></span>
                                <div id="sex"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <div class="row">
                                            <div class="col-10">
                                                <input type="password" name="password" id="password" class="form-control">
                                                <span class="form-bar" id="pass"></span>
                                                <label class="float-label ml-4">Password <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-2" id="view" hidden>
                                                <a href="" class="toggle_hide_password">
                                                    <i id="icon" aria-hidden="true"></i>
                                                </a>
                                                <span class="form-bar"></span>
                                            </div>
                                            <div id="passwords"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="password" name="confirm-password" id="confirmpassword" class="form-control">
                                        <span class="form-bar" id="passwordconf"></span>
                                        <label class="float-label">Confirm Password <span class="text-danger">*</span></label>
                                        <div id="passconfirm"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-md-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="" id="accepter">
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" id="condition" disabled class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Valider</button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-9">
                                    <p class="text-inverse text-left m-b-0">I have a accoun! <span><a href="index.php"><b class="text-primary">Se connecter</b></a></span></p>
                                </div>
                                <div class="col-md-3">
                                    <img src="../assets/images/auth/logo1.png" alt="small-logo.png" width="80px" height="80px" class="mr-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>

<?php include_once 'footer.php' ?>
<!-- <script type="text/javascript" src="php/Jquery/function.js"></script> -->
</body>
<script>
    $(document).ready(function() {
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
   
        $("#register").submit(function(e) {
            e.preventDefault();
            e.stopPropagation();
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
            } else {
                if ($("#password").val() != $("#confirmpassword").val()) {
                    $("#passwordconf").addClass("border border-danger");
                    $("#passconfirm").html("password incorrect!").addClass("text-danger");

                } else {
                    // $("#message").html("enregistrement reussi!").addClass("text-success");

                    $.ajax({
                        url: "../php/ajax/insert.php",
                        method: "POST",
                        data: $(this).serialize(),
                        success: function(data) {
                            if (data == "existe") {
                                $("#emaills").addClass("border border-danger");
                                $("#email").addClass("text-danger");
                                $("#emails").html("Email deja existant!").addClass("text-danger");
                                // $("#message").html("Email deja existant!").addClass("alert alert-danger bg-danger text-white").removeClass("text-success");
                                iziToast.info({
                                    title: 'Existe',
                                    message: 'Email deja existant',
                                    position: 'topLeft'
                                });
                               
                            }  if (data == "success") {
                               // $("#message").html("enregistrement reussi!").addClass("text-success");
                                $("#register")[0].reset();
                                iziToast.success({
                                    title: 'Succes!',
                                    message: 'Votre reinitialisation à reussi',
                                    position: 'topRight'
                                });
                            }  if (data == "faille") {
                                // $("#message").html("Echec de l'enregistrement!").addClass("text-success");
                                iziToast.error({
                                    title: 'Erreur',
                                    message: 'Echec de l\'enregistrement',
                                    position: 'topCenter'
                                });
                            }
                             if(data == "invalide"){
                                $("#emaills").addClass("border border-danger");
                                $("#email").addClass("text-danger");
                                $("#emails").html("Email Invalide!").addClass("text-danger");
                                iziToast.warning({
                                    title: 'Echec',
                                    message: 'Email Invalide',
                                    position: 'topCenter'
                                });
                            }
                           // $("#message").html(data);
                        }
                    });
                }
            }


        });
    })
</script>

</html>