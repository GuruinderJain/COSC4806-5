<?php

class Reminder {
private $db;
  public function __construct() {
$this->db = db_connect();
  }
  public function get_all_reminders(): array{
    $statement = $this->db->prepare("SELECT * FROM reminders;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
  public function get_reminder_by_id($id) {
      $statement = $this->db->prepare("SELECT * FROM reminders WHERE id = :id");
      $statement->bindParam(':id', $id, PDO::PARAM_INT);
      $statement->execute();
      return $statement->fetch(PDO::FETCH_ASSOC);
  }
  
  public function update_reminders ($id,$subject) {
    $statement = $this->db->prepare("UPDATE reminders SET subject = :subject WHERE id = :id");
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
    $statement->execute();
  }
  
  public function create_reminder($user_id, $subject) {
  $statement = $this->db->prepare("INSERT INTO reminders (user_id, subject, created_at) VALUES (:user_id, :subject, NOW())");
  $statement->bindParam(':user_id', $user_id, PDO::PARAM_INT);
  $statement->bindParam(':subject', $subject, PDO::PARAM_STR);
  $statement->execute();
}

  public function delete_reminder($id) {
  $statement = $this->db->prepare("DELETE FROM reminders WHERE id = :id");
  $statement->bindParam(':id', $id, PDO::PARAM_INT);
  $statement->execute();
  }
}
?>