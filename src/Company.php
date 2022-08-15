<?php

namespace Unetway\AirCrm;


class Company extends AirCrm
{

    /**
     * @param array $params
     * @return mixed
     */
    public function create(array $params)
    {
        $response = $this->client->post('companies', [
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
        $response = $this->client->post("companies/$id", [
            'json' => $params
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function fields()
    {
        $response = $this->client->get('companies/fields');

        return json_decode($response->getBody()->getContents(), true);
    }
}
