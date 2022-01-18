<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Education;
use App\Models\Language;
use App\Models\PortfolioName;
use App\Models\PortfolioSocialMedia;
use App\Models\Project;
use App\Models\Work;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function frontIndex(){
        $name=PortfolioName::latest()->get();
        $social=PortfolioSocialMedia::latest()->get();
        $about=About::latest()->get();
        $project=Project::latest()->get();
        $work=Work::latest()->get();
        $education=Education::latest()->get();
        $language =Language::latest()->get();
        return view('frontend.master',compact('name','social','about','project','work','education','language'));
    }
}
