<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211210102341 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE part ADD vehicle_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE part ADD CONSTRAINT FK_490F70C61DEB1EBB FOREIGN KEY (vehicle_id_id) REFERENCES vehicle (id)');
        $this->addSql('CREATE INDEX IDX_490F70C61DEB1EBB ON part (vehicle_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE part DROP FOREIGN KEY FK_490F70C61DEB1EBB');
        $this->addSql('DROP INDEX IDX_490F70C61DEB1EBB ON part');
        $this->addSql('ALTER TABLE part DROP vehicle_id_id');
    }
}
