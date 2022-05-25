<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503084041 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE servicio ADD usuarioid_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE servicio ADD CONSTRAINT FK_CB86F22A4B1B945C FOREIGN KEY (usuarioid_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_CB86F22A4B1B945C ON servicio (usuarioid_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE servicio DROP FOREIGN KEY FK_CB86F22A4B1B945C');
        $this->addSql('DROP INDEX IDX_CB86F22A4B1B945C ON servicio');
        $this->addSql('ALTER TABLE servicio DROP usuarioid_id');
    }
}
