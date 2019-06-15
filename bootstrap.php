<?php

/**
 *
 * Flextype Tiny Url Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

include_once 'app/Controllers/TinyUrlController.php';
include_once 'shortcodes/TinyUrlShortcode.php';
include_once 'twig/TinyUrlTwigExtension.php';

$flextype['TinyUrlController'] = function ($container) {
    return new TinyUrlController($container);
};

// Add Twig Extension
$flextype->view->addExtension(new TinyUrlTwigExtension($flextype));
