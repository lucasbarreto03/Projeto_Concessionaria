# 🚗 Sistema de Gerenciamento de Concessionária

Sistema web desenvolvido para a **avaliação A2** da disciplina de **Programação WEB**, com foco no gerenciamento de inventário de veículos.  
A aplicação utiliza **PHP estruturado**, **MySQL** e **Bootstrap 5**, implementando operações completas de CRUD e relacionamento entre entidades.

---

## 📌 Sobre o Projeto

Este sistema permite cadastrar, visualizar, editar e excluir veículos e suas respectivas marcas, simulando um ambiente básico de gerenciamento para uma concessionária.  
O foco da atividade foi aplicar os conceitos aprendidos em sala sobre **desenvolvimento web**, **manipulação de banco de dados** e **organização de código em PHP**.

---

## 📝 Descrições para o Repositório

Aplicação web completa para gerenciamento de inventário de veículos, utilizando PHP estruturado, MySQL e Bootstrap 5.  
Inclui CRUD completo e relacionamento 1:N entre marcas e veículos.

---

## 📚 Contexto Acadêmico

- **Disciplina:** Programação WEB  
- **Avaliação:** A2 (Atividade Prática)  
- **Objetivo:** Desenvolver um sistema web CRUD utilizando PHP e banco de dados  
- **Status:** ✔️ Concluído  

---

## 🛠️ Tecnologias Utilizadas

| Tecnologia | Função |
|-----------|--------|
| **PHP (Estruturado)** | Back-end e lógica de negócios |
| **MySQL** | Banco de dados relacional |
| **HTML5 / CSS3** | Estrutura e estilo |
| **Bootstrap 5** | Layout responsivo |
| **XAMPP** | Ambiente local (Apache + MariaDB) |

---

## ⚙️ Funcionalidades Implementadas

### 🔧 CRUD Completo
- **Cadastrar** veículos e marcas  
- **Listar** dados em tabelas organizadas  
- **Editar** informações já registradas  
- **Excluir** itens do sistema  

### 🔗 Relacionamento 1:N
- Uma **marca** pode ter **vários veículos**  
- Implementação com chave estrangeira no MySQL  

---

## 🚀 Como Executar o Projeto

1. Instale o **XAMPP** (ou outro servidor com Apache e MySQL)  
2. Clone este repositório na pasta:  
htdocs/

markdown
Copiar código
3. Importe o arquivo `.sql` no **phpMyAdmin**  
4. Configure o arquivo `config.php` com seus dados do banco  
5. No navegador, acesse:  
http://localhost/nome-do-projeto/


---

## 🗂️ Estrutura do Projeto

/projeto
│── config.php
│── index.php
│── /assets
│── /marcas
│── /veiculos
│── banco.sql
└── /css



---

## 📄 Observações

Este repositório mantém o código **original** desenvolvido em sala, seguindo os requisitos da atividade avaliativa.

Se desejar uma versão refatorada, organizada em MVC ou com melhorias visuais, posso te ajudar a criar uma versão mais avançada.

---
