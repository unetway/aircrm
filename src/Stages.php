<?php

namespace Unetway\AirCrm;


class Stages extends AirCrm
{

    /**
     * @return mixed
     */
    public function get()
    {
        $response = $this->client->get('pipeline-stages');

        return json_decode($response->getBody()->getContents(), true);
    }

}
