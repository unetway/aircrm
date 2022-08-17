<?php

namespace Unetway\AirCrm;


class Stages extends Essential
{

    /**
     * @return mixed
     */
    public function get()
    {
        $response = $this->aircrm->client->get('pipeline-stages');

        return json_decode($response->getBody()->getContents(), true);
    }

}
