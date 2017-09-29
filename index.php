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
            ?>
        </ul>
    </section>
    <section class="block">
        <h2>Block 2</h2>
        <p>

        </p>
    </section>
</div>
</body>
</html>


