<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230417224240 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement MODIFY id_a INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON abonnement');
        $this->addSql('ALTER TABLE abonnement ADD plan_id INT NOT NULL, CHANGE id_a id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BBE899029B FOREIGN KEY (plan_id) REFERENCES typeabn (id)');
        $this->addSql('CREATE INDEX IDX_351268BBE899029B ON abonnement (plan_id)');
        $this->addSql('ALTER TABLE abonnement ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE typeabn MODIFY idtype_a INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON typeabn');
        $this->addSql('ALTER TABLE typeabn CHANGE idtype_a id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE typeabn ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BBE899029B');
        $this->addSql('DROP INDEX IDX_351268BBE899029B ON abonnement');
        $this->addSql('DROP INDEX `PRIMARY` ON abonnement');
        $this->addSql('ALTER TABLE abonnement DROP plan_id, CHANGE id id_a INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE abonnement ADD PRIMARY KEY (id_a)');
        $this->addSql('ALTER TABLE typeabn MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON typeabn');
        $this->addSql('ALTER TABLE typeabn CHANGE id idtype_a INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE typeabn ADD PRIMARY KEY (idtype_a)');
    }
}
