<?php

namespace App\Controller;

use App\Entity\Categoria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoriaController extends AbstractController
{
    public function index($page)
    {
        $repo = $this->getDoctrine()->getRepository(Categoria::class);
        $categoria = $repo->findAll();

        //Para paginacion
        $numRegisPos = 2; // Numero de objetos por pagina
        if(!isset($page)) $page=1;
        $pos = ($page * $numRegisPos) - $numRegisPos; 
        $numCatTotal = count($categoria); // Total objetos
        $numPaginas = ceil($numCatTotal / $numRegisPos);// Con ceil redondea par arriba

        $prev = 1;
        if($page>1)$prev = $page-1;

        $next = $page;
        if($page<$numPaginas) $next = $page+1;

        $categoriaPaginacion = $repo->ListadoPaginacion("fechacreacion","ASC",$pos,$numRegisPos);

        return $this->render('categorias/index.html.twig', [
            'categoria' => $categoriaPaginacion,
            'page'=>$page,
            'numPag'=>$numPaginas,
            'prev'=>$prev,
            'next'=>$next,
        ]);
    }
    public function insertupdate($id)
    {
        $categoria = new Categoria();

        $getId = isset($id) && !empty($id);
        if ($getId) {
            $categoria = $this->getDoctrine()->getRepository(Categoria::class)->find($id);
        }
        return $this->render('categorias/insertupdate.html.twig', [
            'categoria' => $categoria,
            // 'mensaje'=> null,

        ]);
    }
    public function insertupdatepost(Request $request)
    {
        //guardar o editar dependiendo si viene ID
        $categoria = new Categoria();
        $categoria->setFechacreacion(new \DateTime);

        //Pregunto si viene la variable para saber si edito
        $getId = $request->request->get('id');

        //Si viene y no esta vacia trago el objeto
        if (isset($getId) && !empty($getId)) {
            $categoria = $this->getDoctrine()->getRepository(Categoria::class)->find($getId);
        }

        //Le asigno el nuevo nombre que viene por post al objeto 
        $categoria->setNombre($request->request->get('nombre'));

        //guardo el objeto con el nombre modificado o no
        $categoriaRepositoryManager = $this->getDoctrine()->getRepository(Categoria::class)->guardar($categoria);
        
        return $this->render('categorias/insertupdate.html.twig', [
            'categoria' => $categoria,
            'mensaje' => "Guardado Satisfatoriamente",
        ]);
    }
    public function delete($id)
    {
        $categoria = $this->getDoctrine()->getRepository(Categoria::class)->find($id);
        $categoriaRepositoryManager = $this->getDoctrine()->getRepository(Categoria::class)->Delete($categoria);

        return $this->redirectToRoute('Categoria');
    }

}
