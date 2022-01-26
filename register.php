<?php include_once 'header.php' ?>
<section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material" method="POST" id="register">
                    <div class="text-center">
                        <img src="assets/images/auth/logo.png" alt="logo.png" width="100px" height="100px" class=" img-circle">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                </div>
                            </div>
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
                                    <img src="assets/images/auth/logo1.png" alt="small-logo.png" width="80px" height="80px" class="mr-4">
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

</html>