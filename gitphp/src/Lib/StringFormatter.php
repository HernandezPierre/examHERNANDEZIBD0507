<?php

namespace Lib;

class StringFormatter
{
    public static function concat($str1, $str2){
      return $str1 . $str2;
    }
    public static function toCamelCase($str1, $str2){
      $str1[0]=strtoupper($str1[0]);
      $str2[0]=strtoupper($str2[0]);
      return $str1 . $str2;
    }
    public static function prefix($str1, $str2,$bool){
      $str=$str1.$str2;
      if($bool == true){
        $str = self::toCamelCase($str1,$str2);
      }
      return $str;
    }
    public static function suffix($str1, $str2,$bool){
      $str=$str2.$str1;
      if($bool == true){
        $str = self::toCamelCase($str2,$str1);
      }
      return $str;
    }
}
