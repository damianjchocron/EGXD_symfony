<?php

namespace App\Controller;

use App\Entity\Multimedia;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MultimediaController extends AbstractController
{
 
    public function ajaxFind(Request $request)
    {
        $multimediaRepositoryInstance = $this->getDoctrine()->getRepository(Multimedia::class);

        $idproduct = $request->request->get('idproduct');

        /* Necesito esto porque lo devuelve de una manera que puedo acceder en el fronte end */
        $objImg = $multimediaRepositoryInstance->findByArray($idproduct);

        return new JsonResponse(array('objImg' => $objImg));
   }

   public function Guardar(Request $request)
    {
        $idProducto = $request->request->get('idProducto');
        $uplodedFile = $request->files->get('fichero');
        $objProducto = $this->getDoctrine()->getRepository(Producto::class)->find($idProducto);
        $productoRepo = $this->getDoctrine()->getRepository(Producto::class)->findAll();

        $ruta = "img/".$idProducto;
        $objImagenes = [];

        foreach ($uplodedFile as $item) {
            $nombre = $item->getClientOriginalName();
            $url = $ruta ."/". $nombre;
            $imagenes = new Multimedia();
            $imagenes->setIdproduct($objProducto);
            $imagenes->setPriority("0");
            $imagenes->setUrl($url);
            $item->move($ruta, $nombre);

            $itemImagen = $this->getDoctrine()->getRepository(Imagenes::class)->Guardar($imagenes);
            array_push($objImagenes, $itemImagen);
        }

        return $this->render('imagenes/CrearEditar.html.twig', [
            'listProducto' => $productoRepo,
            'imagenes' => $imagenes,
            'arrayImagen' => $objImagenes,
        ]);
    }
    public function Borrar(Request $request)
    {
        $id = $request->request->get('id');
        $repo = $this->getDoctrine()->getRepository(Imagenes::class);
        $img = $repo->find($id);
        $idProducto = $img->getIdproducto()->getIdproducto();
        $nombre = $img->getNombre();
        $ruta = "imagen/producto/" . $idProducto . "/" . $nombre;

        unlink($ruta);

        $repo->Delete($img);

        $response = new Response();
        $response->setContent(json_encode([
            'msg' => "Fichero Eliminado",
        ]));
        return new JsonResponse(array('msg' => 'Fichero eliminado'));
    }
}
