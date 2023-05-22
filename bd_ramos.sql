create table Curso (
    curso_id serial not null,
    curso_nombre varchar(50) not null,
    curso_periodos varchar(50) not null,
    fase_modulo varchar(50),
    Instructor_nombre varchar(50) not null,
    creditos_curso varchar(50),
    primary key (curso_id)
)
