<?php

namespace Unetway\AirCrm;


class TaskTypes extends Essential
{
    /**
     * @return mixed
     */
    public function get()
    {
        $response = $this->aircrm->client->get('activity-types');

        return json_decode($response->getBody()->getContents(), true);
    }
}
