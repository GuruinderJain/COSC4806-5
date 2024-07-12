<?php
class Reminder extends Controller{
public function index(){

$reminderModel = $this->model('Reminder');
  
  $list_of_reminders = $reminderModel->get_all_reminders();
  $this->view('Reminder/index', ['reminders' => $list_of_reminders]);
  

} public function create() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $subject = $_POST['subject'];
          $reminderModel = $this->model('Reminder');
          $reminderModel->create_reminder($_SESSION['user'],$subject);
          header("Location: /reminders");
      } else {
          $this->view('reminders/create');
      }
  }

  public function update($id) {
         $reminderModel = $this->model('Reminder');
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $subject = $_POST['subject'];
          $reminderModel = $this->model('Reminder');
          $reminder->update_reminder($id, $subject);
          header("Location: /reminders");
      } else {
          $current_reminder = $reminderModel->get_reminder_by_id($id);
          $this->view('reminders/update', ['reminder' => $current_reminder]);
      }
  }

  public function delete($id) {
      $reminderModel = $this->model('Reminder');
      $reminderModel->delete_reminder($id);
      header("Location: /reminders");
  }
}
?>