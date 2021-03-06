<?php

class HomeController extends Controller{

  public function index(){
    
    $feed = "http://feeds.reuters.com/reuters/technologyNews";    
    $rss = new RssDisplay($feed);
    
    $feed_data = $rss->getFeedItems(8);
    
    $channel_title = $feed_data['title'];
    $channel_feed = $feed_data['items'];
    
    $this->set('rss_title',$channel_title);
    $this->set('rss_feed',$channel_feed);
    
	}
	
	
}
