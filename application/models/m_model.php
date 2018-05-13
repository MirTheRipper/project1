<?php
class m_model extends CI_Model {
    
    public $title;
    public $content;
    public $date;
    
    public function get_last_ten_entries()
    {
        //$query = $this->db->get('d_managment', 10);
        $query = $this->db->query('SELECT *from pimary_base ORDER BY Wrongdoer_ID DESC' );
        return $query->result();
    }
    
    public function insert_entry()
    {
        $this->title    = $_POST['title']; // please read the below note
        $this->content  = $_POST['content'];
        $this->date     = time();
        
        $this->db->insert('entries', $this);
    }
    
    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();
        
        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    
}