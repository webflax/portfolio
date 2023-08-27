<?php

namespace Webflax\Portfolio\App\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Webflax\Portfolio\App\Education;
use Webflax\Portfolio\App\Models\Exprience;
use Webflax\Portfolio\App\Models\Project;
use Webflax\Portfolio\App\Models\Skill;
use Webflax\Portfolio\App\Models\Social;

class PortfolioController extends Controller
{
    public function createSocial(Request $request)
    {
        $data = $request->validate([
            'platform' => ['required', 'in:instagram,telegram,youtube'],
            'username' => ['required']
        ]);

        $created = Social::create($data);


        return $created;
        // Auth()->user()->socials()->create($data);
    }


    /**
     * Undocumented function
     *
     * @return void
     */
    public function createExprience(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'compaly' => ['required'],
            'description' => ['required'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required'],
        ]);

        $created = Exprience::create($data);

        return $created;
    }

    public function createSkill(Request $request)
    {
        $data = $request->validate([
            'name' => ['required']
        ]);

        $created = Skill::create($data);

        return $created;
    }

    public function createProject(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);

        if ($request->hasFile('assets')) {
            // uploadfiles
        }

        $created = Project::create($data);

        return $created;
    }

    public function createEducations(Request $request)
    {
        $data = $request->validate([
            'degree' => ['required'],
            'institution' => ['required'],
            'field_of_study' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);

        // $created = Education::create($data);

        // return $created;
    }

    // Updating

}
