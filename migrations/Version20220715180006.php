<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220715180006 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Entity Hideout';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hideout (id INT AUTO_INCREMENT NOT NULL, mission_id INT DEFAULT NULL, code_name VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, country VARCHAR(50) NOT NULL, hideout_type VARCHAR(255) NOT NULL, INDEX IDX_2C2FE159BE6CAE90 (mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hideout ADD CONSTRAINT FK_2C2FE159BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE hideout');
    }
}
