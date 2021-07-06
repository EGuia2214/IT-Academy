-- Sentencias INSERT

use spotify;

INSERT into `users` (`email`, `password`, `nickname`, `fecha_nacimiento`, `sexo`, `pais`, `cod_postal`, `suscripcion`)
VALUES
('enrique.guia@gmail.com', 'contrasena18', 'EnriqueGuia', '1969-07-15', 'varon', 'España', '08014', 'Premium'),
('mariamercedes@gmail.com', 'contrasena12', 'MaryMerce', '1991-06-15', 'mujer', 'España', '08014', 'Premium'), 
('lauramejia@hotmail.es', 'pass12344555', 'LauraMej00', '2001-06-15', 'mujer', 'España', '08001', 'Free');

INSERT into `suscripciones` (`fecha_inicio`, `fecha_renovacion`, `forma_de_pago`, `users_id_users`)
VALUES
('2021-01-01', '2022-01-01', 'tarjeta', 1),
('2021-02-02', '2022-02-02', 'Paypal', 2);

INSERT into `tarjetas` (`nro_tarjeta`, `fecha_caducidad`, `cod_seguridad`, `users_id_users`)
VALUES
(11112223334444, '2024-04-23', 123, 1);

INSERT into `cuentas_paypal` (`nombre_usuario`, `users_id_users`)
VALUES
('MMerce44344', 2);

INSERT into `playlists` (`users_id_users`,`titulo_playlist`, `numero_canciones`, `fecha_creacion`, `estado`)
VALUES
(1, 'Tango loco', 25, '2021-07-02', 'activa'),
(2, 'Música romántica', 15, '2019-02-01', 'eliminada');

INSERT into `pagos` (`fecha_pago`, `total`, `users_id_users`)
VALUES
('2021-01-01', 150.00, 1),
('2021-02-02', 150.00, 2);

INSERT into `playlist_eliminadas` (`playlists_id_playlist`, `fecha_eliminacion`)
VALUES
(2, '03-07-2021');

INSERT into `playlist_compartidas` (`playlists_id_playlist`, `users_id_users`, `fecha_agrega_cancion`)
VALUES
(1, 3, '2021-07-04');

INSERT into `artista` (`nombre`, `link_imagen`)
VALUES
('Carlos Gardel', 'https://s.libertaddigital.com/2015/06/23/600/0/carlos-gardel.jpg.webp'),
('Julio Iglesias', 'https://cadenaser00.epimg.net/emisora/imagenes/2017/07/06/radio_valencia/1499316453_212713_1499317531_noticia_normal.jpg'),
('Paco de Lucía', 'https://phantom-elmundo.unidadeditorial.es/15996726816452.jpg');

INSERT into `album` (`titulo_album`,`any`,`link_portada`,`artista_id_artista`)
VALUES
('Grandes Èxitos', 2020, 'https://i.scdn.co/image/ab67616d0000b273d9cdff4393914c8fac42ef6f', 1),
('Momentos', 1980, 'https://images-na.ssl-images-amazon.com/images/I/51eQz43GD7L._SX425_.jpg', 2),
('Almoraima', 1981, 'https://images-na.ssl-images-amazon.com/images/I/81hiErkCW3L._SL1500_.jpg', 3);

INSERT into `cancion` (`album_id_album`, `titulo_cancion`,`duracion`, `reproducciones`)
VALUES
(3, 'Concierto de Aranjuez', '10:23', 20000);

INSERT into `artista_followers` (`artista_id_artista`, `users_id_users`)
VALUES
(1, 1);

INSERT into `generos` (`nombre_genero`)
VALUES
('Tango'),
('Melódico'),
('Flamenco');

INSERT into `artistas_similares` (`artista_id_artista`, `generos_id_genero`)
VALUES
(1, 1),
(2, 2),
(3, 3);

INSERT into `albumes_favoritos` (`album_id_album`, `users_id_users`)
VALUES
(3, 2),
(3, 1);

INSERT into `canciones_favoritas` (`cancion_id_cancion`, `users_id_users`)
VALUES
(1, 3);













 




