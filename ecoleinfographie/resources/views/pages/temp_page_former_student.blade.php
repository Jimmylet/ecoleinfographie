@extends('layout')

@section('header')
    @include('partials.header-min')
@endsection

@section('content')
    @include('partials.breadcrumb')

    <article class="former-interview">
        <h2 role="heading" aria-level="2" class="former-interview__title">
            <span>Le parcours de </span>
            <strong>Kévin Dessouroux</strong>
        </h2>
        <section class="former-interview__question">
            <h3>Dans quelle boîte travailles-tu ?</h3>
            <p>EPIC - epic.net Le site souffre de la vieillesse ; une autre version est en cours mais avec le planning chargé, ce n'est pas pour demain… Si je me souviens bien, pour Toon, tu es déjà venu dans nos derniers locaux en date rue Paradis, en face de la gare des Guillemins ; ça n'a pas changé ! À part la couleur d'un mur et quelques lumières en plus ! Ah, et nous sommes environ 13 en ce moment, en partant de 5/6 en 2010 ; pour une idée des effectifs.
            </p>
        </section>
        <section class="former-interview__question">
            <h3>Quelle est ta fonction actuelle ?</h3>
            <p>Dans cette équipe, j'assume actuellement le rôle de front-end developer, tant que le titre de "bidouilleur logique" n'est pas reconnu ! Sur mon contrat par contre, il est autant fait mention de designer que de developer. Tout cela n'est purement que théorique, mais dans de petites structures, de petites équipes, nous ne pouvons nous permettre de rester cloîtrer dans notre seule fonction. Question de planning, de maladies, de vacances, peu importe, il fallait que ça tourne donc il était envisageable de pouvoir endosser plusieurs vestes sur une même journée.
            </p>
        </section>
        <section class="former-interview__question">
            <h3>Quel est ton parcours ?</h3>
            <p>Historiquement, j'ai débuté en tant que web designer avec penchant intégrateur. J'ai fait le design de 2 sites, des newsletters, je déclinais des designs de mes collègues-patrons, etc.
            </p>
            <p>Ensuite je suis assez rapidement passé du côté obscur, du côté du code. Pendant cette phase "intégrateur", nous étions 6 dans l'équipe. Il m'arrivait de continuer quelques déclinaisons de design, en plus petite proportion, et par moment je touchais même à du back-end assez root.
            </p>
            <p>C'est seulement récemment (et d'ailleurs c'est toujours un point en constante évolution) où avec l'arrivée de nouveaux collègues pour renforcer chaque poste, que je peux me concentrer plus exclusivement au "front". Le design, je n'y touche plus (hormis par réflexions avec mes collègues, j'y reviendrai). Le back-end, il m'arrive encore régulièrement de trifouiller mais je dois avouer que c'est plus par envie/curiosité (sans perdre de temps) que par réel besoin car je peux faire appel à mes 2 collègues back-end.</p>
        </section>
    </article>
    <aside class="former-info">
        <img class="former-info__pics" src="./img/kevin-dessouroux.jpg" width="200" height="200" alt="#">
        <h2 role="heading" aria-level="2" class="former-info__name"><span>Quelques informations sur </span>Kévin Dessouroux</h2>
        <span class="former-info__job">Dévelopeur web</span>
        <span class="former-info__diploma">Diplômé en 2012 - Web</span>
        <span class="former-info__company">
            Travaille chez <a href="#">Epic Agency</a>
        </span>
        <ul class="former-info__social-list">
            <li class="former-info__social-item">
                <a href="" class="former-info__social-link"><span>Vers le Facebook de Kévin Dessouroux</span></a>
            </li>
            <li class="former-info__social-item">
                <a href="" class="former-info__social-link"><span>Vers le Facebook de Kévin Dessouroux</span></a>
            </li>
            <li class="former-info__social-item">
                <a href="" class="former-info__social-link"><span>Vers le Facebook de Kévin Dessouroux</span></a>
            </li>
            <li class="former-info__social-item">
                <a href="" class="former-info__social-link"><span>Vers le Facebook de Kévin Dessouroux</span></a>
            </li>
            <li class="former-info__social-item">
                <a href="" class="former-info__social-link"><span>Vers le Facebook de Kévin Dessouroux</span></a>
            </li>
            <li class="former-info__social-item">
                <a href="" class="former-info__social-link"><span>Vers le Facebook de Kévin Dessouroux</span></a>
            </li>
            <li class="former-info__social-item">
                <a href="" class="former-info__social-link"><span>Vers le Facebook de Kévin Dessouroux</span></a>
            </li>
            <li class="former-info__social-item">
                <a href="" class="former-info__social-link"><span>Vers le Facebook de Kévin Dessouroux</span></a>
            </li>
        </ul>
    </aside>






@endsection

