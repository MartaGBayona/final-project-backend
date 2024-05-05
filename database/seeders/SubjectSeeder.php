<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                "title" => "Historia del Cine Primitivo:",
                "description" => "Esta asignatura introduce a los estudiantes a los primeros experimentos y avances en la cinematografía, desde los primeros dispositivos de captura de movimiento hasta los cortometrajes pioneros de los hermanos Lumière y Georges Méliès. Se explorarán los contextos históricos, técnicos y culturales que dieron forma al nacimiento del cine.",
                "course_id" => "1"
            ],
            [
                "title" => "Estética del Cine Mudo:",
                "description" => "Esta asignatura examina los elementos estéticos y narrativos del cine mudo, incluyendo el uso de la expresión facial, el lenguaje corporal y la música para transmitir emociones y contar historias. Se analizarán obras maestras del cine mudo y se discutirá su relevancia en el cine contemporáneo.",
                "course_id" => "1"
            ],
            [
                "title" => "Avances Tecnológicos en el Cine Temprano:",
                "description" => "En esta asignatura, los estudiantes explorarán los avances técnicos que revolucionaron la industria cinematográfica en sus primeras etapas, como la introducción del sonido, la coloración manual y la expansión del cine en largometrajes. Se estudiarán las innovaciones técnicas y su impacto en la producción y distribución de películas.",
                "course_id" => "1"
            ],
            [
                "title" => "Pioneros del Cine:",
                "description" => "Esta asignatura se centra en los visionarios y pioneros que sentaron las bases del cine como lo conocemos hoy en día. Se estudiarán figuras clave como Thomas Edison, los hermanos Lumière, Georges Méliès y Edwin S. Porter, explorando sus contribuciones al desarrollo del lenguaje cinematográfico y su legado en la historia del cine.",
                "course_id" => "1"
            ],
            [
                "title" => "Análisis de Cortometrajes y Primeros Largometrajes:",
                "description" => "En esta asignatura, los estudiantes analizarán una selección de cortometrajes y primeros largometrajes emblemáticos para comprender mejor las técnicas narrativas, estilísticas y temáticas utilizadas en los primeros años del cine. Se discutirán aspectos como la estructura narrativa, la dirección de fotografía, la actuación y el diseño de producción.",
                "course_id" => "1"
            ],
            [
                "title" => "Introducción al Cine Fantástico:",
                "description" => "Esta asignatura ofrece una introducción exhaustiva al género del cine fantástico, explorando sus características distintivas, subgéneros y evolución a lo largo del tiempo. Se analizarán películas clave y se discutirán temas como la creación de mundos imaginarios, el uso de efectos especiales y la exploración de temas fantásticos.",
                "course_id" => "2"
            ],
            [
                "title" => "Fantasía Épica y Mitología en el Cine:",
                "description" => "En esta asignatura, los estudiantes explorarán cómo el cine ha adaptado y reinterpretado la mitología y la fantasía épica en la pantalla grande. Se estudiarán obras emblemáticas inspiradas en mitos y leyendas de diversas culturas, y se analizarán temas como el viaje del héroe, la lucha entre el bien y el mal, y la construcción de mundos fantásticos.",
                "course_id" => "2"
            ],
            [
                "title" => "Ciencia Ficción y Distopía:",
                "description" => "Esta asignatura se centra en el género de la ciencia ficción y su exploración de futuros alternativos y distopías. Los estudiantes analizarán películas que abordan temas como la tecnología avanzada, los viajes en el tiempo, los mundos alienígenas y las sociedades distópicas, y discutirán su relevancia en la reflexión sobre la condición humana y el futuro de la humanidad.",
                "course_id" => "2"
            ],
            [
                "title" => "Horror Sobrenatural y Terror Psicológico:",
                "description" => "En esta asignatura, los estudiantes explorarán el mundo del horror sobrenatural y el terror psicológico en el cine. Se analizarán obras maestras del género que juegan con los miedos primordiales, lo desconocido y lo inexplicable, y se discutirán técnicas cinematográficas utilizadas para crear atmósferas inquietantes y suspense psicológico.",
                "course_id" => "2"
            ],
            [
                "title" => "Animación Fantástica y Mundo de los Sueños:",
                "description" => "Esta asignatura examina el uso de la animación en el cine fantástico, así como la representación de mundos de ensueño y surrealistas. Los estudiantes explorarán obras animadas que desafían las leyes de la realidad y exploran la imaginación humana de formas únicas y sorprendentes. Se discutirán técnicas de animación, estilos visuales y narrativas no convencionales utilizadas en el cine de animación fantástica.",
                "course_id" => "2"
            ],
            [
                "title" => "Guión Cinematográfico y Desarrollo de Historias:",
                "description" => "Esta asignatura se centra en el proceso de escritura de guiones cinematográficos y el desarrollo de historias para la pantalla grande. Los estudiantes aprenderán los fundamentos de la estructura narrativa, la creación de personajes, el diálogo efectivo y la construcción de tramas convincentes. Se explorarán técnicas para generar ideas creativas y convertirlas en guiones sólidos.",
                "course_id" => "3"
            ],
            [
                "title" => "Dirección de Fotografía y Estética Visual:",
                "description" => "En esta asignatura, los estudiantes estudiarán los principios de la dirección de fotografía y la estética visual en el cine. Se analizarán técnicas de iluminación, composición de cuadro, uso del color y profundidad de campo para crear imágenes impactantes y transmitir emociones. Se explorarán diferentes estilos visuales y su aplicación en la narrativa cinematográfica.",
                "course_id" => "3"
            ],
            [
                "title" => "Dirección de Actores y Técnicas de Interpretación:",
                "description" => "Esta asignatura se enfoca en la dirección de actores y las técnicas de interpretación en el cine. Los estudiantes aprenderán cómo trabajar con actores para obtener actuaciones auténticas y emocionalmente resonantes. Se explorarán métodos de actuación, ejercicios de improvisación y estrategias para crear una colaboración efectiva entre el director y el elenco.",
                "course_id" => "3"
            ],
            [
                "title" => "Edición Cinematográfica y Postproducción:",
                "description" => "En esta asignatura, los estudiantes explorarán el proceso de edición cinematográfica y postproducción. Se estudiarán técnicas de montaje, transiciones, efectos visuales y sonido para dar forma a la narrativa y el ritmo de una película. Los estudiantes aprenderán a utilizar software de edición digital y trabajarán en proyectos prácticos para desarrollar habilidades de edición creativa.",
                "course_id" => "3"
            ],
            [
                "title" => "Música y Sonido en el Cine:",
                "description" => "Esta asignatura examina el papel de la música y el sonido en la creación de atmósferas y emociones en el cine. Los estudiantes explorarán cómo la música original, los efectos de sonido y el diseño de sonido contribuyen a la narrativa y la experiencia del espectador. Se analizarán técnicas para seleccionar y editar música, mezclar pistas de sonido y crear paisajes sonoros inmersivos.",
                "course_id" => "3"
            ],
        ]);
        //\App\Models\Subject::factory(15)->create();
    }
}
