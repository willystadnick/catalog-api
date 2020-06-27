# Avaliação técnica - Desenvolvedor Backend

O objetivo desta avaliação é observarmos sua capacidade de organização, atenção ao código, atenção aos requisitos e qualidade geral da aplicação. A tarefa é bastante simples: criar um CRUD de um catálogo e servir os dados via API.

A aplicação deve permitir:
- A criação, exclusão e atualização de categorias, sendo que cada categoria pode conter um ou mais produtos associados.
- A criação, exclusão e atualização de produtos.
- Servir uma API REST para APENAS consulta de dados de categorias, produtos e de um produto em particular.

A aplicação não precisa conter:
- Controle de acesso de usuários
- Chamadas assíncronas
- Um layout espetacular (faça o mínimo possível para permitir a utilização da aplicação)

Para o desenvolvimento da aplicação você pode implementar a tecnologia que achar mais relevante, desde que seja PHP. Utilize o MySQL como banco de dados.

## Entregáveis

- Código fonte da aplicação.
- Documentação da aplicação e da API.

## API de dados

A API apenas fornece informações. você deve implementar os seguintes endpoints para consulta de dados, respeitando os formatos de dados abaixo:

### Categorias

Endpoint: /categorias

Formato de dados:

```json
[
	{
		"id": 1,
		"slug": "eletronicos",
		"titulo": "Eletrônicos",
		"produtos": [1,2,3]
	},
	...
]
```

### Produtos

Endpoint: /produtos

Formato de dados:

```json
[
	{
		"id": 1,
		"slug": "suqueira-tudo-e-festa",
		"nome": "Suqueira Tudo é Festa",
		"preco": 100.00,
		"thumbnail": "http://path/to/image"
	},
	...
]
```

### Produto

Endpoint: /produto/:id

Formato de dados:

```json
{
	"id": 1,
	"slug": "suqueira-tudo-e-festa",
	"nome": "Suqueira Tudo é Festa",
	"preco": 100.00,
	"thumbnail": "http://path/to/image"
}
```

## O que será observado

- Código PHP (PSR-x, lógica, coerência, técnicas, metodologias)
- Estrutura e queries MySQL
- Organização (Namespaces, estrutura de diretórios)
- Gerenciamento (gerenciadores de pacote, integração da aplicação com frameworks)
- Interação com Git (commits, workflow)

## Método

- Crie um fork deste repositório na sua própria conta.
- Armazene sua aplicação no diretório 'www',
- Gerencie seu repositório da forma que achar conveniente.
- Uma vez concluído, deixe sua última versão na branch master.
- Envie (por email) o link do seu repositório acompanhado de instruções para deploy local, para que possamos avaliar.

## Encorajamos

- Uso de gerenciadores de pacotes (Composer, PEAR)
- Task runners (Grunt, Gulp)
- Gitflow

## Prazo

- A janela para desenvolvimento inicia-se hoje, 9/03, e extende-se até o dia 14/03 às 9h.
- No dia 14, a partir das 9h, iniciaremos as avaliações e nenhum commit será aceito após esse horário.
- Qualquer dificuldade técnica deve ser informada o quanto antes, para que tenhamos tempo de auxiliar e não prejudicar o desempenho do candidato.

Boa sorte!

## Contato:
- bruno@anon.mail
