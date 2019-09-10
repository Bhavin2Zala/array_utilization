# array_utilization
Create new array based on sub child array value uniquely. Get sub child array value as key and grouping all sub child array respectively.

$data=[
   [
       'name'=>'AAA',
       'dept'=>'PHP',
       'status'=>''
   ],
   [
       'name'=>'BBB',
       'dept'=>'PHP',
       'status'=>''
   ],
   [
       'name'=>'CCC',
       'dept'=>'PHP',
       'status'=>'Active'
   ],
   [
       'name'=>'DDD',
       'dept'=>'PHP',
       'status'=>'Active'
   ]
];

use group_array_based_on_sub_array.php and call groupArray($data,'status');

o/p : 

Array
(
    [default] => Array
        (
            [0] => Array
                (
                    [name] => AAA
                    [dept] => PHP
                    [status] => 
                )
            [1] => Array
                (
                    [name] => BBB
                    [dept] => PHP
                    [status] => 
                )
        )
    [Active] => Array
        (
            [0] => Array
                (
                    [name] => CCC
                    [dept] => PHP
                    [status] => Active
                )
            [1] => Array
                (
                    [name] => DDD
                    [dept] => PHP
                    [status] => Active
                )
        )
)
