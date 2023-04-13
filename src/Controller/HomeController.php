<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    #[Route('/home', name: "app_home")]
    public function home(EntityManagerInterface $em): Response
    {

        $user = $this->getUser();

        if($user == null) {
            return $this->redirectToRoute("app_login");
        }

        $productsRepo = $em->getRepository(Product::class);
        $products = $productsRepo->findAll();


        return $this->render('home.html.twig', [
            'user' => $user,
            'products' =>$products,
        ]);
    }

    #[Route('/addProduct', name: "app_add_product")]
    public function addProduct(Request $request, EntityManagerInterface $em) {

        $product = new Product();

        $kcal100g = floatval($request->query->get('kcal100g'));
        $protein100g = floatval($request->query->get('protein100g'));
        $carb100g = floatval($request->query->get('carb100g'));
        $fat100g = floatval($request->query->get('fat100g'));
        $portion = floatval($request->query->get('portion'));

        $product->setName($request->query->get('name'));
        $product->setGroupFood($request->query->get('group'));

        $product->setKcal100g($kcal100g);
        $product->setProtein100g($protein100g);
        $product->setCarb100g($carb100g);
        $product->setFat100g($fat100g);
        
        $product->setPortionWhole($portion);
        
        $product->setKcal($portion * $kcal100g / 100);
        $product->setProtein($portion * $protein100g / 100);
        $product->setCarb($portion * $carb100g / 100);
        $product->setFat($portion * $fat100g / 100);

        $product->setTime1(32);
        $product->setTime2("NO");

        $em->persist($product);
        $em->flush();

        return $this->redirectToRoute('app_home');
    }

    #[Route('/changeKcal', name: "app_change_kcal")]
    public function changeKcal(Request $request, EntityManagerInterface $em) {

        $kcal = $request->query->get('kcal');

        $user = $this->getUser();
        $user->setKcal($kcal);
        $em->flush();

        return new Response($kcal);
    }

    #[Route('/changeProtein', name: "app_change_protein")]
    public function changeProtein(Request $request, EntityManagerInterface $em) {

        $protein = $request->query->get('protein');
        $carb = $request->query->get('carb');
        $fat = $request->query->get('fat');

        $user = $this->getUser();
        $user->setProtein($protein);
        $user->setCarb($carb);
        $user->setFat($fat);
        $em->flush();

        return new Response();
    }

    #[Route('/changeMealPerDay', name: "app_change_mealPerDay")]
    public function changeMealPerDay(Request $request, EntityManagerInterface $em) {

        $mealPerDay = $request->query->get('mealPerDay');

        $user = $this->getUser();
        $user->setMealPerDay($mealPerDay);
        $em->flush();

        return new Response();
    }
}