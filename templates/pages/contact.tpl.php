

    <div class="homepage">

        <div class="col-md-12 col-lg-5">




        <div>
        <h1>Contact</h1>
        <form name="contact" action="?page=message" onsubmit="return check();" method="post">
        <div>
            <label><input type="text" id="name" name="name" size="20" maxlength="40" placeholder="Name (min. 5 characters):"></label>
            <br/>
            <label><input type="text" id="email" name="email" size="30" maxlength="40" placeholder="E-mail (required): "></label>
            <br/>
            <label> <textarea id="textarea" name="textarea" cols="40" rows="10"></textarea placeholder="Message (required): "></label>
            <br/>
            <input id="send" type="submit" value="Send">
            <button onclick="check();" type="button">Check</button>
        </div>
        </form>
        </div>
    </div>
        



