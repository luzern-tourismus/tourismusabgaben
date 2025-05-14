<?php

namespace Tourismusabgaben\View\Form;


use Tourismusabgaben\Controller\BeherbergungPostController;
use Tourismusabgaben\Core\View\AbstractView;
use Tourismusabgaben\View\BeherbergungTypListBox;

class BeherbergungForm extends AbstractView
{




    public function getHtml()
    {

        $html = '<form action="'. (new BeherbergungPostController())->getUrl().'" method="POST">
  <div class="form-group">
    <label for="beherbergung">Beherbergung</label>
    <input type="text" class="form-control" id="beherbergung" name="beherbergung" autofocus>
  </div>';

        $html .=(new BeherbergungTypListBox())->getHtml();


        $html .= '<button type="submit" class="btn btn-primary">Submit</button>
</form>';


        return $html;

    }

}



