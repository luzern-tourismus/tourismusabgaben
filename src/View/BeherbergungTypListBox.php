<?php

namespace Tourismusabgaben\View;

use Tourismusabgaben\Business\BeherbergungTyp\BeherberbungTypReader;
use Tourismusabgaben\Core\View\AbstractView;

class BeherbergungTypListBox extends AbstractView
{

    private $valueList=[];

    public function addValue($id,$value)
    {

        $this->valueList[$id] = $value;
        return $this;

    }


    public function getHtml()
    {

        foreach ((new BeherberbungTypReader())->getData() as $item) {
            $this->addValue($item->id,$item->typ);
        }

        $html = '

<div class="form-group">
    <label for="beherbergung">Typ</label>

<select class="form-select" aria-label="Default select example">';

        foreach($this->valueList as $id=>$value) {
            $html .= '<option value="'.$id.'">'.$value.'</option>';
        }


  /*<option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>*/
$html .= '</select></div>';

return $html;


    }

}