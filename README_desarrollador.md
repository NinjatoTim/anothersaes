# anothersaes
proyecto de ADS
nomenclatura archivos:
a = alumno
d = docente
c = cordinador
ad = admin
_create
_read
_update
_delete
_crud #o combinación si es más de una operación

Alumno:
Consultar su perfil ✓
Actualizar datos personales ✓
Inscribir curso ✓
Consultar cursos disponibles 
Consultar cursos inscritos ✓
*Dar de baja curso ✓ #agregar a requerimientos
Realizar pago de curso: ✓
Tarjeta física ✓
Transferencia bancaria ✓
*Realizar evaluación (examen?) #pendiente
Consultar resultado de evaluación #pendiente
Consultar progreso de curso #
Consultar materiales del curso: #hacer un filtro
	Videos 
	Libros digitales 
	Ejemplos de ejercicios 
	Realizar ejercicios por medio de formularios u otros 
	Diapositivas o presentaciones 
Solicitar comprobante de terminación de curso ✓

Docente:
index
perfil
	Actualizar datos personales ✓
	Consultar su perfil ✓
lista de alumnos ✓
cursos
	Consultar cursos (info cursos) ✓
	horarios  ✓
	Asignaciones (CRUD)  ✓
	Exámenes (CRUD) #los examenes son un tipo de asignación
	Revisar asignaciones (CU) ✓
	Gestionar sus propios cursos ?
	Dará retroalimentación de clase ?
	
Coordinador
    perfil
        ver
        editar
    alumnos
        ver alumnos inscritos
    profesores
        ver profesores inscritos
    cursos 
        CRUD
    asignaciones
        CRUD
    Exámenes
        CRUD       

Administrador:
perfil 
	ver perfil ✓
	cambiar perfil ✓
usuarios
	Gestionar usuarios (CRUD)✓
cursos
	cursos (CRUD) 
grupos
	grupos (CRUD)✓
pagos
	reportes de pagos de alumnos (acceso a cursos update) ✓
	reportes de pagos realizados a los profesores ✓
	reportes de ingresos y egresos ? (gráficas?)


