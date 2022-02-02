<?php
session_start();
include_once 'header.php';
require_once "php/connection.php";


?>
<section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->

                <form class="md-float-material form-material" method="POST" id="reset">
                    <div class="text-center">
                        <img src="../assets/images/auth/logo.png" alt="logo.png" width="100px" height="100px" class=" img-circle">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">New Password</h3>
                                </div>
                            </div>
                            <div class="msg"></div>
                            <?php

                            $sql = "SELECT 	* from users where email ='" . $_SESSION["forgot"] . "'";
                            $sqls = $object->getConnection()->prepare($sql);
                            $sqls->execute();

                            ?>
                            <div class="form-group form-primary">
                                <input type="password" name="passwords" id="passwords" class="form-control">
                                <span class="form-bar" id="passwording"></span>
                                <label class="float-label">Password</label>
                                <div id="pass-area"></div>
                            </div>

                            <input type="hidden" name="mail" id="mail" value="<?php echo $sqls->fetch()["id_users"]  ?>">

                            <div class="form-group form-primary">
                                <input type="password" name="confirms" id="confirms" class="form-control">
                                <span class="form-bar" id="confirmation"></span>
                                <label class="float-label">Password Confirm</label>
                                <div id="confirm-area"></div>
                            </div>
                            <div class="row m-t-25 text-left" hidden id="message">
                                <div class="col-12 text-center text-success" >
                                    <p> réinitialisation réussi! Clicker <a href="login.php"> ICI </a> pour vous connecter!</p>
                                </div>

                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Réinitialiser</button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-9">
                                    help text;
                                </div>
                                <div class="col-md-3">
                                    <img src="../assets/images/auth/logo1.png" alt="small-logo.png" width="80px" height="80px">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end of form -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>
<?php include_once 'footer.php' ?>
</body>
<script>
    $(document).ready(function() {
        $("#passwords").keyup(function() {
            $("#pass-area").html("").removeClass("text-danger");
            $("#passwording").removeClass("border border-danger");
        });
        // supression des eurerrrrrrrr ================================
        $("#confirms").keyup(function() {
            $("#confirm-area").html("").removeClass("text-danger");
            $("#confirmation").removeClass("border border-danger");
        });

        $('#reset').submit(function(e) {
            e.preventDefault();
            if ($("#passwords").val() == "") {
                $("#pass-area").html("Champs vide").addClass("text-danger");
                $("#passwording").addClass("border border-danger");
            }
            if ($("#confirms").val() == "") {
                $("#confirm-area").html("Champs vide").addClass("text-danger");
                $("#confirmation").addClass("border border-danger");
            }
            else {if ($("#passwords").val() !=  $("#confirms").val() ) {
                $("#confirm-area").html("Mots de pass differents").addClass("text-danger");
                $("#confirmation").addClass("border border-danger");
            }
            else{
                $.ajax({
                    url: "../php/ajax/update.php",
                    method : "POST",
                    data : $(this).serialize(),
                    success : function(data){
                        if (data=="Success") {
                            iziToast.success({
                                title: 'Succes!',
                                    message: 'Reinitialisation à reussi',
                                    position: 'topRight'
                                });
                            $("form")[0].reset();
                            $("#message").attr("hidden", false);
                        }
                        else if (data=="failled") {
                            iziToast.error({
                                title: 'Erreur',
                                    message: 'Reinitialisation a echoué',
                                    position: 'topCenter'
                                });
                        }
                       // $(".msg").html(data);
                    }
                })
            }
        }

         
        });

    });
</script>

</html>