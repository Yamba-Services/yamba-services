<?php include_once 'header.php'?>
<section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                    <form class="md-float-material form-material" method="POST" id="signIn">
                        <div class="text-center">
                            <img src="../assets/images/auth/logo.png" alt="logo.png" width="100px" height="100px" class=" img-circle">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <div class="text-center" id="message">

                                    </div>
                                    <br>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" id="email" class="form-control" >
                                    <span class="form-bar" id="emails"></span>
                                    <label class="float-label">Your Email Address</label>
                                    <div id="emaills"></div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" id="password" class="form-control" >
                                    <span class="form-bar" id="passwords"></span>
                                    <label class="float-label">Password</label>
                                    <div id="pasword"></div>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <a href="forgot.php" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-9">
                                        <p class="text-inverse text-left m-b-0">Je suis nouveau! <a href="register.php" class="text-primary"><b>Créer un compt</b></a></p>
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
    <?php include_once 'footer.php'?>
    </body>
    <script>
        $(document).ready(function(){
            $("#password").on("input propertychange", function(){
                if($("#password").val() == ""){
                    $("#view").attr("hidden", true);
                    $("#icon").addClass("fa fa-eye-slash");
                }else{
                    $("#view").attr("hidden", false);
                    $("#icon").addClass("fa fa-eye-slash 2x");
                }
            });
            $("#email").keyup(function(){
                $("#emails").removeClass("border border-danger");
                $("#emaills").html("").removeClass("text-danger");
            });

            $("#password").keyup(function(){
                $("#passwords").removeClass("border border-danger");
                $("#pasword").html("").removeClass("text-danger");
            });

            $("#signIn").submit(function(e){
                e.preventDefault();
                e.stopPropagation();

                if($("#email").val() == ""){
                    $("#emails").addClass("border border-danger");
                    $("#emaills").html("champs vide").addClass("text-danger");
                }

                if($("#password").val() == ""){
                    $("#passwords").addClass("border border-danger");
                    $("#pasword").html("champs vide").addClass("text-danger");
                }else{
                    $.ajax({
                        url: "../php/ajax/verify.php",
                        method: "POST",
                        data: $(this).serialize(),
                        success: function(data){
                            if(data == "faille"){
                                $("#emails").addClass("border border-danger");
                                 $("#emaills").html("email invalide!").addClass("text-danger");
                            }else if(data == "users"){
                                window.location.href = "../clients/index.php";
                                

                            }else if (data == 'false'){
                                $("#passwords").addClass("border border-danger");
                                $("#pasword").html("password incorrect!").addClass("text-danger");
                            }

                            $("#message").html(data);
                        }
                    })
                }
            });
            


        })
    </script>

</html>