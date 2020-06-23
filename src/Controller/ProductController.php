<?php

namespace App\Controller;

use Amp\Http\Client\Request as ClientRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Entity\Categoria;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    public function all(Request $request)
    {
        $productdatainstace = $this
            ->getDoctrine()
            ->getRepository(Product::class);

        $categoriainstace = $this
            ->getDoctrine()
            ->getRepository(Categoria::class);

        $page = 1;
        //No logro agarrar lo que viene por GET
        $idcategoria  = $request->request->get("idcategoria");
        $sort = $request->request->get("sort");
        $search = $request->request->get("search");
        $page = $request->request->get("page");
        $forDropDown = "Ordenar Por";
        $filtersort = "";
        $filterpage = "";
        $filtercategory = "";
        $filtersearch = "";
        $categoriaunica = "";

        /* Aca va con $request  */
        if (isset($seach) && (!empty($seach))) {
            $filtersearch = "&search = " . $_GET["search"];
        }

        if (isset($idcategoria) && (!empty($idcategoria))) {
            //Para Filtro Categoria
            $filtercategory = "&idcategoria=" . $_GET["idcategoria"];
            $forDropDown =  "";
            $categoriaunica = $categoriainstace->findBy($idcategoria);
        }
        if (isset($sort) && (!empty($sort))) {
            $filtersort = "&sort=" . $_GET["sort"]; //Para filtro Sort 
        } else {
            $sort = 1;
        }
        if (isset($page) && (!empty($page))) {
            $filterpage = "&page=" . $_GET["page"]; //Para filtro page
        } else {
            $page = 1;
        }

        $numRegisPos = 6; // Numero de objetos por pagina
        $pos = ($page * $numRegisPos) - $numRegisPos;

        /* Aca viene una Query que pregunte cuantos elementos total
         me trae de el registro no por paginas con todos los filtros ya*/
        $queryWithTotal = $productdatainstace->allforpagination($idcategoria, $search);
        $dataproductforrender = $productdatainstace->all($pos, $idcategoria, $sort, $search, $numRegisPos); //Se usa en la vista
        /* ACA!!!!!!!!!!!1 asiganar a a modelo el array qe viene !! */
        $numCatTotal = count($queryWithTotal); // Total objetos

        ///ME quede laburando aca me falla el recuento para la cantidad de paginas !!!
        //////////////////////////


        $numPaginas = ceil($numCatTotal / $numRegisPos); // Con ceil redondea par arriba
        $prev = 1;
        if ($page > 1) $prev = $page - 1;
        $next = $page;
        if ($page < $numPaginas) $next = $page + 1;

        $categorias = $categoriainstace->findAll(); //Se usa en la vista

        return $this->render('product/all.html.twig', [
            'dataproductforrender' => $dataproductforrender,
            'categorias' => $categorias,
            'forDropDown' => $forDropDown,
            'filtersort' =>$filtersort,
            'filtercategory' => $filtercategory,
            'filtersearch' => $filtersearch,
            'filterpage' => $filterpage,
            'categoriaunica' => $categoriaunica,
       /*      'sort'=>$sort,
            'page'=>$page,
            'search'=>$search, */
        ]);
    }
    public function insertform(Request $request)
    {


    }
}
