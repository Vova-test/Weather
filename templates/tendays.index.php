<?php require_once(ROOT_PATH . "/templates/partials/header.php"); ?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <details>
                <summary>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                    gravida iaculis arcu, et hendrerit arcu. Morbi rhoncus ex quam, quis.
                </summary>
                Content goes here.
            </details>
        </div>
        <div class="row justify-content-center">
            <details>
                <summary>Question 1</summary>
                <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
                <details>
                    <summary>Related documents</summary>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet,  consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Aliquam tincidunt mauris eu  risus.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet,  consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Aliquam tincidunt mauris eu  risus.</a></li>
                    </ul>
                </details>
            </details>
        </div>
    </div>
</main>

<?php require_once(ROOT_PATH . "/templates/partials/footer.php"); ?>
<pre>
    <?php print_r($mainTag); ?>
</pre>