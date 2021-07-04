# Exercice 01:
## Dans la base de données webDevelopment, créer la table languages avec les colonnes:
    --id (type INT, auto-incrémenté, clé primaire)
    --language (type VARCHAR)

SHOW DATABASES;
USE webDevelopment;
id (type INT, auto-incrémenté, clé primaire) --language (type VARCHAR)
CREATE TABLE 'languages'(
--id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--language VARCHAR(50);

# Exercice 02:
## Dans la base de données webDevelopment, créer la table tools avec les colonnes suivantes: 
    --id (type INT, auto-incrémenté, clé primaire)
    --tool (type VARCHAR)

SHOW DATABASES;
USE webDevelopment;
CREATE TABLE 'tools'(
--id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--tool VARCHAR(50));

# Exercice 03:
## Dans la base de données webDevelopment, créer la table frameworks avec les colonnes suivantes : 
    --id (type INT, auto-incrémenté, clé primaire)
    --name (type VARCHAR)

SHOW DATABASES;
USE webDevelopment;
CREATE TABLE 'frameworks'(
--id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--name VARCHAR(50));

# Exercice 04: 
## Dans la base de données webDevelopment, créer la table librairies avec les colonnes suivantes:
    --id (type INT, auto-incrémenté, clé primaire)
    --librairy (type VARCHAR)

SHOW DATABASES;
USE webDevelopment;
CREATE TABLE 'librairies'(
--id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--librairy VARCHAR(50)
    );

# Exercice 05: 
## Dans la base de données webDevelopment, créer la table ide avec les colonnes suivantes:
    --id (type INT, auto-incrémenté, clé primaire)
    --librairy (type VARCHAR)

SHOW DATABASES;
USE webDevelopment;
CREATE TABLE `ide`(
--id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--librairy VARCHAR(50));

# Exercice 06:
## Dans la base de données webDevelopment, créer, si elle n'existe pas, la table frameworks avec les colonnes suivantes:
    --id (type INT, auto-incrémenté, clé primaire)
    --name (type VARCHAR)

SHOW DATABASES;
USE webDevelopment;
CREATE TABLE IF NOT EXISTS 'frameworks'(
--id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
--name VARCHAR(50));