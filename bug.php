function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$arr2 = ['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz'];
$result2 = foo($arr2); //This will not work as expected 
print_r($result2); //Output: Array ( [foo] => foo [baz] => baz )
