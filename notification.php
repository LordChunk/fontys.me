<html>
<head>
    <!--OneSignal-->

    <!--OneSignal-->
    <link rel="manifest" href="/manifest.json">
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
    <script src="media/js/notification.js"></script>
</head>
<body>
<?php
//Notificatie: 1 dag en 1 week
?>
    <form method="post" action="notification.php">
        <input name="body" placeholder="body">
        <input name="title" placeholder="title">
        <input type="hidden" name="send" value="true">
        <input type="submit">
    </form>
    <?PHP
    //if ($_POST["send"] || true){
        dueDateNotification();

        function dueDateNotification()
        {
            session_start();
            //Get data from api
            include "media/includes/FHICT_api.inc.php";

            $service = new FHICTService();
            $data = $service->getServiceData('/canvas/upcoming/me');


            //Get list of due dates
            foreach ($data as $task) {
                //Check if due date is set
                if($task->{"assignment"}->{"due_at"})
                {
                    $datum = $task->{"assignment"}->{"due_at"};
                    //Parse to make usable
                    $datum = str_replace("T", " ", $datum);
                    $datum = str_replace("Z", " ", $datum) . " (CEST)";

                    //$datum = null;    //Set time to right now for testing


                    $title = "⏰".$task->{"title"};
                    $body = "The following task is due right now: " . $task->{"title"} . ".\n\n Click this here to go to the turn in page.";

                    $url = $task->{"html_url"};
                    //Execute notification
                    $response = sendMessage($title, $body, $datum, $url);
                    $return["allresponses"] = $response;
                    $return = json_encode($return);

                    echo("<br><br>JSON received:<br><br>");
                    echo($return);
                }
            }
        }

        //Build message
        function sendMessage($title, $body, $time, $url){

            //Convert into usable objects
            $body = array(
                "en" => $body
            );
            $title = array(
                'en' => $title
            );

            //Build fields
            $fields = array(
                'app_id' => "d42d6e98-3d75-4968-bdf0-1cb00817fba3",
                //This will be made group-specific in the future
                'included_segments' => array('All'),
                'contents' => $body,
                "headings" => $title,
                'send_after' => $time,
                'url' => $url
            );

            $fields = json_encode($fields);
            echo("<br>JSON sent:<br><br>");
            echo($fields);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                                                'Authorization: Basic ZGU0NTU3ZTktMGJhNC00ZDMwLThmZTItNTFlNWRkYWY2MjJm'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

            $response = curl_exec($ch);
            curl_close($ch);

            return $response;
        }
    //}

    ?>

</body>
</html>
