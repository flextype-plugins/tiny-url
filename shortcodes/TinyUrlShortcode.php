<?php


namespace Flextype;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [tinyurl url="http://flextype.org"]
$flextype['shortcodes']->addHandler('tinyurl', function (ShortcodeInterface $s) use ($flextype) {
    return $flextype->TinyUrlController->tinyurl($s->getParameter('url'));
});
