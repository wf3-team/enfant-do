<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210722115032 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conseil (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description TEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, bebe_id INT NOT NULL, repas_id INT DEFAULT NULL, hygiene_id INT DEFAULT NULL, dodo TINYINT(1) NOT NULL, heure_debut DATETIME NOT NULL, heure_fin DATETIME DEFAULT NULL, INDEX IDX_B26681EA76ED395 (user_id), INDEX IDX_B26681EAF762365 (bebe_id), INDEX IDX_B26681E1D236AAA (repas_id), INDEX IDX_B26681E5279B53E (hygiene_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hygiene (id INT AUTO_INCREMENT NOT NULL, couche_urine TINYINT(1) NOT NULL, couche_selle TINYINT(1) NOT NULL, bain TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repas (id INT AUTO_INCREMENT NOT NULL, biberon TINYINT(1) NOT NULL, quantite_ml INT DEFAULT NULL, puree TINYINT(1) NOT NULL, compote TINYINT(1) NOT NULL, yaourt TINYINT(1) NOT NULL, quantite_pot INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EAF762365 FOREIGN KEY (bebe_id) REFERENCES bebe (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E1D236AAA FOREIGN KEY (repas_id) REFERENCES repas (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E5279B53E FOREIGN KEY (hygiene_id) REFERENCES hygiene (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E5279B53E');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E1D236AAA');
        $this->addSql('DROP TABLE conseil');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE hygiene');
        $this->addSql('DROP TABLE repas');
    }
}
