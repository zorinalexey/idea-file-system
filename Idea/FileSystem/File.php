<?php

namespace Idea\FileSystem;

use \SplFileInfo;

/**
 * Класс File
 * @version 0.0.1
 * @package Idea\FileSystem\File
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class File extends SplFileInfo
{

    public static function hasFile(?string $file = null): bool
    {
        if (is_file($file)) {
            return true;
        }
        return false;
    }

}
