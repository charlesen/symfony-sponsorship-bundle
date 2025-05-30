<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240529164800 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add created_at and updated_at to assignment table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE assignment ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE assignment ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE assignment DROP created_at');
        $this->addSql('ALTER TABLE assignment DROP updated_at');
    }
}
