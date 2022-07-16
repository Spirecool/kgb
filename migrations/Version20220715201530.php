<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220715201530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD mission_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638EFD2C16A FOREIGN KEY (mission_id_id) REFERENCES mission (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638EFD2C16A ON contact (mission_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638EFD2C16A');
        $this->addSql('DROP INDEX IDX_4C62E638EFD2C16A ON contact');
        $this->addSql('ALTER TABLE contact DROP mission_id_id');
    }
}
