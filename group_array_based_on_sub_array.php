$data=[
   [
       'name'=>'Bhavin',
       'dept'=>'PHP',
       'status'=>''
   ],
   [
       'name'=>'Nilay',
       'dept'=>'PHP',
       'status'=>''
   ],
   [
       'name'=>'Aizaz',
       'dept'=>'PHP',
       'status'=>'Active'
   ],
   [
       'name'=>'Sweta',
       'dept'=>'PHP',
       'status'=>'Active'
   ]
];

$statusArr = array_column($data,'status'); 
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

$output = call_user_func_array('array_merge', $finalData);

echo "<pre>";
print_r($output);
