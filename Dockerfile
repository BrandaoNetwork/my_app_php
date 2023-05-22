# Use uma imagem base do PHP
FROM php:7.4-apache

# Copie os arquivos do frontend para o diretório raiz do servidor Apache
COPY index.php /var/www/html/

# Exponha a porta 80 para acesso HTTP
EXPOSE 80

# Inicie o servidor Apache quando o contêiner for iniciado
CMD ["apache2-foreground"]
