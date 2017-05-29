<!--API KEY: c85d7a8b0bcb471e8666fbf2740b391f-->
<link rel="stylesheet" href="CSS/sports.css" type="text/css">
<?php
    // retrieves news articles from newsapi.org. Creates containers that display news of all sports
    function bccTopNews(){
        $urlSources = file_get_contents("https://newsapi.org/v1/articles?source=bbc-sport&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $urlSourcesArray = json_decode($urlSources, true);
        $sources = $urlSourcesArray['articles'];
        
        for ($i = 0; $i < count($sources); $i++){
              $sites = $urlSourcesArray['articles'][$i];      
              if ($i <= 3){
                  if ($i==0) {
                      echo '<div class="item active">
                      <ul class="thumbnails" style="list-style-type: none;">';
                      createCarouselElement($sites);
                  }
                  else if ($i == 3){
                      createCarouselElement($sites);
                      echo '</ul> </div>';
                  } 
                  else {
                          createCarouselElement($sites);
                  }
              }     
              else if ($i >= 4 and $i <= 7){
                  if($i == 4){
                      echo '<div class="item"> 
                              <ul class="thumbnails" style="list-style-type: none;">';
                      createCarouselElement($sites);
                  }
                  else if ($i == 7){
                      createCarouselElement($sites);
                      echo '</ul></div>';
                  }
                  else{
                        createCarouselElement($sites);
                  }
                        
              }     
                
              else if ($i >= 8 and $i <= 11){
                  if($i==8){
                      echo '<div class="item">
                           <ul class="thumbnails" style="list-style-type: none;">';;
                            createCarouselElement($sites);
                  }
                  else if ($i == 10){
                      createCarouselElement($sites);
                      echo '</ul></div>';
                  }
                  else{
                      createCarouselElement($sites);

                  }
                        
               }
           }
        
    }
    // Create DIV containing news. Display all news from the server.
    function createNewsDiv($sources, $newsArray){
        for ($i = 0; $i < count($sources); $i++){
            $sites = $newsArray['articles'][$i];
                echo '
                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail" id="news-container">
                            <a href="'.$sites['url'].'" target="_blank">
                            <h5>"'.$sites['title'].'"</h5>
                            </a>
                            <img src="'.$sites['urlToImage'].'">
                            <div class="caption">
                                <p style="font-size: 11px;">"'.$sites['description'].'"</p>
                            </div>
                        </div>
                    </div>
                ';       
        }

    }

    function bccCompleteNews(){
        #BBC news API and parse
        $urlBCCSources = file_get_contents("https://newsapi.org/v1/articles?source=bbc-sport&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $urlBCCSourcesArray = json_decode($urlBCCSources, true);
        $bccSources = $urlBCCSourcesArray['articles'];        
        createNewsDiv($bccSources, $urlBCCSourcesArray);

        #Fox Sports news API and parse
        $urlFoxSources = file_get_contents("https://newsapi.org/v1/articles?source=fox-sports&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $urlFoxSourcesArray = json_decode($urlFoxSources, true);
        $foxSources = $urlFoxSourcesArray['articles'];
        createNewsDiv($foxSources, $urlFoxSourcesArray);

        #ESPN Sports news API and parse
        $urlEspnSources = file_get_contents("https://newsapi.org/v1/articles?source=espn&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $urlEspnSourcesArray = json_decode($urlEspnSources, true);
        $espnSources = $urlEspnSourcesArray['articles'];
        createNewsDiv($espnSources, $urlEspnSourcesArray);
        #Fox Sports news API and parse
        $urlSbibleSources = file_get_contents("https://newsapi.org/v1/articles?source=the-sport-bible&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $urlSbibleSourcesArray = json_decode($urlSbibleSources, true);
        $sbibleSources = $urlSbibleSourcesArray['articles'];
        createNewsDiv($sbibleSources, $urlSbibleSourcesArray);
    }
    // retrieves news articles from newsapi.org. Creates containers that display news of the NFL
    function nflSources(){
        $nflSources = file_get_contents("https://newsapi.org/v1/articles?source=nfl-news&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $nflSourcesArray= json_decode($nflSources, true);
        $sources = $nflSourcesArray['articles'];
        
        for ($i = 0; $i < count($sources); $i++){
              $sites = $nflSourcesArray['articles'][$i];      
              if ($i <= 3){
                  if ($i==0) {
                      echo '<div class="item active">
                      <ul class="thumbnails" style="list-style-type: none;">';
                      createCarouselElement($sites);
                  }
                  else if ($i == 3){
                      createCarouselElement($sites);
                      echo '</ul> </div>';
                  } 
                  else {
                          createCarouselElement($sites);
                  }
              }     
              else if ($i >= 4 and $i <= 7){
                  if($i == 4){
                      echo '<div class="item"> 
                              <ul class="thumbnails" style="list-style-type: none;">';
                      createCarouselElement($sites);
                  }
                  else if ($i == 7){
                      createCarouselElement($sites);
                      echo '</ul></div>';
                  }
                  else{
                        createCarouselElement($sites);
                  }
                        
              }     
                
              else if ($i >= 8 and $i <= 11){
                  if($i==8){
                      echo '<div class="item">
                           <ul class="thumbnails" style="list-style-type: none;">';
                            createCarouselElement($sites);
                  }
                  else if ($i == 10){
                      createCarouselElement($sites);
                      echo '</ul></div>';
                  }
                  else{
                      createCarouselElement($sites);

                  }
                        
               }
           }
        
    }
    // Display all NFL news from server
    function completeNflSources(){
        $nflSources = file_get_contents("https://newsapi.org/v1/articles?source=nfl-news&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $nflSourcesArray= json_decode($nflSources, true);
        $sources = $nflSourcesArray['articles'];
       createNewsDiv($sources, $nflSourcesArray);

    }
    // retrieves news articles from newsapi.org. Creates containers that display news of football
    function footballSources(){
        $footSources = file_get_contents("https://newsapi.org/v1/articles?source=football-italia&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $footSourcesArray= json_decode($footSources, true);
        $sources = $footSourcesArray['articles'];
        
        for ($i = 0; $i < count($sources); $i++){
            $sites = $footSourcesArray['articles'][$i];
                echo '
                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail" id="news-container">
                            <a href="'.$sites['url'].'" target="_blank">
                            <h5>"'.$sites['title'].'"</h5>
                            </a>
                            <img src="'.$sites['urlToImage'].'">
                            <div class="caption">
                                <p style="font-size: 11px;">"'.$sites['description'].'"</p>
                            </div>
                        </div>
                    </div>
                ';
                if ($i == 11){
                    break;
                    
                }           
        }
    }
	    // Display all Football news from server.
    function completeFootballSources(){
        $footSources = file_get_contents("https://newsapi.org/v1/articles?source=football-italia&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $footSourcesArray= json_decode($footSources, true);
        $sources = $footSourcesArray['articles'];
        createNewsDiv($sources, $footSourcesArray);
    }
    
    function createCarouselElement($sites){
        echo '
            <li class="col-sm-6" > <!-- set dimensions -->
                        <div class="thumbnail" id="news-container">
                            <a href="'.$sites['url'].'" target="_blank">
                            <h5>"'.$sites['title'].'"</h5>
                            </a>
                            <img src="'.$sites['urlToImage'].'">
                            <div class="caption">
                                <p style="font-size: 11px;">"'.$sites['description'].'"</p>
                            </div>
                        </div>
                    </li>
                ';
    }


    function nbaGameSchedule(){
        $urlSources = file_get_contents("https://www.mysportsfeeds.com/api/feed/sample/pull/nba/2016-2017-regular/scoreboard.json?fordate=20161026&");
        $urlSourcesArray = json_decode($urlSources, true);
        $sources = $urlSourcesArray['scoreboard']['gameScore'];
        //[0]['game']['homeTeam']["Name"];//10
        
        
        for ($i = 0; $i < count($sources); $i++){
            $timeVar = $urlSourcesArray['scoreboard']['gameScore'][$i]['game'];
            $homeTeamNames = $urlSourcesArray['scoreboard']['gameScore'][$i]['game']['homeTeam'];
            $awayTeamNames = $urlSourcesArray['scoreboard']['gameScore'][$i]['game']['awayTeam'];
            echo '<div class="col-sm-12 col-md-12" style="padding: 0;width:100%; margin-left:0; margin-bottom: 5px;">
                        <div class="thumbnail" style="margin:0; padding:-5px;">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <p align="center" style="font-size:9pt;"> '.$timeVar['location'].'<br> '.$timeVar['time'].'
                                    </p>
                                    <hr style=" margin-top: -3px; margin-bottom: 2px;">
                                    <p align="center" style="font-size:9pt; margin-top: 0;"> ('.$homeTeamNames['Abbreviation'].') '.$homeTeamNames['Name'].'
                                    <!-- Basketball 2 icon by Icons8 -->
                                    <img src="https://maxcdn.icons8.com/office/PNG/30/Sports/basketball_2-30.png" align="right" title="Basketball 2" style="margin: 0; width:25px; height: 25px;">
                                    <br> Vs. <br>
                                    ('.$awayTeamNames['Abbreviation'].') '.$awayTeamNames['Name'].'
                                    <img src="https://maxcdn.icons8.com/Color/PNG/24/Sports/basketball_2-24.png" align="right" title="Basketball 1" style="margin: 0; width:25px; height: 25px;">                             
                                    </p>
                                </div>                                      
                            </div>
                        </div>
                    </div>
                    ';   
        }
    }
                
    function nflGameSchedule(){
        $urlSources = file_get_contents("https://www.mysportsfeeds.com/api/feed/sample/pull/nba/2016-2017-regular/scoreboard.json?fordate=20161026&");
        $urlSourcesArray = json_decode($urlSources, true);
        $sources = $urlSourcesArray['scoreboard']['gameScore']; 
        
        for ($i = 0; $i < count($sources); $i++){
            $timeVar = $urlSourcesArray['scoreboard']['gameScore'][$i]['game'];
            $scor = $urlSourcesArray['scoreboard']['gameScore'][$i];
            $homeTeamNames = $urlSourcesArray['scoreboard']['gameScore'][$i]['game']['homeTeam'];
            $awayTeamNames = $urlSourcesArray['scoreboard']['gameScore'][$i]['game']['awayTeam'];
            $num = $scor['awayScore'] - 70;   
                 
            echo '<div class="col-sm-12 col-md-12">
                        <div class="thumbnail">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <hr style=" margin-top: -3px; margin-bottom: 2px;">
                                    <p align="center" style="font-size:9pt; margin-top: 0;"> '.$homeTeamNames['Abbreviation'].': '.$scor['homeScore'].'
                                    <!-- National Football League icon by Icons8 -->
                                    <img src="https://maxcdn.icons8.com/iOS7/PNG/25/Logos/national_football_league-25.png" title="National Football League" align="right" title="NFL" style="margin: 0; width:25px; height: 25px;">
                                    <br> Vs. <br>
                                    '.$awayTeamNames['Abbreviation'].': '.$scor['awayScore'].'
                                    <!-- National Football League icon by Icons8 -->
                                    <img src="https://maxcdn.icons8.com/iOS7/PNG/25/Logos/national_football_league-25.png" title="National Football League" align="right" title="NFL" style="margin: 0; width:25px; height: 25px;">
                                    </p>
                                </div>                                      
                            </div>
                        </div>
                    </div>
                    ';   
        }
    }
    
      function footballCaru(){
          $footSources = file_get_contents("https://newsapi.org/v1/articles?source=football-italia&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
          $footSourcesArray= json_decode($footSources, true);
          $sources = $footSourcesArray['articles'];
            
          for ($i = 0; $i < count($sources); $i++){
              $sites = $footSourcesArray['articles'][$i];      
              if ($i <= 3){
                  if ($i==0) {
                      echo '<div class="item active">
                      <ul class="thumbnails" style="list-style-type: none;">';
                      createCarouselElement($sites);
                  }
                  else if ($i == 3){
                      createCarouselElement($sites);
                      echo '</ul> </div>';
                  } 
                  else {
                          createCarouselElement($sites);
                  }
              }     
              else if ($i >= 4 and $i <= 7){
                  if($i == 4){
                      echo '<div class="item"> 
                              <ul class="thumbnails" style="list-style-type: none;">';
                      createCarouselElement($sites);
                  }
                  else if ($i == 7){
                      createCarouselElement($sites);
                      echo '</ul></div>';
                  }
                  else{
                        createCarouselElement($sites);
                  }
                        
              }     
                
              else if ($i >= 8 and $i <= 11){
                  if($i==8){
                      echo '<div class="item">
                           <ul class="thumbnails" style="list-style-type: none;">';
                            createCarouselElement($sites);
                  }
                  else if ($i == 10){
                      createCarouselElement($sites);
                      echo '</ul></div>';
                  }
                  else{
                      createCarouselElement($sites);

                  }
                        
               }
           }
      }

    function searchFootBallSources(){
		$footSources = file_get_contents("https://newsapi.org/v1/articles?source=football-italia&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $footSourcesArray= json_decode($footSources, true);
        $sources = $footSourcesArray['articles'];
		
		for ($i = 0; $i < count($sources); $i++){
			$sites = $footSourcesArray['articles'][$i];
			if (in_array ($_GET['Search'], $sites)){
				$searchResults = array_search($_GET['Search'], $sites);
				if($searchResults=='title'){
					echo
					'
                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail" id="news-container">
                            <a href="'.$sites['url'].'" target="_blank">
                            <h5>"'.$sites['title'].'"</h5>
                            </a>
                            <img src="'.$sites['urlToImage'].'">
                            <div class="caption">
                                <p style="font-size: 11px;">"'.$sites['description'].'"</p>
                            </div>
                        </div>
                    </div>
                ';
                if ($i == 11){
                    break;
                    
                }          
			}
		}
	}
	}
	
		function searchNFLSources(){
		$nflSources = file_get_contents("https://newsapi.org/v1/articles?source=nfl-news&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $nflSourcesArray= json_decode($nflSources, true);
        $sources = $nflSourcesArray['articles'];
		
		for ($i = 0; $i < count($sources); $i++){
			$sites = $nflSourcesArray['articles'][$i];
			if (in_array ($_GET['Search'], $sites)){
				$searchResults = array_search($_GET['Search'], $sites);
				if($searchResults=='title'){
					echo
					'
                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail" id="news-container">
                            <a href="'.$sites['url'].'" target="_blank">
                            <h5>"'.$sites['title'].'"</h5>
                            </a>
                            <img src="'.$sites['urlToImage'].'">
                            <div class="caption">
                                <p style="font-size: 11px;">"'.$sites['description'].'"</p>
                            </div>
                        </div>
                    </div>
                ';
                if ($i == 11){
                    break;
                    
                }          
			}
		}
	}
	}
	
		function searchBCCSources(){
			$urlBCCSources = file_get_contents("https://newsapi.org/v1/articles?source=bbc-sport&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
			$urlBCCSourcesArray = json_decode($urlBCCSources, true);
			$sources = $urlBCCSourcesArray['articles'];  

				for ($i = 0; $i < count($sources); $i++){
				$sites = $urlBCCSourcesArray['articles'][$i];
				if (in_array ($_GET['Search'], $sites)){
					$searchResults = array_search($_GET['Search'], $sites);
					if($searchResults=='title'){
						echo
						'
						<div class="col-sm-6 col-md-6">
							<div class="thumbnail" id="news-container">
								<a href="'.$sites['url'].'" target="_blank">
								<h5>"'.$sites['title'].'"</h5>
								</a>
								<img src="'.$sites['urlToImage'].'">
								<div class="caption">
									<p style="font-size: 11px;">"'.$sites['description'].'"</p>
								</div>
							</div>
						</div>
					';
					if ($i == 11){
						break;
						
					}          
				}
			}
		}
		}
		
		function searchESPNSources(){
			$urlEspnSources = file_get_contents("https://newsapi.org/v1/articles?source=espn&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
			$urlEspnSourcesArray = json_decode($urlEspnSources, true);
			$espnSources = $urlEspnSourcesArray['articles'];  

				for ($i = 0; $i < count($espnSources); $i++){
				$sites = $urlEspnSourcesArray['articles'][$i];
				if (in_array ($_GET['Search'], $sites)){
					$searchResults = array_search($_GET['Search'], $sites);
					if($searchResults=='title'){
						echo
						'
						<div class="col-sm-6 col-md-6">
							<div class="thumbnail" id="news-container">
								<a href="'.$sites['url'].'" target="_blank">
								<h5>"'.$sites['title'].'"</h5>
								</a>
								<img src="'.$sites['urlToImage'].'">
								<div class="caption">
									<p style="font-size: 11px;">"'.$sites['description'].'"</p>
								</div>
							</div>
						</div>
					';
					if ($i == 11){
						break;
						
					}          
				}
			}
		}
		}
				function searchFOXSources(){
			$urlFoxSources = file_get_contents("https://newsapi.org/v1/articles?source=fox-sports&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $urlFoxSourcesArray = json_decode($urlFoxSources, true);
        $foxSources = $urlFoxSourcesArray['articles'];  

				for ($i = 0; $i < count($foxSources); $i++){
				$sites = $urlFoxSourcesArray['articles'][$i];
				if (in_array ($_GET['Search'], $sites)){
					$searchResults = array_search($_GET['Search'], $sites);
					if($searchResults=='title'){
						echo
						'
						<div class="col-sm-6 col-md-6">
							<div class="thumbnail" id="news-container">
								<a href="'.$sites['url'].'" target="_blank">
								<h5>"'.$sites['title'].'"</h5>
								</a>
								<img src="'.$sites['urlToImage'].'">
								<div class="caption">
									<p style="font-size: 11px;">"'.$sites['description'].'"</p>
								</div>
							</div>
						</div>
					';
					if ($i == 11){
						break;
						
					}          
				}
			}
		}
		}
		function searchSBibleSources(){
			$urlSbibleSources = file_get_contents("https://newsapi.org/v1/articles?source=the-sport-bible&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f");
        $urlSbibleSourcesArray = json_decode($urlSbibleSources, true);
        $sbibleSources = $urlSbibleSourcesArray['articles']; 

				for ($i = 0; $i < count($sbibleSources); $i++){
				$sites = $urlSbibleSourcesArray['articles'][$i];
				if (in_array ($_GET['Search'], $sites)){
					$searchResults = array_search($_GET['Search'], $sites);
					if($searchResults=='title'){
						echo
						'
						<div class="col-sm-6 col-md-6">
							<div class="thumbnail" id="news-container">
								<a href="'.$sites['url'].'" target="_blank">
								<h5>"'.$sites['title'].'"</h5>
								</a>
								<img src="'.$sites['urlToImage'].'">
								<div class="caption">
									<p style="font-size: 11px;">"'.$sites['description'].'"</p>
								</div>
							</div>
						</div>
					';
					if ($i == 11){
						break;
						
					}          
				}
			}
		}
		}
		
?>