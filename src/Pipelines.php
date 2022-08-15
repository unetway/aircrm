<?php

namespace Unetway\AirCrm;


class Pipelines extends AirCrm
{

    /**
     * @return mixed
     */
    public function get()
    {
        $response = $this->client->get('pipelines');

        return json_decode($response->getBody()->getContents(), true);
    }

}
