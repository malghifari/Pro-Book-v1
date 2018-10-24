<?php
  require_once('../../Config/Config.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Detail</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pathway+Gothic+One" rel="stylesheet">
		<link rel="stylesheet" href="../../public/css/global.css" type="text/css"/>
		<link rel="stylesheet" href="../../public/css/header.css" type="text/css"/>
    <link rel="stylesheet" href="../../public/css/book-detail.css" type="text/css"/>
	</head>
  <body>
    <div class="frame">
      <?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php"?>
      <div class="flex-container">
        <div class="description">
          <h1>NOTA HIDUP</h1>
            <h6>Light R. D. B.</h6>
            <p>Buku ajaib yang berisi nama-nama orang terpilih. <br>Jika namamu tertulis di buku ini maka kamu adalah salah satu orang yang beruntung</p>
          </div>
        <div class="image-rating">
          <img src="../../mocks/tayo.jpg" alt="foto-buku">
          <div class="rating">
          </div>
        </div>               
      </div>
      <form action="<?php echo Config::APP_URL . '/Controller/BookDetailController.php' ?>" method="post">
        <h3>Order</h3>
        <div class="form-input-attr">
          <label for="jumlah">Jumlah:</label>
          <select name="jumlah">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <div id="order-button">
          <input type="submit" value="Order">
        </div>
      </form>
      <div class="review">
        <?php
          $reviews = array(
            '1' => 'tes1',
            '2' => 'tes2',
            '3' => 'tes3',
            '4' => 'tes4',
          );
          foreach ($reviews as $review) {
            echo $view = 
            "<div class='flex-container'>
              <div class='avatar'>
                <img src=" . '#' . " alt='tesdoang'>
              </div>
              <div class='review'>
                <h6>".'alghi'."</h6>
                <p>".'jadi gini ini tes doang blablablablbalblablbla'."</p>
              </div>
              <div class='rating'>
                RATING
              </div>
            </div>";
          }
        ?>
      </div>
    </div>
  </body>
</html>