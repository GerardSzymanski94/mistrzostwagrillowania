<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['description', 'name', 'products',
        'surname',
        'street',
        'postal',
        'city',
        'phone',
        'email',
        'account',
        'data',
        'value',
        'paragon',
        'paragonimg',
        'status',
        'new',
        'ownvalue',
        'reject'
    ];

    public function getProducts()
    {
        $return = "";

        $products = $this->products;
        $products = explode(',', $products);


        $array = [];
        $array [] = '';
        $array [1] = "Heinz sos curry mango 220 ml";

        $array [2] = "Heinz sos burgerowy 220 ml";

        $array [3] = "Heinz sos salsa chilli 220 ml";

        $array [4] = "Heinz majonez 220 ml";

        $array [5] = "Heinz sos classic barbecue 220 ml";
        $array [] = "";

        $array [7] = "Heinz creationz fasola w stylu hiszpańskim 250 g";

        $array [8] = "Heinz creationz fasola w stylu włoskim 250 g";

        $array [9] = "Heinz fasolka barbecue 390 g";

        $array [10] = "Heinz fasolka chilli 390 g";

        $array [11] = "Heinz fasolka w sosie pomidorowym 415 g";

        $array [12] = "Heinz fasolka five beanz 415 g";

        $array [13] = "Heinz sos classic barbecue 400 ml";

        $array [14] = "Heinz sos sweet barbecue 400ml";

        $array [15] = "Heinz sos chilli barbecue 400 ml";

        $array [17] = "Heinz ketchup łagodny 450 g";

        $array [18] = "Heinz ketchup łagodny 570 g";

        $array [19] = "Heinz ketchup pikantny 570 g";

        $array [20] = "Heinz ketchup jalapeño chilli 570 g";


        foreach ($products as $key => $pr) {
            if ($key > 0)
                $return .= ', ';
            $return .= $array[$pr];
        }
        //dd($return);

        return $return;
    }
}
