        <main class="ll" style="padding-left: 20px;padding-right: 30px;height:100vh">
            <div class="login" style="padding-top: 20px">
                <a href="<?php echo base_url('/index.php/login') ?>" class="log">Log In</a>
                <a href="<?php echo base_url('/index.php/register') ?>" class="log">Sign Up</a>
            </div>
            <h2>Ghoul Recipe</h2>
            <h3>Most Popular</h3>
            <div class="card-container">


                <div class="card">
                    <div class="upper">
                        <img src="http://localhost/codeigniter/source/img/img2.jpg" alt="">
                        <div class="label">
                            <span class="tex f">
                                Fresh Human Flesh
                            </span>
                            <span class="s tex">
                                By tsukiyama kei
                            </span>
                        </div>
                        <div class="timer">
                            <span>20 mins</span>
                        </div>
                        <div class="buy">
                            <button class="btns">Buy now</button>
                        </div>
                    </div>
                    <div class="overlay">
                        <button class="btn">Add to Cart</button>
                    </div>
                </div>

                <div class="card">
                    <div class="upper">
                        <img src="http://localhost/codeigniter_proj/source/img/img3.jpg" alt="">
                        <div class="label">
                            <span class="tex f">
                                Fresh Human Flesh
                            </span>
                            <span class="s tex">
                                By tsukiyama kei
                            </span>
                        </div>
                        <div class="timer">
                            <span>20 mins</span>
                        </div>
                    </div>
                    <div class="overlay">
                        <button class="btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ad excepturi consequatur, illo repudiandae exercitationem dolor dolores numquam veritatis rem et facere minus, optio magni at libero quam error nostrum quae. Quam pariatur aut accusamus exercitationem facere! Ducimus dolorum id perferendis, vel quos libero tenetur ea quo dolore ab accusamus architecto? Delectus nesciunt illo impedit laudantium officia alias! Molestiae, fuga atque? Minima, unde vero aliquam minus nemo sed. Officiis tempora quis odit alias maiores sed neque quia tempore ad ut velit possimus aspernatur harum illum nostrum unde commodi officia libero saepe non, excepturi facilis ipsam earum? Incidunt non mollitia saepe autem. Inventore laudantium eaque, aspernatur et porro doloribus provident delectus necessitatibus quisquam laborum ea quam, placeat quis. Consectetur, vitae unde quam magni aut labore, atque placeat rerum voluptas asperiores quaerat hic accusantium architecto quia minima excepturi. Inventore et delectus iste sit aspernatur cupiditate dolorum officia amet saepe perferendis? Reiciendis tenetur blanditiis quis, odit veniam magni. Sapiente quod laboriosam voluptate, vero nisi perferendis tempore laborum iusto labore mollitia a suscipit aspernatur magni nemo itaque veritatis, architecto at in ipsa delectus unde necessitatibus provident cumque. Ex nihil ad aliquam nulla deleniti a voluptatem necessitatibus quasi sint doloremque, corrupti error vitae! Eaque hic facilis beatae quod maiores dolorem non, iusto excepturi sequi quas, maxime ducimus debitis dolorum nobis ratione nam nulla. Accusamus temporibus natus non assumenda, repellat voluptates soluta ad voluptatibus dolorem rerum deleniti error deserunt ipsa est ea nesciunt! Sequi voluptate placeat eaque ea quos ipsa quia repellendus, tempore voluptas exercitationem consequatur vero voluptatem neque laudantium possimus deserunt quidem harum hic ex! Voluptatibus placeat dolor id consequatur sint ipsa vitae voluptatum dignissimos quis, iusto corrupti, ea, laboriosam laudantium reprehenderit unde quo quaerat cum at. Quam et enim recusandae quasi porro rem asperiores vero quidem quod eius, quisquam maxime nesciunt nostrum sed a?</p>
        </main>
        </div>
        <div class="modal">
            <div class="modal-container">
                <div class="icon">
                    <button class="closer"><i class="fa fa-close"></i></button>
                </div>
            </div>
        </div>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./fetch.js"></script>
    <script src="./app.js"></script> -->
        <script>
            document.querySelector('.ll').addEventListener('scroll', (e) => {
                console.log(document.querySelector('.ll').scrollTop);
                console.log('y');
            })
        </script>
        <script src="http://localhost/codeigniter_proj/source/js/app.js"></script>

        </body>

        </html>