
# Lista de Contato  Laravel 10 - Mysql


<img src="img/01.png" alt="mobile" align="center" style="max-width: 100%;"><br><br>  

  <img src="img/02.png" alt="mobile" align="center" style="max-width: 100%;"><br><br>

  <img src="img/03.png" alt="mobile" align="center" style="max-width: 100%;"><br><br>

  <img src="img/04.png" alt="mobile" align="center" style="max-width: 100%;"><br><br>


### Passo a passo

```sh
1 - Uma página de índice com uma lista de contatos existentes.

2 - Uma página com formulário para adição de novos contatos.

3 - Uma página para mostrar detalhes de contato.

4 – Permitir a edição de um registro existente

5 – Permitir exclusão de um registro existente
```



Considerações
```dosini


Um contato é uma entidade com 4 campos: ID, Nome, Contato e endereço de e-mail. O nome deve ser uma string de tamanho maior que 5, o contato deve ter 9 dígitos e o e-mail deve ser um e-mail válido.

Cada linha na página de índice deve ter um link para editar o contato e um botão para excluí-lo. A exclusão deve realizar uma exclusão suave do registro, usando recursos do Laravel.

A página de detalhes do contato deve mostrar todos os campos do contato, além do link de edição e do botão de exclusão.

O contato e o endereço de e-mail devem ser únicos, dois contatos não podem ter o mesmo.

Quaisquer informações ou dados necessários da estrutura do banco de dados devem ser adicionados usando migrações e/ou sementes.

Sempre use recursos nativos do Laravel quando possível, incluindo rotas, controladores, regras de validação de formulário, exclusões suaves e outros recursos.


```


