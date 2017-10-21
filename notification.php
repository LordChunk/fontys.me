<?php
session_start();
?>
<html>
<head>
    <!--OneSignal-->
    <link rel="manifest" href="/manifest.json">
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
    <script src="media/js/notification.js"></script>

    <script>
        var cssFile = "<?=substr_replace($_SERVER["SCRIPT_NAME"], "css", -3)?>";
        var group = "<?=$_SESSION["group"]?>";
    </script>
</head>
<body>
<?php
//Notificatie: 1 dag en 1 week
?>
<h1>Notification scheduler:</h1>
<?php
dueDateNotification();

function dueDateNotification()
{
    //Get data from api
    include "media/includes/FHICT_api.inc.php";

    $service = new FHICTService();
    $data = $service->getServiceData('/canvas/upcoming/me');

    //Get list of due dates
    foreach ($data as $task)
    {
        //Check if due date is set
        if($task->{"assignment"}->{"due_at"})
        {
            $dueDate = $task->{"assignment"}->{"due_at"};
            //Parse to make usable
            $dueDate = str_replace("T", " ", $dueDate);
            $dueDate = str_replace("Z", " ", $dueDate) . " (CEST)";

            //$dueDate = null;    //Set time to right now for testing

            $title = "⏰".$task->{"title"};
            $body = "The following task is due soon: " . $task->{"title"} . ".\n\n Click this here to go to the turn in page.";

            $url = $task->{"html_url"};

            //Loop once for every notification time (when due, 1 day before and 1 week before
            $i = 0;
            while($i < 3)
            {
                $notificationDates = array(
                    $dueDate,
                    date('Y-m-d H:i:s (T)', strtotime($dueDate. "-1 day")),
                    date('Y-m-d H:i:s (T)', strtotime($dueDate. "-1 week"))
                );
                //Execute notification
                $response = sendMessage($title, $body, $notificationDates[$i], $url);
                $i++;
            }
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
        //Group/class filter
        'filters' => array(array("field" => "tag", "key" => "group", "relation" => "=", "value" => $_SESSION["group"])),
        'contents' => $body,
        "headings" => $title,
        'send_after' => $time,
        'url' => $url
    );

    $fields = json_encode($fields);
    echo("<br>JSON sent:<br>");
    echo($fields . "<br>");

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

    $return["allresponses"] = $response;
    $return = json_encode($return);

    echo("<br><br>JSON received:<br>");
    echo($return . "<br>");

    return $response;
}
?>
</body>
</html>
