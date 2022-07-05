<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetStateRequest;
use App\Models\Estado;
use App\Repositories\EstateRepository;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function getState($cp, EstateRepository $estateRepository )
    {
        $estates = $estateRepository->getState($cp);
        return response()->json($estates);
    }
}
