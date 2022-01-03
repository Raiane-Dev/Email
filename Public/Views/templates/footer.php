</main>
<aside>
    <div class="header-aside">
        <ul class="list-inline">
            <li><a href=""><i data-feather="star"></i></a></li>
            <li><a href=""><i data-feather="star"></i></a></li>
            <li><a href=""><i data-feather="star"></i></a></li>
            <li><a href=""><i data-feather="star"></i></a></li>
        </ul>
    </div>
    <div class="divider"></div>

    <div class="two-columns-bedroom">
        <div>
            <img src="<?= URL_DIRECTORIES ?>Storage/email.jpg" class="bool" />
        </div>
        <div>
            <h4>Lorem ipsum user</h4>
            <span class="info">Lorem ipsum dolor amet.</span>
        </div>
    </div>

    <div class="message">
        <h2>Documentation</h2>
        <div id="boxes">
            <div class="box-message">Lorem</div>
            <?php 
                foreach($chat as $key => $msg){
                $user = $class::selectSingle($msg['from_user']);
            ?>
                <div class="box-message"><?= $user['ip']; ?>: <br /> <?= $msg['message']; ?></div>
            <?php } ?>
        </div>    
        <div class="file">

        </div>

        <div class="response hide">
            <form method="post" id="form">
                <textarea id="message" name="message" placeholder="I'am Message"></textarea>
                <input type="hidden" name="to_user" value="<?= $to_user ?>" />
                <div class="inline flex">
                    <input type="hidden" id="x"/><i for="x" data-feather="x"></i>
                    <input type="hidden" id="file-minus"/><i for="file-minus" data-feather="file-minus"></i>
                    <input type="file" accept="audio/*" id="audio"/><i for="audio" data-feather="headphones"></i>
                    <input type="file" accept=".mp4, .mp3" id="video"/><i for="video" data-feather="video"></i>
                    <input type="file" accept=".pdf, .doc" id="file-text"/><i for="file-text" data-feather="file-text"></i>
                    <input type="file" accept=".png, .jpeg, .jpg" id="image"/><i for="image" data-feather="image"></i>
                </div>
        </div>

            <div class="footer">
                <button type="submit" name="response" id="response"> <i data-feather="send"></i> Send as Client</button>
                <button type="submit" name="send" id="send"> <i data-feather="pen-tool"></i> Reload</button>
            </form>
        </div>
    </div>
</aside>
<script>
    feather.replace()
</script>
<script src="<?= URL_DIRECTORIES ?>js/script.js"></script>
</body>
</html>