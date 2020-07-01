<?php

namespace App\Controller;

use Amp\Http\Client\Request as ClientRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Entity\Categoria;
use App\Entity\Multimedia;
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
            'filtersort' => $filtersort,
            'filtercategory' => $filtercategory,
            'filtersearch' => $filtersearch,
            'filterpage' => $filterpage,
            'categoriaunica' => $categoriaunica,
            'numPaginas' => $numPaginas,
            'page' => $page,
            'next' => $next,
            'prev' => $prev,
        ]);
    }
    public function insertform(Request $request)
    {
        $productrepositoryinstance = $this
            ->getDoctrine()
            ->getRepository(Product::class);

        $categoriarepositoryinstace = $this
            ->getDoctrine()
            ->getRepository(Categoria::class);


        $multimediarepositoryinstace = $this
            ->getDoctrine()
            ->getRepository(Multimedia::class);


        /* Esta es la insercion en de el producto en la bbdd que va antes de la imagen porqe necesita el objeto producto para funcionar */
        /* Aca va con el request y con el set  */

        $productInstance = new Product();

        $msj = "";
        $upload = null;
        $titulo = $request->request->get('titulo');
        $descripcion = $request->request->get('descripcion');
        $precio = $request->request->get('precio');
        $idcategoria = $request->request->get('idcategoria');


        if (isset($titulo)) {
            $objCategoria = $categoriarepositoryinstace->find($idcategoria);

            $productInstance->setTitulo($titulo);
            $productInstance->setDescripcion($descripcion);
            $productInstance->setFechaAlta(new \DateTime);
            $productInstance->setIdcategoria($objCategoria);
            $productInstance->setPrecio($precio);


            /* Ver qe me devuelve nuevoProduct */
            $nuevoProduct = $productrepositoryinstance->Guardar($productInstance);
            if ($nuevoProduct) $msj = "El producto se guardo Correctamente";
        }


        $uplodedFile = $request->files;

        if ($request->files->get('image') != null) {
            $directorynumber = $nuevoProduct->getIdproduct();
            $directory = "img/" . $directorynumber;
            foreach ($uplodedFile as $key => $item) {

                $priority = "0";
                if ($key == "image") $priority = "1";

                echo $key;
                $nombre = $item->getClientOriginalName();
                $url = $directory . "/" . $nombre;
                $multimedia = new Multimedia();
                $multimedia->setIdproduct($nuevoProduct);/* NOSE SI ES ESTE*/
                $multimedia->setUrl($url);
                $multimedia->setPriority($priority);
                $upload = $item->move($directory, $nombre);


                $itemImagen = $multimediarepositoryinstace->Guardar($multimedia);
            }
        }


        $categorias = $categoriarepositoryinstace->findAll();

        return $this->render('product/insertform.html.twig', [
            'categorias' => $categorias,
            'msj' => $msj,
        ]);
    }

    public function modify(Request $request)
    {
        $productrepositoryinstance = $this
            ->getDoctrine()
            ->getRepository(Product::class);

        $multimediarepositoryinstace = $this
            ->getDoctrine()
            ->getRepository(Multimedia::class);

        $categoriarepositoryinstace = $this
            ->getDoctrine()
            ->getRepository(Categoria::class);


        $idproductmodify = $request->request->get('idproductmodify');
        $titulo = $request->request->get('titulo');
        $descripcion = $request->request->get('descripcion');
        $precio = $request->request->get('precio');
        $idcategoria = $request->request->get('idcategoria');
        $idproductdelete = $request->request->get('delete');

        if (isset($idproductmodify) && !empty($idproductmodify)) {
            $productInstance = $productrepositoryinstance->find($idproductmodify);
            $categoriaInstance = $categoriarepositoryinstace->find($idcategoria);
            
            $productInstance->setDescripcion($descripcion);
            $productInstance->setPrecio($precio);
            $productInstance->setIdcategoria($categoriaInstance);
            $productInstance->setTitulo($titulo);

            $productrepositoryinstance->Guardar($productInstance);
            $showmodal = "Modificado con exito";

        }


        $showmodal = "";


        if ($idproductdelete) {
            $productInstanceDelete = $productrepositoryinstance->find($idproductdelete);
            $productrepositoryinstance->Delete($productInstanceDelete); //Modificar el Repositorio
            $realpathdirectorydelete = realpath("img/" . $idproductdelete);
            $check2 = array_map('unlink', glob("$realpathdirectorydelete/*.*"));
            $check = rmdir($realpathdirectorydelete);
            $showmodal = "Borrado con exito";
        }

        /* Ver si esto lo puedo sacar y cambiar por una peticion ajax de la imagen en particular */
        $variableimagenes = $multimediarepositoryinstace->findAll(); //Todas las imagenes
        $json = json_encode($variableimagenes);
        //var_dump($variableimagenes); 

        $dataproductforrender = $productrepositoryinstance->findAll();
        $categorias = $categoriarepositoryinstace->findAll();


        return $this->render('product/modify.html.twig', [
            'showmodal' => $showmodal,
            'dataproductforrender' => $dataproductforrender,
            'categorias' => $categorias,
            'json' => $json,
        ]);
    }
}
