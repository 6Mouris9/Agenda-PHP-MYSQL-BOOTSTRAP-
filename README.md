# 📒 AGENDA DE CONTACTOS - PHP CRUD (XAMPP/MySQL)

---

## 📌 1. DESCRIÇÃO DO PROJETO

Este projeto é uma aplicação de agenda para gestão de contactos (CRUD),  
desenvolvida com PHP estruturado. O foco principal foi a organização  
modular do código, separando a lógica de negócio da interface visual,  
e garantindo a segurança dos dados através do uso de PDO.

---

## 🛠️ 2. TECNOLOGIAS UTILIZADAS

- PHP 8.x  
- MariaDB / MySQL (via XAMPP)  
- PDO (PHP Data Objects) para segurança contra SQL Injection  
- Bootstrap 5 para o Front-end  
- Estrutura modular (Templates e Processos)  

---

## 📁 3. ESTRUTURA DE PASTAS E ARQUIVOS

```bash
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
