<?php

namespace App\Http\Controllers;

use App\CivilProject;
use Illuminate\Support\Facades\File;


class ProfectosCivilesPageController extends Controller
{


    public function index()
    {
        // Obtener todos los proyectos y organizarlos por ciudad
        $civilProjects = CivilProject::orderBy('ciudad')->get()->groupBy('ciudad');
    
        // Para cada ciudad, obtener los proyectos correspondientes y añadir las rutas de las fotos
        $civilProjects->transform(function ($projects, $city) {
            foreach ($projects as $project) {
                $project->urls_fotos = $this->obtenerUrlsFotos($project->nombre);
            }
            return $projects;
        });
        #dd($civilProjects);
        // Devolver una colección de colecciones, donde cada colección contiene los proyectos de una ciudad con las rutas de las fotos
        return view('Proyectos.Civiles.proyectos-civil', compact('civilProjects'));
    }



    private function obtenerUrlsFotos($nombreProyecto)
    {
        $carpeta = ('images/Ing_civil/' . $nombreProyecto);



        if (!File::exists($carpeta)) {

            return [];
        }

        $archivos = File::files($carpeta);

        $urlsFotos = [];

        foreach ($archivos as $archivo) {
            $urlsFotos[] = asset($carpeta . '/' . $archivo->getFilename());
        }
        #dd($urlsFotos);

        return $urlsFotos;
    }
}
