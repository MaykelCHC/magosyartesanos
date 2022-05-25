<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220525034313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE venta_servicios_servicio (venta_servicios_id INT NOT NULL, servicio_id INT NOT NULL, INDEX IDX_EDED814D2F34D2C8 (venta_servicios_id), INDEX IDX_EDED814D71CAA3E7 (servicio_id), PRIMARY KEY(venta_servicios_id, servicio_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE venta_servicios_servicio ADD CONSTRAINT FK_EDED814D2F34D2C8 FOREIGN KEY (venta_servicios_id) REFERENCES venta_servicios (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE venta_servicios_servicio ADD CONSTRAINT FK_EDED814D71CAA3E7 FOREIGN KEY (servicio_id) REFERENCES servicio (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE venta_servicios_servicio');
    }
}
