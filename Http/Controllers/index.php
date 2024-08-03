    <?php
        // $name = "Ryan Sun"; 
        // $read = false;
        // if($read == true){
        //     $message = "You are $name";
        // }else{
        //     $message = "You are not $name";
        // }
        // $username = [
        //     "Williams",
        //     "Peterson",
        //     "hudgin",
        // ];
        // $friends1 = [
        //     "John",
        //     "Jake",
        //     "Jimmy",
        // ];
        // $friends = [
        //     ['name'=>"John", 'Number'=>"Friends one", 'Description'=>"Very cool"],
        //     ['name'=>"Jake", 'Number'=>"Friends two", 'Description'=>"cool"],
        //     ['name'=>"Jimmy",'Number'=>"Friends three", 'Description'=>"meh"],
        // ];
        // $username1 = [
        //     ['name' => "Williams" , 'Gender' => "Male"],
        //     ['name' => "Peterson" , 'Gender' => "Male"],
        //     ['name' => "hudgin" , 'Gender' => "Female"],
            
        // ];

        // $filter = function($items, $fn){ // array_filter(array, function)
        //     $filteredItems = [];
        //     foreach($items as $item){
        //         if($fn($item)){
        //             $filteredItems[] = $item;
        //         }
        //     }
        //     return $filteredItems; 
        // };
        // $filteredpeople = $filter($username1, function ($person){
        //     return $person['Gender'] == 'Male' && $person['name'] == 'Peterson';
        // });
        // $filteredpeople = filter(,,,);
        $_SESSION['name'] ='Jeffrey';

        view("index.view2.php", [
            'header'=> 'Home',
        ]);
    ?>


