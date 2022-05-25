<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220518200614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE venta_productos_producto (venta_productos_id INT NOT NULL, producto_id INT NOT NULL, INDEX IDX_81EC5E6C1B5D84FE (venta_productos_id), INDEX IDX_81EC5E6C7645698E (producto_id), PRIMARY KEY(venta_productos_id, producto_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE venta_productos_producto ADD CONSTRAINT FK_81EC5E6C1B5D84FE FOREIGN KEY (venta_productos_id) REFERENCES venta_productos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE venta_productos_producto ADD CONSTRAINT FK_81EC5E6C7645698E FOREIGN KEY (producto_id) REFERENCES producto (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE venta_productos_producto');
    }
}
