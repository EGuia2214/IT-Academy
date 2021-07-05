-- Sentencias INSERT

use youtube;

INSERT into `user` (`email`, `password`, `nombre_user`, `apellido_user`, `fecha_nacimiento`, `sexo`, `pais`, `cod_postal`)
VALUES
('enrique.guia@gmail.com', 'contrasena1908', 'Enrique', 'Guia', '15-07-1969', 'varon', 'España', '08014'),
('mariamercedes@gmail.com', 'contrasena1902', 'María', 'Mercedes', '15-06-1991', 'mujer', 'España', '08014'), 
('lauramejia@hotmail.es', 'pass12344555', 'Laura', 'Mejía', '15-06-2001', 'mujer', 'España', '08001');

INSERT into `video` (`titulo`, `descripicion`, `tamano_mb`, `nombre_arch`, `duracion_arch_vid`, `thumbnail`, `reproducciones`, `likes`, `dislikes`, `estado`)
VALUES
('video 1', 'primer video de tabla', '45000', 'video1.mpeg', '2:55', 'thumbnail1.jpg', 5500, 20000, 120, 'publico'),
('video 2', 'segundo video de tabla', '55000', 'video2.mpeg', '5:55', 'thumbnail2.jpg', 5501, 10000, 20, 'publico'),
('video 3', 'tercer video de tabla', '40000', 'video3.mpeg', '6:08', 'thumbnail3.jpg', 3500, 3333, 8, 'publico');

INSERT into `user_public_video` (`user_id_user`, `video_id_video`, `fecha_public`)
VALUES
(1, 1,'10-06-2019'),
(2, 2,'11-06-2019'),
(3, 3,'11-06-2019');

INSERT into `etiquetas` (`nombre_etiqueta`)
VALUES
('#CulturaGeneral'),
('#Entretenimiento'),
('#Deportes');

INSERT into `etiquetas_en_video` (`video_id_video`, `etiquetas_id_etiquetas`)
VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 2);

INSERT into `canal` (`nombre_canal`, `descripcion_canal`, `fecha_creacion`)
VALUES
('Mis videos', 'Videos divertidos', '20-20-2020');

INSERT into `suscripciones` (`user_id_user`, `canal_id_canal`)
VALUES
(1, 1),
(3, 1);

INSERT into `likes_dislikes` (`user_id_user`, `video_id_video`, `likes_o_dislikes`, `fecha_hora_dis_like`)
VALUES
(1, 1, 1, '20-05-2020'),
(1, 2, 3, '25-05-2020');

INSERT into `playlist` (`user_id_user`, `fecha_playlist`, `nombre_playlist`)
VALUES
(1, '20-05-2021', 'Lista de muchos videos');


INSERT into `comentarios` (`user_id_user`, `video_id_video`, `texto_comentario`, `fecha_comentario`)
VALUES
(1, 2, 'Cojonudo el video!', '01-07-2021');

INSERT into `like_comentario` (`user_id_user`, `video_id_video`, `like_o_dislike_coment`, `fecha_hora_dis_like_coment`)
VALUES
(2, 2, 1, '01-07-2021 15:30');
