<?php defined('C5_EXECUTE') or die("Access Denied.") ?>

<h1>Mentions légales</h1>

<h2>Informations générales</h2>

<p>Propriétaire : <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?><br />

Adresse : <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.adresse')) ?><br />

<?php if (Coteo\Helpers::get_site_config('disclaimer.capital_social')) { ?>
Capital Social : <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.capital_social')) ?><br />
<?php } ?>

<?php if (Coteo\Helpers::get_site_config('disclaimer.numero_tva')) { ?>
Numéro de TVA : <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.numero_tva')) ?><br />
<?php } ?>

<?php if (Coteo\Helpers::get_site_config('disclaimer.rcs')) { ?>
RCS : <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.rcs')) ?><br />
<?php } ?>

<?php if (Coteo\Helpers::get_site_config('disclaimer.siret')) { ?>
Numéro de SIRET : <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.siret')) ?><br />
<?php } ?>

<?php if (Coteo\Helpers::get_site_config('disclaimer.date_creation')) { ?>
Année de création du site : <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.date_creation')) ?><br />
<?php } ?>

<?php if (Coteo\Helpers::get_site_config('disclaimer.responsable_publication')) { ?>
Responsable de publication : <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.responsable_publication')) ?><br />
<?php } ?>

Ce site a été créé par : <a href="http://www.coteo.net/" target="_blank">Agence Coteo</a><br />
Ce site est maintenu par : <a href="http://www.coteo.net/" target="_blank">Agence Coteo</a>

<?php if (Coteo\Helpers::get_site_config('disclaimer.supplements')) { ?>
<p><?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.supplements')) ?></p>
<?php } ?>

<h2>Contenu du site</h2>

<p>On entend par contenu du site la structure générale, les textes, les images animées ou non, et les sons dont le site est composé.<br>
<?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> se réserve le droit de modifier ou de corriger le contenu de ce site à tout moment et sans préavis.</p>


<h2>Conception technique du site</h2>

<p>La conception des pages du site a été réalisée pour une résolution à l'écran de l'ordinateur de l'utilisateur de 1024*768 en milliers de couleurs ou plus.<br>
Pour l'affichage de certains documents proposés au format PDF ou flash l'ordinateur de l'internaute doit disposer d'un logiciel tel que Acrobat Reader, et d'un plug-in flash téléchargeables gratuitement sur le site www.adobe.fr<br>
Les informations affichées sur l'écran de l'internaute sont au format HTML.</p>


<h2>Décharge de responsabilité</h2>

<p><?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> n’est tenue que d’une simple obligation de moyens concernant les informations qu’elle met à disposition des personnes qui accèdent à son site Internet.<br>
Alors même que nous avons effectué toutes les démarches pour nous assurer de la fiabilité des informations contenues sur ce site Internet, <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> ne peut encourir aucune responsabilité du fait d’erreurs, d’omissions, où pour les résultats qui pourraient être obtenus par l’usage de ces informations. Notamment, l’usage des liens hypertextes peut conduire votre consultation de notre site vers d’autres serveurs pour prendre connaissance de l’information recherchée, serveurs sur lesquels <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> n’a aucun contrôle.</p>


<h2>Droits de propriété intellectuelle</h2>

<p>Conformément au code de la propriété intellectuelle, l’internaute dispose exclusivement :<br>
- D’un droit d'usage privé, personnel et non transmissible sur le contenu du site ou de l'un de ses éléments ;<br>
- D’un droit de reproduction pour stockage aux fins de représentation sur un écran mono poste et de reproduction, en un exemplaire, pour copie de sauvegarde ou tirage sur papier.<br>
Tout autre usage est soumis à l'autorisation express préalable de <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> ou des producteurs de contenus concernés. Il en est ainsi de toute représentation et/ou reproduction, même partielle du contenu de ce site et/ou de l'un de ses éléments et notamment :<br>
- A des fins commerciales et/ou publicitaires et/ou de distribution ;<br>
- A des fins d’utilisation de l'un des éléments du site dans un environnement informatique en réseau. Sont notamment interdites la présentation d'une page de ce site dans un cadre n'appartenant pas à <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> (par la technique du « framing ») ainsi que l'insertion d'une image appartenant à <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> dans une page n'appartenant pas à <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> (par la technique du « in line linking ») ;<br>
- L’extraction répétée et systématique d'éléments protégés ou non du site causant un préjudice quelconque à <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> ou aux producteurs de contenus. Sont notamment visés les éléments protégés par les articles L 341-1 et suivants du Code de la Propriété Intellectuelle.<br>
<?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> avise les utilisateurs de ce site que de nombreux éléments de ce site :<br>
a) sont protégés par la législation sur le droit d'auteur : ce peut être notamment le cas des photographies, des articles, des dessins, des séquences animées,...;<br>
b) et/ou sont protégés par la législation sur les dessins et modèles ;<br>
c) sont protégés par la législation sur les marques.<br>
Les éléments ainsi protégés sont la propriété de <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> ou de tiers ayant autorisé <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> à les exploiter.<br>
A ce titre, toute reproduction, représentation, utilisation, adaptation, modification, incorporation, traduction, commercialisation, partielles ou intégrales par quelque procédé et sur quelque support que ce soit (papier, numérique, ...) sont interdites, sans l'autorisation écrite préalable de <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?>, hormis les exceptions visées à l'article L 122.5 du Code de la Propriété Intellectuelle, sous peine de constituer un délit de contrefaçon de droit d'auteur et/ou de dessins et modèles et/ou de marque. La violation de ces dispositions peut entraîner l’application des sanctions pénales et civiles prévues par la législation en vigueur. (puni de deux ans d'emprisonnement et de 150 000 € d’amende à cette date).<br>
Droits d'auteur et/ou Droits sur les Dessins et Modèles<br>
Le présent site constitue une oeuvre dont <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> est l'auteur au sens des articles L. 111.1 et suivants du Code de la propriété intellectuelle. La conception et le développement dudit site ont été assurés par la société Coteo.<br>
Les photographies, textes, slogans, dessins, images, séquences animées sonores ou non ainsi que toutes les oeuvres intégrées dans le site sont la propriété de <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> ou de tiers ayant autorisés <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> à les utiliser.<br>
Les reproductions, sur un support papier ou informatique, dudit site sont autorisées sous réserve qu'elles soient strictement réservées à un usage personnel excluant tout usage à des fins publicitaires et/ou commerciales et/ou d'information et/ou qu'elles soient conformes aux dispositions de l'article L122-5 du Code de la Propriété Intellectuelle.</p>


<h2>La reproduction sur support papier</h2>

<p>A l’exception de l'iconographie, la reproduction des pages de ce site sur un support papier est autorisée, sous réserve du respect des trois conditions suivantes :<br>
- gratuité de la diffusion ;<br>
- respect de l'intégrité des documents reproduits (aucune modification, ni altération d'aucune sorte) ;<br>
- citation explicite de ce site comme source et mention que les droits de reproduction sont réservés et strictement limités.</p>


<h2>La reproduction sur support électronique</h2>

<p>La reproduction de tout ou partie de ce site sur un support électronique est autorisée sous réserve de l'ajout de façon claire et lisible de la source et de la mention "Droits réservés".<br>
Les informations utilisées ne doivent l'être qu'à des fins personnelles, associatives ou professionnelles.</p>


<h2>Protection des données personnelles</h2>

<p>La consultation du site est possible sans que vous ayez à révéler votre identité ou toute autre information à caractère personnel vous concernant.<br>
Concernant les informations à caractère nominatif que vous seriez amenés à nous communiquer, vous bénéficiez d'un droit d'accès et de rectification conformément à la loi française Informatique et Liberté n° 78-17 du 6 janvier 1978. Vous pouvez exercer ce droit auprès de COTEO – 2 Rue des Coins 62100 CALAIS.<br>
La collecte de ces informations est nécessaire pour répondre à vos demandes d’offres commerciales et vous adresser, le cas échéant, une lettre d'information électronique.<br>
Si vous êtes abonnés à des services d'information par courrier électronique (" newsletter ") vous pouvez demander à ne plus recevoir ces courriers.</p>


<h2>Sécurité</h2>

<p>Nous prenons toutes les précautions utiles afin de préserver l’intégrité des données, leur confidentialité et empêcher toute communication à des tiers non autorisés.</p>


<h2>Limitation de responsabilité</h2>

<p>Vous utilisez ce site sous votre seule et entière responsabilité. <?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> ne pourra être tenue pour responsable des dommages directs ou indirects, tels que, notamment, préjudice matériel, pertes de données ou de programmes, préjudice financier, résultant de l'utilisation de ce site ou de sites qui lui sont liés.</p>


<h2>Mise à jour</h2>

<p><?= Coteo\Helpers::esc_html(Coteo\Helpers::get_site_config('disclaimer.proprietaire')) ?> se réserve le droit de modifier et de mettre à jour, sans préavis, les présentes mentions légales et tous les éléments, produits présentés sur le site.<br>
	L'ensemble de ces modifications s'impose aux internautes qui doivent consulter les présentes Conditions Générales lors de chaque connexion.</p>
