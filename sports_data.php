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

?>