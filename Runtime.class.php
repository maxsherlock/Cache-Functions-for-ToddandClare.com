<?php
class MyClass
{
  public static $cache = array();

  public static function get($code)
  {
    self::$cache[$code] = $code;

    return self::$cache[$code];
  }

}
MyClass::get('myCode');

// do something

echo '<pre>';
print_r(MyClass::$cache);
echo '</pre>';

The print_r will show this array :

    Array ( [myCode] => myCode )
//

Use this to clear the runtime PHP class cache
