<?php

namespace FinalyToc;

class FinalyClient
{
    private $finaly_base_url = 'http://latin.oszk.hu/';
    private $finaly_index_url = 'index.cgi?function=toc';
    private $finaly_toc_id = '&tocID=';

    /**
     * @return string
     */
    public function getIndexUrl()
    {
        return $this->finaly_base_url . $this->finaly_index_url;
    }

    /**
     * @param integer $id
     * @return string
     */
    public function getTocIdUrl($id)
    {
        return $this->getIndexUrl() . $this->finaly_toc_id . $id;
    }

}