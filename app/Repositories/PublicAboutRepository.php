<?php
declare(strict_types=1);

namespace Repo;

require_once __DIR__ . '/../../bootstrap.php';
require_once __DIR__ . '/../../app/Support/helper.php';

use PDO;

final class PublicAboutRepository {

    private PDO $conn;

    public function __construct(PDO $db) {
        $this->conn = $db;
    }

    public function getAbout(): array
    {
        $sql = "SELECT c.name, p.title, p.excerpt, p.content, p.featured_image, p.status, p.active 
                FROM posts p
                INNER JOIN categories c ON c.id = p.category_id
                WHERE p.active = 1
                AND p.status = 'published'
                AND p.category_id = 9";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getHistory(): array
    {
        $sql = "SELECT c.name, p.title, p.excerpt, p.content, p.featured_image, p.status, p.active 
                FROM posts p
                INNER JOIN categories c ON c.id = p.category_id
                WHERE p.active = 1
                AND p.status = 'published'
                AND p.category_id = 10";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewUCC(): array
    {
        $sql = "SELECT c.name, p.title, p.excerpt, p.content, p.featured_image, p.status, p.active 
                FROM posts p
                INNER JOIN categories c ON c.id = p.category_id
                WHERE p.active = 1
                AND p.status = 'published'
                AND p.category_id = 11";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOpportunities(): array
    {
        $sql = "SELECT c.name, p.title, p.excerpt, p.content, p.featured_image, p.status, p.active 
                FROM posts p
                INNER JOIN categories c ON c.id = p.category_id
                WHERE p.active = 1
                AND p.status = 'published'
                AND p.category_id = 12";

        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>