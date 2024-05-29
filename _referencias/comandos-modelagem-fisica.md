# Modelagem Física

Implantar o banco de dados no servidor/back-end.

## Comando SQL para modelagem

### Criar o banco de dados

```sql
CREATE DATABASE microblog_matheus CHARACTER SET utf8mb4;
```


### Criar tabela de usuários

```sql
CREATE TABLE usuarios(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome  VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL UNIQUE,
    tipo ENUM('admin', 'editor') NOT NULL

);
```

```sql
CREATE TABLE noticias(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    titulo  VARCHAR(150) NOT NULL,
    texto TEXT NOT NULL,
    resumo  TINYTEXT NOT NULL,
    imagem VARCHAR(45) NOT NULL,
    usuario_id  INT NOT NULL

);
```


### Criar um relacionamento


Utilizamos uma `constraint` (restrição) para criar a relação entre as tabelas através das chaves **primária** e **estrangeira**.

```sql
ALTER TABLE noticias
    ADD CONSTRAINT fk_noticias_usuarios
    FOREIGN KEY (usuario_id) REFERENCES usuarios (id);
```