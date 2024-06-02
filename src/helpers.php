<?php

if (!function_exists('relative_path')) {
    /**
     * Get relative path from full path
     * 
     * @param string $fullPath
     * 
     * @return string
     */
    function relative_path(string $fullPath)
    {
        $basePath = base_path();
        return str_replace($basePath . '/', '', $fullPath);
    }
}
