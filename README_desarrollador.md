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

Administrador:
perfil 
	ver perfil 
	cambiar perfil 
usuarios (CRUD) 
	Gestionar rol de usuarios #esto es parte de gestionar usuarios, además es el único que puede dar de alta cuentas de profesores/coordinadores
grupos
	grupos (CRUD)
pagos
	reportes de pagos de alumnos
	reportes de pagos realizados a los profesores, 
	reportes de ingresos y egresos
cursos
	cursos (CRUD) 
gestionar asignaciones (CRUD) #filtrar los que tengan url 

