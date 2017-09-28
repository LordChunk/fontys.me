<?php include "media/includes/head.inc.php"; ?>
<!-- Body -->
<div class="container">
    <section class="block">
        <h2>Block 1</h2>
        <p>
            <?php
                include "media/includes/FHICT_api.inc.php";

                $service = new FHICTService();

                $data = $service->getServiceData('/groups');

                var_dump($data);
            ?>
        </p>
    </section>
    <section class="block">
        <h2>Block 1</h2>
    </section>
</div>
</body>
</html>