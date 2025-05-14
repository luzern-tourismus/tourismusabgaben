<?php

namespace Tourismusabgaben\View\Table;

use Tourismusabgaben\Business\Beherbergung\BeherbergungReader;
use Tourismusabgaben\Controller\BeherbergungNewController;
use Tourismusabgaben\Core\View\AbstractView;
use Tourismusabgaben\Definition\Navigation\NavigationDefinition;

class BeherberungenTable extends AbstractView
{

    public function getHtml()
    {

        $html = '

<a class="btn btn-primary" href="'. (new BeherbergungNewController())->getUrl().'" role="button">Neue Beherbergung</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Beherbergung</th>
      <th scope="col">Strasse</th>
      <th scope="col">PLZ/Ort</th>
      <th scope="col">Gemeinde</th>
    </tr>
  </thead>
  <tbody>';


        foreach ((new BeherbergungReader())->getData() as $beherbergungItem) {


            $html .= '<tr>
      <td><a href="'.NavigationDefinition::BEHERBERGUNG_VIEW.'/'.$beherbergungItem->id.'">'.$beherbergungItem->beherbergung.'</a></td>
      <td></td>
      <td></td>
    </tr>';
        }


        $html .= '</tbody>
</table>';

        return $html;


    }


}