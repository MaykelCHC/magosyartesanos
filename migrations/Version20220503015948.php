<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503015948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD nombre VARCHAR(255) DEFAULT NULL, ADD apellidos VARCHAR(255) DEFAULT NULL, ADD empresa VARCHAR(255) DEFAULT NULL, ADD nifcif VARCHAR(255) DEFAULT NULL, ADD direccion VARCHAR(255) DEFAULT NULL, ADD poblacion VARCHAR(255) DEFAULT NULL, ADD provincia VARCHAR(255) NOT NULL, ADD pais VARCHAR(255) DEFAULT NULL, ADD telefono VARCHAR(255) DEFAULT NULL, ADD emitirfactura TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP nombre, DROP apellidos, DROP empresa, DROP nifcif, DROP direccion, DROP poblacion, DROP provincia, DROP pais, DROP telefono, DROP emitirfactura');
    }
}
