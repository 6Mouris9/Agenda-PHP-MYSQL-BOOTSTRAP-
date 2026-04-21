==========================================================================
                AGENDA DE CONTACTOS - PHP CRUD (XAMPP/MySQL)
==========================================================================

1. DESCRIÇÃO DO PROJETO
-----------------------
Este projeto é uma aplicação de agenda para gestão de contactos (CRUD), 
desenvolvida com PHP estruturado. O foco principal foi a organização 
modular do código, separando a lógica de negócio da interface visual, 
e garantindo a segurança dos dados através do uso de PDO.

2. TECNOLOGIAS UTILIZADAS
-------------------------
- PHP 8.x
- MariaDB / MySQL (via XAMPP)
- PDO (PHP Data Objects) para segurança contra SQL Injection
- Bootstrap 5 para o Front-end
- Estrutura modular (Templates e Processos)

3. ESTRUTURA DE PASTAS E ARQUIVOS
---------------------------------
/phpmysql
│
├── /config                 # Configurações e Lógica de Back-end
│   ├── connection.php      # Conexão PDO com o Banco de Dados
│   ├── process.php         # Processamento de dados (Create/Update/Delete)
│   └── url.php             # Configuração da BASE_URL
│
├── /css                    # Arquivos de Estilização
│   └── style.css           # CSS personalizado
│
├── /img                    # Recursos Visuais (Logotipos/Ícones)
│   └── corewlogo.png
│
├── /templates              # Componentes de UI Reutilizáveis
│   ├── header.php          # Topo do site
│   ├── footer.php          # Rodapé do site
│   ├── default_head.php    # Meta tags e carregamento de CSS/Fonts
│   └── backbtn.html        # Botão de retorno componentizado
│
├── index.php               # Listagem principal de contactos
├── create.php              # Formulário de novo contacto
├── edit.php                # Formulário de edição de contacto
└── show.php                # Visualização de contacto individual

4. FUNCIONALIDADES
------------------
- Adicionar novo contacto (Nome, Número, Email, Observações).
- Listar todos os contactos na página inicial.
- Visualizar detalhes de um contacto específico.
- Editar informações existentes com persistência via POST.
- Excluir contactos da base de dados.
- Sistema de feedback visual ao utilizador via Mensagens de Sessão.

5. COMO CONFIGURAR
------------------
1. Coloque a pasta do projeto em: C:/xampp/htdocs/phpmysql
2. Inicie o Apache e o MySQL no Painel do XAMPP.
3. No PHPMyAdmin, crie um banco de dados chamado 'agenda'.
4. Crie a tabela necessária:
   CREATE TABLE contacts (
       id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(150),
       email VARCHAR(150),
       number VARCHAR(20),
       observations TEXT
   );
5. Aceda no browser: http://localhost/phpmysql/index.php

6. NOTAS DE DESENVOLVIMENTO
---------------------------
- O projeto utiliza o conceito de "componentização" no front-end para 
  evitar repetição de código HTML.
- A segurança é garantida por Prepared Statements no PDO.
- O fluxo de navegação utiliza redirecionamentos (header Location) para 
  limpar o histórico de submissão de formulários.

--------------------------------------------------------------------------
Finalidade: Estudo e Portfólio de Desenvolvimento Web
