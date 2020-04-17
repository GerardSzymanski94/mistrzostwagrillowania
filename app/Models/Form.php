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

        $array [2] = "HEINZ SOS CZOSNKOWY 220 ML";

        $array [3] = "HEINZ KLASYCZNY SOS BARBECUE 220 ML";

        $array [4] = "HEINZ SOS BURGEROWY 220 ML";

        $array [5] = "HEINZ SOS SALSA CHILLI 220 ML";
        $array [] = "";

        $array [7] = "HEINZ SŁODKI SOS CHILLI 220 ML";

        $array [8] = "HEINZ MUSZTARDA MIODOWA 220 ML";

        $array [9] = "HEINZ MUSZTARDA ŁAGODNA 220 ML";

        $array [10] = "HEINZ KETCHUP 50 % MNIEJ CUKRU I SOLI 400 ML";

        $array [11] = "HEINZ KETCHUP ŁAGODNY 450 ML";

        $array [12] = "HEINZ SOS CURRY MANGO 875 ML";

        $array [13] = "HEINZ SOS FIRECRACKER 875 ML";

        $array [14] = "HEINZ SOS CZOSNKOWY 875 ML";

        $array [15] = "HEINZ MUSZTARDA BARBECUE 875 ML";

        $array [16] = "HEINZ KETCHUP ŁAGODNY 875ml";

        $array [17] = "HEINZ FASOLKA BARBECUE 390 G";

        $array [18] = "HEINZ FASOLKA CHILLI 390 G";

        $array [19] = "HEINZ FIVE BEANZ: 5 RODZAJÓW FASOLKI W SOSIE POMIDORWYM 415 G";
        $array [20] = "HEINZ CREATIONZ FASOLA W STYLU HISZPAŃSKIM 250 G";
        $array [21] = "HEINZ CREATIONZ FASOLA W STYLU WŁOSKIM 250 G";
        $array [22] = "HEINZ MAKARON W SOSIE SEROWYM 400 G";
        $array [23] = "HEINZ KRĄŻKI MAKARONOWE W SOSIE POMIDOROWYM 400 G";


        foreach ($products as $key => $pr) {
            if ($key > 0)
                $return .= ', ';
            $return .= $array[$pr];
        }
        //dd($return);

        return $return;
    }
}
