<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Production config overrides & db credentials
 *
 * Our database credentials and any environment-specific overrides
 *
 * @package    Focus Lab Master Config
 * @version    1.1.1
 * @author     Focus Lab, LLC <dev@focuslabllc.com>
 */

$env_db['hostname'] = 'internal-db.s102864.gridserver.com';
$env_db['username'] = 'db102864_admin';
$env_db['password'] = 'd9d14d88';
$env_db['database'] = 'db102864_seasonsee';

// Sample global variable for Production only
// Can be used in templates like "{global:google_analytics}"
$env_global['global:google_analytics'] = 'UA-XXXXXXX-XX';

/* End of file config.prod.php */
/* Location: ./config/config.prod.php */