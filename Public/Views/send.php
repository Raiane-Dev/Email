<section class="send">
<form method="post" id="form">
        <textarea id="message" name="message" placeholder="I'am Message"></textarea>
        <input type="text" name="to_user" placeholder="Network User ID" />
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
</section>