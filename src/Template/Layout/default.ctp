<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <?= $this->Html->css('style.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>

        <!-- JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li>
                    <div class="sidenav-logo"></div>
                </li>
                <li><div class="divider"></div></li>
                <li>
                    <a class="waves-effect" href="<?= $this->Url->build('/'); ?>">
                        <i class="material-icons">home</i>Home
                    </a>
                </li>
                <li>
                    <a class="waves-effect" href="<?= $this->Url->build('/itens/add'); ?>">
                        <i class="material-icons">add</i>Novo Item
                    </a>
                </li>
                <li>
                    <a class="waves-effect" href="#">
                        <i class="material-icons">exit_to_app</i>Sair
                    </a>
                </li>
            </ul>
            <nav>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <div class="breadcrumb-container" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <span class="breadcrumb" property="itemListElement" typeof="ListItem">
                        <a href="<?= $this->Url->build('/'); ?>" property="item" typeof="WebPage" itemprop="url">
                            <span property="name">Home</span>
                        </a>
                    </span> 
                    <span class="breadcrumb" property="itemListElement" typeof="ListItem">
                        <span property="name">Itens</span>
                    </span>
                </div>
            </nav>
        </header>

        <main>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </main>
               
            
        <!-- JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <?= $this->Html->script('jquery.mask.min') ?>
        <?= $this->Html->script('jquery.mask-config') ?>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
            });
        </script>
    
        <?= $this->fetch('script') ?>
    </body>
</html>
