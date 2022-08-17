<?php

namespace Unetway\AirCrm;


class Pipelines extends Essential
{

    /**
     * @return mixed
     */
    public function get()
    {
        $response = $this->aircrm->client->get('pipelines');

        return json_decode($response->getBody()->getContents(), true);
    }

}
