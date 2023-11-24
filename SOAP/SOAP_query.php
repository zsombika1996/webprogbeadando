<?php
class SOAP_query
{
    private $db;
    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'web2');
        if ($this->db->connect_error) {
            die('Connect Error(' . $this->db->connect_error . ') ' . $this->db->connect_error);
        }
    }
    function getKorlatozas()
    {
        $query = $this->db->query('Select * from korlatozas');

        $data = array();
        while ($row = $query->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function getMegnevezes()
    {
        $query = $this->db->query('Select * From megnevezes');

        $data = array();
        while ($row = $query->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function getMertek()
    {
        $query = $this->db->query('Select * From mertek');

        $data = array();
        while ($row = $query->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}

$options = array(
    'url' => 'http://localhost/webprogbeadando/SOAP/SOAP_query' 
);
$server = new SoapServer(null, $options);
$server-> setClass('SOAP_query');
$server-> handle();

?>