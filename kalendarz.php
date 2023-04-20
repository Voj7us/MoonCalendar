<?php
//ustawianie daty gdy nie poda się wartosci
if(isset($_POST["lata"])){ 
    if($_POST["lata"] == 0) {
        $_POST["lata"]=date("Y");
    }
}
if(isset($_POST["mies"])){ 
    if($_POST["mies"] == 0) {
        $_POST["mies"]=date("m");
    }
}
class Moon {
    private $rok;
    private $mies;
    public function __construct($rok, $mies) {
        $this->rok=$rok;
        $this->mies=$mies;
    }
    public function getRok() {
        return $this->rok;
    }
    public function getMies() {
        return $this->mies;
    }
    public function setRok($rok) {
        $this->rok = $rok;
        return $this;
    }
    public function setMies($mies) {
        $this->mies = $mies;
        return $this;
    }
        public function kalendarz(){
        $dni=array("Niedziela","Poniedziałek","Wtorek","Środa","Czwartek","Piątek","Sobota");
        $img=array();
       $img[]="<img src='moon1.gif'>";$img[]="<img src='moon2.gif'>";$img[]="<img src='moon3.gif'>"; $img[]="<img src='moon4.gif'>";$img[]="<img src='moon5.gif'>";
       $img[]="<img src='moon6.gif'>";$img[]="<img src='moon7.gif'>";$img[]="<img src='moon8.gif'>"; $img[]="<img src='moon9.gif'>";$img[]="<img src='moon10.gif'>";
       $img[]="<img src='moon11.gif'>";$img[]="<img src='moon12.gif'>";$img[]="<img src='moon13.gif'>";$img[]="<img src='moon14.gif'>";$img[]="<img src='moon15.gif'>";
       $img[]="<img src='moon16.gif'>";$img[]="<img src='moon17.gif'>";$img[]="<img src='moon18.gif'>";$img[]="<img src='moon19.gif'>";$img[]="<img src='moon20.gif'>"; 
       $img[]="<img src='moon21.gif'>";$img[]="<img src='moon22.gif'>";$img[]="<img src='moon23.gif'>";$img[]="<img src='moon24.gif'>";$img[]="<img src='moon25.gif'>";
       $img[]="<img src='moon26.gif'>";$img[]="<img src='moon27.gif'>";$img[]="<img src='moon28.gif'>";$img[]="<img src='moon29.gif'>";      
 $t="<table border=1 class='tabela'><thead class='tabelanapis' <tr>";
           $t.="<div class='srodek'> <td>".$this->mies."-".$this->rok."</td></div>"; //wypisywanie roku
        $t.="</tr><tr>";
       for($i=0;$i<count($dni);$i++){ //dni tygodnia
          $t.="<td><b>".$dni[$i]."</b></td>";
        }
        $t.="</tr></thead>";
        $t.= "<tbody><tr>";
$pdt=date('w', mktime(0, 0, 0, $this->mies, 1, $this->rok)); //pierwszy dzien tygodnia
         for($p=0;$p<$pdt;$p++){ //dostawianie pustych miejsc
            $t.="<td style=visibility:hidden;>&nbsp</td>";
        }           
$ld=cal_days_in_month(0, $this->mies, $this->rok); //liczba dni
        for($j=1;$j<=$ld;$j++){
                $dp=new DateTime("1970-01-01"); //początek kalendarza
                $dk=new DateTime('@'.mktime(0,0,0, $this->mies, $j, $this->rok)); //data końca
                $roznicad=$dp->diff($dk)->format("%a"); //różnica dat
                $resztad=$roznicad%29.531; //reszta z daty 
$dw = date("w", mktime(0, 0, 0, $this->mies, $j, $this->rok));
            if ($dw==6){  
                    $t.="<td>$j<br>$img[$resztad]</td></tr><tr>" ;
            } 
            else{
            $t.="<td>$j<br>$img[$resztad]</td>" ;   
        }
     }
        $t .= "</tr></tbody>";
        return $t;
    }
}
