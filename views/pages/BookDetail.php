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
		<link rel="stylesheet" href="../../public/css/global.css" type="text/css"/>
		<link rel="stylesheet" href="../../public/css/header.css" type="text/css"/>
    <link rel="stylesheet" href="../../public/css/book-detail.css" type="text/css"/>
	</head>
  <body>
    <div class="frame">
      <?php include Config::DOCUMENT_ROOT . "/views/includes/Header.php";?>
      <div class="container">
        <div class="flex-container">
          <div class="description">
            <h1><?php echo $reviews[0]['title'] ?></h1>
            <h3><?php echo $reviews[0]['author'] ?></h3>
            <div class="desc"><?php echo $reviews[0]['description'] ?></div>
          </div>
          <div class="image-rating">
            <img src='<?php "../../public/img/" . $reviews[0]['bookAvatar']?>' alt="foto-buku">
            <div class="rating">
            </div>
          </div>               
        </div>
        <form action="<?php echo Config::APP_URL . '/Controller/BookDetailController.php' ?>" method="post">
          <h3>Order</h3>
          <div class="form-input-attr">
            <label for="quantity">Jumlah:</label>
            <select name="quantity" id="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="4">5</option>
              <option value="4">6</option>
              <option value="4">7</option>
            </select>
          </div>
          <div id="order-button">
            <input type="submit" value="Order" name="Order">
          </div>
          <input type="hidden" value="<?php echo $_GET['id-book']?>" name="idbook" id="idbook">
          <input type="hidden" value="<?php echo $_COOKIE['username']?>" name="username" id="username">
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
    <script src="../../public/js/BookDetail.js"></script>
  </body>
</html>