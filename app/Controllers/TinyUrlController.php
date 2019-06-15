<?php

namespace Flextype;

class TinyUrlController extends Controller {

    /**
     * Takes a long url and uses the TinyURL API to return a shortened version.
     *
     * @param  string $url Long url
     * @return string
     */
    public function tinyurl(string $url) : string
    {
        return (isset($url)) ? file_get_contents('http://tinyurl.com/api-create.php?url=' . $url) : '';
    }
}
