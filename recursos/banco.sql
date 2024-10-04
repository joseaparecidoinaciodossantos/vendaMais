create table usuario(
id int primary key not null AUTO_INCREMENT,
nome varchar(45),
    cpf varchar(15),
    senha varchar(45)
    


);

INSERT INTO usuario(nome,cpf,senha) VALUES
('luiz gustavo', '123.123.123-12','123'),
('maria','321.321.321-32', '321');