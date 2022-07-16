<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220716115237 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE target ADD mission_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE target ADD CONSTRAINT FK_466F2FFCEFD2C16A FOREIGN KEY (mission_id_id) REFERENCES mission (id)');
        $this->addSql('CREATE INDEX IDX_466F2FFCEFD2C16A ON target (mission_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE target DROP FOREIGN KEY FK_466F2FFCEFD2C16A');
        $this->addSql('DROP INDEX IDX_466F2FFCEFD2C16A ON target');
        $this->addSql('ALTER TABLE target DROP mission_id_id');
    }
}
