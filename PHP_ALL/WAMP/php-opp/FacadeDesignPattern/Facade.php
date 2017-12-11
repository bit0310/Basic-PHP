<?php


class Facade{


	public function findApartments($place, $divId){
		$apfinder  = new ApartmentFinder();
		$geolocator = new GeoLocator();
		$gmap 		= new GoogleMap();

		$apertments = $apfinder->locateApartments($place);
		foreach ($apertment as $apertment) {
			$locations[] = $geolocator->getLocations($apertment);
		}

		$gmap->initialize();
		$gmap->drawLocation($location);
		$gmap->dispatch($divId);
	}
}


?>