CREATE DATABASE peliculas;
use peliculas;
CREATE TABLE genero ( idgenero int NOT NULL AUTO_INCREMENT, generopelicula varchar(30) NOT NULL, PRIMARY KEY(idgenero) ) ENGINE=InnoDB;
CREATE TABLE director ( iddirector int NOT NULL AUTO_INCREMENT, nombre varchar(80) NOT NULL, nacionalidad varchar(30) NOT NULL, PRIMARY KEY (iddirector) ) ENGINE=InnoDB;
CREATE TABLE pelicula ( idpelicula int NOT NULL, titulopelicula varchar(120) NOT NULL, descripcion text NOT NULL, imgpelicula varchar(200) NOT NULL, titulooriginal varchar(60) NOT NULL, duracion varchar(25) NOT NULL, idgenero int NOT NULL, iddirector int NOT NULL, PRIMARY KEY (idpelicula) ) ENGINE=InnoDB;
ALTER TABLE pelicula ADD CONSTRAINT fk_genero_pelicula FOREIGN KEY(idgenero) REFERENCES genero(idgenero) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE pelicula ADD CONSTRAINT fk_nombre_director FOREIGN KEY(iddirector) REFERENCES director(iddirector) ON DELETE RESTRICT ON UPDATE CASCADE;
INSERT INTO director (iddirector, nombre, nacionalidad)  VALUES  
  (1, 'Chris Columbus', 'Estadounidense'),
  (2, 'Lee Daniels', 'Estadounidense'),
  (3, 'Terry Gilliam', 'Estadounidense'),
  (4, 'Richard LaGravenese', 'Estadounidense'),
  (5, 'Eric Bress', 'Estadounidense'),
  (6, 'Barry Sonnenfeld', 'Estadounidense'),
  (7, 'Anne Fletcher', 'Estadounidense'),
  (8, 'Frank Darabont', 'Franc'),
  (9, 'Peter Jackson', 'Neozeland'),
  (10, 'George Lucas', 'Estadounidense'),
  (11, 'Manoj Nelliyattu Shyamalan', 'Indu'),
  (12, 'Gabriele Muccino', 'Italiano'),
  (13, 'Frank Coraci', 'Estadounidense');
INSERT INTO genero (idgenero, generopelicula) VALUES 
  (1, 'Accion'),
  (2, 'Drama'),
  (3, 'Aventuras'),
  (4, 'Comedia Romantica'),
  (5, 'Suspenso'),
  (6, 'Musical'),
  (7, 'Familiar'),
  (8, 'Infantil');
INSERT INTO pelicula (idpelicula, titulopelicula, descripcion, imgpelicula, titulooriginal, duracion, idgenero, iddirector) VALUES 
  (1, 'Percy Jackson y el Ladron del Rayo', 'La historia narra la vida de un estudiante que descubre ser hijo de Poseidon, a raiz de esto se ve envuelto en una carrera contra el tiempo para impedir que los dioses griegos inicien una guerra que tiene como campo de batalla el continente americano de hoy en día.', 'img/percy.jpg', 'Percy Jackson & the Olympians: The lightning thief', '119 min', 1,1),
  (2, 'Precious', 'En Harlem, una adolescente analfabeta con sobre peso, quien ademas esta embarazada de su segundo hijo es invitada para inscribirse a una escuela alternativa. Este acontecimiento le da esperanzas de que su vida pueda girar en una nueva direccion.', 'img/precious.jpg', 'Precious: Based on the novel "Push" by Sapphire', '109 min', 2,2),
  (3, 'El Imaginario Mundo Del Doctor Parnassus', 'El Doctor Parnassus tiene una inexplicable capacidad de poder guiar la imaginacion de los demas, pero a su vez el guarda un temible secreto. Adicto al juego, muchos años atras, apostocon el demonio, Mr. Nick, juego que lo convirtioen inmortal. Pero siglos despues el doctor conoce a su amor verdadero, y vuelve a realizar otro pacto con el diablo, esta vez intercambiando su inmortalidad por su juventud, con la unica condicion que cuando su hija llegase a la edad de 16 años, pasaria a ser propiedad del diablo.', 'img/doc.jpg', 'The Imaginarium Of Doctor Parnassus', '122 min', 3,3),
  (4, 'PD. Te Amo', 'La vida de Holly (Hilary Swank) se ve truncada cuando su marido, Gerry (Gerard Butler),muere. Incapaz de salir adelante por simisma, su madre y sus amigos intentan animarla. Un dia, despues de su 30 cumpleaños, Holly recibe una carta de Gerry animandola a salir, a divertirse, a seguir adelante. Cada mes recibirauna carta firmada con un "Posdata: Te amo", que le devolveran las ganas de vivir.', 'img/ps.jpg', 'P.S. I love you', '115 min', 4,4),
  (5, 'Efecto Mariposa', 'Evan Treborn, un joven que se esta esforzando por superar unos dolorosos recuerdos de su infancia, descubre una tecnica que le permite viajar atras en el tiempo y ocupar su cuerpo de niño para poder cambiar el curso de su dolorosa historia. Sin embargo tambien descubre que cualquier minimo cambio en el pasado altera enormemente su futuro.', 'img/efecto.jpg', 'The Butterfly Effect', '100 min', 5,5),
  (6, 'Vacaciones en familia', 'Un ejecutivo preocupado por no perderse unas vacaciones con su familia decide llevarlos a vacacionar al mismo lugar donde tendrá una importante reunión de trabajo, pero sin decírselos', 'img/vacacionesenfamilia.jpg', 'RV', '98 min', 7,6),
  (7, 'La propuesta', 'Una poderosa editora llamada Margaret (Sandra Bullock) al enfrentarse ante la posibilidad de ser deportada a su país de origen, Canadá, decide comprometerse con su asistente Andrew (Ryan Reynolds) con el propósito de evitarlo', 'imgla-propuesta-poster.jpg', 'The proposal', '108 min', 4,7),
  (8, 'Milagros inesperados', 'La película narra la vida de Paul Edgecomb (Tom Hanks), quien siendo un anciano de 108 años, cuenta su historia como oficial de la Milla Verde, una penitenciaría del estado de Luisiana, durante la década de 1930. Edgecomb cuenta que entre sus presos tuvo un personaje con poderes sobrenaturales, capaz de sanar a personas.', 'img\\greenmille.jpg', 'The Green Mile', '189 min', 2,8);
UPDATE pelicula SET titulopelicula='El efecto mariposa' WHERE idpelicula=5;
