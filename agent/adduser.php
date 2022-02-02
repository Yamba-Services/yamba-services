<?php
include_once 'header.php';
?>
<div class="pcoded-main-container" >
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-80 img-radius" src="../assets/images/avatar-4.jpg" alt="User-Profile-Image">
                        <div class="user-details">
                            <span id="more-details">Agent Commerciale</span>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="index.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>T</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Tableau de Board</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
                <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Utilisateurs</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="active">
                        <a href="adduser.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Ajouter</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Gerer</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
                <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Services</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="chart.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>RS</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Reseaux Sociaux</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="map-google.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Studio</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Location</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="#" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Login</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="#" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Register</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="#" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Sample Page</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </nav>
        <div class="pcoded-content">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Ajouter un clients</h5>
                                <p class="m-b-0">Remplir des champs pour </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="index.php">Accueil</a>
                                </li>
                                <li class="breadcrumb-item"><a href="adduser.php">Ajouter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card ">
                                        <div class="card-header bg-orange">
                                            <h5>Ajouter un client</h5>
                                        </div>
                                        <div class="card-block">
                                            <form action="" method="post" class="form-material" id="add-clients">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group form-primary">
                                                            <input type="text" class="form-control" name="nom" id="nom" placeholder="">
                                                            <span class="form-bar" id="noms"></span>
                                                            <label class="float-label" id="name-label">Nom <span class="text-danger">*</span> </label>
                                                            <div id="nom-area"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group form-primary">
                                                            <input type="text" class="form-control" placeholder="" name="prenom" id="prenom">
                                                            <span class="form-bar" id="prenom-bar"></span>
                                                            <label class="float-label" id="prenom-label">Prenom <span class="text-danger">*</span></label>
                                                            <div id="prenom-area"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group form-primary">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <select name="number" id="number" class="form-control">
                                                                        <option value="+226">+226</option>
                                                                    </select>
                                                                    <span class="form-bar"></span>

                                                                    <label class="float-label ml-3" id="numero-label">Téléphone <span class="text-danger">*</span></label>

                                                                </div>
                                                                <div class="col-8">
                                                                    <input type="number" class="form-control" placeholder="" id="numero" name="numero">

                                                                    <span class="form-bar" id="numero-bar"></span>
                                                                    <div id="numero-area"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group form-primary">
                                                            <input type="email" class="form-control" placeholder="" id="email" name="email">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Address email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group form-primary">
                                                            <input type="text" class="form-control" placeholder="fonction" id="function" name="function">
                                                            <span class="form-bar" id="function-bar"></span>
                                                            <label class="float-label" id="function-label">Fonction <span class="text-danger">*</span></label>
                                                            <div id="function-area"></div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group form-primary">
                                                            <select class="form-control" id="genre" name="genre">
                                                                <option value=""> Selectionnez le genre</option>
                                                                <option value="Homme"> Homme</option>
                                                                <option value="Femme"> Femme</option>
                                                            </select>
                                                            <span class="form-bar" id="genre-bar"></span>
                                                            <label class="float-label" id="genre-label">Genre <span class="text-danger">*</span></label>
                                                            <div id="genre-area"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-group form-primary">
                                                                    <select class="form-control" name="jours" id="jours">
                                                                        <option value="">Jours</option>
                                                                        <?php for ($i = 1; $i < 32; $i++) {
                                                                            echo " <option value=" . $i . "> " . $i . "</option>";
                                                                        } ?>
                                                                    </select>
                                                                    <span class="form-bar" id="jours-bar"></span>
                                                                    <label class="float-label" id="jours-label">Birthdays <span class="text-danger">*</span></label>
                                                                    <div id="jours-area"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group form-primary">
                                                                    <select class="form-control" id="mois" name="mois">
                                                                        <option value=""> Mois</option>
                                                                        <option value="Janvier"> Janvier</option>
                                                                        <option value="Février"> Février</option>
                                                                        <option value="Mars"> Mars</option>
                                                                        <option value="Avril"> Avril</option>
                                                                        <option value="Mais"> Mais</option>
                                                                        <option value="Juin"> Juin</option>
                                                                        <option value="Juillet"> Juillet</option>
                                                                        <option value="Août"> Août</option>
                                                                        <option value="Septembre"> Septembre</option>
                                                                        <option value="Octobre"> Octobre</option>
                                                                        <option value="Novembre"> Novembre</option>
                                                                        <option value="Décembre"> Décembre</option>
                                                                    </select>
                                                                    <span class="form-bar" id="mois-bar"></span>
                                                                    <div id="mois-area"></div>

                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group form-primary">
                                                                    <select class="form-control" name="anne" id="anne">
                                                                        <option value=""> Année</option>
                                                                        <?php for ($i = 0; $i < 97; $i++) {
                                                                        ?>
                                                                            <option value="<?php echo 1920 + $i; ?>"><?php echo 1920 + $i; ?></option>
                                                                        <?php
                                                                        } ?>
                                                                    </select>
                                                                    <span class="form-bar" id="anne-bar"></span>
                                                                    <div id="anne-area"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group form-primary">
                                                            <select name="ville" id="ville" class="form-control">
                                                                <option value="">Choisir</option>
                                                                <option value="Ouagadougou">Ouagadougou</option>
                                                                <option value="Bobo">Bobo</option>
                                                                <option value="Koudougou">Koudougou</option>
                                                                <option value="Fada">Fada</option>
                                                                <option value="Kaya">Kaya</option>
                                                                <option value="Ouahigouha">Ouahigouya</option>
                                                                <option value="Boromo">Bormo</option>
                                                                <option value="Kaya">Kaya</option>
                                                                <option value="Bouss&eacute;">Bouss&eacute;</option>
                                                                <option value="L&eacute;o">L&eacute;o</option>
                                                                <option value="R&eacute;o">R&eacute;o</option>
                                                                <option value="Dori">Dori</option>
                                                                <option value="Gaoua">Gaoua</option>
                                                                <option value="Dano">Dano</option>
                                                                <option value="D&eacute;dougou">D&eacute;dougou</option>
                                                                <option value="Solanzo">Solanzo</option>
                                                                <option value="Tenkodogo">Tenkodogo</option>
                                                                <option value="Manga">Manga</option>
                                                                <option value="Yako">Yako</option>
                                                                <option value="Ziniar&eacute;">Ziniar&eacute;</option>
                                                                <option value="Hund&eacute;">Hund&eacute;</option>
                                                                <option value="P&ocirc;">P&ocirc;</option>
                                                                <option value="Orodara">Orodara</option>
                                                                <option value="Koup&eacute;la">Koup&eacute;la</option>
                                                            </select>
                                                            <span class="form-bar" id="ville-bar"></span>
                                                            <label class="float-label" id="ville-label">Ville</label>
                                                            <div id="ville-area"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group form-primary">
                                                            <select class="form-control" id="liens" name="liens">
                                                                <option value="">Qui vous a invité?</option>
                                                                <option value="Agent commerciale"> Un agent commercial</option>
                                                                <option value="Membre de l'entrprise"> Un membre de l'entrprise</option>
                                                                <option value="A travers une publicite">A travers une publicité</option>
                                                                <option value="Sur la page facebook">Sur la page facebook</option>
                                                                <option value="Une personne vous a communiqué">Une personne vous a communiqué</option>
                                                            </select>
                                                            <span class="form-bar" id="liens-bar"></span>
                                                            <label class="float-label" id="liens-label">Lien d'invitation <span class="text-danger">*</span></label>
                                                            <div id="liens-area"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group form-primary">
                                                            <input type="text" class="form-control" id="societe" name="societe">
                                                            <span class="form-bar" id="societe-bar"></span>
                                                            <label class="float-label" id="societe-label">Nom de la société <span class="text-danger">*</span></label>
                                                            <div id="societe-area"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 text-center  mb-5">
                                                        <button type="submit" id="add-client" class="btn btn-outline-success w-100"> Valider <i class=" fa fa-check-circle-o"></i></button>




                                                    </div>
                                                    <div class="col-6 text-center mb-5">

                                                        <button type="button" class="btn btn-outline-danger w-100" id="annuler">Annuler <i class=" fa fa-remove"></i></button>



                                                    </div>
                                                </div>
                                            </form>
                                            <div id="msg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="styleSelector">

        </div>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body text-center">
                <img src="../assets/images/loading.gif" alt="" srcset="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>



</body>
<script>
    $(Document).ready(function() {
        $("#modals").attr("hidden", true)
        $("#annuler").on("click", function(e) {
            e.preventDefault();
            swal('Good Job', 'You clicked the button!', 'success');
        })

        $("#nom").keyup(function() {
            $("#noms").removeClass("border border-danger");
            $("#nom-area").html("").remove("text-danger");
            $("#name-label").removeClass("text-danger");
        });
        $("#prenom").keyup(function() {
            $("#prenom-bar").removeClass("border border-danger");
            $("#prenom-area").html("").removeClass("text-danger");
            $("#prenom-label").removeClass("text-danger");
        });
        $("#liens").change(function() {
            $("#liens-bar").removeClass("border border-danger");
            $("#liens-area").html("").removeClass("text-danger");
            $("#liens-label").removeClass("text-danger");
        });
        $("#societe").keyup(function() {
            $("#societe-bar").removeClass("border border-danger");
            $("#societe-area").html("").removeClass("text-danger");
            $("#societe-label").removeClass("text-danger");
        });
        $("#jours").change(function() {
            $("#jours-bar").removeClass("border border-danger");
            $("#jours-area").html("").removeClass("text-danger");
            $("#jours-label").removeClass("text-danger");
        });
        $("#mois").change(function() {
            $("#mois-bar").removeClass("border border-danger");
            $("#mois-area").html("").removeClass("text-danger");
            $("#mois-label").removeClass("text-danger");
        });
        $("#anne").change(function() {
            $("#anne-bar").removeClass("border border-danger");
            $("#anne-area").html("").removeClass("text-danger");
            $("#anne-label").removeClass("text-danger");
        });
        $("#ville").change(function() {
            $("#ville-bar").removeClass("border border-danger");
            $("#ville-area").html("").removeClass("text-danger");
            $("#ville-label").removeClass("text-danger");
        });
        $("#liens").keyup(function() {
            $("#liens-bar").removeClass("border border-danger");
            $("#liens-area").html("").removeClass("text-danger");
            $("#liens-label").removeClass("text-danger");
        });
        $("#function").keyup(function() {
            $("#function-bar").removeClass("border border-danger");
            $("#function-area").html("").removeClass("text-danger");
            $("#function-label").removeClass("text-danger");
        });
        $("#genre").change(function() {
            $("#genre-bar").removeClass("border border-danger");
            $("#genre-area").html("").removeClass("text-danger");
            $("#genre-label").removeClass("text-danger");
        });
        $("#numero").on("input", function() {
            $("#numero-bar").removeClass("border border-danger");
            $("#numero-area").html("").removeClass("text-danger");
            $("#numero-label").removeClass("text-danger");
        });
        $("#add-client").click(function(e) {
            e.preventDefault();
            if ($("#nom").val() == "") {
                $("#noms").addClass("border border-danger");
                $("#nom-area").html("champs vide").addClass("text-danger");
                $("#name-label").addClass("text-danger");
            }
            if ($("#prenom").val() == "") {
                $("#prenom-bar").addClass("border border-danger");
                $("#prenom-area").html("champs vide").addClass("text-danger");
                $("#prenom-label").addClass("text-danger");
            }
            if ($("#genre").val() == "") {
                $("#genre-bar").addClass("border border-danger");
                $("#genre-area").html("champs vide").addClass("text-danger");
                $("#genre-label").addClass("text-danger");

            }
            if ($("#ville").val() == "") {
                $("#ville-bar").addClass("border border-danger");
                $("#ville-area").html("champs vide").addClass("text-danger");
                $("#ville-label").addClass("text-danger");
            }
            if ($("#jours").val() == "") {
                $("#jours-bar").addClass("border border-danger");
                $("#jours-area").html("champs vide").addClass("text-danger");
                $("#jours-label").addClass("text-danger");
            }
            if ($("#mois").val() == "") {
                $("#mois-bar").addClass("border border-danger");
                $("#mois-area").html("champs vide").addClass("text-danger");
                $("#mois-label").addClass("text-danger");
            }

            if ($("#numero").val() == "") {
                $("#numero-bar").addClass("border border-danger");
                $("#numero-area").html("champs vide").addClass("text-danger");
                $("#numero-label").addClass("text-danger");
            }
            if ($("#societe").val() == "") {
                $("#societe-bar").addClass("border border-danger");
                $("#societe-area").html("champs vide").addClass("text-danger");
                $("#societe-label").addClass("text-danger");
            }
            if ($("#function").val() == "") {
                $("#function-bar").addClass("border border-danger");
                $("#function-area").html("champs vide").addClass("text-danger");
                $("#function-label").addClass("text-danger");
            }
            if ($("#liens").val() == "") {
                $("#liens-bar").addClass("border border-danger");
                $("#liens-area").html("champs vide").addClass("text-danger");
                $("#liens-label").addClass("text-danger");
            }
            if ($("#anne").val() == "") {
                $("#anne-bar").addClass("border border-danger");
                $("#anne-area").html("champs vide").addClass("text-danger");
                $("#anne-label").addClass("text-danger");
            } else {
                $.ajax({
                    url: "../php/ajax/insert.php",
                    method: "post",
                    data: $("#add-clients").serialize(),
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader("Ajax-Request", "true");
                    },
                    success: function(reponse) {
                        $("#msg").html(reponse);
                      
                        if (reponse == "success") {
                            swal('Success', 'Insertion Reussi!', 'success');
                            $("#add-clients")[0].reset();
                        }
                    },


                });

            }

        });
    });
</script>

</html>