
function groupArray($data, $key){
   $statusArr = array_column($data,$key); 
   $uniqueVal = array_unique($statusArr);
   $finalData = array_map(function($value) use($data, $statusArr){
      $sliceKeys=array_keys($statusArr,$value);
      if(strlen($value) >> 0){
          $result[$value] = array_slice($data,$sliceKeys[0],$sliceKeys[count($sliceKeys)-1]+1);
      }else{
          $result['default'] = array_slice($data,$sliceKeys[0],$sliceKeys[count($sliceKeys)-1]+1);
      }
      unset($sliceKeys);
      return $result;
   }, $uniqueVal);

  return call_user_func_array('array_merge', $finalData);
}
