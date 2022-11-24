<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221109145711 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wine_details (id INT AUTO_INCREMENT NOT NULL, lang VARCHAR(10) NOT NULL, tasting LONGTEXT NOT NULL, accords LONGTEXT NOT NULL, info SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wine_info (id INT AUTO_INCREMENT NOT NULL, domaine VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, appellation VARCHAR(255) NOT NULL, cepage VARCHAR(255) NOT NULL, temperature VARCHAR(255) NOT NULL, conditioning VARCHAR(255) NOT NULL, garde VARCHAR(255) NOT NULL, caracteristics VARCHAR(255) NOT NULL, datemodified DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wine_names (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, dateadded DATETIME NOT NULL, datemodified DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE wine_details');
        $this->addSql('DROP TABLE wine_info');
        $this->addSql('DROP TABLE wine_names');
    }
}
