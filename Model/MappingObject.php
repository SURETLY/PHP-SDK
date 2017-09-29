<?php
/**
 * Created by PhpStorm.
 * User: ndolgopolov
 * Date: 27.09.17
 * Time: 18:34
 */

class MappingObject
{

    public function getJSON(){

        return json_encode(get_object_vars($this));

    }

}