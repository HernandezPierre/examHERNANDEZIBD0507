<?php

namespace Lib;

class Class
{
    public function mypublic(array $data)
    {
        if (!isset($data['valid'])) {
            throw new \Exception('this is not valid');
        }

        return $this->myprivate($data['valid']);
    }

    private function myprivate($value)
    {
        if ($value === 'test1') {
            return 'premier cas de figure';
        }

        if ($value === 'test2') {
            return 'second cas de figure';
        }
        if ($value === 'test3'){
          return 'troisieme cas de figure';
        }
        if ($value === 'test4'){
          return 'quatrieme cas de figure';
        }

        return 'default : ' . $value;
    }
    public function concat($str1, $str2){
      return $str1+$str2;
    }
    public function toCamelCase($str1, $str2){
      $str=$str1+$str2;
      return lcfirst(str_replace(‘ ‘, ”, ucwords(strtr($str, ‘_-’, ‘ ‘))));
    }
    public function prefix($str1, $str2,$bool){
      $str=$str1+$str2;
      if($bool == true){
        $str = toCamelCase($str1,$str2);
      }
      return $str;
    }
    public function suffix($str1, $str2,$bool){
      return str1+str2;
      if($bool == true){
        $str = toCamelCase($str1,$str2);
      }
    }

}
