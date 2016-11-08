CREATE TABLE usuarios (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(20) NOT NULL default '',
    login varchar(20) NOT NULL default '',
    senha varchar(20) NOT NULL default '',
    postar enum('S', 'N') NOT NULL default 'S'
  );

INSERT INTO usuarios (id, nome, login, senha, postar) VALUES (NULL, 'Albert Einstein', 'einstein', 'hb282951', 'S');