<?php

namespace Unetway\AirCrm;

use GuzzleHttp\Client;
use Exception;

class AirCrm
{

    /**
     * @var Client
     */
    private $client;

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
            throw new Exception('Обязательный параметр url не найден.');
        }

        if (empty($token)) {
            throw new Exception('Обязательный параметр token не найден.');
        }

        if (!$this->validateUrl($url)) {
            throw new Exception('Указан неправильный адрес API.');
        }

        $this->url = $url;
        $this->token = $token;

        $this->client = new Client([
            'base_uri' => $this->url . '/api/',
            'headers' => [
                'Content-Type' => 'application/json; charset=utf-8',
                'Token' => $this->token,
            ]
        ]);
    }

    /**
     * @param string $domain
     * @return bool
     */
    private function validateUrl(string $domain)
    {
        if (!filter_var('http://' . $domain, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED)) {
            return false;
        }

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