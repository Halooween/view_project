<?php
 
namespace App\Http\view\Composers;
 
use Illuminate\View\View;
 
class titleComposer
{
  
    public function compose(View $view)
    {
         $view->with('title', 'user page');
      
    }
}