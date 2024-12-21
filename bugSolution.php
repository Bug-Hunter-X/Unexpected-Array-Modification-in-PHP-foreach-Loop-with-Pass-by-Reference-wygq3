function foo(array $arr) {
  foreach ($arr as $key => $value) {
    $arr[$key] = $value + 1;
  }
  return $arr; // Return the modified array
} 
//OR
function foo(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value + 1;
  }
  return $newArray; // Return a new modified array
}