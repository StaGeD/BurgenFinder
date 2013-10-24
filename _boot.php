<?php
/**
 * NetAxis boot-file / pointer to home-path.
 *
 * This file should be located in every sites directory, that requires the NetAxis core components.
 *  - Include it only _ONCE!
 *  - Always include (webRoot/)netaxis.php, to get access to the bootLoader.
 *  - Create and call the bootLoader from here, to set boot-options and initialize relevant classes.
 *  - Path could also be an URL, e.g.: http://www.netaxis.at/..
 *      -> BUT allow_url_include in php.ini must be enabled then.
 *
 * PHP version 5.4+
 *
 * @package    netaxis
 * @author     Ing. Michael J. Stallinger <mjs@netaxis.at>
 * @copyright  Copyright (c) 2013, Ing. Michael J. Stallinger (StaGeD²)
 * @license    http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License (LGPL)
 * @version    Rewrite 3
 * @created    2013-10-19
 */
namespace netaxis\burgenfinder {

    use netaxis\BootConfig;
    use netaxis\BootLoader;

    require '../_boot.php';

    /** set up the configuration */
    $config         = new BootConfig();
    $config->siteId = 'bfin';
    /** boot ... */
    BootLoader::boot($config);
}
