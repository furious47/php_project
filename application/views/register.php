<main>
    <div class="form_container">
        <div class="form">
            <form action="<?php echo base_url('index.php/register') ?>" method="POST">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="number">Number</label><br>
                <input type='number' id="number" name="number"><br>
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password"><br>
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
</main>
</div>