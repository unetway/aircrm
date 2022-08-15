<?php

namespace Unetway\AirCrm;


class Users extends AirCrm
{
    /**
     * @return mixed
     */
    public function get()
    {
        $response = $this->client->get('users');

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function me()
    {
        $response = $this->client->get('me');

        return json_decode($response->getBody()->getContents(), true);
    }

}
