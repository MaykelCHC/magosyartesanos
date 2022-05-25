<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503121927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE westerunion (id INT AUTO_INCREMENT NOT NULL, usuarioid_id INT DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, apellido_paterno VARCHAR(255) DEFAULT NULL, apellido_materno VARCHAR(255) DEFAULT NULL, correo VARCHAR(255) DEFAULT NULL, ciudad VARCHAR(255) DEFAULT NULL, numeromovil INT DEFAULT NULL, UNIQUE INDEX UNIQ_10A2B24D4B1B945C (usuarioid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE westerunion ADD CONSTRAINT FK_10A2B24D4B1B945C FOREIGN KEY (usuarioid_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE westerunion');
    }
}
