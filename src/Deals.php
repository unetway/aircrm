<?php

namespace Unetway\AirCrm;


class Deals extends Essential
{

    /**
     * @param array $params
     * @return mixed
     */
    public function create(array $params)
    {
        $response = $this->aircrm->client->post('deals', [
            'json' => $params
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param int $id
     * @param array $params
     * @return mixed
     */
    public function update(int $id, array $params)
    {
        $response = $this->aircrm->client->post("deals/$id", [
            'json' => $params,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function fields()
    {
        $response = $this->aircrm->client->get('deals/fields');

        return json_decode($response->getBody()->getContents(), true);
    }

}
