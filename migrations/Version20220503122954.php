<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503122954 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bizum (id INT AUTO_INCREMENT NOT NULL, usuarioid_id INT DEFAULT NULL, telefono INT DEFAULT NULL, UNIQUE INDEX UNIQ_5BD316694B1B945C (usuarioid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paypal (id INT AUTO_INCREMENT NOT NULL, usuarioid_id INT DEFAULT NULL, numerocuenta VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_6496024C4B1B945C (usuarioid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE solicitar_pago_royal_acumulado (id INT AUTO_INCREMENT NOT NULL, fecha DATE DEFAULT NULL, royaltiespagar DOUBLE PRECISION DEFAULT NULL, estado VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE solicitar_pago_royal_acumulado_servicio (id INT AUTO_INCREMENT NOT NULL, fecha DATE DEFAULT NULL, rayaltieacum DOUBLE PRECISION DEFAULT NULL, royaltiepagado DOUBLE PRECISION DEFAULT NULL, saldoroyaltie DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE solicitar_recogida (id INT AUTO_INCREMENT NOT NULL, usuarioid_id INT DEFAULT NULL, nombre VARCHAR(255) DEFAULT NULL, fecha DATE NOT NULL, hora TIME DEFAULT NULL, numeroenvio VARCHAR(255) DEFAULT NULL, estado VARCHAR(255) DEFAULT NULL, INDEX IDX_B30C14F54B1B945C (usuarioid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transferencia_bancaria (id INT AUTO_INCREMENT NOT NULL, usuarioid_id INT DEFAULT NULL, nombrebanco VARCHAR(255) DEFAULT NULL, nombretitular VARCHAR(255) DEFAULT NULL, numerocuenta VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_6E3E99324B1B945C (usuarioid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bizum ADD CONSTRAINT FK_5BD316694B1B945C FOREIGN KEY (usuarioid_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE paypal ADD CONSTRAINT FK_6496024C4B1B945C FOREIGN KEY (usuarioid_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE solicitar_recogida ADD CONSTRAINT FK_B30C14F54B1B945C FOREIGN KEY (usuarioid_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE transferencia_bancaria ADD CONSTRAINT FK_6E3E99324B1B945C FOREIGN KEY (usuarioid_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bizum');
        $this->addSql('DROP TABLE paypal');
        $this->addSql('DROP TABLE solicitar_pago_royal_acumulado');
        $this->addSql('DROP TABLE solicitar_pago_royal_acumulado_servicio');
        $this->addSql('DROP TABLE solicitar_recogida');
        $this->addSql('DROP TABLE transferencia_bancaria');
    }
}
