<?php
function CreateUpdateFile($pageMarkupComplete, $fileName, $filePath)
{
    // rename($filePath . $fileName, $filePath . pathinfo($filePath . $fileName, PATHINFO_BASENAME));
    $status = unlink($filePath . $fileName);
    $fileCreate = fopen($fileName, 'w');
    fwrite($fileCreate, $pageMarkupComplete);
    fclose($fileCreate);
    $status = rename($fileName, $filePath . $fileName);
}
