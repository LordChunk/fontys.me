<?php include "media/includes/head.inc.php"; ?>

<!-- Body-->

<br>
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="col s6">
                <h3>Regels:</h3>
                <lu>
                    <li>Aanwezig zijn</li>
                    <li>Communicatie aanwezigheid</li>
                    <li>Verantwoordelijkheid nemen</li>
                    <li>Afstemmen werktijden</li>
                    <li>Focus houden</li>
                    <li>Gezelligheid is belangrijk!</li>
                    <li>Communicatie stand van zaken</li>
                    <li>Niet te luidruchtig zijn</li>
                    <li>Resecp! (lees: respect)</li>
                    <li>Ruim je rotzooi op</li>
                    <li>Zorg dat niemand last heeft van gamen</li>
                    <li>Geen Comic Sans!</li>
                </lu>
            </div>
            <div class="col s6">
                <h4>Knaken om mijn hosting te betalen:</h4>
                <ul>
                    <li>S&ouml;ren Ottenhof (&#128;	0,01): Hahahahahahaha nice</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row"><div class="col s12">
            <div class="col s6"><h3>Mooie foto's:</h3></div>
            <?php include "/includes/foto_query.inc.php"; ?>
            <div class="col s6"><h3>Discord:</h3></div>
        </div></div>
    <div class="row">
        <div class="col s12">
            <div class="col s6">
                <ul class="collapsible" data-collapsible="accordion">
                    <?php include 'media/includes/foto_query.inc.php'; ?>
                </ul>
            </div>
            <div class="col s6">
                <iframe src="https://discordapp.com/widget?id=349948995373891585&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                <br>
                <?php
                if ($_SESSION['ingelogd']) {
                ?>
                <!--Foto's toevoegen -->
                <div class="input_field card-panel">
                    <h5 id="picture-add">Foto's toevoegen:</h5>
                    <form action="media/includes/foto_add.inc.php" method="POST">

                        <div class="input-field">
                            <input type="text" id="banner_naam" name="banner_naam" data-length="15">
                            <label for="banner_naam">Banner tekst</label>
                        </div>
                        <div class="input-field">
                            <input type="text" id="foto_url" name="foto_url" data-length="400">
                            <label for="foto_url">Direct URL van de foto</label>
                        </div>
                        <div class="input-field">
                            <input type="text" id="tekst" name="tekst" data-length="400">
                            <label for="tekst">Beschrijving</label>
                        </div>

                        <button class="btn waves-effect waves-light" type="submit" name="action">Toevoegen
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
                <?php } else { ?>
                <div>
                    <h4>Log in om foto's toe te voegen.</h4>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include "media/includes/footer.inc.php";