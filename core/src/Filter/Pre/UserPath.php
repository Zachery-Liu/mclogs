<?php

namespace Filter\Pre;

class UserPath implements PreFilterInterface
{
    protected const USER_PATH_PATTERNS = [
        "/C:\\\\Users\\\\([^\\\\]+)\\\\/" => "X:\\Users\\********\\", // windows
        "/D:\\\\Users\\\\([^\\\\]+)\\\\/" => "X:\\Users\\********\\",
        "/E:\\\\Users\\\\([^\\\\]+)\\\\/" => "X:\\Users\\********\\",
        "/F:\\\\Users\\\\([^\\\\]+)\\\\/" => "X:\\Users\\********\\",
        "/G:\\\\Users\\\\([^\\\\]+)\\\\/" => "X:\\Users\\********\\",
        "/H:\\\\Users\\\\([^\\\\]+)\\\\/" => "X:\\Users\\********\\",
        "/C:\\/Users\\/([^\\/]+)\\//" => "X:/Users/********/", // windows with forward slashes
        "/D:\\/Users\\/([^\\/]+)\\//" => "X:/Users/********/",
        "/E:\\/Users\\/([^\\/]+)\\//" => "X:/Users/********/",
        "/F:\\/Users\\/([^\\/]+)\\//" => "X:/Users/********/",
        "/G:\\/Users\\/([^\\/]+)\\//" => "X:/Users/********/",
        "/H:\\/Users\\/([^\\/]+)\\//" => "X:/Users/********/",
        "/(?<!\\w)\\/home\\/[^\\/]+\\//" => "/home/********/", // linux
        "/(?<!\\w)\\/Users\\/[^\\/]+\\//" => "/Users/********/" // macos
    ];

    /**
     * Censor usernames in paths
     *
     * @param string $data
     * @return string
     */
    public static function Filter(string $data): string
    {
        foreach (static::USER_PATH_PATTERNS as $pattern => $replacement) {
            $data = preg_replace($pattern, $replacement, $data);
        }
        return $data;
    }
}