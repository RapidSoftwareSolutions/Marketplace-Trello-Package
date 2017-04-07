<?php

namespace Core;

use SebastianBergmann\Comparator\DateTimeComparator;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function createCard($param, &$blockCustom, &$vendorUrl){
        $result = $param;

        return $result;
    }
    public static function addAttachmentToCard($param, &$blockCustom, &$vendorUrl){
        $result = $param;

        return $result;
    }
}