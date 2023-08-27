<?php
namespace Webflax\Portfolio\App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SoapClient;
use Webflax\Portfolio\App\Models\Education;
use Webflax\Portfolio\App\Models\Exprience;
use Webflax\Portfolio\App\Models\Project;
use Webflax\Portfolio\App\Models\Skill;
use Webflax\Portfolio\App\Models\Social;

class PortfolioService
{
    // Social Start----------------------------------------------------------

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Social::all();
    }
    public function Social_create(Request $request)
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
     * Display the specified resource.
     */
    public function Social_get(Social $social)
    {
        return $social;
    }

    public function Social_update(Request $request,Social $social)
    {
        $data = $request->validate([
            'platform' => ['required', 'in:instagram,telegram,youtube'],
            'username' => ['required']
        ]);

        $updated = $social->update($data);

        return $updated;
    }

    public function Social_destroy(Social $social)
    {
        return $social->delete();
    }

    // Social End--------------------------------------------------------------


    // Exprience Start---------------------------------------------------------
    public function Exprience_all()
    {
        return Exprience::all();
    }

    public function Exprience_create(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'company' => ['required'],
            'description' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required']
        ]);
        $created = Exprience::create($data);

        return $created;
    }

    public function Exprience_update(Request $request, Exprience $exprience)
    {
        $data = $request->validate([
            'title' => ['required'],
            'company' => ['required'],
            'description' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required']
        ]);

        return $exprience->update($data);
    }

    public function Exprience_delete(Exprience $exprience)
    {
        return $exprience->delete();
    }

    public function Exprience_get(Exprience $exprience)
    {
        return $exprience;
    }

    // Exprience End-----------------------------------------------------------


    // Skill Start-------------------------------------------------------------

    public function Skill_all()
    {
        return Skill::all();
    }

    public function Skill_create(Request $request)
    {
        $data = $request->validate([
            'name' => ['required']
        ]);

        $created = Skill::create($data);

        return $created;
    }

    public function Skill_update(Request $request, Skill $skill)
    {
        $data = $request->validate([
            'name' => ['required']
        ]);

        $updated = $skill->update($data);

        return $updated;
    }

    public function Skill_delete(Skill $skill)
    {
        return $skill->delete();
    }

    public function Skill_get(Skill $skill)
    {
        return $skill;
    }

    // Skill End---------------------------------------------------------------



    // Project Start ----------------------------------------------------------
    public function Project_all()
    {
        return Project::all();
    }

    public function Project_create(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);

        $created = Project::create($data);

        return $created;
    }

    public function Project_update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);

        $updated = $project->update($data);

        return $updated;
    }

    public function Project_delete(Project $project)
    {
        return $project->delete();
    }

    public function Project_get(Project $project)
    {
        return $project;
    }
    // Project End---------------------------------------------------------------




    // Educations Start----------------------------------------------------------
    public function Education_all()
    {
        return Education::all();
    }

    public function Education_create(Request $request)
    {
        $data = $request->validate([
            'degree' => ['required'],
            'institution' => ['required'],
            'field_of_study' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required']
        ]);

        $created = Education::create($data);

        return $created;
    }

    public function Education_update(Request $request, Education $education)
    {
        $data = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);

        $updated = $education->update($data);

        return $updated;
    }

    public function Education_delete(Education $education)
    {
        return $education->delete();
    }

    public function Education_get(Education $education)
    {
        return $education;
    }

    // Educations End -----------------------------------------------------------
}
?>
