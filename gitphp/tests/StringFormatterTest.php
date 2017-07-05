<?php

namespace Tests\Lib;

use Lib\StringFormatter;
use PHPUnit\Framework\TestCase;

class StringFormatterTest extends TestCase
  {
      private $str1;
      private $str2;

      public function __construct()
      {
        parent::__construct();
          $this->str1 = "pierre";
          $this->str2 = "lelelel";
      }

      public function testConcat()
      {
          $actual = StringFormatter::concat($this->str1, $this->str2);
          $this->assertSame("pierrelelelel", $actual);
      }

      public function testToCamelCase()
      {
          $actual = StringFormatter::toCamelCase($this->str1, $this->str2);
          $this->assertSame("PierreLelelel", $actual);
      }

      public function testPrefix()
      {
          $actual = StringFormatter::prefix($this->str1, $this->str2,false);
          $this->assertSame("pierrelelelel", $actual);
      }

      public function testPrefixCamelCase()
      {
          $actual = StringFormatter::prefix($this->str1, $this->str2, true);
          $this->assertSame("PierreLelelel", $actual);
      }

      public function testSuffix()
      {
          $actual = StringFormatter::suffix($this->str1, $this->str2,false);
          $this->assertSame("lelelelpierre", $actual);
      }

      public function testSuffixCamelCase()
      {
          $actual = StringFormatter::suffix($this->str1, $this->str2, true);
          $this->assertSame("LelelelPierre", $actual);
      }
}
