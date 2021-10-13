<?php
function getDirContents($dir, $relativePath = false)
{
    $fileList = array();
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isDir()) continue;
        $path = $file->getPathname();
        if ($relativePath) {
            $path = str_replace($dir, '', $path);
            $path = ltrim($path, '/\\');
        }
        $fileList[] = $path;
    }
    return $fileList;
}
?>
