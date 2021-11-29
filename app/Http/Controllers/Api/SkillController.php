<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResoucre;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller {
    public function index() {
        return SkillResoucre::collection(Skill::all());
    }
}
