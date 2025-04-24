<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nōtus</title>
    <link rel="stylesheet" href="css/tailwind.css" />
  </head>
  <body class="flex flex-row w-full min-h-screen bg-[#f8f9fa]"style="font-family: 'Inter', sans-serif">
    <?php include_once('components/sidebar.php'); ?>
    <div class="flex flex-col w-full">
      <?php include_once('components/header.php'); ?>

      <!-- Dashboard (put in diff file and include here) -->
      <div class="flex flex-col px-24 py-12 gap-8 h-14 w-[86%] ml-[14%]">
        <?php include_once('components/dashboard.php'); ?>

        <!-- To do list section (Put in diff file and include here) -->
         <?php include_once('components/todoList.php');  ?>
      </div>
    </div>
  </body>
</html>
