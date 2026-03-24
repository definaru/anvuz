<?php
namespace frontend\components\icons;

class Icons
{
    // use frontend\components\icons\Icons;
    // Icons::logotype()
    public static function logotype($size = 50, $color = 'currentColor')
    {
        $width = $size+50;
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" y="20" x="20" width="$width" height="$size" fill="$color" viewBox="21 49 100 50">
            <g>
                <path d="M22.5,74.79h6.43c2.35,0,4.09.53,5.24,1.59,1.15,1.06,1.72,2.5,1.72,4.3s-.57,3.27-1.72,4.33c-1.15,1.06-2.89,1.59-5.24,1.59h-2.81v5.9h-3.62v-17.72ZM28.93,83.57c1.21,0,2.08-.24,2.58-.72.51-.48.76-1.2.76-2.16s-.25-1.68-.76-2.16c-.51-.48-1.37-.72-2.58-.72h-2.81v5.77h2.81Z"/>
                <path d="M44.98,92.73c-2.18,0-3.89-.68-5.15-2.04-1.26-1.36-1.89-3.45-1.89-6.26v-2.02c0-2.58.63-4.53,1.89-5.86,1.26-1.32,2.97-1.99,5.15-1.99s3.89.66,5.15,1.99c1.26,1.32,1.89,3.28,1.89,5.86v2.02c0,2.82-.63,4.91-1.89,6.26-1.26,1.36-2.97,2.04-5.15,2.04ZM44.98,89.62c.54,0,1.02-.08,1.44-.25.42-.17.78-.46,1.06-.86.29-.41.51-.94.67-1.61.16-.67.24-1.49.24-2.47v-2.02c0-1.7-.3-2.92-.91-3.64-.61-.73-1.44-1.09-2.51-1.09s-1.9.36-2.51,1.09c-.61.73-.91,1.94-.91,3.64v2.02c0,.98.08,1.8.24,2.47.16.67.38,1.2.67,1.61.29.4.65.69,1.08.86.43.17.91.25,1.43.25Z"/>
                <path d="M58.63,92.22c-.87-.34-1.61-.85-2.21-1.54-.61-.69-1.08-1.56-1.4-2.59-.33-1.04-.49-2.27-.49-3.68v-2.02c0-2.56.63-4.51,1.89-5.83,1.26-1.32,2.97-1.99,5.15-1.99s3.69.52,4.78,1.57c1.1,1.05,1.75,2.46,1.95,4.25h-3.62c-.15-.86-.46-1.53-.94-2-.47-.47-1.2-.71-2.18-.71-1.06,0-1.9.36-2.51,1.08-.61.72-.91,1.93-.91,3.63v2.02c0,.98.08,1.8.24,2.47.16.67.38,1.2.67,1.61.29.41.65.7,1.08.87.43.18.91.27,1.43.27,1.01,0,1.74-.24,2.18-.72.44-.48.75-1.19.94-2.11h3.62c-.22,1.89-.88,3.35-1.97,4.39-1.1,1.04-2.68,1.56-4.76,1.56-1.08,0-2.05-.17-2.92-.51Z"/>
                <path d="M74.2,92.22c-.87-.34-1.61-.85-2.21-1.54-.61-.69-1.08-1.56-1.4-2.59-.33-1.04-.49-2.27-.49-3.68v-2.02c0-2.56.63-4.51,1.89-5.83,1.26-1.32,2.97-1.99,5.15-1.99s3.69.52,4.78,1.57c1.1,1.05,1.75,2.46,1.95,4.25h-3.62c-.15-.86-.46-1.53-.94-2-.47-.47-1.2-.71-2.18-.71-1.06,0-1.9.36-2.51,1.08-.61.72-.91,1.93-.91,3.63v2.02c0,.98.08,1.8.24,2.47.16.67.38,1.2.67,1.61.29.41.65.7,1.08.87.43.18.91.27,1.43.27,1.01,0,1.74-.24,2.18-.72.44-.48.75-1.19.94-2.11h3.62c-.22,1.89-.88,3.35-1.97,4.39-1.1,1.04-2.68,1.56-4.76,1.56-1.08,0-2.05-.17-2.92-.51Z"/>
                <path d="M86.54,74.79h3.62v11.9l6.78-11.9h3.67v17.72h-3.62v-11.9l-6.86,11.9h-3.59v-17.72Z"/>
                <path d="M104.38,74.79h3.62v11.9l6.78-11.9h3.67v17.72h-3.62v-11.9l-6.86,11.9h-3.59v-17.72Z"/>
            </g>
            <g>
                <path d="M30,49.38h4.68l7.59,21.86h-4.78l-1.47-4.34h-7.49l-1.5,4.34h-4.62l7.59-21.86ZM34.78,63.15l-2.5-8.21-2.53,8.21h5.03Z" fill="#e6314f"/>
                <path d="M44.74,49.38h4.47v8.74h8.12v-8.74h4.47v21.86h-4.47v-9.37h-8.12v9.37h-4.47v-21.86Z" fill="#e6314f"/>
                <path d="M66.45,49.38h8.18c1.23,0,2.32.12,3.28.37.96.25,1.77.62,2.44,1.12.67.5,1.18,1.11,1.53,1.84.35.73.53,1.56.53,2.5,0,1.08-.27,2.01-.8,2.78-.53.77-1.2,1.38-2.01,1.84,1.08.42,1.93,1.03,2.55,1.83.61.8.92,1.92.92,3.36,0,.87-.16,1.69-.47,2.45-.31.76-.8,1.42-1.47,1.97-.67.55-1.51.99-2.55,1.31-1.03.32-2.27.48-3.73.48h-8.4v-21.86ZM74.63,58.24c1.14,0,1.98-.23,2.51-.7s.8-1.08.8-1.83c0-.81-.26-1.45-.77-1.92-.51-.47-1.36-.7-2.55-.7h-3.72v5.15h3.72ZM74.63,67.52c1.46,0,2.48-.24,3.08-.73.59-.49.89-1.2.89-2.14s-.29-1.68-.86-2.17c-.57-.49-1.61-.73-3.11-.73h-3.72v5.78h3.72Z"/>
                <path d="M87.43,67.77c1.33,0,2.27-.14,2.83-.41.55-.27.91-.62,1.08-1.06l.22-.53-7.78-16.39h4.78l5.06,11.46,4.43-11.46h4.65l-6.96,16.93c-.42,1.04-.85,1.9-1.3,2.58-.45.68-.98,1.21-1.61,1.59-.62.39-1.37.66-2.23.81-.86.16-1.92.23-3.17.23v-3.75Z"/>
                <path d="M105.19,69.74c-1.38-1.19-2.21-2.82-2.48-4.9h4.47c.17.87.55,1.57,1.16,2.08.6.51,1.48.77,2.62.77,1.44,0,2.45-.25,3.03-.77.58-.51.87-1.2.87-2.08,0-.96-.29-1.69-.87-2.2-.58-.51-1.59-.77-3.03-.77h-2.84v-3.75h2.84c1.08,0,1.89-.24,2.42-.72.53-.48.8-1.09.8-1.84,0-.83-.27-1.49-.8-1.98-.53-.49-1.34-.73-2.42-.73s-1.89.24-2.5.73c-.6.49-.93,1.15-.97,1.98h-4.25c.08-.94.32-1.81.7-2.61.38-.8.91-1.49,1.56-2.08.66-.58,1.44-1.04,2.36-1.37.92-.33,1.95-.5,3.09-.5,1.27,0,2.38.16,3.34.47.96.31,1.76.74,2.4,1.28.65.54,1.13,1.19,1.45,1.94.32.75.48,1.56.48,2.44,0,1.06-.27,1.98-.8,2.75-.53.77-1.26,1.38-2.2,1.84,1.12.42,2.02,1.03,2.69,1.84.67.81,1,1.97,1,3.47,0,.96-.17,1.84-.5,2.64-.33.8-.84,1.49-1.53,2.06-.69.57-1.56,1.02-2.61,1.33-1.05.31-2.3.47-3.73.47-2.46,0-4.38-.59-5.76-1.78Z"/>
            </g>
        </svg>
        SVG;
    }

    public static function sun($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" xmlns="http://www.w3.org/2000/svg" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="4"></circle>
            <path d="M12 2v2"></path>
            <path d="M12 20v2"></path>
            <path d="m4.93 4.93 1.41 1.41"></path>
            <path d="m17.66 17.66 1.41 1.41"></path>
            <path d="M2 12h2"></path>
            <path d="M20 12h2"></path>
            <path d="m6.34 17.66-1.41 1.41"></path>
            <path d="m19.07 4.93-1.41 1.41"></path>
        </svg>
        SVG;
    }

    public static function moon($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" xmlns="http://www.w3.org/2000/svg" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
        </svg>
        SVG;
    }


    public static function arrowRight($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" xmlns="http://www.w3.org/2000/svg" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"/>
            <path d="m12 5 7 7-7 7"/>
        </svg>
        SVG;
    }


    public static function phone($size = 24, $color = 'currentColor', $strokeWidth = 2)
    {
        return <<<SVG
        <svg width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" xmlns="http://www.w3.org/2000/svg" stroke-width="$strokeWidth" stroke-linecap="round" stroke-linejoin="round">
            <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
        </svg>
        SVG;
    }


    public static function mail($size = 24, $color = 'currentColor', $strokeWidth = 2)
    {
        return <<<SVG
        <svg width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" xmlns="http://www.w3.org/2000/svg" stroke-width="$strokeWidth" stroke-linecap="round" stroke-linejoin="round">
            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/>
            <rect x="2" y="4" width="20" height="16" rx="2"/>
        </svg>
        SVG;
    }


    public static function mapPin($size = 24, $color = 'currentColor', $strokeWidth = 2)
    {
        return <<<SVG
        <svg width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" xmlns="http://www.w3.org/2000/svg" stroke-width="$strokeWidth" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
            <circle cx="12" cy="10" r="3"/>
        </svg>
        SVG;
    }


    public static function arrowUpRight($size = 24, $color = 'currentColor', $strokeWidth = 1.5)
    {
        return <<<SVG
        <svg width="$size" height="$size" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$strokeWidth" stroke-linecap="round" stroke-linejoin="round">
            <path d="M7 7h10v10"/>
            <path d="M7 17 17 7"/>
        </svg>
        SVG;
    }


    public static function Composition($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 -960 960 960" fill="$color">
            <path d="M423-440q-14.51 0-23.18-10.62-8.67-10.61-6.2-24.46l9.61-60q4.92-28.38 27.04-46.65Q452.38-600 480.18-600q28.44 0 50.55 18.27 22.12 18.27 27.04 46.65l9.61 60q2.47 13.85-6.2 24.46Q552.51-440 538-440H423Zm1.08-30.77h112.84l-9.54-59.44q-3.38-17.41-16.33-28.21-12.96-10.81-30.58-10.81-17.62 0-30.46 10.97t-16.24 27.8l-9.69 59.69Zm-266.53 73.41q-15.47.13-26.75-6.24t-14.46-20.56q-1.8-6.3-.3-11.99 1.5-5.7 3.73-11.49 0 .72-1-2.9-1.54-1-6.49-15.67-1.43-7.87 1.45-14.52 2.89-6.65 8.5-12.41.77 0 1.23-1.28 1.47-11.98 10.44-20.36 8.96-8.37 22.93-8.37-.91 0 11.82 1.46l2.2-.23q2.69-2.85 8.05-4.77 5.36-1.93 10.09-1.93 7.68 0 13.35 2.35 5.66 2.35 9.04 7.13.68 0 1.02.34.34.34 1.02.34 8.89.87 15.9 5.55T240-499.28q.46 5.1.35 8.96-.12 3.86-1.35 7.55 0 1.23 1 3 4.53 4.61 6.84 9.88 2.31 5.26 2.31 11.79 0 .1-3.46 13.07-.23.44 0 3.18 1.77 4 1 10.16 0 13.56-11.82 23.94-11.82 10.39-27.27 10.39h-50.05Zm626.79 1.98q-21.49 0-36.99-15.55-15.5-15.55-15.5-37.15 0-7.85 2.85-14.84 2.84-6.98 6.07-13.54l-18.6-15.96q-6.71-5.58-2.4-12.89 4.3-7.31 11.43-7.31h52.87q21.81 0 37.1 15.3 15.29 15.3 15.29 36.79v13.02q0 21.13-15.31 36.63-15.31 15.5-36.81 15.5ZM40-256.92v-29.93q0-34.98 37.81-57.91t98.76-22.93q10.6 0 21.05.88 10.46.89 19.15 2.61-5.69 13.43-8.92 28.39-3.23 14.96-3.23 31.04v47.85H40Zm240 0v-45q0-49.62 55.48-78.85Q390.95-410 480.21-410q90.1 0 144.94 29.23Q680-351.54 680-301.92v45H280Zm504.62-110.77q61.57 0 98.48 22.93 36.9 22.93 36.9 57.91v29.93H755.38v-47.85q0-16.08-2.73-31.04t-9.19-28.32q9.46-1.79 19.88-2.68 10.41-.88 21.28-.88Zm-304.81-11.54q-78.27 0-125.19 22.08-46.93 22.07-44.62 58.3v11.16h340v-11.39q2.31-36-44.12-58.07-46.42-22.08-126.07-22.08Zm.19 91.54ZM481-520Z"/>
        </svg>
        SVG;
    }


    public static function Activities($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 -960 960 960" fill="$color">
            <path d="M649.23-120v-82.56q-49.38-12.21-85.35-46.29-35.96-34.07-47.8-81.92h31.77q13.84 44 50.39 72 36.56 28 86.38 28h120q14.61 0 25 10.39Q840-210 840-195.38V-120H649.23Zm95.21-198.08q-24.16 0-40.65-16.53-16.48-16.53-16.48-40.69 0-24.16 16.53-41.16 16.53-17 40.69-17 24.16 0 41.16 17.04 17 17.05 17 41.21t-17.04 40.65q-17.05 16.48-41.21 16.48ZM404.62-429.23q0-104.46 73.15-177.23t177.61-72.77v30.77q-92.3 0-156.15 63.46-63.85 63.46-63.85 155.77h-30.76Zm101.53 0q0-62.69 43.5-105.96 43.49-43.27 105.73-43.27v30.77q-49.23 0-83.84 34.61-34.62 34.62-34.62 83.85h-30.77ZM120-527.31v-75.38q0-14.62 10.38-25 10.39-10.39 25-10.39h120q49.82 0 86.38-28 36.55-28 50.39-72h32.54q-10.31 47.08-47.09 81.1-36.79 34.02-86.83 46.85v82.82H120Zm95.21-197.31q-24.16 0-40.65-17.04-16.48-17.04-16.48-40.69T174.61-823q16.53-17 40.69-17 24.16 0 41.16 17.04 17 17.05 17 40.7 0 23.64-17.04 40.64-17.05 17-41.21 17Z"/>
        </svg>
        SVG;
    }


    public static function Education($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 -960 960 960" fill="$color">
            <path d="M465.85-254.62v-407.76q-45-33.85-100.47-51.12-55.46-17.27-111.23-17.27-37.22 0-64.49 5.27-27.28 5.27-61.97 16.96-9.23 3.08-13.07 8.85-3.85 5.77-3.85 12.69v378.62q0 10 7.69 15t16.92 1.92q20.24-8.62 50.89-13.19 30.65-4.58 67.88-4.58 55.5 0 107.94 13.27 52.45 13.27 103.76 41.34Zm15 45.39q-50.62-33.39-108.31-51.19-57.69-17.81-118.39-17.81-28.39 0-55.77 4.38-27.38 4.39-55.46 12.77-23.1 9.46-43.01-5.67Q80-281.89 80-307.92v-377.62q0-16.54 8.54-30.5t24.08-20.34q33.53-13.08 69.28-19.12 35.75-6.04 72.25-6.04 65.77 0 118.58 17.96t105.89 51.35q8 5 13 14.27t5 19.5v403.84q50.76-28.07 101.84-41.34 51.08-13.27 107.39-13.27 36.46 0 68.11 4.46 31.66 4.46 50.66 10.62 9.23 3.84 16.92-1.16 7.69-5 7.69-15.77v-423.69q.24-.07.47-.15.22-.08.53.07 14.39 7 22.08 19.89 7.69 12.88 7.69 29.42v377.62q0 26.35-22.12 40.91-22.11 14.55-45.65 4.39-26.31-7.84-53.08-11.73-26.77-3.88-53.3-3.88-60.89 0-117.64 17.92-56.75 17.93-107.36 51.08Zm123.46-184.69v-401.46L741.54-840v401.92l-137.23 44.16Zm-316-98.77Z"/>
        </svg>
        SVG;
    }


    public static function Join($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 -960 960 960" fill="$color">
            <path d="M265.85-261.77v-347.46h30.77v347.46h-30.77Zm200.46 0v-347.46h30.77v347.46h-30.77ZM141.54-680v-21.46L480-875.62l338.46 174.16V-680H141.54Zm85.54-30.77h506.61L480-840.46 227.08-710.77Zm-85.54 550.54V-191h452.31q.46 7.85 1.57 15.04 1.12 7.19 3.27 15.73H141.54Zm521.84-221v-228h30.77v212.61l-30.77 15.39ZM800-30.77q-59-14.69-97.19-67.19t-38.19-116.96v-86.62L800-369.23l135.38 67.69v86.62q0 64.46-38.19 116.96T800-30.77Zm-25.62-106.15 122.77-122.77-18-18.77-104.77 104.77-48.23-48.23-18 18 66.23 67Zm-547.3-573.85h506.61-506.61Z"/>
        </svg>
        SVG;
    }


    public static function Person($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 -960 960 960" fill="$color">
            <path d="M480-492.31q-57.75 0-98.87-41.12Q340-574.56 340-632.31q0-57.75 41.13-98.87 41.12-41.13 98.87-41.13 57.75 0 98.87 41.13Q620-690.06 620-632.31q0 57.75-41.13 98.88-41.12 41.12-98.87 41.12ZM180-187.69v-88.93q0-29.38 15.96-54.42 15.96-25.04 42.66-38.5 59.3-29.07 119.65-43.61 60.35-14.54 121.73-14.54t121.73 14.54q60.35 14.54 119.65 43.61 26.7 13.46 42.66 38.5Q780-306 780-276.62v88.93H180Zm60-60h480v-28.93q0-12.15-7.04-22.5-7.04-10.34-19.11-16.88-51.7-25.46-105.42-38.58Q534.7-367.69 480-367.69q-54.7 0-108.43 13.11-53.72 13.12-105.42 38.58-12.07 6.54-19.11 16.88-7.04 10.35-7.04 22.5v28.93Zm240-304.62q33 0 56.5-23.5t23.5-56.5q0-33-23.5-56.5t-56.5-23.5q-33 0-56.5 23.5t-23.5 56.5q0 33 23.5 56.5t56.5 23.5Zm0-80Zm0 384.62Z" />
        </svg>
        SVG;
    }


    public static function Menu($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 5h18"></path>
            <path d="M3 12h18"></path>
            <path d="M3 19h18"></path>
        </svg>
        SVG;
    }


    public static function Search($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="m21 21-4.34-4.34"/>
            <circle cx="11" cy="11" r="8"/>
        </svg>
        SVG;
    }


    public static function Plus($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"/>
            <path d="M12 5v14"/>
        </svg>
        SVG;
    }


    public static function Grip($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="5" r="1"/>
            <circle cx="19" cy="5" r="1"/>
            <circle cx="5" cy="5" r="1"/>
            <circle cx="12" cy="12" r="1"/>
            <circle cx="19" cy="12" r="1"/>
            <circle cx="5" cy="12" r="1"/>
            <circle cx="12" cy="19" r="1"/>
            <circle cx="19" cy="19" r="1"/>
            <circle cx="5" cy="19" r="1"/>
        </svg>
        SVG;
    }


    public static function UsersRound($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 21a8 8 0 0 0-16 0"/>
            <circle cx="10" cy="8" r="5"/>
            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/>
        </svg>
        SVG;
    }


    public static function CalendarDays($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M8 2v4"/>
            <path d="M16 2v4"/>
            <rect width="18" height="18" x="3" y="4" rx="2"/>
            <path d="M3 10h18"/>
            <path d="M8 14h.01"/>
            <path d="M12 14h.01"/>
            <path d="M16 14h.01"/>
            <path d="M8 18h.01"/>
            <path d="M12 18h.01"/>
            <path d="M16 18h.01"/>
        </svg>
        SVG;
    }


    public static function GraduationCap($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/>
            <path d="M22 10v6"/>
            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/>
        </svg>
        SVG;
    }


    public static function NotebookText($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2 6h4"/>
            <path d="M2 10h4"/>
            <path d="M2 14h4"/>
            <path d="M2 18h4"/>
            <rect width="16" height="20" x="4" y="2" rx="2"/>
            <path d="M9.5 8h5"/>
            <path d="M9.5 12H16"/>
            <path d="M9.5 16H14"/>
        </svg>
        SVG;
    }

    public static function Settings($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915"/>
            <circle cx="12" cy="12" r="3"/>
        </svg>
        SVG;
    }

    public static function CircleQuestionMark($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/>
            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
            <path d="M12 17h.01"/>
        </svg>
        SVG;
    }

    public static function Download($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2v8"/>
            <path d="m16 6-4 4-4-4"/>
            <rect width="20" height="8" x="2" y="14" rx="2"/>
            <path d="M6 18h.01"/>
            <path d="M10 18h.01"/>
        </svg>
        SVG;
    }

    public static function translate($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="m5 8 6 6"/>
            <path d="m4 14 6-6 2-3"/>
            <path d="M2 5h12"/>
            <path d="M7 2h1"/>
            <path d="m22 22-5-10-5 10"/>
            <path d="M14 18h6"/>
        </svg>
        SVG;
    }

    public static function dot($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12.1" cy="12.1" r="1"/>
        </svg>
        SVG;
    }
    
    public static function close($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"/>
            <path d="m6 6 12 12"/>
        </svg>
        SVG;
    }

    public static function link($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
        </svg>
        SVG;
    }

    public static function send($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"/>
            <path d="m21.854 2.147-10.94 10.939"/>
        </svg>
        SVG;
    }

    public static function arrowDown($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14"/>
            <path d="m19 12-7 7-7-7"/>
        </svg>
        SVG;
    }

}