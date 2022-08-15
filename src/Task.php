<?php

namespace Unetway\AirCrm;


class Task extends AirCrm
{
    /**
     * @param array $params
     * @return mixed
     */
    public function create(array $params)
    {
        $response = $this->client->post('activities', [
            'json' => array_merge($params, [
                'due_date' => date('Y-m-d'),
            ])
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
        $response = $this->client->post("activities/$id", [
            'json' => $params
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return mixed
     */
    public function fields()
    {
        $response = $this->client->get('activities/fields');

        return json_decode($response->getBody()->getContents(), true);
    }

}
