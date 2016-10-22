<!--
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : How to parse JSON file with PHP
-->

<?php
// copy file content into a string var
$json_file = file_get_contents('https://api.zalando.com/articles?fullText=hoodies');
// convert the string to a json object
	$jfo = json_decode($json_file);
// read the title value

$testjson = json_decode($json_file, true);
$title = $jfo->content;


$id = $testjson['content']['0']['id'];
$name = $testjson['content']['0']['name'];
$price = $testjson['content']['0']['units']['0']['price']['value'];
$media = $testjson['content']['0']['media']['images']['1']['mediumHdUrl'];
$id1 = $testjson['content']['1']['id'];
$name1 = $testjson['content']['1']['name'];
$price1 = $testjson['content']['1']['units']['0']['price']['value'];
$media1 = $testjson['content']['1']['media']['images']['1']['mediumHdUrl'];
$id2 = $testjson['content']['2']['id'];
$name2 = $testjson['content']['2']['name'];
$price2 = $testjson['content']['2']['units']['0']['price']['value'];
$media2 = $testjson['content']['2']['media']['images']['1']['mediumHdUrl'];
$id3 = $testjson['content']['3']['id'];
$name3 = $testjson['content']['3']['name'];
$price3 = $testjson['content']['3']['units']['0']['price']['value'];
$media3 = $testjson['content']['3']['media']['images']['1']['mediumHdUrl'];
$id4 = $testjson['content']['4']['id'];
$name4 = $testjson['content']['4']['name'];
$price4 = $testjson['content']['4']['units']['0']['price']['value'];
$media4 = $testjson['content']['4']['media']['images']['1']['mediumHdUrl'];
$id5 = $testjson['content']['5']['id'];
$name5 = $testjson['content']['5']['name'];
$price5 = $testjson['content']['5']['units']['0']['price']['value'];
$media5 = $testjson['content']['5']['media']['images']['1']['mediumHdUrl'];
$id6 = $testjson['content']['6']['id'];
$name6 = $testjson['content']['6']['name'];
$price6 = $testjson['content']['6']['units']['0']['price']['value'];
$media6 = $testjson['content']['6']['media']['images']['1']['mediumHdUrl'];
$id7 = $testjson['content']['7']['id'];
$name7 = $testjson['content']['7']['name'];
$price7 = $testjson['content']['7']['units']['0']['price']['value'];
$media7 = $testjson['content']['7']['media']['images']['1']['mediumHdUrl'];
$id8 = $testjson['content']['8']['id'];
$name8 = $testjson['content']['8']['name'];
$price8 = $testjson['content']['8']['units']['0']['price']['value'];
$media8 = $testjson['content']['8']['media']['images']['1']['mediumHdUrl'];
$id9 = $testjson['content']['9']['id'];
$name9 = $testjson['content']['9']['name'];
$price9 = $testjson['content']['9']['units']['0']['price']['value'];
$media9 = $testjson['content']['9']['media']['images']['1']['mediumHdUrl'];
$id10 = $testjson['content']['10']['id'];
$name10 = $testjson['content']['10']['name'];
$price10 = $testjson['content']['10']['units']['0']['price']['value'];
$media10 = $testjson['content']['10']['media']['images']['1']['mediumHdUrl'];
$id11 = $testjson['content']['11']['id'];
$name11 = $testjson['content']['11']['name'];
$price11 = $testjson['content']['11']['units']['0']['price']['value'];
$media11 = $testjson['content']['11']['media']['images']['1']['mediumHdUrl'];
$id12 = $testjson['content']['12']['id'];
$name12 = $testjson['content']['12']['name'];
$price12 = $testjson['content']['12']['units']['0']['price']['value'];
$media12 = $testjson['content']['12']['media']['images']['1']['mediumHdUrl'];
$id13 = $testjson['content']['13']['id'];
$name13 = $testjson['content']['13']['name'];
$price13 = $testjson['content']['13']['units']['0']['price']['value'];
$media13 = $testjson['content']['13']['media']['images']['1']['mediumHdUrl'];
$id14 = $testjson['content']['14']['id'];
$name14 = $testjson['content']['14']['name'];
$price14 = $testjson['content']['14']['units']['0']['price']['value'];
$media14 = $testjson['content']['14']['media']['images']['1']['mediumHdUrl'];
$id15 = $testjson['content']['15']['id'];
$name15 = $testjson['content']['15']['name'];
$price15 = $testjson['content']['15']['units']['0']['price']['value'];
$media15 = $testjson['content']['15']['media']['images']['1']['mediumHdUrl'];
$id16 = $testjson['content']['16']['id'];
$name16 = $testjson['content']['16']['name'];
$price16 = $testjson['content']['16']['units']['0']['price']['value'];
$media16 = $testjson['content']['16']['media']['images']['1']['mediumHdUrl'];
$id17 = $testjson['content']['17']['id'];
$name17 = $testjson['content']['17']['name'];
$price17 = $testjson['content']['17']['units']['0']['price']['value'];
$media17 = $testjson['content']['17']['media']['images']['1']['mediumHdUrl'];
$id18 = $testjson['content']['18']['id'];
$name18 = $testjson['content']['18']['name'];
$price18 = $testjson['content']['18']['units']['0']['price']['value'];
$media18 = $testjson['content']['18']['media']['images']['1']['mediumHdUrl'];
$id19 = $testjson['content']['19']['id'];
$name19 = $testjson['content']['19']['name'];
$price19 = $testjson['content']['19']['units']['0']['price']['value'];
$media19 = $testjson['content']['19']['media']['images']['1']['mediumHdUrl'];

print_r($media);
//print_r(json_decode($json_file, true));



//echo varDumpToString($p2['media']);
// copy the posts array to a php var

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>How to parse JSON file with PHP</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>



<div class="container">
  <h2>Image Gallery</h2>
  <p>The .thumbnail class can be used to display an image gallery. Click on the images to see it in full size:</p>
  <div class="row">
    <div class="col-md-4">
      <a href="/item.php?id=<?php print_r($id); ?>" class="thumbnail">
        <p><?php print_r($name); ?></p>
        <img src="<?php print_r($media); ?>" alt="<?php print_r($price); ?>" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id1); ?>" class="thumbnail">
        <p><?php print_r($name1); ?></p>
        <img src="<?php print_r($media1); ?>" alt="<?php print_r($price1); ?>" style="width:150px;height:150px">
      </a>
    </div>
  <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id2); ?>" class="thumbnail">
        <p><?php print_r($name2); ?></p>
        <img src="<?php print_r($media2); ?>" alt="<?php print_r($price2); ?>" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id3); ?>" class="thumbnail">
        <p><?php print_r($name3); ?></p>
        <img src="<?php print_r($media3); ?>" alt="<?php print_r($price3); ?>" style="width:150px;height:150px">
      </a>
    </div>
<div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id4); ?>" class="thumbnail">
        <p><?php print_r($name4); ?></p>
        <img src="<?php print_r($media4); ?>" alt="<?php print_r($price4); ?>" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id5); ?>" class="thumbnail">
        <p><?php print_r($name5); ?></p>
        <img src="<?php print_r($media5); ?>" alt="<?php print_r($price5); ?>" style="width:150px;height:150px">
      </a>
    </div>
<div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id6); ?>" class="thumbnail">
        <p><?php print_r($name6); ?></p>
        <img src="<?php print_r($media6); ?>" alt="<?php print_r($price6); ?>" style="width:150px;height:150px">
      </a>
    </div>
   <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id7); ?>" class="thumbnail">
        <p><?php print_r($name7); ?></p>
        <img src="<?php print_r($media7); ?>" alt="<?php print_r($price7); ?>" style="width:150px;height:150px">
      </a>
    </div>
     <div class="col-md-4">
      <a href="/item.php?id=<?php print_r($id8); ?>" class="thumbnail">
        <p><?php print_r($name8); ?></p>
        <img src="<?php print_r($media8); ?>" alt="<?php print_r($price8); ?>" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id9); ?>" class="thumbnail">
        <p><?php print_r($name9); ?></p>
        <img src="<?php print_r($media9); ?>" alt="<?php print_r($price9); ?>" style="width:150px;height:150px">
      </a>
    </div>
  <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id10); ?>" class="thumbnail">
        <p><?php print_r($name10); ?></p>
        <img src="<?php print_r($media10); ?>" alt="<?php print_r($price10); ?>" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id11); ?>" class="thumbnail">
        <p><?php print_r($name11); ?></p>
        <img src="<?php print_r($media11); ?>" alt="<?php print_r($price11); ?>" style="width:150px;height:150px">
      </a>
    </div>
  <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id12); ?>" class="thumbnail">
        <p><?php print_r($name12); ?></p>
        <img src="<?php print_r($media12); ?>" alt="<?php print_r($price12); ?>" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id13); ?>" class="thumbnail">
        <p><?php print_r($name13); ?></p>
        <img src="<?php print_r($media13); ?>" alt="<?php print_r($price13); ?>" style="width:150px;height:150px">
      </a>
    </div>
<div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id14); ?>" class="thumbnail">
        <p><?php print_r($name14); ?></p>
        <img src="<?php print_r($media14); ?>" alt="<?php print_r($price14); ?>" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id5); ?>" class="thumbnail">
        <p><?php print_r($name15); ?></p>
        <img src="<?php print_r($media15); ?>" alt="<?php print_r($price15); ?>" style="width:150px;height:150px">
      </a>
    </div>
<div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id16); ?>" class="thumbnail">
        <p><?php print_r($name16); ?></p>
        <img src="<?php print_r($media16); ?>" alt="<?php print_r($price16); ?>" style="width:150px;height:150px">
      </a>
    </div>
   <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id17); ?>" class="thumbnail">
        <p><?php print_r($name17); ?></p>
        <img src="<?php print_r($media17); ?>" alt="<?php print_r($price17); ?>" style="width:150px;height:150px">
      </a>
    </div>
     <div class="col-md-4">
      <a href="/item.php?id=<?php print_r($id18); ?>" class="thumbnail">
        <p><?php print_r($name18); ?></p>
        <img src="<?php print_r($media18); ?>" alt="<?php print_r($price18); ?>" style="width:150px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
    <a href="/item.php?id=<?php print_r($id19); ?>" class="thumbnail">
        <p><?php print_r($name19); ?></p>
        <img src="<?php print_r($media19); ?>" alt="<?php print_r($price19); ?>" style="width:150px;height:150px">
      </a>
    </div> 
</div>



    <div class="container">
        <div class="header">
            <img src="images/BeWebDeveloper.png" />
        </div><!-- header -->
        <h1 class="main_title"></h1>
        <div class="content">
            
            <ul class="ul_json clearfix">
            
                <?php
                foreach ($title as $post) {
                ?>
                <li>
                    <a href="<?php echo $post->id; ?>">
                        <h2><?php echo $post->name; ?></h2>
                    </a>
              
                </li>
             <?php
                } // end foreach
                ?>
            </ul>
            
        </div><!-- content -->    
       
      
        <div class="footer">
            Powered by <a href="http://www.bewebdeveloper.com">bewebdeveloper.com</a>
        </div><!-- footer -->
    </div><!-- container -->
</body>
</html>
