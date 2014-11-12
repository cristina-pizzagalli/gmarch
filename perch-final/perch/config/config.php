<?php
    define('PERCH_LICENSE_KEY', 'P21408-BGH569-TAJ140-HDR775-DKC027');

    define("PERCH_DB_USERNAME", 'gmarchca14440613');
    define("PERCH_DB_PASSWORD", '770brownsline');
    define("PERCH_DB_SERVER", "sql5c0d.megasqlservers.com");
    define("PERCH_DB_DATABASE", "perch_gmarch_ca");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'cristina.alicia.pizzagalli@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Cristina Pizzagalli');

    define('PERCH_LOGINPATH', '/staging/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
 
?>