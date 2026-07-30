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
            <path d="M392.5-481.5q-20.75 0-33.37-15.35Q346.5-512.2 350-531l15.5-91q7.33-42.12 39.54-69.56Q437.26-719 479.88-719q43.62 0 75.95 27.44Q588.16-664.12 596-622l15 91q3.5 18.8-9.12 34.15Q589.25-481.5 569-481.5H392.5Zm17-57.5h142l-12.24-73.47q-3.93-21.06-20.34-35.05-16.4-13.98-38.42-13.98-22 0-38.5 14t-20 35L409.5-539ZM139.53-409.9q-19.66.9-34.27-7.68-14.6-8.58-19.03-26.57-1.73-7.72-.23-15.78 1.5-8.07 4.5-15.4 0 .91-1-3.17-.5-1-8.5-21.09-2-10.41 2-18.91t11.5-16q.5 0 2-2Q98-553 109.53-564q11.52-11 28.74-11 1.61 0 16.55 3l2.49-.92q4.53-3.58 11.27-6.33 6.74-2.75 14.32-2.75 9.02 0 16.9 3.5 7.89 3.5 12.03 9.62.33 0 .87.44.53.44 1.6.44 11.48.87 20.29 7.5 8.81 6.63 13.91 17.59 2 5.9 1.5 11.38T247.48-521q0 1.97.96 2.85 6.13 6.3 9.59 13.77 3.47 7.47 3.47 14.88 0 2-4.93 17.74-1.07 1.86-.07 3.79 1 4 1 13.75 0 17.68-14.97 31-14.96 13.32-36.33 13.32h-66.67Zm668.3-1.1q-28.33 0-48.58-20.27Q739-451.55 739-480.02q0-10.35 3.5-19.67Q746-509 751-517l-24.5-21.5q-8-7.5-3.08-17.5t15.3-10h68.87q28.41 0 48.66 20.32 20.25 20.32 20.25 48.85v17.3q0 28.53-20.17 48.53-20.18 20-48.5 20ZM1.5-241.5v-51.48q0-39.02 41.58-62.52Q84.67-379 150.4-379q12.8 0 24.62.75t22.98 2.48q-7.5 16.77-11.5 34.23-4 17.46-4 36.54v63.5H1.5Zm240 0v-63.25q0-64.63 66.12-104.44T480.12-449q107.38 0 173.13 39.79Q719-369.43 719-304.77v63.27H241.5ZM810-379q67 0 108 23.5t41 62.52v51.48H777.5v-63.57q0-18.79-3.5-36.36t-11-34.34q11.02-1.73 22.84-2.48T810-379Zm-330.19-12.5q-78.81 0-130.06 24.25T298.5-304v5H662v-6q0-38-51-62.25T479.81-391.5Zm.69 92.5Zm.5-301Z"/>
        </svg>
        SVG;
    }


    public static function Stars($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 -960 960 960" fill="$color">
            <path d="m353-286.5 127.5-77 127 77.5L574-431l112.5-96.5-148-13.5-58-137L422-541.5l-148 13L386.5-431 353-286.5Zm127.5 11-165 99.5q-10.5 6.5-21.75 5.75T274-177.5q-8.5-6.5-13-16.75t-1.5-22.25L303-404 157.5-529.5q-9.5-8.5-12-19.25t1-20.75q3.5-10 11.75-17T179-595l192-17 75-176.5q5-11.5 14.5-17t20-5.5q10.5 0 20 5.5t14.5 17L589.5-612l192 17q12.5 1.5 20.75 8.5t11.75 17q3.5 10 1 20.75t-12 19.25L657.5-404 701-216.5q3 12-1.5 22t-13 16.5q-8.5 6.5-19.75 7.5T645-176l-164.5-99.5ZM773-721l-59.5 34.5q-5.5 3-10.75-.5t-3.25-9.5L715-762l-52-44q-5-4.5-3-9.75t8.5-6.25l69-6 27-62q2-5.5 8.5-5.5t8.5 5.5l27 62 69 6q6.5 1 8.5 6.25t-3 9.75l-52 44 15.5 65.5q2 6-3.25 9.5t-10.75.5L773-721ZM480.5-482.5Z"/>
        </svg>
        SVG;
    }


    public static function Activities($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 -960 960 960" fill="$color">
            <path d="M680-82.5q-15.5 0-26.5-11t-11-26.5v-52q-39-13-70.25-39.25T523-275q-7-14 .25-28t22.25-20.5q13-5.5 26 .75t20 19.25q16 30.5 45.25 48.25T700-237.5h120q24 0 40.75 16.75T877.5-180v60q0 15.5-11 26.5t-26.5 11H680Zm25.25-222.75Q682.5-328 682.5-360t22.75-54.75Q728-437.5 760-437.5t54.75 22.75Q837.5-392 837.5-360t-22.75 54.75Q792-282.5 760-282.5t-54.75-22.75ZM120-522.5q-15.5 0-26.5-11t-11-26.5v-60q0-24 16.75-40.75T140-677.5h120q34 0 63-17.25t45-47.75q7-13.5 20.25-21t27.25-2.5q15.5 5 23 18.25T440-721q-17 39-49.25 67t-73.25 42v52q0 15.5-11 26.5t-26.5 11H120Zm25.25-222.75Q122.5-768 122.5-800t22.75-54.75Q168-877.5 200-877.5t54.75 22.75Q277.5-832 277.5-800t-22.75 54.75Q232-722.5 200-722.5t-54.75-22.75ZM410-402.5q-15.5 0-26.5-11t-11-26.5q0-128.5 89.5-218t218-89.5q15.5 0 26.5 11t11 26.5q0 15.5-11 26.5t-26.5 11q-97 0-164.75 67.75T447.5-440q0 15.5-11 26.5t-26.5 11Zm150 0q-15.5 0-26.5-11t-11-26.5q0-65.5 46-111.5t111.5-46q15.5 0 26.5 11t11 26.5q0 15.5-11 26.5t-26.5 11q-34 0-58.25 24.25T597.5-440q0 15.5-11 26.5t-26.5 11Z"/>
        </svg>
        SVG;
    }


    public static function Education($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 -960 960 960" fill="$color">
            <path d="M443-280v-388q-40-24-86.5-36.5T263-717q-35.49 0-70.48 7T125-689v390q33.5-12 67.89-17.5 34.38-5.5 70.26-5.5 46.85 0 91.35 10.5Q399-301 443-280ZM50-244v-466q0-11.5 6-21.25T73-746q44.5-22.5 92.36-34.25T263-792q72 0 123.5 17.75T496-723q11 6 16.5 15t5.5 21.62V-280q44-21 88.11-31.5t90.7-10.5q35.69 0 70.19 5.5t68 17.5v-432q0-15.5 11-26.5t26.5-11q15.5 0 26.5 11t11 26.5v487q0 22.76-19.5 34.63Q871-197.5 850-208q-36-18.5-74.52-28.75Q736.95-247 697-247q-48.87 0-95.25 14.5T513.48-192q-7.98 5-16.48 7.25t-16.89 2.25q-8.39 0-17.25-2.25T446.5-192q-41.89-26-88.26-40.5Q311.87-247 263-247q-39.95 0-78.48 10.25Q146-226.5 110-208q-21 10.5-40.5-1.37Q50-221.24 50-244Zm568-190v-369q0-12.04 7-21.77t18.5-13.73l60-19.5q13.5-4.5 25 4t11.5 23v369q0 12.04-7 21.77t-18.5 13.73l-60 19.5q-13.5 4.5-25-4T618-434Zm-334-64.5Z"/>
        </svg>
        SVG;
    }


    public static function Join($size = 24, $color = 'currentColor')
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 -960 960 960" fill="$color">
            <path d="M210-317.5v-212q0-15.5 11-26.5t26.5-11q15.5 0 26.5 11t11 26.5v212q0 15.5-11 26.5t-26.5 11q-15.5 0-26.5-11t-11-26.5Zm233 0v-212q0-15.5 11-26.5t26.5-11q15.5 0 26.5 11t11 26.5v212q0 15.5-11 26.5t-26.5 11q-15.5 0-26.5-11t-11-26.5ZM831-642H125q-14 0-23.5-9.5T92-675v-20.5q0-10 5-17.5t13.5-12l336-167.5q16-8 33.5-8t33.5 8l334 166.5q10 5 15.25 13.75T868-693v14q0 15.5-10.75 26.25T831-642Zm-570.5-75h439L480-825 260.5-717Zm-131 587q-15.5 0-26.5-11t-11-26.5q0-15.5 11-26.5t26.5-11H525q15.5 0 26.5 11t11 26.5q0 15.5-11 26.5T525-130H129.5ZM686-456q-11-11-11-26.5v-47q0-15.5 11-26.5t26.5-11q15.5 0 26.5 11t11 26.5v47.5q0 15.5-11 26.25T712.5-445q-15.5 0-26.5-11Zm-49.5 237.5V-299q0-10.5 5.25-19.75T657-333l126-63q8-4.5 17-4.5t17 4.5l126 63q10 5 15.25 14.25T963.5-299v80.5q0 78-39.75 133T814.5-1.5q-2 1-14.5 3-2 0-14.5-3-69.5-29-109.25-84t-39.75-133Zm134.5 30L740.5-219q-7-7-17-6.75t-17 7.25q-7 7-7 17t7 17l38 38Q756-135 771-135t26.5-11.5l94-93.5q7-7 7-17t-7-17q-7-7-17-6.75t-17 6.75L771-188.5ZM260.5-717h439-439Z"/>
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

    public static function chartNoAxesCombined($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 16v5"/>
            <path d="M16 14v7"/>
            <path d="M20 10v11"/>
            <path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"/>
            <path d="M4 18v3"/>
            <path d="M8 14v7"/>
        </svg>
        SVG;
    }

    public static function landmark($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 18v-7"/>
            <path d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z"/>
            <path d="M14 18v-7"/>
            <path d="M18 18v-7"/>
            <path d="M3 22h18"/>
            <path d="M6 18v-7"/>
        </svg>
        SVG;
    }

    public static function usersRound($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 21a8 8 0 0 0-16 0"/>
            <circle cx="10" cy="8" r="5"/>
            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/>
        </svg>
        SVG;   
    }

    public static function fileText($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/>
            <path d="M14 2v5a1 1 0 0 0 1 1h5"/>
            <path d="M10 9H8"/>
            <path d="M16 13H8"/>
            <path d="M16 17H8"/>
        </svg>
        SVG;   
    }

    public static function inbox($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/>
            <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/>
        </svg>
        SVG;   
    }

    public static function penLine($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M13 21h8"/>
            <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/>
        </svg>
        SVG;   
    }

    public static function pencil($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"/>
            <path d="m15 5 4 4"/>
        </svg>
        SVG;   
    }

    public static function trashTwo($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 11v6"/>
            <path d="M14 11v6"/>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/>
            <path d="M3 6h18"/>
            <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
        </svg>
        SVG;   
    }

    public static function eye($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
            <circle cx="12" cy="12" r="3"/>
        </svg>
        SVG;   
    }

    public static function usb($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="10" cy="7" r="1"/>
            <circle cx="4" cy="20" r="1"/>
            <path d="M4.7 19.3 19 5"/>
            <path d="m21 3-3 1 2 2Z"/>
            <path d="M9.26 7.68 5 12l2 5"/>
            <path d="m10 14 5 2 3.5-3.5"/>
            <path d="m18 12 1-1 1 1-1 1Z"/>
        </svg>
        SVG;   
    }

    public static function idCard($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 10h2"/>
            <path d="M16 14h2"/>
            <path d="M6.17 15a3 3 0 0 1 5.66 0"/>
            <circle cx="9" cy="11" r="2"/>
            <rect x="2" y="5" width="20" height="14" rx="2"/>
        </svg>
        SVG;   
    }

    public static function layoutDashboard($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <rect width="7" height="9" x="3" y="3" rx="1"/>
            <rect width="7" height="5" x="14" y="3" rx="1"/>
            <rect width="7" height="9" x="14" y="12" rx="1"/>
            <rect width="7" height="5" x="3" y="16" rx="1"/>
        </svg>
        SVG;   
    }

    public static function layersPlus($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 .83.18 2 2 0 0 0 .83-.18l8.58-3.9a1 1 0 0 0 0-1.831z"/>
            <path d="M16 17h6"/>
            <path d="M19 14v6"/>
            <path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 .825.178"/>
            <path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l2.116-.962"/>
        </svg>
        SVG;   
    }

    public static function bookMarked($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 2v8l3-3 3 3V2"/>
            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/>
        </svg>
        SVG; 
    }

    public static function imagePlay($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <path d="M15 15.003a1 1 0 0 1 1.517-.859l4.997 2.997a1 1 0 0 1 0 1.718l-4.997 2.997a1 1 0 0 1-1.517-.86z"/>
            <path d="M21 12.17V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6"/>
            <path d="m6 21 5-5"/>
            <circle cx="9" cy="9" r="2"/>
        </svg>
        SVG; 
    }

    public static function gripVertical($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="12" r="1"/>
            <circle cx="9" cy="5" r="1"/>
            <circle cx="9" cy="19" r="1"/>
            <circle cx="15" cy="12" r="1"/>
            <circle cx="15" cy="5" r="1"/>
            <circle cx="15" cy="19" r="1"/>
        </svg>
        SVG; 
    }

    public static function appWindow($size = 24, $color = 'currentColor', $width = 2)
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="$size" height="$size" viewBox="0 0 24 24" fill="none" stroke="$color" stroke-width="$width" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <path d="M10 4v4"/>
            <path d="M2 8h20"/>
            <path d="M6 4v4"/>
        </svg>
        SVG; 
    }

}