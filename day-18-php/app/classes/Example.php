<?php


namespace App\classes;


class Example
{
    public $name;
    public $data =[];
    public function index()
    {
//      $this->data = [10,20,30,'BASIS','BITM',100.200,true,false];
//      foreach ($this->data as $key => $item)
//      {
//          echo $key . ' ' . $item . '<br/> ';
//      }

        $this->data = [
            0 => ['name' => 'Sudipto',
            'email' => 'sudiptosaha.diu84@gmail.com' ,
            'mobile' => [
                'personal' =>'64862386468268',
                'parent' =>'4577576576577'
            ],
                ],
            1 => ['name' => 'Shila',
                    'email' => 'sssssssssss.com' ,
                    'mobile' => [
                        'personal' =>'777777777',
                        'parent' =>'4444444'
                    ],

                ],
            2 => 'BITM',

            3 => ['name' => 'Sojib',
                    'email' => 'sojib84@gmail.com' ,
                    'mobile' => '1142444424'

                    ]

        ];

//       foreach ($this->data as $item)
//       {
////           echo $item['name'].' '.$item['email']. ' '.$item['mobile']. '<br/>';
//           if(is_array($item)){
//               foreach ($item as $value)
//               {
//                   if (is_array($value))
//                   {
//                       foreach ($value as $v_value )
//                       {
//                           echo $v_value . ' ';
//                       }
//                   }
//                   else {
//                       echo $value . ' ';
//                   }
//               }
//
//           }
//           else{
//               echo $item;
//           }
//
//
//           echo '<br/>';
//       }
//        echo '<pre>';
////        print_r($this->data);
//        var_dump($this->data);
    }
}