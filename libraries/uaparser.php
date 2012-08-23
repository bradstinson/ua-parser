<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter UA-Parser Class
 *
 * This spark was built on the work of D.Molsen's
 * original UA-Parser, which is now apart of
 * the Detector library
 *
 * @package         CodeIgniter
 * @subpackage      Libraries
 * @category        Libraries
 * @author          Brad Stinson
 */

define('UAPARSER_VERSION', '0.0.1');

class Uaparser {

    protected $_ci;
    protected $ua;      

    /**
     * Constructor
     *
     * The constructor loads the original UA Parser library and
     * parses the user agent and stores it in the $ua variable
     */  
    public function __construct()
    {
        // Declare instance of CI for internal use
        $this->_ci =& get_instance();
        
        // Load required UAParser library
        require_once('ua-parser/UAParser.php');
        
        // If user agent file is more than 7 days old, update (fails silently)
        $this->update_regular_expressions();
        
        // Parse UA for user
        $this->ua = UA::parse();
    }   

   /**
     * Function that returns a specified property of the
     * $ua variable
     *
     * @access  public
     * @return string
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->ua)) {
            return $this->ua->{$name};
        }
    }
 

   /**
     * If existing user agent is more than 7 days old, get the latest version.
     * The old version is backed up first. If an error occurs, it will fail
     * silently.
     *
     * @access  public
     * @return bool
     */    
    public function update_regular_expressions(){
        
        // Get last_modified time of regex.xml file
        $stat = stat(SPARKPATH.'uaparser/'.UAPARSER_VERSION.'/libraries/ua-parser/resources/regexes.yaml');
        $last_modified_time = $stat['mtime'];
                
        if($last_modified_time <= strtotime('-7 day'))
        {
            UA::get();
        }
    }                  
 
}