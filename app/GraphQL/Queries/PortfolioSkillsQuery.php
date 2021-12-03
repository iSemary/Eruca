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
        
        $portfolio = Portfolio::with('skills')->get();
        return $portfolio;
    }
}
