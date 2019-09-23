<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {

    }

    public function add(): Response
    {
        $product = $this->createFormBuilder()
            ->add('name', TextType::class)
            ->add('price', NumberType::class)
            ->add('rating', NumberType::class)
            ->add('description', TextareaType::class)
            ->getForm();

        return $this->render('product/index.html.twig', [
            'product' => $product,
        ]);

//
//        $entityManager = $this->getDoctrine()->getManager();
//
//        $product = new Product();
//        $product->setName('Keyboard');
//        $product->setPrice(1999);
//        $product->setRating(4.5);
//        $product->setDescription('Ergonomic and stylish!');
//
//        // tell Doctrine you want to (eventually) save the Product (no queries yet)
//        $entityManager->persist($product);
//
//        // actually executes the queries (i.e. the INSERT query)
//        $entityManager->flush();
//
//        return new Response('Saved new product with id '.$product->getId());
    }

    public function getProducts(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $products = $repository->findAll();

//        dump($products);
//        exit;

        return $this->render('product/list.html.twig', [
            'product' => $products,
        ]);
    }
}
