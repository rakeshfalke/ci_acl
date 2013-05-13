<?php


namespace Entities;
/**
 * Sessions
 */
class Sessions
{
    /**
     * @var string $sessionId
     */
    private $sessionId;

    /**
     * @var string $ipAddress
     */
    private $ipAddress;

    /**
     * @var string $userAgent
     */
    private $userAgent;

    /**
     * @var integer $lastActivity
     */
    private $lastActivity;

    /**
     * @var text $userData
     */
    private $userData;


    /**
     * Get sessionId
     *
     * @return string $sessionId
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Get ipAddress
     *
     * @return string $ipAddress
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * Get userAgent
     *
     * @return string $userAgent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set lastActivity
     *
     * @param integer $lastActivity
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;
    }

    /**
     * Get lastActivity
     *
     * @return integer $lastActivity
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }

    /**
     * Set userData
     *
     * @param text $userData
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;
    }

    /**
     * Get userData
     *
     * @return text $userData
     */
    public function getUserData()
    {
        return $this->userData;
    }
}