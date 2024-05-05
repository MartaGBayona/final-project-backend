<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                "title" => "Los Orígenes del Cine: Del Cortometraje a los Primeros Largometrajes",
                "description" => "Este curso sumerge a los estudiantes en un fascinante viaje a los albores del séptimo arte. Desde los primeros experimentos de movimiento capturados en celuloide hasta los emocionantes avances tecnológicos que permitieron la creación de los primeros largometrajes, los participantes explorarán cómo el cine ha evolucionado desde su concepción hasta convertirse en una poderosa forma de arte y entretenimiento.

                Las clases se sumergen en los pioneros del cine, desde los hermanos Lumière hasta Georges Méliès, y analizan cómo sus innovaciones sentaron las bases para la cinematografía moderna. Se examinarán los diferentes estilos narrativos, técnicas de filmación y avances técnicos que marcaron hitos en la historia del cine, como el uso del montaje, la introducción del sonido y la expansión del cine en color.
                
                A través de la exploración de cortometrajes emblemáticos y los primeros largometrajes, los estudiantes comprenderán cómo el cine ha reflejado y moldeado la sociedad a lo largo del tiempo. Además, se abordarán temas como la estética del cine mudo, las primeras narrativas cinematográficas y el impacto cultural de los primeros íconos del cine."
            ],
            [
                "title" => "Cine Fantástico: Explorando el Mundo de la Imaginación",
                "description" => "En este curso, los estudiantes se sumergen en el mundo del cine fantástico, donde los límites de la realidad se desdibujan y la imaginación se convierte en el motor de la narrativa. Desde mundos de fantasía hasta universos de ciencia ficción, los participantes explorarán cómo el cine ha utilizado la creatividad visual y narrativa para transportar a los espectadores a nuevos y emocionantes universos.

                Las clases examinan los diferentes subgéneros del cine fantástico, desde la fantasía épica hasta el horror sobrenatural, y analizan cómo cada uno utiliza elementos visuales, efectos especiales y técnicas narrativas para crear mundos convincentes y emocionantes. Se estudiarán películas icónicas y directores influyentes que han dejado una marca indeleble en el género, así como las tendencias actuales y futuras en el cine fantástico.
                
                A lo largo del curso, los estudiantes aprenderán a apreciar y analizar las complejidades del cine fantástico, desde la construcción de mundos imaginarios hasta la exploración de temas universales como el bien y el mal, la identidad y el destino. Además, se examinará el papel del cine fantástico en la cultura popular y su capacidad para desafiar las convenciones narrativas y sociales."
            ],
            [
                "title" => "Técnicas Cinematográficas: Dominando el Arte de la Cinematografía",
                "description" => "En este curso avanzado, los estudiantes profundizan en el arte y la ciencia detrás de la creación cinematográfica, explorando las técnicas y herramientas utilizadas por los cineastas para dar vida a sus visiones en la pantalla grande. Desde el guion hasta la edición, pasando por la dirección de fotografía y la composición musical, los participantes adquieren una comprensión integral de todos los aspectos del proceso cinematográfico.

                Las clases se centran en el estudio detallado de las diferentes etapas de producción cinematográfica, desde la concepción de la idea hasta la distribución final de la película. Se exploran temas como la estructura narrativa, el desarrollo de personajes, la planificación de la cinematografía y el diseño de sonido, y se analizan ejemplos prácticos de películas aclamadas para ilustrar cada concepto.
                
                A lo largo del curso, los estudiantes tienen la oportunidad de aplicar sus conocimientos en proyectos prácticos, desde la creación de guiones originales hasta la filmación y edición de cortometrajes. Se fomenta la experimentación y la creatividad, y se brinda retroalimentación constructiva para ayudar a los participantes a perfeccionar sus habilidades técnicas y artísticas. Al finalizar el curso, los estudiantes estarán equipados con las habilidades y el conocimiento necesarios para perseguir sus propios proyectos cinematográficos con confianza y creatividad."
            ],
        ]);
        //\App\Models\Course::factory(3)->create();
    }
}
