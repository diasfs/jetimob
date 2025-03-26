<?php

namespace Jetimob;

use GuzzleHttp\Client;
use Iterator;

class CorretoresIterator implements Iterator
{
    /**
     * Summary of page_size
     * @var int
     */
    private $page_size = 100;
    /**
     * Summary of pages
     * @var int
     */
    private $pages = 0;
    /**
     * Summary of total
     * @var int
     */
    private $total = 0;
    /**
     * Summary of page
     * @var int
     */
    private $page = 0;
    /**
     * Summary of index
     * @var int
     */
    private $position = 0;
    /**
     * Summary of client
     * @var Client
     */
    private $client;

    /**
     * Summary of results
     * @var array<int, array<Corretor>>
     */
    private $results = [];

    /**
     * Summary of __construct
     * @param string $key
     */
    public function __construct($key, $page_size = 100)
    {
        $this->page_size = $page_size;
        $this->client = new Client([
            'base_url' => "https://api.jetimob.com/webservice/{$key}/"
        ]);

        $this->fetchNextPage();
    }

    private function fetchNextPage()
    {
        if (!isset($this->results[$this->page + 1])) {
            $response = $this->client->get('corretores', [
                'query' => [
                    'v' => 6,
                    'pageSize' => $this->page_size,
                    'page' => $this->page + 1
                ]
            ]);

            $response_body = $response->getBody() . '';

            $response_json = json_decode($response_body);


            $this->pages = $response_json->totalPages;
            $this->total = $response_json->total;
            $this->page++;
            $this->position = 0;

            $records = array_map([$this, 'formatRow'], $response_json->data);

            $this->results[$this->page] = $records;
        } else {
            $this->page++;
            $this->position = 0;
        }
    }

    /**
     * Summary of formatRow
     * @param \stdClass $row
     * @return Corretor
     */
    private function formatRow($row)
    {
        $corretor = Corretor::fromArray($row);
        return $corretor;
    }

    public function current()
    {
        return $this->results[$this->page][$this->position];
    }


    public function key()
    {
        return ($this->page - 1) * $this->page_size + $this->position;
    }


    public function next()
    {
        $this->position++;
        if ($this->position >= $this->page_size) {
            $this->fetchNextPage();
        }
    }

    public function rewind()
    {
        $this->page = 1;
        $this->position = 0;
    }


    public function valid()
    {
        if ($this->page > $this->pages) {
            return false;
        }
        if ($this->position >= $this->page_size) {
            return false;
        }

        if ($this->page === $this->pages) {
            $max = $this->total % $this->page_size;
            if ($this->position >= $max) {
                return false;
            }
        }
        return true;
    }

    public function count()
    {
        return $this->total;
    }
}
