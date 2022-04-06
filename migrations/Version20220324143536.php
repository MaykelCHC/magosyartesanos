<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220324143536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aprobar_solicitud_recogida (id INT AUTO_INCREMENT NOT NULL, usuario_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, estado TINYINT(1) NOT NULL, INDEX IDX_37BC2694DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE asignar_productoa_user (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE asignar_productoa_user_user (asignar_productoa_user_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_9FD0B6A43D283B5 (asignar_productoa_user_id), INDEX IDX_9FD0B6AA76ED395 (user_id), PRIMARY KEY(asignar_productoa_user_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE asignar_productoa_user_producto (asignar_productoa_user_id INT NOT NULL, producto_id INT NOT NULL, INDEX IDX_81C6A1B643D283B5 (asignar_productoa_user_id), INDEX IDX_81C6A1B67645698E (producto_id), PRIMARY KEY(asignar_productoa_user_id, producto_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bizum (id INT AUTO_INCREMENT NOT NULL, telefono INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formade_pago (id INT AUTO_INCREMENT NOT NULL, metodopago VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE liquidar_pago (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paypal (id INT AUTO_INCREMENT NOT NULL, cuentapaypal VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producto (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, imagenproducto VARCHAR(255) NOT NULL, beneficioxventa INT NOT NULL, tipomoneda INT NOT NULL, iva VARCHAR(255) NOT NULL, idd VARCHAR(255) NOT NULL, stock INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicios (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, imagenservicio VARCHAR(255) NOT NULL, beneficioxventa VARCHAR(255) NOT NULL, tipomoneda VARCHAR(255) NOT NULL, iva VARCHAR(255) NOT NULL, concepto VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, adjuntardocumentos VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE solicitar_recogida (id INT AUTO_INCREMENT NOT NULL, nombreempresa VARCHAR(255) NOT NULL, fecharecogida VARCHAR(255) NOT NULL, horarecogida VARCHAR(255) NOT NULL, numeroenvio INT NOT NULL, estado VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE solicitud_pago (id INT AUTO_INCREMENT NOT NULL, fechasolicitud VARCHAR(255) NOT NULL, totalroyaltiesacumulados DOUBLE PRECISION NOT NULL, royaltiesxpagar DOUBLE PRECISION NOT NULL, metododepago VARCHAR(255) NOT NULL, estado VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transferencia_bancaria (id INT AUTO_INCREMENT NOT NULL, banco VARCHAR(255) NOT NULL, titular VARCHAR(255) NOT NULL, numerodcuenta VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, venta_producto_id INT DEFAULT NULL, venta_servicio_id INT DEFAULT NULL, liquidar_pago_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, apellidos VARCHAR(255) NOT NULL, empresa VARCHAR(255) NOT NULL, nif VARCHAR(255) NOT NULL, direccion VARCHAR(255) NOT NULL, poblacion VARCHAR(255) NOT NULL, provincia VARCHAR(255) NOT NULL, pais VARCHAR(255) NOT NULL, telefono VARCHAR(255) NOT NULL, emitefactura TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D64995B1A75B (venta_producto_id), INDEX IDX_8D93D649923E6D32 (venta_servicio_id), INDEX IDX_8D93D64951385098 (liquidar_pago_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE venta_producto (id INT AUTO_INCREMENT NOT NULL, fechadeventa VARCHAR(255) NOT NULL, codigoventa VARCHAR(255) NOT NULL, valorxventa DOUBLE PRECISION NOT NULL, royaltie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE venta_producto_producto (venta_producto_id INT NOT NULL, producto_id INT NOT NULL, INDEX IDX_395E43EF95B1A75B (venta_producto_id), INDEX IDX_395E43EF7645698E (producto_id), PRIMARY KEY(venta_producto_id, producto_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE venta_servicio (id INT AUTO_INCREMENT NOT NULL, fechaventaserv VARCHAR(255) NOT NULL, concepto VARCHAR(255) NOT NULL, valor VARCHAR(255) NOT NULL, royaltiescomision DOUBLE PRECISION NOT NULL, adjuntardocumento VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wester_union (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, apellidopaterno VARCHAR(255) NOT NULL, apellidomaterno VARCHAR(255) NOT NULL, correo VARCHAR(255) NOT NULL, ciudad VARCHAR(255) NOT NULL, telefono VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE aprobar_solicitud_recogida ADD CONSTRAINT FK_37BC2694DB38439E FOREIGN KEY (usuario_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE asignar_productoa_user_user ADD CONSTRAINT FK_9FD0B6A43D283B5 FOREIGN KEY (asignar_productoa_user_id) REFERENCES asignar_productoa_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE asignar_productoa_user_user ADD CONSTRAINT FK_9FD0B6AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE asignar_productoa_user_producto ADD CONSTRAINT FK_81C6A1B643D283B5 FOREIGN KEY (asignar_productoa_user_id) REFERENCES asignar_productoa_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE asignar_productoa_user_producto ADD CONSTRAINT FK_81C6A1B67645698E FOREIGN KEY (producto_id) REFERENCES producto (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64995B1A75B FOREIGN KEY (venta_producto_id) REFERENCES venta_producto (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649923E6D32 FOREIGN KEY (venta_servicio_id) REFERENCES venta_servicio (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64951385098 FOREIGN KEY (liquidar_pago_id) REFERENCES liquidar_pago (id)');
        $this->addSql('ALTER TABLE venta_producto_producto ADD CONSTRAINT FK_395E43EF95B1A75B FOREIGN KEY (venta_producto_id) REFERENCES venta_producto (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE venta_producto_producto ADD CONSTRAINT FK_395E43EF7645698E FOREIGN KEY (producto_id) REFERENCES producto (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asignar_productoa_user_user DROP FOREIGN KEY FK_9FD0B6A43D283B5');
        $this->addSql('ALTER TABLE asignar_productoa_user_producto DROP FOREIGN KEY FK_81C6A1B643D283B5');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64951385098');
        $this->addSql('ALTER TABLE asignar_productoa_user_producto DROP FOREIGN KEY FK_81C6A1B67645698E');
        $this->addSql('ALTER TABLE venta_producto_producto DROP FOREIGN KEY FK_395E43EF7645698E');
        $this->addSql('ALTER TABLE aprobar_solicitud_recogida DROP FOREIGN KEY FK_37BC2694DB38439E');
        $this->addSql('ALTER TABLE asignar_productoa_user_user DROP FOREIGN KEY FK_9FD0B6AA76ED395');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64995B1A75B');
        $this->addSql('ALTER TABLE venta_producto_producto DROP FOREIGN KEY FK_395E43EF95B1A75B');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649923E6D32');
        $this->addSql('DROP TABLE aprobar_solicitud_recogida');
        $this->addSql('DROP TABLE asignar_productoa_user');
        $this->addSql('DROP TABLE asignar_productoa_user_user');
        $this->addSql('DROP TABLE asignar_productoa_user_producto');
        $this->addSql('DROP TABLE bizum');
        $this->addSql('DROP TABLE formade_pago');
        $this->addSql('DROP TABLE liquidar_pago');
        $this->addSql('DROP TABLE paypal');
        $this->addSql('DROP TABLE producto');
        $this->addSql('DROP TABLE servicios');
        $this->addSql('DROP TABLE solicitar_recogida');
        $this->addSql('DROP TABLE solicitud_pago');
        $this->addSql('DROP TABLE transferencia_bancaria');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE venta_producto');
        $this->addSql('DROP TABLE venta_producto_producto');
        $this->addSql('DROP TABLE venta_servicio');
        $this->addSql('DROP TABLE wester_union');
    }
}
