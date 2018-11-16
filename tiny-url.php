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

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\Event\Event;

//
// Shortcode: [tinyurl url="http://flextype.org"]
//
Event::addListener('onShortcodesInitialized', function () {
    Content::shortcode()->addHandler('tinyurl', function(ShortcodeInterface $s) {
        return tinyurl($s->getParameter('url'));
    });
});

/**
 * Takes a long url and uses the TinyURL API to return a shortened version.
 *
 * @param  string $url Long url
 * @return string
 */
function tinyurl(string $url) : string
{
    return (isset($url)) ? file_get_contents('http://tinyurl.com/api-create.php?url=' . $url) : '';
}
