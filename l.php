<?php
$urls=readStack();
if(empty($urls)) {
         $urls = shuffle(array('https://a.com', 
                'http://b.com', 
                'http://c.com', 
                'http://d.com',
                'https://e.com',
                'https://f.com'
               )); 
$url=array_pop($urls);
storeStack($urls);
header('Location: ' . $url);
