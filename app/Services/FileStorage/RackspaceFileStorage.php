<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 9:34
 */

namespace App\Services\FileStorage;

use App\Contracts\FileStorageInterface;

class RackspaceFileStorage implements FileStorageInterface
{
    /**
     * Upload file
     */
    public function upload():string
    {
        return "RackspaceFileStorage";
    }


    /**
     * @param int $fileID
     * @return string
     */
    public function delete(int $fileID):string
    {
        return "Delete RackspaceFileStorage".$fileID;
    }
}