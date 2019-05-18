<?php

class PaginationModel
{

    private $db;
    private $paginate;

    public function __construct()
    {
        $this->db = new Database;
        // $this->paginate = new Paginator;
    }

    /**
     * Return database query
     *
     * @author Jesper Gullman <jesper.gullman@gmail.com>
     * @access public
     * @param string $query
     * @return array
     */
    public function getQuery($query){

        $this->db->query($query);
        return $this->db->resultSet();
    }

    /**
     * Get total element i database
     *
     * @author Jesper Gullman <jesper.gullman@outlook.com>
     * @access public
     * @param string $query
     * @return int
     */
    public function getTotalQuery($query){
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
