<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{

    
    /**
     * @Route("/about", name="about")
     */
    public function getDayAction(){
        $sweets = $this->getCookiesList();
        $days = $this->getWeekDaysName();
        $menu=[];

        foreach($days as $day){
            $menu[]=$this->getRandomMenu(8,$sweets);
        }

        return $this->render('homepage/sweets.html.twig',['menu'=>$menu,'days'=>$days]);
    }

    private function getRandomMenu($elementCount,$sweets){
        shuffle($sweets);
        $shuffledSweets=[];

        for($i=0;$i<$elementCount;$i++){
            $shuffledSweets[]=$sweets[$i];
        }

        return $shuffledSweets;
    }

    private function getWeekDaysName(){
        $daysList=[];
        $daysList[]='Poniedziałek';
        $daysList[]='Wtorek';
        $daysList[]='Środa';
        $daysList[]='Czwartek';
        $daysList[]='Piatek';
        $daysList[]='Sobota';
        $daysList[]='Niedziela';

        return $daysList;
    }

    private function getCookiesList(){
        $cookiesList=[];
        $cookiesList[]='WZ';
        $cookiesList[]='Szarlotka';
        $cookiesList[]='Sernik';
        $cookiesList[]='Napoleonka';
        $cookiesList[]='Babeczka';
        $cookiesList[]='Kartofel';
        $cookiesList[]='Toffi';
        $cookiesList[]='Bajaderka';
        $cookiesList[]='Drożdżówka';
        $cookiesList[]='Beza';
        $cookiesList[]='Pączek';
        $cookiesList[]='Rurka z kremem';
        $cookiesList[]='Ambasador';
        $cookiesList[]='Albertki';
        $cookiesList[]='Baklawa';
        $cookiesList[]='Biszkopciki';
        $cookiesList[]='Chrust';
        $cookiesList[]='Faworki';
        return $cookiesList;
    }

}

