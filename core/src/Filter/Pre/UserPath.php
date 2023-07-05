<?php

namespace Filter\Pre;

class UserPath implements PreFilterInterface
{
    protected const USER_PATH_PATTERNS = [
        "/C:\\\\([^\\\\]+)\\\\([^\\\\]+)\\/" => "X:\\********\\", // windows
        "/D:\\\\([^\\\\]+)\\\\([^\\\\]+)\\/" => "X:\\********\\",
        "/E:\\\\([^\\\\]+)\\\\([^\\\\]+)\\/" => "X:\\********\\",
        "/F:\\\\([^\\\\]+)\\\\([^\\\\]+)\\/" => "X:\\********\\",
        "/G:\\\\([^\\\\]+)\\\\([^\\\\]+)\\/" => "X:\\********\\",
        "/H:\\\\([^\\\\]+)\\\\([^\\\\]+)\\/" => "X:\\********\\",
        "/C:\\/([^\\/]+)\\/([^\\/]+)\\//" => "X:/********/", // windows with forward slashes
        "/D:\\/([^\\/]+)\\/([^\\/]+)\\//" => "X:/********/",
        "/E:\\/([^\\/]+)\\/([^\\/]+)\\//" => "X:/********/",
        "/F:\\/([^\\/]+)\\/([^\\/]+)\\//" => "X:/********/",
        "/G:\\/([^\\/]+)\\/([^\\/]+)\\//" => "X:/********/",
        "/H:\\/([^\\/]+)\\/([^\\/]+)\\//" => "X:/********/",
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
