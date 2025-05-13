<?php

namespace Tourismusabgaben\View\ListBox;

use Tourismusabgaben\Business\AbrechnungTyp\AbrechnungTypReader;
use Tourismusabgaben\Core\View\Form\BootstrapListBox;

class AbrechnungTypListBox extends BootstrapListBox
{

    public function getHtml()
    {

        $this->label = 'Abrechnung Typ';


        foreach ((new AbrechnungTypReader())->getData() as $abrechnungTyp) {
            $this->addValue($abrechnungTyp->id,$abrechnungTyp->abrechnungTyp);
        }



        return parent::getHtml();

    }

}