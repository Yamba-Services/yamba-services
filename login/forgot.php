<?php include_once 'header.php' ?>
<section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Authentication card start -->

                <form class="md-float-material form-material" method="POST" id="forgot">
                    <div class="text-center">
                        <img src="../assets/images/auth/logo.png" alt="logo.png" width="100px" height="100px" class=" img-circle">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">Forgot Password</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="emaily" id="emaily" class="form-control">
                                <span class="form-bar" id="emails"></span>
                                <label class="float-label">Addresse Email</label>
                                <div id="email-area"></div>
                            </div>

                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary d-">
                                        <a href="index.php" class="text-right f-w-600 text-primary"> Se connecter</a>
                                    </div>
                                </div>
                                <div id="msg"></div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                        Valider
                                    </button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-9">
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
        $("#emaily").on("input Property", function() {
            $("#emails").removeClass("border border-danger");
            $("#email-area").removeClass("text-danger").html("");
        })
        $("#forgot").submit(function(e) {
            e.stopPropagation();
            e.preventDefault();
            if ($("#emaily").val() == "") {
                $("#emails").addClass("border border-danger");
                $("#email-area").addClass("text-danger").html("Champs vide");

            } else {
                $.ajax({
                    url: "../php/ajax/verify.php",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(data) {
                        if (data == "vraie") {
                          
                            $('form')[0].reset();
                            window.location.href = "reset.php";
                        } else if (data == "faux") {
                            $("#emails").addClass("border border-danger");
                            $("#email-area").addClass("text-danger").html("Email incorrect");
                        } else if (data == "mal") {
                            $("#emails").addClass("border border-danger");
                            $("#email-area").addClass("text-danger").html("Email invalide");
                        }
                        // $("#msg").html(data);
                    }
                })
            }
        });
    });
</script>

</html>