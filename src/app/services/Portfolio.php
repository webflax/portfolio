<?php
namespace Webflax\Portfolio\App\services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webflax\Portfolio\App\Models\Social;

class Portfolio
{
    public function createSocial(Request $request)
    {
        $data = $request->validate([
            'platform' => ['required', 'in:instagram,telegram,youtube'],
            'username' => ['required']
        ]);

        $created=Social::create($data);


        return $created;
        // Auth()->user()->socials()->create($data);
    }


    public function createExprience()
    {
        
    }
}



?>
