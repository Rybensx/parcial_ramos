create table cursos (
    curso_id serial not null,
    curso_nombre VARCHAR(100) not null,
    curso_periodos INTEGER not null,
    curso_fase INTEGER not null,
    instructor_nombre VARCHAR(100) not null,
    creditos_curso DECIMAL(6,2),
    primary key (curso_id)
)