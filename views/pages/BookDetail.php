<?php
  require_once('../../Config/Config.php');
  include Config::DOCUMENT_ROOT . '/Controller/BookDetailController.php';
  $_SESSION['page'] = 'Search';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Detail</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pathway+Gothic+One|Varela+Round" rel="stylesheet">
		<link rel="stylesheet" href="../../public/css/global.css" type="text/css"/>
		<link rel="stylesheet" href="../../public/css/header.css" type="text/css"/>
    <link rel="stylesheet" href="../../public/css/book-detail.css" type="text/css"/>
	</head>
  <body>
    <div class="frame">
      <?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php"?>
      <div class="container">
        <div class="flex-container">
          <div class="description">
            <h1>Nota Hidup</h1>
            <h3>Light R. D. B.</h3>
            <div class="desc">Buku ajaib yang berisi nama-nama orang terpilih. <br>Jika namamu tertulis di buku ini maka kamu adalah salah satu orang yang beruntung</div>
          </div>
          <div class="image-rating">
            <img src="../../public/img/tayo.jpg" alt="foto-buku">
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
          <table>
            <tr>
              <th style="width: 15%"></th>
              <th style="width: 50%"></th>
              <th style="width: 25%"></th>
            </tr>
            <?php
              foreach ($reviews as $review) {
                echo $view = 
                "<tr>
                  <td>
                    <img src=" . '../../public/img/' . $review['avatar'] . " alt='tesdoang'>
                  </td>
                  <td>
                    <h3>". $review['username']."</h3>
                    ". $review['content']."
                  <td>
                  <td"
                    . $review['rating']."
                  <td>
                </tr>";
              }
            ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>