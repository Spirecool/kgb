<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220716115049 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hideout ADD misson_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hideout ADD CONSTRAINT FK_2C2FE159A41D9478 FOREIGN KEY (misson_id_id) REFERENCES mission (id)');
        $this->addSql('CREATE INDEX IDX_2C2FE159A41D9478 ON hideout (misson_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hideout DROP FOREIGN KEY FK_2C2FE159A41D9478');
        $this->addSql('DROP INDEX IDX_2C2FE159A41D9478 ON hideout');
        $this->addSql('ALTER TABLE hideout DROP misson_id_id');
    }
}
