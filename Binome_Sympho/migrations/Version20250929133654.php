<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250929133654 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD pays_id INT NOT NULL, ADD races_id INT NOT NULL, ADD commentaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6699AE984C FOREIGN KEY (races_id) REFERENCES races (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66BA9CD190 FOREIGN KEY (commentaire_id) REFERENCES commentaire (id)');
        $this->addSql('CREATE INDEX IDX_23A0E66A6E44244 ON article (pays_id)');
        $this->addSql('CREATE INDEX IDX_23A0E6699AE984C ON article (races_id)');
        $this->addSql('CREATE INDEX IDX_23A0E66BA9CD190 ON article (commentaire_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66A6E44244');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6699AE984C');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66BA9CD190');
        $this->addSql('DROP INDEX IDX_23A0E66A6E44244 ON article');
        $this->addSql('DROP INDEX IDX_23A0E6699AE984C ON article');
        $this->addSql('DROP INDEX IDX_23A0E66BA9CD190 ON article');
        $this->addSql('ALTER TABLE article DROP pays_id, DROP races_id, DROP commentaire_id');
    }
}
