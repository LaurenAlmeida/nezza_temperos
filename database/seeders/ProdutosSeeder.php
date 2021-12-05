<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('produtos')->insert([
            'nome' => 'Adobo',
            'tipo' => '4',
            'descricao' => 'adobo',
            'slug' =>'adobo',
            'peso' => '50 g',
            'imagem' => 'assets/imagens/produtos/adobo.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Cebola e Salsa',
            'tipo' => '4',
            'descricao' => 'cebola-e-salsa',
            'slug' =>'cebola-e-salsa',
            'peso' => '50 g',
            'imagem' => 'assets/imagens/produtos/cebola-salsa.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Chimichurri com Pimenta',
            'tipo' => '4',
            'descricao' => 'chimichurri-com-pimenta',
            'slug' =>'chimichurri-com-pimenta',
            'peso' => '50 g',
            'imagem' => 'assets/imagens/produtos/chimichurri-pimenta.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Chimichurri sem Pimenta',
            'tipo' => '4',
            'descricao' => 'chimichurri-sem-pimenta',
            'slug' =>'chimichurri-sem-pimenta',
            'peso' => '50 g',
            'imagem' => 'assets/imagens/produtos/chimichurri.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Orégano',
            'tipo' => '4',
            'descricao' => 'oregano',
            'slug' =>'oregano',
            'peso' => '50 g',
            'imagem' => 'assets/imagens/produtos/oregano.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Pimenta do Reino',
            'tipo' => '2',
            'descricao' => 'pimenta-do-reino',
            'slug' =>'pimenta-do-reino',
            'peso' => '50 g',
            'imagem' => 'assets/imagens/produtos/pimenta-do-reino.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Pimenta Vermelha',
            'tipo' => '2',
            'descricao' => 'pimenta-vermelha',
            'slug' =>'pimenta-vermelha',
            'peso' => '150 g',
            'imagem' => 'assets/imagens/produtos/pimenta-vermelha.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Sal para Churrasco',
            'tipo' => '1',
            'descricao' => 'sal-para-churrasco',
            'slug' =>'sal-para-churrasco',
            'peso' => '500 g',
            'imagem' => 'assets/imagens/produtos/sal-para-churrasco.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Sal Rosa do Himalaia',
            'tipo' => '1',
            'descricao' => 'sal-rosa-do-himalaia',
            'slug' =>'sal-rosa-do-himalaia',
            'peso' => '220 g',
            'imagem' => 'assets/imagens/produtos/sal-rosa-do-himalaia.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Alho e Sal',
            'tipo' => '1',
            'descricao' => 'alho-e-sal',
            'slug' =>'alho-e-sal-240',
            'peso' => '240 g',
            'imagem' => 'assets/imagens/produtos/alho-e-sal.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Alho e Sal',
            'tipo' => '1',
            'descricao' => 'alho-e-sal',
            'slug' =>'alho-e-sal-1050',
            'peso' => '1050 kg',
            'imagem' => 'assets/imagens/produtos/alho-e-sal-1050.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Tempero Completo com Pimenta',
            'tipo' => '3',
            'descricao' => 'tempero-completo-pimenta',
            'slug' =>'tempero-completo-pimenta-240',
            'peso' => '240 g',
            'imagem' => 'assets/imagens/produtos/tempero-completo-pimenta.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Tempero Completo com Pimenta',
            'tipo' => '3',
            'descricao' => 'tempero-completo-pimenta',
            'slug' =>'tempero-completo-pimenta-1050',
            'peso' => '1050 kg',
            'imagem' => 'assets/imagens/produtos/tempero-completo-pimenta-1050.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Tempero Completo sem Pimenta',
            'tipo' => '3',
            'descricao' => 'tempero-completo',
            'slug' =>'tempero-completo-240',
            'peso' => '240 g',
            'imagem' => 'assets/imagens/produtos/tempero-completo.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Tempero Completo sem Pimenta',
            'tipo' => '3',
            'descricao' => 'tempero-completo',
            'slug' =>'tempero-completo-1050',
            'peso' => '1050 kg',
            'imagem' => 'assets/imagens/produtos/tempero-completo-1050.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Tempero Completo para Frango e Peixe',
            'tipo' => '3',
            'descricao' => 'tempero-completo',
            'slug' =>'tempero-completo-frango-e-peixe-240',
            'peso' => '240 g',
            'imagem' => 'assets/imagens/produtos/tempero-completo-frango-e-peixe.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Tempero Completo para Frango e Peixe',
            'tipo' => '3',
            'descricao' => 'tempero-completo',
            'slug' =>'tempero-completo-frango-e-peixe-1050',
            'peso' => '1050 kg',
            'imagem' => 'assets/imagens/produtos/tempero-completo-frango-e-peixe.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Sal,Cebola,Alho e Salsa',
            'tipo' => '1',
            'descricao' => 'sal-cebola-alho-e-salsa',
            'slug' =>'sal-cebola-alho-e-salsa-240',
            'peso' => '240 g',
            'imagem' => 'assets/imagens/produtos/sal-cebola-alho-e-salsa.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Sal,Cebola,Alho e Salsa',
            'tipo' => '1',
            'descricao' => 'sal-cebola-alho-e-salsa',
            'slug' =>'sal-cebola-alho-e-salsa-1050',
            'peso' => '1050 kg',
            'imagem' => 'assets/imagens/produtos/sal-cebola-alho-e-salsa-1050.png',
        ]);

        \DB::table('produtos')->insert([
            'nome' => 'Alho Picado',
            'tipo' => '4',
            'descricao' => 'alho-picado',
            'slug' =>'alho-picado-200',
            'peso' => '200 g',
            'imagem' => 'assets/imagens/produtos/alho-picado.png',
        ]);
    }
}
