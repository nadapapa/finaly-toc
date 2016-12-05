<?php

namespace FinalyToc;


class Contents
{
    private $data = [];

    /**
     * @return array
     */
    public function getContents()
    {
        return $this->data;
    }

    /**
     * @return string|null
     */
    public function getContent($index)
    {
        if (isset($this->data[$index])) {
            return $this->data[$index];
        }

        return null;
    }

    /**
     * @param string $content
     * @param integer $index
     * @return Contents $this
     * @internal param array $data
     */
    public function setContent($content, $index)
    {
        $this->data[$index] = $content;
        return $this;
    }

    public function toJson()
    {
        return json_encode($this->data, JSON_NUMERIC_CHECK);
    }
}