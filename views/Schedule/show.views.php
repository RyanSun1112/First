<?php 
 require  base_path('views/Partial/header.php');
 require base_path('views/Partial/nav.php') 
 ?>

  <?php require base_path('views/Partial/banner.php');?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- <ul class = "list-style-type:none">
        <?php foreach($schedule as $note):?>
            <li > 
                <a href = "/note?id=<?= $note['id']?>" class = "text-blue-500 hover:underline">
                <?= htmlspecialchars($note['body']) ?> 
                 </a> 
            </li>
            <?php endforeach;?>
        </ul> -->
        <p class = "mb-6" > 
            <a href = "/Schedule" class = "text-blue-500 underline"> go back ..</a>
        </p>
        <?= $note['body'] ?>

        <footer class= "mt-6"> 

        <a href = "/note/edit?id=<?= $note['id']?>" class = "text-gray-500 border-current border px-3 py-2 rounded"> Edit </a>
        </footer>
        <!-- <form class = "mt-6" method = "POST">
            <input type = "hidden" name = "_method" value = "DELETE">
            <input type = "hidden"name = "id" value="<?= $note['id']?>">
            <button class = "text-sm text-red-500"> Delete </button>
        </form> -->
    </div>
  </main>
<?php require base_path('views/Partial/footer.php');
 ?>