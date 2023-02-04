<?php

namespace Idea\FileSystem;

use \stdClass;

/**
 * Класс Json
 * @version 0.0.1
 * @package Idea\FileSystem\Json
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class Json
{

    public static function load(?string $jsonFile = null)
    {
        $data = new stdClass;
        if (File::hasFile($jsonFile)) {
            $info = new File($jsonFile);
            if ($info->getExtension() === 'json') {
                $data = json_decode(file_get_contents($jsonFile));
            }
        }
        return $data;
    }

}
