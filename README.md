# Projeto de Segurança da Informação: Engenharia Social com Clonagem de Site

## Descrição do Projeto

Este projeto demonstra técnicas de engenharia social através da clonagem da página de login das Casas Bahia. O objetivo é educar sobre os riscos de phishing e como proteger informações sensíveis. **Atenção:** Este projeto é para fins educacionais apenas. O uso para atividades maliciosas é ilegal e antiético.

## Funcionalidades

- **Clonagem da Página de Login:** A página de login das Casas Bahia é replicada fielmente para capturar as credenciais dos usuários.
- **Captura de Dados:** As informações inseridas na página clonada são armazenadas em um banco de dados.
- **Área Restrita:** Seção para visualização segura das informações capturadas.
- **Alertas de Segurança:** Mensagens para conscientizar sobre os riscos de phishing.

## Estrutura do Projeto

```plaintext
├── README.md
├── LICENSE
├── casasbahia.sql       # Script SQL para criação do banco de dados
├── favicon.ico          # Ícone do site
├── index.php            # Página de login clonada
├── admin/               # Diretório para área restrita
│   └── index.php        # Página para visualizar as informações capturadas
```

## Requisitos

- Servidor Web (Apache, Nginx, etc.)
- PHP 7.0 ou superior
- Banco de dados MySQL

## Configuração

1. **Clonar o Repositório:**

   ```bash
   git clone https://github.com/carlos-verdeiro/casasbahia.git
   cd casasbahia
   ```

2. **Configuração do Banco de Dados:**
   Importe o arquivo `casasbahia.sql` para seu banco de dados MySQL para criar a tabela necessária.

3. **Configurar o Servidor Web:**
   Certifique-se de que seu servidor web está configurado para servir os arquivos PHP corretamente.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).
