<?=$render('header', ['loggedUser'=>$loggedUser]);?>

<section class="container main">

    <?=$render('sidebar', ['activeMenu'=>'home']);?>

    <section class="feed mt-10">
            
        <div class="row">
            
            <div class="column pr-5">

                <?=$render('feed-editor', ['user'=>$loggedUser]);?>

            </div>

                <div class="column side pl-5">
                    <div class="box banners">
                        <div class="box-header">
                            <div class="box-header-text">Patrocinios</div>
                            <div class="box-header-buttons">
                                
                            </div>
                        </div>
                        <div class="box-body">
                            <a href=""><img src="https://alunos.b7web.com.br/media/courses/php-nivel-1.jpg" /></a>
                            <a href=""><img src="https://alunos.b7web.com.br/media/courses/laravel-nivel-1.jpg" /></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body m-10">
                            Criado com ❤️ por B7Web
                        </div>
                    </div>
                </div>

            </div>

        </section>

</section>
<?=$render('footer');?>