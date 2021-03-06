<header class="header header-shawl" role="banner">
    <div class="header__wrapper">
        <h1 role="heading" aria-level="1" class="header-min__title">
		        Les réalisations de nos étudiants | École d’infographie de la Province de Liège
        </h1>
        <a href="/" class="logo">Logo</a>
        @include('partials.navigation')

        <div class="breadcrumb breadcrumb--header">
            <ol class="breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope
                    itemtype="http://schema.org/ListItem">
                    <a href="#" class="breadcrumb__link breadcrumb__link--home" itemscope itemtype="http://schema.org/Thing"
                       itemprop="item">
                        <span itemprop="name">Page d’accueil</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope
                    itemtype="http://schema.org/ListItem">
                    <a href="#" class="breadcrumb__link breadcrumb__link--active" itemscope itemtype="http://schema.org/Thing"
                       itemprop="item">
                        <span itemprop="name">Les travaux de nos étudiants</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>


        <div class="header-rea">
            <strong class="header-rea__title">Les travaux de nos étudiants</strong>
            <p class="header-rea__intro">Chaque années, nos étudiants réalisent au cours de leur formation des travaux dispensés par leurs professeurs ou des clients. En voici une sélection afin de vous montrer ce qu’il est possible d’accomplir grâce à la formation en Infographie.</p>
        </div>
        <img src="./img/rea-tablet.png" width="393" height="274" alt="" class="header-rea__tablet" srcset="./img/rea-tablet@2x.png 2x">
        <img src="./img/rea-phone.png" width="110" height="149" alt="" class="header-rea__phone" srcset="./img/rea-phone@2x.png 2x">
    </div>
    <div class="rea-printer-wrapper">
        <div class="rea-printer__A4-wrapper">
            <img src="./img/rea-A4.png" width="177" height="186" alt="" srcset="./img/rea-A4@2x.png 2x" class="header-rea__A4">
        </div>
        <img src="./img/rea-printer.png" width="500" height="471" alt="" class="header-rea__printer" srcset="./img/rea-printer@2x.png 2x">
    </div>
</header>

<div class="container" id="contenu">
