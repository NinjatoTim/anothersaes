<?php include '../template/aheader.php' ?>

<?php
#include_once "model/conexion.php";
//print_r($bd);
#$sentencia = $bd->query("select * from persona");
#$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<div class="container my-5 justify-content-center"> <!--Contenedor principal-->
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 justify-content-center">
            <br>
            <p class="fw-bold">Bienvenido a anothersaes - Descubre el Poder de la Educación Digital
            <p class="fw-bold">
            <p>En anothersaes, hemos dado vida a una plataforma educativa revolucionaria gracias al arduo trabajo de nuestro talentoso equipo de desarrolladores. Sumérgete en una experiencia educativa transformadora diseñada para profesores y estudiantes, creada con pasión y dedicación por nuestro equipo.</p>
            <p class="fw-bold">Nuestra Misión:</p>
            <p>En anothersaes, nos embarcamos en la misión de simplificar y enriquecer la experiencia educativa. Hemos colaborado estrechamente con educadores para desarrollar un gestor de contenidos que hace que la enseñanza y el aprendizaje sean más accesibles, colaborativos y significativos.</p>
            <p class="fw-bold">Descubre las Funciones Clave:</p>
            <p>Organiza tu Aprendizaje: Nuestra plataforma ofrece a profesores y alumnos una forma intuitiva y eficiente de organizar y acceder a materiales educativos, facilitando la gestión de contenidos.</p>
            <p>Colaboración sin Límites: Fomentamos la colaboración mediante herramientas que facilitan la comunicación, la retroalimentación y el intercambio de ideas en un entorno digital seguro.</p>
            <p>Sigue tu Progreso: anothersaes brinda herramientas integrales para el seguimiento del progreso académico, permitiendo a profesores y alumnos monitorizar y mejorar el rendimiento.</p>
            <p class="fw-bold">Creado por y para la Educación:</p>
            <p>Detrás de cada línea de código y cada característica innovadora, encontrarás la dedicación de nuestro equipo de desarrolladores comprometidos con la mejora continua de la educación. Trabajamos en estrecha colaboración con educadores para garantizar que anothersaes se adapte a las necesidades cambiantes del aprendizaje moderno.</p>
            <p class="fw-bold">Únete a la Revolución Educativa:</p>
            <p>Explora anothersaes y descubre cómo la tecnología puede transformar la forma en que enseñamos y aprendemos. Únete a nosotros en este emocionante viaje hacia un futuro educativo más dinámico y accesible.</p>
            <p>Creado con Pasión por BELLAKOZ. Educación Simplificada. Aprendizaje Enriquecido.</p>
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M12.331 9.5a1 1 0 0 1 0 1A5 5 0 0 1 8 13a5 5 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5M7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-backpack2" viewBox="0 0 16 16">
                <path d="M4.04 7.43a4 4 0 0 1 7.92 0 .5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14" />
                <path fill-rule="evenodd" d="M4 9.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm1 .5v3h6v-3h-1v.5a.5.5 0 0 1-1 0V10z" />
                <path d="M6 2.341V2a2 2 0 1 1 4 0v.341c2.33.824 4 3.047 4 5.659v1.191l1.17.585a1.5 1.5 0 0 1 .83 1.342V13.5a1.5 1.5 0 0 1-1.5 1.5h-1c-.456.607-1.182 1-2 1h-7a2.5 2.5 0 0 1-2-1h-1A1.5 1.5 0 0 1 0 13.5v-2.382a1.5 1.5 0 0 1 .83-1.342L2 9.191V8a6 6 0 0 1 4-5.659M7 2v.083a6 6 0 0 1 2 0V2a1 1 0 0 0-2 0M3 13.5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5V8A5 5 0 0 0 3 8zm-1-3.19-.724.362a.5.5 0 0 0-.276.447V13.5a.5.5 0 0 0 .5.5H2zm12 0V14h.5a.5.5 0 0 0 .5-.5v-2.382a.5.5 0 0 0-.276-.447L14 10.309Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-arms-up" viewBox="0 0 16 16">
                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.5 1.5 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.7.7 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.7.7 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z" />
            </svg>
        </div>
    </div>
</div>
<?php include '../template/footer.php' ?>