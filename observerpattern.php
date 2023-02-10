<?php
interface subject{
    public function registerObserver($observer);
    public function removeObserver($observer);
    public function notifyObservers();
}

interface observer{
    public  function update();
   
}
class channel implements subject{
    private  observer $observer =new $observer[];
    private $channelName;
    private $status;


    public  function channel($channelName,$status)
    {
       $this->$channelName=$channelName;
       $this->$status=$status;
    } 
    public function getChannelName($channelName)
    {
        return $channelName;
    }
    public function setChannelName($channelName)
    {
        $this->$channelName=$channelName;
    }
    public function getStatus($status)
    {
        return $status;
    }
    public function setStatus($status)
    {
        $this->$status;
        $this->notifyObservers();
        
    }
    public function notifyObservers()
    {
        foreach( $observers as $observer)
        {
             $this->observer.update($observer);
        }
        
    }
    public function registerObserver( $observer)
    {
        $observer=array_push($this->$observer);
        
    }
    public function removeObserver($observer)
    {
        $observer=array_pop($this->$observer);
    }
}

class follower implements observer
{
    private $followerName;

    public function follower($followerName){
        $this->followerName=$followerName;
    }

    public function getFollower($followerName){
        return $followerName;
    }
    public function setFollower($followerName){
        $this->followerName=$followerName;
    }
    public function update()
    {
        echo "channel was live";
    }
    public function play()
    {
        echo "channel playing "

    }
}

?>

