<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run()
    {

        Portfolio::insert([
            [
                'name' => 'GoStalker',
                'title' => 'An election application for departments, associations and citizens which living in United Arab Emirates',
                'description' => '',
                'thumbnail' => 'gostalker.png',
                'website' => 'https://www.gostalker.com',
                'type' => 'Web Development',
                'skills_id' => '[6,7,8,9,10,11,12]',
                'finished_at' => '11/4/2019',
            ],
            [
                'name' => 'Control Kuwait',
                'title' => 'An election application for departments, associations and citizens which living in United Arab Emirates',
                'description' => '',
                'thumbnail' => 'controlkuwait.png',
                'website' => 'https://www.controlkuwait.com',
                'type' => 'Web Development',
                'skills_id' => '[6,7,8,9,10,11,12]',
                'finished_at' => '11/4/2019',
            ],
            [
                'name' => 'Musicoker',
                'title' => 'Music player with a playlist and player control',
                'description' => '',
                'thumbnail' => 'controlkuwait.png',
                'website' => 'https://github.com/iSemary/Musicoker',
                'type' => 'Web Development',
                'skills_id' => '[6,7,8,9,10,11,12]',
                'finished_at' => '11/4/2019',
            ],
            [
                'name' => 'WoodsGate',
                'title' => '',
                'description' => '',
                'thumbnail' => 'woodsgate.png',
                'website' => 'https://www.woodsgate.com',
                'type' => 'Web Development',
                'skills_id' => '[6,7,8,9,10,11,12]',
                'finished_at' => '12/7/2020',
            ],
            [
                'name' => 'B2B Egypt',
                'title' => '',
                'description' => '',
                'thumbnail' => 'b2begy.png',
                'website' => 'https://www.b2begy.net',
                'type' => 'Web Development',
                'skills_id' => '[6,7,8,9,10,11,12]',
                'finished_at' => '12/7/2020',
            ],
            [
                'name' => 'Solar World',
                'title' => '',
                'description' => '',
                'thumbnail' => 'solarworld.png',
                'website' => 'https://www.solarworld.net',
                'type' => 'Web Development',
                'skills_id' => '[6,7,8,9,10,11,12]',
                'finished_at' => '12/7/2020',
            ],
            [
                'name' => 'Cashierc',
                'title' => '',
                'description' => '',
                'thumbnail' => 'cashierc.png',
                'website' => 'https://www.cashierc.net',
                'type' => 'Web Development',
                'skills_id' => '[6,7,8,9,10,11,12]',
                'finished_at' => '12/7/2020',
            ],
            [
                'name' => 'Lista Store',
                'title' => '',
                'description' => '',
                'thumbnail' => 'list_store.png',
                'website' => 'https://www.list-store.net',
                'type' => 'Web Development',
                'skills_id' => '[6,7,8,9,10,11,12]',
                'finished_at' => '12/7/2020',
            ],
            [
                'name' => 'Dar',
                'title' => '',
                'description' => '',
                'thumbnail' => 'dar.png',
                'website' => 'https://www.dar.net',
                'type' => 'Web Development',
                'skills_id' => '[6,7,8,9,10,11,12]',
                'finished_at' => '12/7/2020',
            ],
        ]);
    }
}
