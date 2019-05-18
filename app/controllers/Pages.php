<?php
class Pages extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        // dnd(base64_encode(openssl_random_pseudo_bytes(rand(32,64))));

        $data = [
            'title' => 'MVC Pagination Development',
            'headTags' => [
                '<meta name="description" content="Gullman MVC Framework">',
                '<meta name="author" content="Jesper Gullman">'
            ],
            'copy' => "Copyright Jesper Gullman"
        ];

        $this->view('pages/index', $data);
    }


    public function country($current = 1){

        // Querystring
        $query = ("SELECT * FROM country");

        // Create an instance of Paginator Class
        $paginator = new Paginator();

        // Get items from database
        $country = $paginator->getData((int)$current, $query);
        $links = $paginator->createPaginationLinks(3,'paginate');

        $data = [
            'title' => "Country",
            'headTags' => [
                '<meta name="description" content="Shows country name with pagination">'
            ],
            'country' => $country->data,
            'links' => $links
        ];


        $this->view('pages/country', $data);
    }


    // JSON Handeling

    public function getAjaxPosts()
    {
        $start = $_POST['start'];
        $end = $_POST['end'];

        $posts = $this->postModel->getPosts($start, $end);
        $resp = $posts;
        return $this->jsonResponse($resp);
    }

    public function postUserValue()
    {

        $fname = $_POST['fname'];

        $post = $this->postModel->registerUser($fname);
    }

    public function getAllUsers()
    {
        $posts = $this->postModel->getAllUsers();
        return $this->jsonResponse($posts);
    }
}
