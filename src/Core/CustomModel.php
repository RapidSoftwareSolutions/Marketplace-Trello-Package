<?php

namespace Core;

use SebastianBergmann\Comparator\DateTimeComparator;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function moveAllListCards($param, &$blockCustom, &$vendorUrl, $apiKeys, $accessToken){
        $result['idBoard'] = $param['idBoard'];
        $result['idList'] = $param['newListId'];

        return $result;
    }
    public static function createMemberAvatar($param, &$blockCustom, &$vendorUrl, $apiKeys, $accessToken){
        $vendorUrl .= '?key='.$apiKeys.'&token='.$accessToken;
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'application/json';
        $clientSetup['multipart'] = [[
            'name' => 'file',
            'contents' => fopen($param['file'], 'r'),
        ]];

        return $clientSetup;
    }
    public static function createMemberBoardBackground($param, &$blockCustom, &$vendorUrl, $apiKeys, $accessToken){
        return self::createMemberAvatar($param, $blockCustom, $vendorUrl, $apiKeys, $accessToken);
    }
    public static function createMemberCustomBoardBackground($param, &$blockCustom, &$vendorUrl, $apiKeys, $accessToken){
        return self::createMemberAvatar($param, $blockCustom, $vendorUrl, $apiKeys, $accessToken);
    }
    public static function createMemberCustomEmoji($param, &$blockCustom, &$vendorUrl, $apiKeys, $accessToken){
        $vendorUrl .= '?key='.$apiKeys.'&token='.$accessToken;
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'multipart/related';
        $clientSetup['multipart'] = [[
            'name' => 'file',
            'contents' => fopen($param['file'], 'r'),
        ],[
            'name' => 'name',
            'contents' => $param['name'],
        ]];

        return $clientSetup;
    }
    public static function createMemberCustomSticker($param, &$blockCustom, &$vendorUrl, $apiKeys, $accessToken){
        return self::createMemberAvatar($param, $blockCustom, $vendorUrl, $apiKeys, $accessToken);
    }
    public static function createOrganizationLogo($param, &$blockCustom, &$vendorUrl, $apiKeys, $accessToken){
        return self::createMemberAvatar($param, $blockCustom, $vendorUrl, $apiKeys, $accessToken);
    }
}