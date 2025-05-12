<?php

namespace Tourismusabgaben\View;

use Tourismusabgaben\Business\Beherbergung\BeherbergungReader;
use Tourismusabgaben\Core\View\AbstractView;
use Tourismusabgaben\Definition\Navigation\NavigationDefinition;

class BeherberungenItem extends AbstractView
{

    public $id;

    public function getHtml()
    {


        $reader = new BeherbergungReader();
        $reader->filterById($this->id);

        foreach ((new BeherbergungReader())->filterById($this->id)->getData() as $item) {

        $html = '

<h1>'.$item->beherbergung.'</h1>

';

        }

        return $html;


    }


}