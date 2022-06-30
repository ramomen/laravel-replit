<?php

namespace App\Services;

/**
 * Class ReplitDBService
 * @package App\Services
 */
class ReplitDBService
{
  public function setKeyToValue($key,$value){
    
  curl $REPLIT_DB_URL -d $key.'='.$value;
  }
  public function getValueFromKey($key){
    
curl $REPLIT_DB_URL/.'$key'
  }
  public function setKeyToValue($key,$value){
    
  curl $REPLIT_DB_URL -d $key.'='.$value;
  }
}
