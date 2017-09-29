<?php
    include "media/includes/head.inc.php";
    include "media/includes/FHICT_api.inc.php";
    //session_start();
?>
<!-- Body -->
<div class="container">
    <section class="block">
        <h2>Canvas to-do list:</h2>
        <ul>
            <?php
            /*
             * Canvas to-do list
             */

            $service = new FHICTService();
            $data = $service->getServiceData('/canvas/todo/me');
            if($data)
            {
                //$dump = $data[0]->{"assignment"}->{"name"};
                //var_dump($dump);
                $i = 0;
                foreach ($data as $course)
                {?>
                    <li>
                        <?=$data[$i]->{"assignment"}->{"name"}; $i++;?>
                        <a href="<?=$data[$i]->{"assignment"}->{"html_url"}?>" target="_blank">
                            <i class="material-icons">link</i>
                        </a>
                    </li>
                <?php
                }
            }
            else
            {
                //Not logged in response
            }?>
        </ul>
    </section>
    <section class="block">
        <h2>Schedule for today:</h2>
        <?php
        $data = $service->getServiceData('/schedule/me?days=1')->{"data"};
        if ($data)
        {?>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Start</th>
                    <th>End</th>
                </tr>

                <?php
                $i = 0;
                foreach ($data as $course) {
                    ?>
                    <tr>
                        <td><?= $data[$i]->{"subject"} ?></td>
                        <td><?= substr($data[$i]->{"start"}, -8) ?></td>
                        <td><?= substr($data[$i]->{"end"}, -8) ?></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </table>
            <?php
        }
        else
        {
            //Not logged in response
        }
        ?>
    </section>
    <section class="block">
        <h2>Hoi</h2>
        <iframe src="https://gadgets.buienradar.nl/gadget/zoommap/?lat=50.84833&lng=5.68889&overname=2&zoom=8&naam=eindhoven&size=2b&voor=1" scrolling=no width=330 height=330 frameborder=no></iframe>

        <?php
        //$data = $service->getServiceData(/*query link*/;
        if ($data)
        {
            //Logged in

        }
        else
        {
            //Not logged in response
        }
        ?>
    </section>
</div>
</body>
</html>