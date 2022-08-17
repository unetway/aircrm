<?php

namespace Unetway\AirCrm;

use GuzzleHttp\Client;
use Exception;

class AirCrm
{

    /**
     * @var Client
     */
    public $client;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $token;

    /**
     * AirCrm constructor.
     * @param $url
     * @param $token
     * @throws Exception
     */
    public function __construct($url, $token)
    {
        if (empty($url)) {
            throw new Exception('Required url parameter not found.');
        }

        if (empty($token)) {
            throw new Exception('Required token parameter not found.');
        }

        if (!$this->validateUrl($url)) {
            throw new Exception('Invalid API address specified.');
        }

        $this->url = $url;
        $this->token = $token;

        $this->client = new Client([
            'base_uri' => 'https://' . $this->url . '/api/',
            'headers' => [
                'Content-Type' => 'application/json; charset=utf-8',
                'Authorization' => 'Bearer ' . $this->token,
            ]
        ]);
    }

    /**
     * @param string $domain
     * @return bool
     */
    private function validateUrl(string $domain)
    {
        if (!preg_match('~^[0-9a-z-]+\.aircrm.io$~ui', $domain)) {
            return false;
        }

        return true;
    }

    /**
     * @return Deals
     */
    public function deals()
    {
        return new Deals($this);
    }

    /**
     * @return Task
     */
    public function task()
    {
        return new Task($this);
    }

    /**
     * @return TaskTypes
     */
    public function taskTypes()
    {
        return new TaskTypes($this);
    }

    /**
     * @return Contact
     */
    public function contact()
    {
        return new Contact($this);
    }

    /**
     * @return Company
     */
    public function company()
    {
        return new Company($this);
    }

    /**
     * @return Stages
     */
    public function stages()
    {
        return new Stages($this);
    }

    /**
     * @return Pipelines
     */
    public function pipelines()
    {
        return new Pipelines($this);
    }

    /**
     * @return Users
     */
    public function users()
    {
        return new Users($this);
    }

}