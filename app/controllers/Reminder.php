<?php
class Reminder extends Controller{
public function index(){

$reminder = $this->model('reminder');
  
  $list_of_reminders = $reminder->get_all_reminders();
  $this->view('Reminder/index', ['reminders' => $list_of_reminders]);
  

} public function create() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $subject = $_POST['subject'];
          $reminder = $this->model('Reminder');
          $reminder->create_reminder($subject);
          header("Location: /reminders");
      } else {
          $this->view('reminders/create');
      }
  }

  public function update($id) {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $subject = $_POST['subject'];
          $reminder = $this->model('Reminder');
          $reminder->update_reminder($id, $subject);
          header("Location: /reminders");
      } else {
          $reminder = $this->model('Reminder');
          $current_reminder = $reminder->get_reminder_by_id($id);
          $this->view('reminders/update', ['reminder' => $current_reminder]);
      }
  }

  public function delete($id) {
      $reminder = $this->model('Reminder');
      $reminder->delete_reminder($id);
      header("Location: /reminders");
  }
}
