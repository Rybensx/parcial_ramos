create table Curso (
    curso_id serial not null,
    curso_nombre VARCHAR(100) not null,
    curso_periodos INTEGER not null,
    fase_modulo INTEGER not null,
    Instructor_nombre VARCHAR(100) not null,
    creditos_curso DECIMAL(3,2),
    primary key (curso_id)
)