<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230418213956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement ADD plan_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BBE899029B FOREIGN KEY (plan_id) REFERENCES typeabn (id)');
        $this->addSql('CREATE INDEX IDX_351268BBE899029B ON abonnement (plan_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BBE899029B');
        $this->addSql('DROP INDEX IDX_351268BBE899029B ON abonnement');
        $this->addSql('ALTER TABLE abonnement DROP plan_id');
    }
}
