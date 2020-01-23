<?php

namespace App\Http\View\Composers ;
use Illuminate\View\View ;

class WelcomeComposer 
{

    public function compose(View $view){
        $view->with('adress','Beradii');
    }
}
