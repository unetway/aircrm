<?php

namespace Unetway\AirCrm;


class TaskTypes extends AirCrm
{
    /**
     * @return mixed
     */
    public function get()
    {
        $response = $this->client->get('activity-types');

        return json_decode($response->getBody()->getContents(), true);
    }
}
