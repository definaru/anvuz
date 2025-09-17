<?php

namespace common\components;


class Icons
{
    // Icons::warning();
    public static function warning($size = 16, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" fill="$color" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
        </svg>
        SVG;
    }

    public static function ban($size = 16, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" fill="$color" viewBox="0 0 16 16">
            <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
        </svg>
        SVG;
    }

    public static function server($size = 16, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" fill="$color" viewBox="0 0 16 16">
            <path d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1"/>
        </svg>
        SVG;
    }

    public static function arrowLeft($size = 16, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" fill="$color" viewBox="0 0 16 16" class="bi">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
        </svg>
        SVG;
    }
}