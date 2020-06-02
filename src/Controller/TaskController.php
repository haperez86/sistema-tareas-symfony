<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Task;

class TaskController extends AbstractController
{
    /**
     * @Route("/task", name="task")
     */
    public function index()
    {
        // Prueba de entidades y relaciones
        $em = $this->getDoctrine()->getManager();
        
        /*
       // $task_repo = $this->getDoctrine()->getRepository(Task::class);
        $tasks = $task_repo->findAll();

       // foreach($tasks as $task)
       // {
            echo $task->getUser()->getEmail().': '. $task->getTitle()."<br/>";
        }
        */

        $user_repo = $this->getDoctrine()->getRepository(User::class);
        $users = $user_repo->findAll();

        echo "<pre>";
        var_dump($users);
        echo "</pre>";

        /*
        foreach($users as $user)
        {
            echo "<h1>{$user->getName()} {$user->getSurname()} </h1>";

            foreach($tasks as $task)
            {
                echo  $task->getTitle()."<br/>";
            
            }

        }
        */

        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController',
        ]);
    }
}
