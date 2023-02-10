<?php
include_once("compositepattern.php");
$studyPlaylist=new playlist("study");
$silencePlaylist=new playlist ("silence");
$silenceSong1=new Song("universe","exo");
$silenceSong2=new Song("monster","exo");
$experimentalPlaylist = new Playlist("Experimental");		
$experimentalSong1 = new Song("About you", "XXYYXX");
$experimentalSong2 = new Song("Motivation", "Clams Casino");	
$experimentalSong3 = new Song("Computer Vision", "Oneohtrix Point Never");
$experimentalPlaylist.add($experimentalSong1);
$experimentalPlaylist.add($experimentalSong2);
$experimentalPlaylist.add($experimentalSong3);
$slowSpeed = 0.5;
$experimentalPlaylist.setPlayBackSpeed($slowSpeed);

$glitchSong = new Song("Textuell", "Oval");
$fasterSpeed = 1.25;
$glitchSong.setPlaybackSpeed(fasterSpeed);
$glitchSong.play(); 
$name = $glitchSong.getName(); 
$artist =$glitchSong.getArtist(); 
	echo "The song name is " +$name;
	echo "The song artist is " + $artist ;
	



?>