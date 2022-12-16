/* CREATE DATABASE lol;*/


CREATE TABLE champ(
    id INT  PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(32) NOT NULL,
    rol ENUM("Asesino","Luchador","Mago","Tirador","Apoyo","Tanque") NOT NULL,
    difficulty ENUM("Baja","Moderada","Alta") NOT NULL,
    description VARCHAR(512)
); 
INSERT INTO champ(`name`,rol,difficulty,description) VALUES
('Renekton','Luchador','Baja','Renekton es un terrorífico guerrero Ascendido movido por la ira y procedente de los desiertos abrasadores de Shurima. En su día fue el campeón más admirado del imperio, un líder que condujo a sus grandes ejércitos a incontables victorias.'),
('Anivia','Mago','Alta','Anivia es un espíritu alado benevolente que soporta ciclos interminables de vida, muerte y nacimiento para proteger Freljord. Semidiosa nacida del hielo implacable y los vientos crueles, canaliza estos poderes elementales para anular a cualquiera que se atreva a perturbar su hogar.'),
('Jinx','Tirador','Baja','Jinx, una criminal perturbada e impulsiva de Zaun, vive para sembrar el caos sin importarle las consecuencias. Provoca las explosiones más ruidosas y cegadoras con su arsenal de armas letales para dejar un rastro de terror y destrucción a su paso.'),
('Vi','Luchador','Moderada','Vi, anteriormente una delincuente en las perversas calles de Zaun, es una mujer impulsiva e imponente con muy poco respeto por las figuras autoritarias. Tras crecer sola, Vi desarrolló y perfeccionó sus instintos de supervivencia, así como un áspero sentido del humor lleno de malicia.'),
('Nautilus','Tanque','Alta','El gigante acorazado Nautilus, una leyenda solitaria tan antigua como los pecios de Aguas Estancadas, recorre las turbias aguas que rodean las costas de las Islas de la Llama Azul. Ataca con su enorme ancla sin previo aviso para ayudar a los desdichados y arrastrar a los avariciosos a su perdición.');
;