<?php

namespace App\GraphQL\Queries;

use App\Models\Portfolio;

class PortfolioSkillsQuery
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return Portfolio::where('id','4')->first();
    }
}
