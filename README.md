# CRUD - Formula 1

Proyecto realizado con PHP y Bootstrap.  
Agrega lista de carrera, ganador, equipo al que pertenece el piloto.  
Conectado a una base de datos alojada en phpMyAdmin.

## Estructura de la base de datos

**CAMPEONATO**

### TABLAS:

| Tabla  | Campos               |
|--------|----------------------|
| equipo | id, nombre           |
| carrera| id, nombre, piloto, id_equipo |

---

## Descripción

- `equipo`: contiene los equipos de Formula 1 con su identificador y nombre.  
- `carrera`: lista las carreras, el piloto ganador y el equipo al que pertenece el piloto (relacionado por `id_equipo`).

---

## Ejemplo de datos

| ID | Nombre de la carrera    | Ganador (Piloto) | Equipo   |
|----|-------------------------|------------------|----------|
| 1  | Gran Premio de Mónaco    | Lewis Hamilton   | Mercedes |
| 2  | Gran Premio de Italia    | Max Verstappen   | Red Bull |

---

## Tecnologías usadas

- PHP  
- Bootstrap  
- MySQL (phpMyAdmin)  
