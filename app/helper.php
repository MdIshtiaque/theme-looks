<?php

if (!function_exists('uploadProductImage')) {
    function uploadProductImage($file, $directory = 'products'): string
    {
        $directoryPath = public_path($directory);
        if (!file_exists($directoryPath)) {
            mkdir($directoryPath, 0777, true);
        }

        $filename = uniqid() . '_' . $file->getClientOriginalName();

        $file->move($directoryPath, $filename);

        return $filename;
    }
}
