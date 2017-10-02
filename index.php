<?php
    include "media/includes/head.inc.php";
    include "media/includes/FHICT_api.inc.php";
    //session_start();
?>
<!-- Body -->
<div class="container">
    <section class="block">
        <h2>Canvas to-do list:</h2>

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
                        //$dump = $data[0]->{"assignment"}->{"name"};
                        //var_dump($dump);
                        foreach ($data as $todo)
                        {?>
                            <li>
                                <?=$todo->{"assignment"}->{"name"}; $i++;?>
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
    <section class="block">
        <h2>Schedule for today:</h2>
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
                    foreach ($data as $course) {
                        ?>
                        <tr>
                            <td><?= $course->{"data"}->{"subject"} ?></td>
                            <td><?= substr($course->{"data"}->{"start"}, -8) ?></td>
                            <td><?= substr($course->{"data"}->{"end"}, -8) ?></td>
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
    </section>
    <section class="block" id="weather">
        <h2>Weather:</h2>
        <div id="weather_iframe_wrapper">
            <iframe id="weather_iframe_desktop" src="https://gadgets.buienradar.nl/gadget/zoommap/?lat=51.44083&lng=5.47778&overname=2&zoom=8&naam=eindhoven&size=2b&voor=0"
                    scrolling=no width=330 height=330 frameborder=no>
            </iframe>
            <iframe id="weather_iframe_mobile" src="https://gadgets.buienradar.nl/gadget/zoommap/?lat=51.44083&lng=5.47778&overname=2&zoom=8&naam=eindhoven&size=2&voor=0"
                    scrolling=no width=256 height=256 frameborder=no>
            </iframe>
        </div>
    </section>
    <section class="block">
        <h2>Public transport:</h2>
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

    </section>

    <section class="block">
        <h2>Additional transit info:</h2>
        <table id="transit_info">
            <tr>
                <th/>
                <th colspan="2">Departure:</th>
                <td class="td_devider"/>
                <th colspan="2">Arrival:</th>
                <th>Bus/Train</th>
            </tr>
            <?php
            //Loop for each bus station or train stop
            //$transit_result;

            $steps = $transit_result->{'routes'}[0]->{"legs"}[0]->{"steps"};
            //var_dump(json_encode($steps));
            $i = 0;
            foreach ($steps as $step)
            {
                if($step->{"travel_mode"} == "TRANSIT")
                {
                    //Bus or train row
                    //echo "transit station";
                    ?>
                    <tr>
                        <td>
                            <img src="<?=$step->{"transit_details"}->{"line"}->{"vehicle"}->{"icon"}?>"/>
                        </td>
                        <td><?=$step->{"transit_details"}->{"departure_time"}->{"text"}?></td>
                        <td><?=$step->{"transit_details"}->{"departure_stop"}->{"name"}?></td>
                        <td class="td_devider"/>
                        <td><?=$step->{"transit_details"}->{"arrival_time"}->{"text"}?></td>
                        <td><?=$step->{"transit_details"}->{"arrival_stop"}->{"name"}?></td>
                        <td>
                            <a href="
                                <?php
                                    //If line specific link is available use this link instead of default link
                                    if ($step->{"transit_details"}->{"line"}->{"url"})
                                    {
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
                                <?=$step->{"transit_details"}->{"line"}->{"short_name"}?>
                            </a>
                        </td>
                    </tr>

                <?php
                }
                elseif ($step->{"travel_mode"} == "WALKING")
                {?>
                    <tr>
                        <td>
                            <i class="material-icons transit_icons">directions_walk</i>
                        </td>
                        <td colspan="2">
                            <?=$step->{"html_instructions"}?>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </section>
</div>
</body>
</html>