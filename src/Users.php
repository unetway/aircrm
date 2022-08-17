<?php

namespace Unetway\AirCrm;


class Users extends Essential
{
    /**
     * @return mixed
     */
    public function get()
    {
        $response = $this->aircrm->client->get('users');

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function me()
    {
        $response = $this->aircrm->client->get('me');

        return json_decode($response->getBody()->getContents(), true);
    }

}
