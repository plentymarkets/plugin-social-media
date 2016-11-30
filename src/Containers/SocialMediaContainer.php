<?php

namespace SocialMedia\Containers;

use Plenty\Plugin\Templates\Twig;

class SocialMediaContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('SocialMedia::content.SocialMedia');
    }
}