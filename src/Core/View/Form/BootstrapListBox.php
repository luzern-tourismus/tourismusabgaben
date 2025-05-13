<?php

namespace Tourismusabgaben\Core\View\Form;

use Tourismusabgaben\Core\View\AbstractView;

class BootstrapListBox extends AbstractView
{


    public $label;

    private $valueList = [];

    public function addValue($id, $value)
    {

        $this->valueList[$id] = $value;
        return $this;

    }


    public function getHtml()
    {

        $html = '<div class="form-group">
            <label for="beherbergung">' . $this->label . '</label>
            <select class="form-select" aria-label="Default select example">';

        foreach ($this->valueList as $id => $value) {
            $html .= '<option value="' . $id . '">' . $value . '</option>';
        }

        $html .= '</select></div>';

        return $html;


    }

}