<?php
namespace Database\Seeders;
use App\Models\Tipo;
use DB;
use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipos')->insert([
                'nome' => 'Sal',
                'slug' =>'sal',

            ]);

            \DB::table('tipos')->insert([
                'nome' => 'Pimenta',
                'slug' =>'pimenta',

            ]);

            \DB::table('tipos')->insert([
                'nome' => 'Tempero Completo',
                'slug' =>'tempero-completo'

            ]);

            \DB::table('tipos')->insert([
                'nome' => 'Diversos',
                'slug' =>'diversos'

            ]);
           
    }
}
