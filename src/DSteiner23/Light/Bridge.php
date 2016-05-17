<?php

namespace DSteiner23\Light;

/**
 * Class Bridge
 * @package DSteiner23\Light
 */
class Bridge
{
    //@todo: fill bridge infos from configuration file
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $user;

    /**
     * Bridge constructor.
     * @param $ip
     * @param $user
     */
    public function __construct($ip, $user)
    {
        $this->ip = $ip;
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}