create table usuario(
      id int PRIMARY key not null AUTO_INCREMENT,
      nome varchar(45),
      cpf varchar(15),
      senha varchar(45)
    );
      INSERT INTO usuario(nome,cpf,senha) VALUES
('Allan','123.123.123-12','123'),
('Livia','321.321.321-32','321');