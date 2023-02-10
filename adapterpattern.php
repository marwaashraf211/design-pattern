<?php

 interface coffeMachineInterface
{
    public function chooseFirstSelection();
    public function chooseSecondSelection();

}
 class cofeeTouchScreenAdapter implements coffeMachineInterface
 {
   
    private  oldCaffeMachine $oldVendingMachine ;


    public function cofeeTouchScreenAdapter(oldCaffeMachine $currentMachine)
    {
         $this->oldVendingMachine=$currentMachine;
    }
    public  function chooseFirstSelection()
    {
       $this->oldVendingMachine->selectA();

    }
    public function chooseSecondSelection()
    {
      $this->oldVendingMachine->selectB();
    }
    

 }
 class oldCaffeMachine {
    public function selectA()
    {
         echo "ice cofee is selected " ;
    }
    public function selectB()
    {
        echo "puple tea";
    }
 }



?>