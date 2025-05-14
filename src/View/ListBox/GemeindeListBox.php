<?php

namespace Tourismusabgaben\View\ListBox;

use Tourismusabgaben\Business\AbrechnungTyp\AbrechnungTypReader;
use Tourismusabgaben\Business\Gemeinde\GemeindeReader;
use Tourismusabgaben\Core\View\Form\BootstrapListBox;

class GemeindeListBox extends BootstrapListBox
{

    public function getHtml()
    {

        $this->label = 'Gemeinde';


        foreach ((new GemeindeReader())->getData() as $gemeindeItem) {
            $this->addValue($gemeindeItem->bfsNr,$gemeindeItem->gemeinde);
        }

        return parent::getHtml();

    }

}