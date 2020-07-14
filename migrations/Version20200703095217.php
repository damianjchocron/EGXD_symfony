<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200703095217 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_rol');
        $this->addSql('DROP TABLE rol');
        $this->addSql('ALTER TABLE multimedia DROP FOREIGN KEY fk_multimedia_1');
        $this->addSql('ALTER TABLE multimedia CHANGE idproduct idproduct INT DEFAULT NULL');
        $this->addSql('ALTER TABLE multimedia ADD CONSTRAINT FK_61312863C4E56C3 FOREIGN KEY (idproduct) REFERENCES product (idproduct)');
        $this->addSql('ALTER TABLE product CHANGE idcategoria idcategoria INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD300BBBD8 FOREIGN KEY (idcategoria) REFERENCES categoria (idcategoria)');
        $this->addSql('ALTER TABLE usuario MODIFY idusuario INT NOT NULL');
        $this->addSql('DROP INDEX index2 ON usuario');
        $this->addSql('DROP INDEX idrol ON usuario');
        $this->addSql('ALTER TABLE usuario DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE usuario DROP idrol');
        $this->addSql('ALTER TABLE usuario ADD PRIMARY KEY (idusuario)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rol (idrol INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(45) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(idrol)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE multimedia DROP FOREIGN KEY FK_61312863C4E56C3');
        $this->addSql('ALTER TABLE multimedia CHANGE idproduct idproduct INT NOT NULL');
        $this->addSql('ALTER TABLE multimedia ADD CONSTRAINT fk_multimedia_1 FOREIGN KEY (idproduct) REFERENCES product (idproduct) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD300BBBD8');
        $this->addSql('ALTER TABLE product CHANGE idcategoria idcategoria INT NOT NULL');
        $this->addSql('ALTER TABLE usuario MODIFY idusuario INT NOT NULL');
        $this->addSql('ALTER TABLE usuario DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE usuario ADD idrol INT NOT NULL');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_rol FOREIGN KEY (idrol) REFERENCES rol (idrol)');
        $this->addSql('CREATE INDEX index2 ON usuario (idrol)');
        $this->addSql('CREATE INDEX idrol ON usuario (idrol)');
        $this->addSql('ALTER TABLE usuario ADD PRIMARY KEY (idusuario, idrol)');
    }
}
