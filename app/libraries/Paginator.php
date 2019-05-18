<?php

class Paginator extends Controller {

    public $_limit;
    public $_page;
    public $_query;
    public $_total;

    public $test;


    /**
     * Constructor
     */
    public function __construct()
    {
        // dnd(URLROOT . '/app/views/layouts/');
    }

    /**
     * Get Data Return Limited Items
     *
     * @author Jesper Gullman <jesper.gullman@outlook.com>
     * @param integer $page
     * @param sql $queryString
     * @return array
     */
    public function getData($page = 1, $queryString){

        $this->pageModel = $this->model('PaginationModel');

        $this->_limit = ITEMLIMIT;  // Instance of pagination limit from Config file
        $this->_page = $page;   // Instance og current page
        $this->_query = $queryString;   // Querystring from Controller
        $this->_total = $this->pageModel->getTotalQuery($queryString);    // Get the total rows from Querystring

        // Check if show all is entered
        if($this->_limit == 'all'){
            $query = $this->_query;
        }else{
            $query = $this->_query . " LIMIT " . (($this->_page - 1) * $this->_limit) . ", $this->_limit";
        }

        // Return response from database
        $response = $this->pageModel->getQuery($query);

        // Check if wrong page is typed
        if(empty($response)){
            // Load Error Function 404
            redirect_404();

            // Dont Edit Code Below
            // Return last page value if vrong page
            // $this->_page = ceil($this->_total / $this->_limit);
            // $query = $this->_query . " LIMIT " . (($this->_page - 1) * $this->_limit) . ", $this->_limit";

            // $response = $this->pageModel->getQuery($query);
        }

        foreach($response as $value) {
            $results[] = $value;
        }


        $result = new stdClass();
        $result->page = $this->_page;
        $result->limit = $this->_limit;
        $result->total = $this->_total;
        $result->data = $results;


        return $result;
    }

    /**
     * Create Pagination Links
     *
     * @author Jesper Gullman <jesper.gullman@outlook.com>
     * @access public
     * @param int $links
     * @param string $list_class
     * @return string
     */
    public function createPaginationLinks($links, $list_class){

        // Check if show all is called then no links is returned
        if($this->_limit == "all"){
            return '';
        }

        $last = ceil($this->_total / $this->_limit);

        $start = (($this->_page - $links) > 0) ? $this->_page - $links : 1;
        $end = (($this->_page + $links) < $last) ? $this->_page + $links : $last;

        $html = '<ul class="' . $list_class . '">';

        $class      = ( $this->_page == 1 ) ? "disabled" : "";
        // $html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page - 1 ) . '">&laquo;</a></li>';
        $html       .= '<li class="' . $class . '"><a href="' . ( $this->_page - 1 ) . '">&laquo;</a></li>';

        if ( $start > 1 ) {
            // $html   .= '<li><a href="?limit=' . $this->_limit . '&page=1">1</a></li>';
            $html   .= '<li><a href="&page=1">1</a></li>';
            $html   .= '<li class="disabled"><span>...</span></li>';
        }

        for ( $i = $start ; $i <= $end; $i++ ) {
            $class  = ( $this->_page == $i ) ? "active" : "";
            // $html   .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . $i . '">' . $i . '</a></li>';
            $html   .= '<li class="' . $class . '"><a href="' . $i . '">' . $i . '</a></li>';
        }

        if ( $end < $last ) {
            $html   .= '<li class="disabled"><span>...</span></li>';
            // $html   .= '<li><a href="?limit=' . $this->_limit . '&page=' . $last . '">' . $last . '</a></li>';
            $html   .= '<li><a href="' . $last . '">' . $last . '</a></li>';
        }

        $class      = ( $this->_page == $last ) ? "disabled" : "";
        // $html       .= '<li class="' . $class . '"><a href="?limit=' . $this->_limit . '&page=' . ( $this->_page + 1 ) . '">&raquo;</a></li>';
        $html       .= '<li class="' . $class . '"><a href="' . ( $this->_page + 1 ) . '">&raquo;</a></li>';

        $html       .= '</ul>';

        return $html;
    }
}