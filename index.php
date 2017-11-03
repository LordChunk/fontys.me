<?php
    include "media/includes/head.inc.php";
    include "media/includes/FHICT_api.inc.php";
?>
<!-- Body -->
<main>
    <div class="container">
        <!--To-do list-->
        <section class="block">
            <h1>Canvas To-Do List:</h1>

                <?php
                /*
                 * Canvas to-do list
                 */
                if($_SESSION["ingelogd"])
                {
                    $service = new FHICTService();
                    $data = $service->getServiceData('/canvas/todo/me');
                    if($data)
                    {?>
                        <ul>
                            <?php
                            foreach ($data as $todo)
                            {?>
                                <li>
                                    <?=$todo->{"assignment"}->{"name"}?>
                                    <a href="<?=$todo->{"assignment"}->{"html_url"}?>" target="_blank">
                                        <i class="material-icons">link</i>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    else
                    {
                        //empty response
                        echo "Your to-do list is empty.";
                    }
                }
                else
                {
                    //not logged in response
                    echo "You must login to use this feature.";
                }

                ?>
        </section>
        <!--Schedule today-->
        <section class="block">
            <h1>Schedule for Today:</h1>
            <?php
            /*
             * Schedule today
             */
            if($_SESSION["ingelogd"])
            {

                $data = $service->getServiceData('/schedule/me?days=1');
                if ($data)
                {?>
                    <table>
                        <tr>
                            <th>Subject</th>
                            <th>Start</th>
                            <th>End</th>
                        </tr>

                        <?php
                        //var_dump(json_encode($data));
                        foreach ($data->{"data"} as $course) {
                            ?>
                            <tr>
                                <td><?=$course->{"subject"} ?></td>
                                <td><?=substr($course->{"start"}, -8, 5)?></td>
                                <td><?=substr($course->{"end"}, -8, 5)?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                }
                else
                {
                    //Empty schedule response
                    echo "Your schedule is empty.";
                }
            }
            else
            {
                //Not logged in
                echo "You must login to use this feature.";
            }
            ?>
            <p class="font_weight_normal">For more info, go to: <a class="font_weight_normal" target="_blank" href="https://pluff.venus.fhict.nl">Pluff</a></p>
        </section>

        <!--Weather block-->
        <section class="block" id="weather">
            <h1>Weather:</h1>
            <!--Weather.io widget-->
            <a class="weatherwidget-io" href="https://forecast7.com/en/51d445d47/eindhoven/" data-label_1="Eindhoven" data-label_2="Weather" data-font="Roboto" data-days="3" data-theme="pure" data-baseColor="" data-accent="rgba(1, 1, 1, 0.03)" data-textColor="#343434" data-highColor="#f92e2e" data-lowColor="#1176ba" >Eindhoven Weather</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://weatherwidget.io/js/widget.min.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","weatherwidget-io-js");
            </script>

<!--            <div id="weather_iframe_wrapper">-->
<!--                <iframe class="weather_iframe" id="weather_iframe_desktop" src="https://gadgets.buienradar.nl/gadget/zoommap/?lat=51.44083&lng=5.47778&overname=2&zoom=8&naam=eindhoven&size=2b&voor=1">-->
<!--                </iframe>-->
<!--                <iframe  class="weather_iframe" id="weather_iframe_mobile" src="https://gadgets.buienradar.nl/gadget/zoommap/?lat=51.44083&lng=5.47778&overname=2&zoom=8&naam=eindhoven&size=2&voor=1">-->
<!--                </iframe>-->
<!--            </div>-->
        </section>

        <!--Normal transit block -->
        <section class="block">
            <h1>Public Transport:</h1>
            <!-- Google maps -->
            <?php
            include "media/includes/google_maps_api.inc.php";
            //Google api stuff
            //var_dump(json_encode($transit_result));
            ?>

            <table>
                <tr>
                    <td>Departure:</td>
                    <td><?=$transit_result->{'routes'}[0]->{"legs"}[0]->{"departure_time"}->{"text"}?></td>
                </tr>
                <tr>
                    <td>Arrival:</td>
                    <td><?=$transit_result->{'routes'}[0]->{"legs"}[0]->{"arrival_time"}->{"text"}?></td>
                </tr>
                <tr>
                    <td>Distance:</td>
                    <td><?=$transit_result->{'routes'}[0]->{"legs"}[0]->{"distance"}->{"text"}?></td>
                </tr>
                <tr>
                    <td>Duration:</td>
                    <td><?=$transit_result->{'routes'}[0]->{"legs"}[0]->{"duration"}->{"text"}?></td>
                </tr>
            </table>
            <!--Add custom values -->
            <div class="form_div">
                <form action="media/includes/google_nav.inc.php" method="post">
                    <h3>Customise your journey:</h3>
                    <input type="text" placeholder="Departure" name="departure">
                    <input type="text" placeholder="Arrival" name="arrival" value="Fontys Rachelsmolen">

                    <h3>Language:</h3>
                    <label><input type="radio" name="language" value="nl" title="Nederlands">Nederlands</label>
                    <label><input type="radio" name="language" value="en-GB" title="English" checked>English</label>
                    <div id="button_error">
                        <button class="input-confirm" type="submit" name="action">
                            <span>
                                Submit
                                <i class="material-icons right">send</i>
                            </span>
                        </button>
                        <p class="error_message <?=$_GET['error']//Custom color when successful?>">
                            <?php
                            //Error messages
                            $error = $_GET['error'];
                            switch ($error)
                            {
                                case "enable_cookies":
                                    echo "Please enable your cookies.";
                                    break;
                                case "empty_field":
                                    echo "Please fill in all fields.";
                                    break;
                                case "cookies_internal":
                                    echo "An internal error occurred while setting your cookies";
                                    break;
                                case "success":
                                    echo "Your journey has been saved successfully.";
                                    break;
                            }
                            ?>
                        </p>
                    </div>
                </form>
            </div>
        </section>

        <!--Additional transit info block -->
        <section class="block" id="transit_block">
            <h1>Additional Transit Info:</h1>
            <?php
            if($transit_result) {
            ?>
                <table id="transit_info">
                    <tr>
                        <th></th>
                        <th colspan="2">Departure:</th>
                        <td class="td_devider"> </td>
                        <th colspan="2">Arrival:</th>
                        <th>Bus/Train</th>
                    </tr>
                    <?php
                    //Loop for each bus station or train stop
                    //$transit_result;

                    $steps = $transit_result->{'routes'}[0]->{"legs"}[0]->{"steps"};
                    //var_dump(json_encode($steps));
                    $i = 0;
                    foreach ($steps as $step) {
                        if ($step->{"travel_mode"} == "TRANSIT") {
                            //Bus or train row
                            //echo "transit station";
                    ?>
                            <tr>
                                <td>
                                    <img alt="Transit icon" src="<?= $step->{"transit_details"}->{"line"}->{"vehicle"}->{"icon"}?>"/>
                                </td>
                                <td><?= $step->{"transit_details"}->{"departure_time"}->{"text"}?></td>
                                <td><?= $step->{"transit_details"}->{"departure_stop"}->{"name"}?></td>
                                <td class="td_devider"> </td>
                                <td><?= $step->{"transit_details"}->{"arrival_time"}->{"text"}?></td>
                                <td><?= $step->{"transit_details"}->{"arrival_stop"}->{"name"}?></td>
                                <td class="transit_emphasise">
                                    <a href="
                                        <?php
                                        //If line specific link is available use this link instead of default link
                                        if ($step->{"transit_details"}->{"line"}->{"url"}) {
                                            echo $step->{"transit_details"}->{"line"}->{"url"};
                                        }
                                        else
                                        {
                                            echo $step->{"transit_details"}->{"line"}->{"agencies"}[0]->{"url"};
                                        }
                                        ?>"
                                           target="_blank"
                                           title="<?=$step->{"transit_details"}->{"line"}->{"agencies"}[0]->{"name"}?>"
                                        >
                                            <?=$step->{"transit_details"}->{"line"}->{"short_name"}
                                        ?>
                                    </a>
                                </td>
                            </tr>

                        <?php
                        } elseif ($step->{"travel_mode"} == "WALKING") {
                        ?>
                            <tr>
                                <td>
                                    <i class="material-icons transit_icons">directions_walk</i>
                                </td>
                                <td colspan="6">
                                    <?= $step->{"html_instructions"}?>
                                </td>
                            </tr>
                        <?php
                        }
                    }
                    ?>
                </table>
                <?php
            }
    //        else
    //        {
    //            //response for empty travel cookies
    //        }
            ?>
        </section>
    </div>
</main>
<?php
include "media/includes/footer.inc.php";
