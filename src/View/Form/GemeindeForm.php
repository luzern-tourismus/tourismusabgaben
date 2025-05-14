<?php

namespace Tourismusabgaben\View\Form;

use Tourismusabgaben\Controller\BeherbergungPostController;
use Tourismusabgaben\Controller\GemeindeController;
use Tourismusabgaben\Core\View\AbstractView;
use Tourismusabgaben\View\BeherbergungTypListBox;

class GemeindeForm extends AbstractView
{


    public function getHtml()
    {

        $html = '<form action="'. (new GemeindeController())->getPostUrl().'" method="POST">
  <div class="form-group">
    <label for="beherbergung">Gemeinde</label>
    <input type="text" class="form-control" id="beherbergung" name="gemeinde" autofocus>
  </div>';

        $html .= '<button type="submit" class="btn btn-primary">Submit</button>
</form>';

        return $html;

    }

}



