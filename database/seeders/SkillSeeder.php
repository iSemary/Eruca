<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::insert([
            [
                'name'=>'Photoshop',
                'type'=>'software',
                'color'=>'#2F9FF2',
                'started_at'=>'05-03-2014',
        
            ],
            [
                'name'=>'Illustrator',
                'type'=>'software',
                'color'=>'#F29200',
                'started_at'=>'12-09-2014',
        
            ],
            [
                'name'=>'InDesign',
                'type'=>'software',
                'color'=>'#F23061',
                'started_at'=>'23-12-2014',
        
            ],
            [
                'name'=>'After Effects',
                'type'=>'software',
                'color'=>'#C98BF2',
                'started_at'=>'17-03-2015',
        
            ],
            [
                'name'=>'Premiere Pro',
                'type'=>'software',
                'color'=>'#9191F2',
                'started_at'=>'16-07-2016',
        
            ],
            [
                'name'=>'HTML',
                'type'=>'frontend',
                'color'=>'#D84924',
                'started_at'=>'10-09-2017',
        
            ],
            [
                'name'=>'CSS',
                'type'=>'frontend',
                'color'=>'#2E50D8',
                'started_at'=>'03-10-2017',
        
            ],
            [
                'name'=>'JavaScript',
                'type'=>'frontend',
                'color'=>'#EAD41C',
                'started_at'=>'13-11-2017',
            ],
            [
                'name'=>'jQuery',
                'type'=>'frontend',
                'color'=>'#085EA1',
                'started_at'=>'15-12-2017',
            ],
            [
                'name'=>'Bootstrap',
                'type'=>'frontend',
                'color'=>'#663F96',
                'started_at'=>'26-12-2017',
            ],
            [
                'name'=>'PHP',
                'type'=>'backend',
                'color'=>'#828BB7',
                'started_at'=>'14-01-2018',
            ],
            [
                'name'=>'MySQL',
                'type'=>'backend',
                'color'=>'#E3921A',
                'started_at'=>'30-01-2018',
            ],
            [
                'name'=>'cPanel',
                'type'=>'tools',
                'color'=>'#E05C25',
                'started_at'=>'06-01-2019',
            ],
            [
                'name'=>'WordPress',
                'type'=>'tools',
                'color'=>'#006E92',
                'started_at'=>'13-04-2019',
            ],
            [
                'name'=>'Git',
                'type'=>'tools',
                'color'=>'#E44C30',
                'started_at'=>'23-03-2019',
            ],
            [
                'name'=>'Laravel',
                'type'=>'backend',
                'color'=>'#FF291A',
                'started_at'=>'14-02-2020',
            ],
            [
                'name'=>'Vue',
                'type'=>'frontend',
                'color'=>'#3FB984',
                'started_at'=>'19-06-2020',
            ],
            [
                'name'=>'Sass',
                'type'=>'frontend',
                'color'=>'#C36291',
                'started_at'=>'08-03-2021',
            ],
            [
                'name'=>'Webpack',
                'type'=>'frontend',
                'color'=>'#84C6E8',
                'started_at'=>'08-06-2021',
            ],
            [
                'name'=>'React',
                'type'=>'frontend',
                'color'=>'#5CCFEE',
                'started_at'=>'30-06-2021',
            ],
            [
                'name'=>'GraphQL',
                'type'=>'tools',
                'color'=>'#D932A2',
                'started_at'=>'12-08-2021',
            ],
            
        ]);
    }
}
