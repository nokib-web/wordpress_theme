<?php
$zip = new ZipArchive();
if ($zip->open('charlestonmenschorus-theme.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.'));
    foreach ($iterator as $file) {
        if ($file->isDir()) continue;
        $realPath = $file->getRealPath();
        $relativePath = substr($realPath, strlen(__DIR__) + 1);
        $relativePath = str_replace('\\', '/', $relativePath);
        if ($relativePath == 'zip.php' || $relativePath == 'charlestonmenschorus-theme.zip' || $relativePath == 'index.html') continue;
        $zip->addFile($realPath, $relativePath);
    }
    $zip->close();
    echo "Zip created successfully.\n";
} else {
    echo "Failed to create zip.\n";
}
