<?php

namespace Tourismusabgaben\View\Table;

use Tourismusabgaben\Business\Beherbergung\BeherbergungReader;
use Tourismusabgaben\Business\Gemeinde\GemeindeReader;
use Tourismusabgaben\Controller\BeherbergungNewController;
use Tourismusabgaben\Controller\GemeindeController;
use Tourismusabgaben\Core\View\AbstractView;
use Tourismusabgaben\Definition\Navigation\NavigationDefinition;

class GemeindeTable extends AbstractView
{

    public function getHtml()
    {

        $html = '

<a class="btn btn-primary" href="' . (new GemeindeController())->getUrl() . '/new" role="button">Neue Gemeinde</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">BFS Nr.</th>
      <th scope="col">Gemeinde</th>
      
    </tr>
  </thead>
  <tbody>';


        foreach ((new GemeindeReader())->getData() as $gemeindeItem) {

            $html .= '<tr>
      <td>' . $gemeindeItem->bfsNr . '</td>
      
      <td><a href="' . (new GemeindeController())->getUrl() . '/' . $gemeindeItem->bfsNr . '">' . $gemeindeItem->gemeinde . '</a></td>
      <td></td>
      <td></td>
    </tr>';
        }


        $html .= '</tbody>
</table>';

        return $html;


    }


}