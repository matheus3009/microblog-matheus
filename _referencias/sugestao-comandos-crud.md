# Operações CRUD

## Resumo

- C: CREATE (INSERT) -> inserir dados
- R: READ (SELECT) -> ler/carregar dados
- U: UPDATE (UPDATE) -> atualizar dados
- D: DELETE (DELETE) -> excluoir dados

## Exemplos

### INSERT na tabela de usuários

```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Matheus', 'matheusteste@gmail.com', '12345', 'admin');

```

```sql

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Geniodohabbibs', 'teste@gmail.com', '54321', 'editor');

```


```sql

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('teste', 'senac@gmail.com', '0987', 'editor');

```

### SELECT na tabela de usuários

```sql
SELECT nome, email FROM usuarios;

```
```sql
SELECT nome, email FROM usuarios;
WHERE tipo = 'admin';

```
```sql
SELECT * FROM usuarios WHERE id > 1

```


### UPDATE na tabela de usuários

```sql
UPDATE usuarios SET tipo = 'editor'
WHERE id = 1;

-- Obs.: NUNCA esqueça de passar pelo menos uma condição para o UPDATE!
```

### DELETE na tabela de usuários

```sql
DELETE FROM usuarios WHERE id = 2;
-- Obs.: NUNCA esqueça de passar pelo menos uma condição para o DELETE! se esquecer da ruim em
```

```sql

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('rapaz', '[123@gmail.com', '12145', 'editor');

```

```sql

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('termina', '02@gmail.com', '2070', 'admin');

```

## EXEMPLOS para tabela noticias

```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES(
    'Lançamento de novo HTML choca todos',
    'HTML6',
    'Melhorias insanas',
    'HTML.jpg',
    1
);
```


### SELECT em noticias

```sql
SELECT titulo, data FROM noticias;
```

```sql
SELECT titulo, data FROM noticias ORDER BY data DESC;

-- Usamos o ORDER BY data DESC para classificar em ordem 
--decrescente pela data 
```

### SELECT com JOIN (consulta com junção de tabelas)

**objetivo:?** realizar uma consulta que mostre a data eo título da notícia **e** o nome do autor da notícia.

````sql
SELECT
    noticias.data,
    noticias.titulo
    usuarios.nome
FROM noticias JOIN usuarios
ON noticias.usuario_id = usuarios.id;


```