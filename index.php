<?php
    include "media/includes/head.inc.php";
    include "media/includes/FHICT_api.inc.php";
    //session_start();
?>
<!-- Body -->
<div class="container">
    <section class="block">
        <h2>Canvas to-do list:</h2>
        <p>
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
                <?=$data[$i]->{"assignment"}->{"name"} . "<br>"?>
                <?php$i++;
            }
            ?>
        </p>
    </section>
    <section class="block">
        <h2>Block 2</h2>
    </section>
</div>
</body>
</html>


