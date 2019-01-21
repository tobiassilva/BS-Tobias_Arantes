<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- pega o titulo da page automaticamente pelo wp -->
    <title><?php wp_title(); ?></title>
    <!-- responsavel por pegar o css do style -->
    <!-- verifica se na raiz do site tem um arquivo chamado style.css -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    <!-- puxa todos os scripts do wp para o site (animacoes, etc) -->
    <?php wp_head(); ?>

</head>
<body>
    
    <div class="divPageImpar" id="header">
        <div class="topo">
            <!-- site_url() pega a url do site -->
            <!-- bloginfo( 'name' ) pega o nome do site -->
            <div class="headerLeft">
            <a href="<?php echo site_url(); ?>" title="<?php bloginfo( 'name' ); ?>" class="headerLeft">
                <div class="logo">
                
                </div>
            </a>
            </div>
            
            <div class="headerCenter">
                dsadasas
            </div>
            <div class="headerRight">
                22222222222
            </div>
            
        </div>
    </div>