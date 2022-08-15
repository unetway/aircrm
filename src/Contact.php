<?php

namespace Unetway\AirCrm;


class Contact extends AirCrm
{
    /**
     * @param array $params
     * @return mixed
     */
    public function create(array $params)
    {
        $response = $this->client->post('contacts', [
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
        $response = $this->client->post("contacts/$id", [
            'json' => $params
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function fields()
    {
        $response = $this->client->get('contacts/fields');

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function search(array $params)
    {
        $response = $this->client->get('contacts/search', [
            'query' => $params
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
