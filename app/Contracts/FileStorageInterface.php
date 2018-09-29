<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 9:25
 */

namespace App\Contracts;


interface FileStorageInterface
{
    /**
     * Upload file
     */
    public function upload():string;

    /**
     * @param int $fileID
     * @return string
     */
    public function delete(int $fileID):string;
}