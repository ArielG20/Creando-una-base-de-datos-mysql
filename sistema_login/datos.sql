CREATE TABLE usuarios (
    nombre VARCHAR(50) PRIMARY KEY,
    contrasena VARCHAR(80) NOT NULL
);

INSERT INTO usuarios(nombre,contrasena)
VALUES("admin","123");