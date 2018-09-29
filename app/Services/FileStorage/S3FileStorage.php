<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 9:32
 */

namespace App\Services\FileStorage;


use App\Contracts\FileStorageInterface;

class S3FileStorage implements FileStorageInterface
{
    /**
     * @return string
     */
    public function upload():string
    {
        return "S3FileStorage";
    }

    /**
     * @param int $fileID
     * @return string
     */
    public function delete(int $fileID):string
    {
        return "Delete S3FileStorage".$fileID;
    }
}