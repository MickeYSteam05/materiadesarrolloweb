

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
    id_financiera INT,
    id_laboral INT,
    CONSTRAINT fk_genero FOREIGN KEY (id_genero) REFERENCES genero (id_genero),
    CONSTRAINT fk_horoscopo FOREIGN KEY (id_horoscopo) REFERENCES horoscopo (id_horoscopo),
    CONSTRAINT fk_financiera FOREIGN KEY (id_financiera) REFERENCES situacion_financiera (id_financiera),
    CONSTRAINT fk_laboral FOREIGN KEY (id_laboral) REFERENCES situacion_laboral (id_laboral)
);


-- Tabla pareja
CREATE TABLE pareja (
    id_pareja SERIAL PRIMARY KEY,
    id_persona BIGINT NOT NULL,
    hora_nacimiento TIME NOT NULL,
    dia_nacimiento INT NOT NULL,
    mes_nacimiento INT NOT NULL,
    anio_nacimiento INT NOT NULL,
    CONSTRAINT fk_persona_pareja FOREIGN KEY (id_persona) REFERENCES persona (id_persona)
);

-- Tabla enfermedad
CREATE TABLE enfermedad (
    id_enfermedad SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL UNIQUE
);

-- Relación persona-enfermedad
CREATE TABLE persona_enfermedad (
    id_persona BIGINT NOT NULL,
    id_enfermedad INT NOT NULL,
    anio INT NOT NULL,
    PRIMARY KEY (id_persona, id_enfermedad, anio),
    CONSTRAINT fk_persona_enf FOREIGN KEY (id_persona) REFERENCES persona (id_persona),
    CONSTRAINT fk_enf FOREIGN KEY (id_enfermedad) REFERENCES enfermedad (id_enfermedad)
);

-- Tabla situación financiera
CREATE TABLE situacion_financiera (
    id_financiera SERIAL PRIMARY KEY,
    estado VARCHAR(50) NOT NULL UNIQUE
);

-- Tabla situación laboral
CREATE TABLE situacion_laboral (
    id_laboral SERIAL PRIMARY KEY,
    estado VARCHAR(50) NOT NULL UNIQUE
);

-- Tabla compatibilidad
CREATE TABLE compatibilidad (
    id_compatibilidad SERIAL PRIMARY KEY,
    id_persona BIGINT NOT NULL,
    id_pareja INT NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    CONSTRAINT fk_persona_comp FOREIGN KEY (id_persona) REFERENCES persona (id_persona),
    CONSTRAINT fk_pareja_comp FOREIGN KEY (id_pareja) REFERENCES pareja (id_pareja)
);
