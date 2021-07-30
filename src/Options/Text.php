<?php

namespace Jeffreyvr\WPSettings\Options;

use function Jeffreyvr\WPSettings\view as view;
use Jeffreyvr\WPSettings\Options\OptionAbstract;

class Text extends OptionAbstract
{
    public function render()
    {
        return view('options/text', ['option' => $this]);
    }
}
