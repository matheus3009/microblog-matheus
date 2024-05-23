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