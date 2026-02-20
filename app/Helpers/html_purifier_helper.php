<?php

declare(strict_types=1);

function purify_html(string $html, string|null $escape = null): string
{

    $config = HTMLPurifier_Config::createDefault();

    $config->set('URI.AllowedSchemes', [
        'http' => true,
        'https' => true
    ]);
    $config->set('HTML.Allowed', $escape ?? 'p,br,strong,b,em,i,u,ul,ol,li,a[href],img[src|alt],h1,h2,h3,h4,blockquote[class]');

    $purifier = new HTMLPurifier($config);

    return $purifier->purify($html);
}
