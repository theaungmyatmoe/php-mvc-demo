<?php


/**
 * @throws Exception
 */
function view(string $path, array $data = [])
{
    extract($data);
    $path = str_replace('.', '/', $path);
    $filePath = __DIR__ . "/../views/{$path}.view.php";
    if (!file_exists($filePath)) {
        throw new Exception("View file {$filePath} not found");
    }
    return require "{$filePath}";

}