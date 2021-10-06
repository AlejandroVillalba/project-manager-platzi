<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;


class ProjectController extends Controller
{
    public function getAllProjects(){
        
        $projects = Project::all();
        return $projects;
    }


    public function insertUser(){
        $user = new User;
        $user->name = 'Daniel';
        $user->save();

        return "Usuario Guardado";
    }

    public function insertCompanies(){
        $compa = new Company;
        $compa->name = 'Tigo';
        $compa->save();

        return "Compañia guardada";
    }

    public function insertCity(){
        $city = new City;
        $city->name = "Encarnacion";
        $city->save();

        return "Cuidad guardada";
    }
    public function insertProject() {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2021-10-05';
        $project->is_active = 1;
        $project->save();
    
        return "Guardado";
    }

    public function updateProject() {
        $project = Project::find(2);
        $project->name = 'Proyecto de tecnología';
        $project->save();
    
        return "Actualizado";
    }

    public function deleteUser(){
        $user = User::find(2);
        $user->delete();

        return "usuario eliminado";
    }
    
}
