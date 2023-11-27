<?php
$platsPoulet = [
     [  "id"=>1,
         "nom"=>"poulet basquaise",
        "type"=>"traditionnel",
        "cuisson"=> "four",
        "accompagnement"=> "legumes",
        "sauce"=> "sauce basquaise",
        "image"=> "https://www.macuisinesante.com/wp-content/uploads/2019/07/poulet_basquaise.jpg"

    ],

    [    "id"=>2,
        "nom"=>"poulet frites",
        "type"=>"traditionnel",
        "cuisson"=> "four",
        "accompagnement"=> "legumes",
        "sauce"=> "sauce basquaise",
        "image"=> "https://www.macuisinesante.com/wp-content/uploads/2019/07/poulet_basquaise.jpg"

    ],
];


if(isset($_POST['idPoulet'])){
    $id= $_POST['idPoulet'];
    $content = afficheUnPlat($platsPoulet, $id);

}else{
    $content = showCardsPoulet($platsPoulet);

}



