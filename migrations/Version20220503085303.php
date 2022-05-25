<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503085303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE venta_servicios (id INT AUTO_INCREMENT NOT NULL, usuarioid_id INT DEFAULT NULL, fecha DATE DEFAULT NULL, concepto VARCHAR(255) DEFAULT NULL, valor INT DEFAULT NULL, comision_royalties INT DEFAULT NULL, documento VARCHAR(255) DEFAULT NULL, INDEX IDX_D76080244B1B945C (usuarioid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE venta_servicios ADD CONSTRAINT FK_D76080244B1B945C FOREIGN KEY (usuarioid_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE venta_servicios');
    }
}
