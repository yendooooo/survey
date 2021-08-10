<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Menu;

class Sidebar extends Component
{

    public $first_menu;
    public $second_menu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //--- Menu table에서 관리자 메뉴를 가져 옵니다.
        $this->first_menu = Menu::where('depth', 1)->get();
        $this->second_menu = Menu::where('depth', 2)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar',
            [
                '1depth' => $this->first_menu,
                '2depth' => $this->second_menu,
            ]);
    }

}
