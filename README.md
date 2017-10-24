Package Concrete5 pour version 5.8
=============
Base de développement autour du Framework Uikit pour Agence COTEO par Alexandre PACCOU

Installation
------------
* Cloner le dépôt
* Activer le thème

Compatibilité navigateurs
-------------------------

Développé avec
--------------
* Package Boilerplate : https://github.com/cryophallion/C5-BoilerplatePackageController
* Theme Boilerplate : https://github.com/c5labs/theme-boilerplate/blob/master/page_theme.php

Inclus
------
* font-awesome via cdnjs.cloudflare.com
* uikit via cdnjs.cloudflare.com en attendant une version stable à installer via Composer
TODO : voir si avantage à l'inclure via Composer (Utilisation des mixins par exemple)



Dépendance
----------



 Notes
 -----
 SINGLE PAGE
 * mentions-legales
 * plan-du-site

 TODO : Vérifier view.php
 TODO : Voir si utile d'utiliser https://documentation.concrete5.org/developers/designing-for-concrete5/packaging-your-theme/enabling-full-content-swap
 TODO : voir si utile d'utiliser WEB FONT LOADER https://github.com/typekit/webfontloader#get-started et optimisation ? ici : https://www.lockedowndesign.com/load-google-fonts-asynchronously-for-page-speed/

 UikitGridFramework => désactivé car pas réussit à l'utiliser correctement et provoque des plantages lors de l'édition d'un agencement existant
 Nous utiliserons https://documentation.concrete5.org/developers/designing-for-concrete5/adding-complex-custom-layout-presets-in-your-theme en remplacement pour le moment.
