FROM mysql:5.7
LABEL Application=BANCODEDADOS
ENV MYSQL_ROOT_PASSWORD=Senha123
ENV MYSQL_DATABASE=BancodeDados

COPY banco_model.sql /docker-entrypoint-initdb.d/


EXPOSE 3306

