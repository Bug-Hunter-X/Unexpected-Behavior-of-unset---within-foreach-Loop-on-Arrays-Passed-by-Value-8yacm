function foo(array &$arr) {
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
$result2 = foo($arr2);
print_r($result2); // Output: Array ( [foo] => foo [baz] => baz )

//Alternatively, create a copy to avoid modifying the original array:
function foo2(array $arr) {
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'bar') {
      unset($arrCopy[$key]);
    }
  }
  return $arrCopy;
}

$arr3 = ['foo', 'bar', 'baz'];
$result3 = foo2($arr3);
print_r($result3); // Output: Array ( [0] => foo [2] => baz )

$arr4 = ['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz'];
$result4 = foo2($arr4);
print_r($result4); // Output: Array ( [foo] => foo [baz] => baz )