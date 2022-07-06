<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportPostalCodes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:postalcodes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa el archivo SQL y crea la base de datos de codigos postales';

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        DB::unprepared(file_get_contents('database/sql/estados.sql'));
    }
}
