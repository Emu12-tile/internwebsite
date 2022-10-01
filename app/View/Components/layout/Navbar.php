<?php

namespace App\View\Components\layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems=[];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems=[
           [ 'label'=>'About','href'=>'#about'],
          [ 'label'=>'Projects','href'=>'#portfolio'],
          [ 'label'=>'Gallery','href'=>'#tutorials'],

          ['label'=>'my Blogs','href'=>'#blogs'],
          [ 'label'=>'Educations','href'=>'#education'],

          ['label'=>'Contact Us','href'=>'#contact'],

        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}
