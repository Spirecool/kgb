<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220715202254 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agent ADD agent_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D46EAB62F FOREIGN KEY (agent_id_id) REFERENCES mission (id)');
        $this->addSql('CREATE INDEX IDX_268B9C9D46EAB62F ON agent (agent_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9D46EAB62F');
        $this->addSql('DROP INDEX IDX_268B9C9D46EAB62F ON agent');
        $this->addSql('ALTER TABLE agent DROP agent_id_id');
    }
}
