<?php 
    include_once("templates/header.php");
    
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>" srcset="">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero delectus non fugiat porro earum temporibus deserunt neque est fugit tempore a voluptatum dolorem, debitis eaque! Eaque deserunt minima culpa error.
                Assumenda animi voluptas commodi ea quos, quam hic dolores molestias nihil non modi nam, expedita harum, tempore obcaecati. Consequuntur optio excepturi tenetur quis et cupiditate nam distinctio soluta ea magni!
                Quis hic dolore ad reprehenderit optio. Dolorum dolorem, omnis, minima minus laboriosam molestiae quod in veritatis iure illum reiciendis! Ullam autem quaerat nam eveniet! Harum a ea voluptas deserunt cumque.
                Magni, amet illum explicabo hic corporis consequatur modi maiores quibusdam impedit. Odio consequuntur, odit excepturi corporis cum autem iusto molestiae ea repellendus hic architecto non necessitatibus, aspernatur placeat, reiciendis dicta.
                Architecto saepe aspernatur exercitationem repellendus distinctio recusandae iste, odit incidunt asperiores quis labore sunt aut enim dignissimos pariatur, deleniti magni quod debitis culpa, iure nulla! Illo soluta maxime accusamus rem?
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero delectus non fugiat porro earum temporibus deserunt neque est fugit tempore a voluptatum dolorem, debitis eaque! Eaque deserunt minima culpa error.
                Assumenda animi voluptas commodi ea quos, quam hic dolores molestias nihil non modi nam, expedita harum, tempore obcaecati. Consequuntur optio excepturi tenetur quis et cupiditate nam distinctio soluta ea magni!
                Quis hic dolore ad reprehenderit optio. Dolorum dolorem, omnis, minima minus laboriosam molestiae quod in veritatis iure illum reiciendis! Ullam autem quaerat nam eveniet! Harum a ea voluptas deserunt cumque.
                Magni, amet illum explicabo hic corporis consequatur modi maiores quibusdam impedit. Odio consequuntur, odit excepturi corporis cum autem iusto molestiae ea repellendus hic architecto non necessitatibus, aspernatur placeat, reiciendis dicta.
                Architecto saepe aspernatur exercitationem repellendus distinctio recusandae iste, odit incidunt asperiores quis labore sunt aut enim dignissimos pariatur, deleniti magni quod debitis culpa, iure nulla! Illo soluta maxime accusamus rem?
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
    

<?php 
    include_once("templates/footer.php")

?>