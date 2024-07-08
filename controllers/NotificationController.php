<?php
require_once '../models/Notification.php';

class NotificationController {
    private $db;
    private $notification;

    public function __construct($db) {
        $this->db = $db;
        $this->notification = new Notification($db);
    }

    public function create($data) {
        $this->notification->utilisateur_id = $data['utilisateur_id'];
        $this->notification->jpo_id = $data['jpo_id'];
        $this->notification->contenu = $data['contenu'];
        $this->notification->date_notification = $data['date_notification'];

        if($this->notification->create()) {
            return true;
        }

        return false;
    }

    public function read() {
        return $this->notification->read();
    }

    public function update($data) {
        $this->notification->id = $data['id'];
        $this->notification->utilisateur_id = $data['utilisateur_id'];
        $this->notification->jpo_id = $data['jpo_id'];
        $this->notification->contenu = $data['contenu'];
        $this->notification->date_notification = $data['date_notification'];

        if($this->notification->update()) {
            return true;
        }

        return false;
    }

    public function delete($id) {
        $this->notification->id = $id;

        if($this->notification->delete()) {
            return true;
        }

        return false;
    }
}
?>
