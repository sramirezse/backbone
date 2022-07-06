<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Repositories\EstateRepository;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function getState($cp, EstateRepository $estateRepository, Request $request)
    {
            $estates = $estateRepository->getState($cp);
            return response()->json($estates);
    }
}
