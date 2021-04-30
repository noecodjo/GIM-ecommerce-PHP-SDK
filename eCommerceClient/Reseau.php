<?php

class Reseau extends webServiceBean
{

    /**
     * @var string $NETWORK_NAME
     */
    protected $NETWORK_NAME = null;

    /**
     * @var string $NETWORK_CODE
     */
    protected $NETWORK_CODE = null;
    
    /**
     * @var string $NETWORK_IMAGE
     */
    protected $NETWORK_IMAGE = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getNETWORK_NAME()
    {
      return $this->NETWORK_NAME;
    }

    /**
     * @param string $NETWORK_NAME
     * @return Reseau
     */
    public function setNETWORK_NAME($NETWORK_NAME)
    {
      $this->NETWORK_NAME = $NETWORK_NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getNETWORK_CODE()
    {
      return $this->NETWORK_CODE;
    }

    /**
     * @param string $NETWORK_CODE
     * @return Reseau
     */
    public function setNETWORK_CODE($NETWORK_CODE)
    {
      $this->NETWORK_CODE = $NETWORK_CODE;
      return $this;
    }
    
    /**
     * @return string
     */
    public function getNETWORK_IMAGE()
    {
        return $this->NETWORK_IMAGE;
    }
    
    /**
     * @param string $NETWORK_CIMAGE
     * @return Reseau
     */
    public function setNETWORK_IMAGE($NETWORK_IMAGE)
    {
        $this->NETWORK_IMAGE = $NETWORK_IMAGE;
        return $this;
    }

}
