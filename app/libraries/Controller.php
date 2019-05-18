<?php
  /*
 * Base Controller
 * Loads the models and views
 */
class Controller
{
  // Load model
  public function model($model)
  {
    // Require model file
    require_once '../app/models/' . $model . '.php';

    // Instatiate model
    return new $model();
  }

  // Load view
  public function view($view, $data = [])
  {
    // Check for view file
    if (file_exists('../app/views/' . $view . '.php')) {
      require_once '../app/views/' . $view . '.php';
    } else {
      // View does not exist
      die('View does not exist');
    }
  }

  // JSON Response

  public function jsonResponse($resp)
  {
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: applicaton/json; charset=utf8mb4");
    http_response_code(200);
    echo json_encode($resp);
    exit;
  }
}

