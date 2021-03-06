<?php
namespace Cielo\API30\Ecommerce;
/**
 * Class Browser
 *
 * @package Cielo\API30\Ecommerce
 */

class Browser implements \JsonSerializable
{
    private $cookiesAccepted;

    private $email;

    private $hostName;

    private $ipAddress;

    private $type;

    public function __construct($browseData)
    {
        $browseData = (array) $browseData;

        $this->setCookiesAccepted($browseData['CookiesAccepted']);
        //$this->setEmail($browseData['Email']);
        //$this->setHostName($browseData['HostName']);
        $this->setIpAddress($browseData['IpAddress']);
    }

    public function populate(\stdClass $data)
    {
        $this->cookiesAccepeted = isset($data->cookiesAccepeted) ? $data->cookiesAccepeted : null;
        $this->email            = isset($data->email) ? $data->email : null;
        $this->hostName         = isset($data->hostName) ? $data->hostName : null;
        $this->ipAddress        = isset($data->ipAddress) ? $data->ipAddress : null;
        $this->type             = isset($data->type) ? $data->type : null;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function setCookiesAccepted($cookiesAccepted)
    {
        $this->cookiesAccepted = $cookiesAccepted;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setHostName($hostName)
    {
        $this->hostName = $hostName;

        return $this;
    }

    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}
