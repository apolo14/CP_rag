<?php
class News {
    private $connection;
    
    public function __construct($connection) {
        $this->connection = $connection;
    }
    
    public function getAll($limit = 10, $publishedOnly = true) {
        $sql = "SELECT * FROM cp_news ";
        $bind = array();
        
        if ($publishedOnly) {
            $sql .= "WHERE is_published = 1 AND (publish_at IS NULL OR publish_at <= NOW()) ";
        }
        
        $sql .= "ORDER BY created_at DESC LIMIT ?";
        $bind[] = $limit;
        
        $sth = $this->connection->getStatement($sql);
        $sth->execute($bind);
        
        return $sth->fetchAll();
    }
    
    public function getById($id) {
        $sql = "SELECT * FROM cp_news WHERE id = ?";
        $sth = $this->connection->getStatement($sql);
        $sth->execute(array($id));
        
        return $sth->fetch();
    }
    
    // Outros métodos (add, update, delete)...
}
?>