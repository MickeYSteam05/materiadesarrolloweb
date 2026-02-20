-- Tabla genero
CREATE TABLE genero (
    id_genero SERIAL PRIMARY KEY,
    genero VARCHAR(50) NOT NULL UNIQUE
);

-- Tabla horoscopo
CREATE TABLE horoscopo (
    id_horoscopo SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE,
    descripcion TEXT
);

-- Tabla persona
CREATE TABLE persona (
    id_persona BIGSERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido_paterno VARCHAR(100) NOT NULL,
    apellido_materno VARCHAR(100),
    nick VARCHAR(50) NOT NULL UNIQUE,
    correo VARCHAR(100) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL,
    id_genero INT NOT NULL,
    id_horoscopo INT NOT NULL,
    CONSTRAINT fk_genero FOREIGN KEY (id_genero) REFERENCES genero (id_genero),
    CONSTRAINT fk_horoscopo FOREIGN KEY (id_horoscopo) REFERENCES horoscopo (id_horoscopo)
);
