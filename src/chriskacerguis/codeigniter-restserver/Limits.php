<?php

namespace Restserver\Limits;

class Limits {

    /**
     * Constructor for the Limits class
     *
     * @access public
     * @author Chris Kacerguis
     * @param string $config Configuration filename minus the file extension
     * @return void
     */
    public function __construct($config = 'rest')
    {

    }

    /**
     * Main method for the limits class.
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool Indicates of the limit has been reached  
     */
    public function check()
    {
        // If limits is disabled, then just return true
        if (!$this->config->item('rest_enable_limits'))
        {
            return true;
        }

        // If we are limiting via API Key
        if ($this->config->item('rest_limit_api_key'))
        {
            $at_limit = $this->check_api_key();
        } 
        
        // If we are limiting via IP 
        if ($this->config->item('rest_limit_ip_address'))
        {
            $at_limit = $this->check_ip_address();
        }

        // Increment the counter
        $this->increase();
        return $at_limit;
    }

    /**
     * Checks to see if the IP address is at the MAX limit
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool Indicates of the limit has been reached  
     */
    private function check_ip_address()
    {

    }

    /**
     * Checks to see if the API Key is at the MAX limit
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool Indicates of the limit has been reached  
     */
    private function check_api_key()
    {

    }

    /**
     * Increase the limit counter of the user
     *
     * @access public
     * @author Chris Kacerguis
     * @return bool 
     */
    private function increase()
    {

    }

}