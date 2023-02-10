<?php
interface lComponent{
    public function play();
    public function setPlayBackSpeed(float $speed);
    public function getName();
}

class playlist implements lComponent{
    public  $playlistName;
    public  array  $Component;

    public function playlist($playlistName)
    {
       $this->playlistName=$playlistName;
    }

    public function play()
    {
        for( in_array($this->Component):
            $this->Component->play();


        
    }
    public function setPlayBackSpeed( $speed)
    {
        echo $this->$speed;
    }
    public function getName()
    {
        $this->getName();
        return $this;

    }

    public function add(lComponent $component)
    {
        $component=array($this->getName());
        $playlist=$this->$component;
        
    }

    public function remove(lComponent $component)
    {
       $component= $this->getName();
        foreach($this->$component as $song ):
            if($component==$song):
                unset($component);
            endif;
        endforeach;
        
    }
}
   class song implements lComponent {
    public  $songName;
    public  $artist;
    public $speed=1;
    public function song($songName,$artistName)
    {
       $this->songName=$songName;
       $this->artist=$artistName;
    }
    public function play()
    {
        echo  "play now :".$this->songName;
    }
    public function setPlayBackSpeed($speed)
    {
        $speed=$this->$speed;
        echo "the spreed is :".$speed;
    }
    public function getName()
    {
        $songName=$this->songName;
        return $songName;
    }
    public function getArtist()
    {
        $artistName=$this->artist;
        return $artistName ;
    }

}



?>