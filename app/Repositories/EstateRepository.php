<?php

namespace App\Repositories;

use App\Models\Estado;

class EstateRepository{
    public function getState($cp){
        $states = Estado::where('d_codigo', $cp)->get();
        $state_info = Estado::where('d_codigo', $cp)->first();
        $settlements = [];
        foreach ($states as $s) {
            $settlement = [
                'key' => (int) $s->id_asenta_cpcons,
                'name' => $s->d_asenta,
                'zone_type' => $s->d_zona,
                'settlement_type' => [
                    'name'=>  $s->d_tipo_asenta,
                ]
            ];

            array_push($settlements, $settlement);
        }
        $result = [
            'zip_code' =>(String) $state_info->d_codigo,
            'locality' => $state_info->D_mnpio,
            'federal_entity' =>[
                'key' => (int) $state_info->c_estado,
                'name' => $state_info->d_estado,
                'code' => null
            ],
            'settlements' => $settlements,
            'municipality' => [
                'key' => (int) $state_info->c_mnpio,
                'name' => $state_info->D_mnpio,
            ],
        ];
        return$result;
    }
}
