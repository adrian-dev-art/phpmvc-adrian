<?php 

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        //query untuk mendapatkan semua data di table mahasiswa
        $this->db->query('SELECT * FROM ' .  $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table.' WHERE id=:id');
        $this->db->bind('id', $id );
        return $this->db->single();
    }
    
    public function tambahDataMahasiswa($data){
        
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', :name, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('name', $data['name'] );
        $this->db->bind('nrp', $data['nrp'] );
        $this->db->bind('email', $data['email'] );
        $this->db->bind('jurusan', $data['jurusan'] );
        
        
        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data){
        
        $query = "UPDATE mahasiswa SET
                    name = :name,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan,
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('name', $data['name'] );
        $this->db->bind('nrp', $data['nrp'] );
        $this->db->bind('email', $data['email'] );
        $this->db->bind('jurusan', $data['jurusan'] );
        $this->db->bind('id', $data['id'] );
        
        
        return $this->db->rowCount();
    }
    
    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        
        return $this->db->rowCount();
        
    }
}

?>