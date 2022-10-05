<?php header('Content-Type: text/html; charset=UTF-8');?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="description à dynamiser">
    <title>Nom produit &agrave; dynamiser</title>
    <style>
       body{font-family:'Source Sans Pro',sans-serif;overflow-x:hidden;margin:0;box-sizing:border-box;background:#FAFAFA}a{text-decoration:none}h1{margin:0}header{background-color:#FFF;padding:20px 0;border:1px solid #DEDEDE}.mhp-header{display:flex;justify-content:space-around;align-items:center}.left-header{width:100%;display:flex;justify-content:space-between;align-items:center}.menu-recherche{display:flex;background:#FFF 0% 0% no-repeat padding-box;border:1px solid #DEDEDE;border-radius:7px;width:45%;padding:8px 12px;margin:auto}.menu-recherche input,.menu-recherche button{border:none;outline:none;background-color:#FFF}.menu-recherche input{width:calc(100% - 28px)}.mhp_btn{border-radius:7px;color:#3E3E3E;font-size:14px;font-family:'Source Sans Pro',sans-serif;padding:8px 12px;margin:0 8px;transition:opacity 0.3s}.mhp_btn:hover{opacity:.8}.mhp_btn_primary{color:#FFF;font-weight:600;background-color:#0072CC}.mhp_btn_secondary{background-color:#DEDEDE}.mhp_btn_light{font-weight:600;border:1px solid gray;background-color:#FFF}.btn_cart:hover{background-color:#DEDEDE}.three-bar-menu{margin-right:15px;cursor:pointer;position:relative}.three-bar-menu span:not(.mhp_univers_icon){display:block;width:27px;height:3px;background:#3E3E3E;border-radius:20%}.three-bar-menu .mv-6{margin:6px 0}.logo-hp img{height:32px;width:100%;object-fit:contain;padding-top:3px}#mhp_univers_list{color:#3E3E3E;list-style:none;position:absolute;padding:0;margin:0;left:0;top:40px;height:0;width:240px;overflow:hidden}#mhp_univers_list,.mhp_univers_sous_list{background:#fff;box-shadow:0 30px 40px rgb(0 0 0 / 15%)}#mhp_univers_list>li,.mhp_univers_sous_list>li{line-height:17px;height:auto;float:left;width:100%}#mhp_univers_list>li:hover{background-color:#3E3E3E}#mhp_univers_list>li>a:hover{color:#FFF}#mhp_univers_list>li>a,.mhp_univers_sous_list>li>a{text-decoration:none;color:#3e3e3e;width:100%;display:block;padding:6px 35px 6px 15px;font-size:13px;font-weight:400;box-sizing:border-box;float:left}.mhp_univers_icon{width:15px;height:15px;background-image:url(/images/annuaire_hp/spirite-hp.png);background-position-x:-200px;float:left;margin-right:14px;line-height:17px}.mhp_ui_agro{background-position-y:0}.mhp_ui_bat{background-position-y:-15px}.mhp_ui_elec{background-position-y:-30px}.mhp_ui_env{background-position-y:-45px}.mhp_ui_equi{background-position-y:-60px}.mhp_ui_indu{background-position-y:-75px}.mhp_ui_info{background-position-y:-90px}.mhp_ui_logi{background-position-y:-105px}.mhp_ui_sant{background-position-y:-120px}.mhp_ui_hab{background-position-y:-135px}#mhp_search_button::after{display:inline-block;content:"";width:15px;height:16px;background-image:url(/images/annuaire_hp/v6/loupe-search.svg);background-repeat:no-repeat;background-size:cover;transform:rotate(-6deg)}header .btn_produit::before{display:inline-block;content:"";width:15px;height:16px;background-image:url(/images/annuaire_hp/v6/label.svg);background-repeat:no-repeat;background-size:cover;vertical-align:middle}header .btn_mc::before{display:inline-block;content:"";width:15px;height:16px;background-image:url(/images/annuaire_hp/v6/user-profile.svg);background-repeat:no-repeat;background-size:cover;vertical-align:sub}header .btn_cart::before{display:inline-block;content:"";width:15px;height:16px;background-image:url(/images/annuaire_hp/v6/shopping-cart.svg);background-repeat:no-repeat;background-size:cover;vertical-align:sub}header .three-bar-menu::before{display:inline-block;content:'';width:30px;height:30px;background-image:url(/images/annuaire_hp/v6/menu-bar.svg);background-repeat:no-repeat;background-size:cover;margin-right:10px;vertical-align:middle}.main-content{background:#FAFAFA}.mhp-container{max-width:1196px;margin:auto}.fil-ariane{padding:12px 0;background-color:#FFF;box-shadow:0 2px 4px #00000029}.fil-ariane a{color:#3E3E3E;font-size:14px}.fil-ariane .nom-produit{color:#3E3E3E;font-weight:700}.fil-ariane a::after{content:'>';padding-left:10px;padding-right:5px;font-weight:100;font-size:13px}.info-produit{display:flex;justify-content:space-between;margin-top:5px}.bloc-center{width:65%}.bloc-img-devis{position:relative}.bloc-right-devis{width:32%;background:#FAFAFA}.bloc-right-devis .bloc-devis{position:sticky;top:-1px;margin-top:10px}.bloc-devis .prix-produit,.bloc-devis .contenu-demande{display:flex;flex-direction:column;align-items:center;padding:15px;background-color:#FFF}.bloc-devis .prix-produit{text-align:left;font-weight:700;font-size:28px;color:#3E3E3E;margin-bottom:16px}.bloc-devis .prix-produit .prix-ttc{font-size:16px;font-weight:400}.bloc-devis .prix-produit .prix-ttc,.bloc-devis .prix-produit .prix-ht{display:block}.bloc-devis .prix-produit .btn_achat_prod{color:#3E3E3E;font-weight:700;font-size:18px;background:#FFF7DD;padding:12px 0;margin-top:10px;display:flex;justify-content:center;align-items:center;width:270px}.input-rounded{border-radius:10px}.box-rounded{border-radius:7px}.contenu-demande .logo-soc,.contenu-demande .info-soc,.contenu-demande .num-tel-soc{display:flex;justify-content:center;align-items:center}.contenu-demande #form-demande{display:flex;flex-direction:column;width:270px}.contenu-demande .logo-soc .nom-comm{color:#3E3E3E;font-size:20px;font-weight:700;font-family:Catamaran,sans-serif;margin-left:15px}.contenu-demande .logo-soc .img-logo-soc{width:70px;height:52px;object-fit:contain}.contenu-demande .info-soc{margin-top:12px;margin-bottom:10px}.contenu-demande .info-contact-soc{width:200px}.contenu-demande .info-contact-soc .nom,.contenu-demande .info-contact-soc .type{display:block;word-break:break-word}.contenu-demande .info-contact-soc .nom{color:#555;font-size:19px;font-weight:600}.contenu-demande .info-contact-soc .type{color:#0072CC;font-size:14px}.contenu-demande .info-contact-soc .etat-soc{margin-top:5px;display:block;color:gray;font-size:14px;font-weight:600}.contenu-demande .info-contact-soc .etat-soc::before{display:inline-block;content:'';width:14px;height:14px;margin-right:5px;vertical-align:middle;background:#00B55E;border-radius:50%}.contenu-demande .info-soc .avatar-soc{width:90px;height:90px;object-fit:contain}.contenu-demande .info-soc::before{display:inline-block;content:'';width:90px;height:90px;background-image:url(/images/annuaire_hp/v6/avatar-soc.png);background-repeat:no-repeat;background-size:cover;margin-right:5px}.contenu-demande .num-tel-soc{border:2px solid #FFC300;padding:.5rem}.contenu-demande .num-tel-soc span{font-size:15px;font-weight:600;color:gray}.contenu-demande #afficher-numero{text-decoration:underline;cursor:pointer}.contenu-demande #form-demande{margin:20px 0}.contenu-demande #form-demande .title{display:flex;flex-direction:column;text-align:center;color:#3E3E3E;font-size:17px;font-weight:700;margin-bottom:5px}.contenu-demande #form-demande .title>div{margin:5px 0 10px}.contenu-demande #form-demande .title .nom-comm{color:#0072CC;font-weight:700}.contenu-demande #form-demande .title .bg-bleu{background:#0072CC1A;padding:2px 10px 3px;border-radius:12px;display:inline-block}.contenu-demande #form-demande .input-custom,.contenu-demande #form-demande .textarea-custom{color:#848484;font-size:16px;padding:10px 15px;margin-bottom:10px;border:1px solid #BCBCBC}.contenu-demande #form-demande .textarea-custom{height:120px;overflow-y:auto;resize:none}.hp-flex{display:flex}.hp-flex .input-custom,.hp-flex .textarea-custom{flex:1}.contenu-demande #form-demande .submit-devis{text-align:center;color:#3E3E3E;font-size:16px;font-weight:600;background-color:#FFC300;width:270px;padding:12px 0;outline:none;border:none}.contenu-demande #form-demande .submit-devis:hover{opacity:.8;cursor:pointer}.contenu-demande #form-demande .info-tmp-soc{color:#0072CC;font-size:13px;font-style:italic;font-weight:600}.bloc-center .nom-produit{display:flex;align-items:center}.bloc-center .titre-produit{color:#3E3E3E;font-size:34px;font-weight:700;padding:10px 0;margin-bottom:10px}.bloc-center .ref-produit{font-size:20px;font-weight:600;color:gray}.bloc-center .photo-container{display:flex;position:relative;height:400px;width:80%;overflow:hidden;margin:auto}.bloc-center .photo-container .photo-presentation{height:100%;background:#FFF}.bloc-center .photo-container img{width:inherit;height:100%;object-fit:none}.bloc-center .vignette-produit{display:flex;margin-top:15px}.bloc-center .img-vignette-container{height:85px;width:85px;display:flex;align-items:center;justify-content:center}.bloc-center .img-vignette-container img.lazy-load-img{max-width:90%;max-height:90%}.bloc-center .img-vignette-container img:not(.lazy-load-img){height:85px;width:85px;object-fit:contain}.bloc-center .mr-15{margin-right:15px}@media (max-width:1249px){.mhp-container{padding:0 20px}}@media (min-width:869px) and (max-width:1080px){.bloc-right-devis{width:35%}}@media (max-width:1040px){.left-header .btn_produit{display:none}}@media (min-width:768px) and (max-width:991px){.bloc-right-devis .prix-produit{margin-bottom:30px}.bloc-right-devis .prix-produit .prix-ttc{font-size:14px}.contenu-demande .info-contact-soc .nom{font-size:18px}.contenu-demande .num-tel-soc span{font-size:13px}.contenu-demande #form-demande .submit-devis{padding:10px 0}.contenu-demande #form-demande .submit-devis{padding:.5rem}.bloc-center .titre-produit{font-size:30px}}@media (max-width:982px){.bloc-center .photo-container{height:375px}}@media (min-width:869px) and (max-height:909px){.bloc-devis .prix-produit{font-size:22px;margin-bottom:10px}.bloc-devis .prix-produit .btn_achat_prod{padding:10px 0}.bloc-devis .prix-produit,.bloc-devis .contenu-demande{padding:10px}.contenu-demande .info-soc{margin:8px 0}.contenu-demande #form-demande{margin:10px 0}.contenu-demande #form-demande .textarea-custom{height:100px}.contenu-demande #form-demande .submit-devis{font-size:14px;padding:10px 0}.contenu-demande .info-soc::before{width:70px;height:70px}.contenu-demande .info-contact-soc .nom{font-size:16px}}@media (max-width:868px){.main-content .info-produit{display:block}.bloc-center{width:calc(100% - 50px);margin:auto}.bloc-right-devis{width:auto}}@media (min-width:768px) and (max-width:868px){.contenu-demande .num-tel-soc{padding:10px}.contenu-demande .num-tel-soc span{font-size:13px}}@media (max-width:767px){.mhp_search{display:block;width:100%;margin-top:5px}.mhp-header{justify-content:space-between}#mhp_search.menu-recherche{width:100%}.left-header .btn_mc>span,.left-header .btn_cart>span,.sep,.fil-ariane{display:none}.left-header{width:auto}.left-header .btn_cart{border:none}.mhp_btn_secondary{background-color:#fff}.mhp_btn{padding:0;margin:0 5px}.logo-hp img{height:25px}.three-bar-menu span:not(.mhp_univers_icon){height:2px}.fil-ariane{display:none}.bloc-right-devis{position:relative;margin:15px auto;width:100%}.bloc-center .photo-container{height:250px}.bloc-center .titre-produit{font-size:26px}.bloc-right-devis .prix-produit{text-align:center}.bloc-right-devis .prix-produit{font-size:25px}.bloc-right-devis .prix-produit .prix-ttc{font-size:14px}.bloc-right-devis .prix-produit .btn_achat_prod{font-size:16px}}@media(min-width:575px) and (max-width:767px){.bloc-center .photo-container{height:350px}}@media (max-width:450px){.bloc-center .photo-container{width:100%}}
    </style>
    <link rel="preload" href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/css/annuaire_hp/v6/body_content.css?v=202210041400">
    <link rel="preload" href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/css/annuaire_hp/v6/footer_v6.css?v=202210041200">
    <link rel="preload" href="https://www.hellopro.fr/images/produit-2/2/1/0/sv19vt-mini-pelle-yanmar-1-880-kg-6739012.png" as="image"/>
    <link rel="preconnect" href="https://maps.googleapis.com">
    <link rel="preconnect" href="https://maps.gstatic.com">
    <script defer src="https://<?php echo $_SERVER['HTTP_HOST'] ?>/js/annuaire_hp/v6/generale_v6_c.js?v=202210041200"></script>
    <script defer src="https://<?php echo $_SERVER['HTTP_HOST'] ?>/js/annuaire_hp/v6/generale_v6_nc.js?v=202210041200"></script>
</head>
<body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'].'no/v6/include/header_v6.php');
            #DEBUT include($_SERVER['DOCUMENT_ROOT'].'annuaire_hp/v6/include/fil_ariane_v6.php');
            ?>
            <div class="fil-ariane">
                <div class="mhp-container">
                    <a href="#">B&acirc;timent - travaux publics</a>
                    <a href="#">Travaux publics</a>
                    <a href="#">Pelleteuses et mini-pelles</a>
                    <a href="#">Mini-pelles(moins de 10 tonnes)</a>
                    <span class="nom-produit">Sv100-2 mini pelle yanmar 9625kg</span>
                </div>
            </div>
            <?php
            #FIN include($_SERVER['DOCUMENT_ROOT'].'annuaire_hp/v6/include/fil_ariane_v6.php');
        ?>
    <div class="sep"></div>
    <div class="mhp-container">
        <?php
            #DEBUTinclude($_SERVER['DOCUMENT_ROOT'].'annuaire_hp/v6/include/info-produit.php');
?>
        <div class="main-content">
            <div class="info-produit">
                <div class="bloc-center">
                    <div class="bloc-img-devis">
                        <div class="bloc-left-img">
                            <div class="nom-produit">
                                <h1 class="titre-produit">Sv100-2 midi pelle yanmar 9 625 kg
                                    <span class="ref-produit">- R&Eacute;F. : SV100-1</span>
                                </h1>
                            </div>
                            <div class="parent-cn-carroussel img-ppl">
                                <div class="btn-scroll prev-scroll" style="display: none;">
                                    <span class="arrow-scroll arrow-scroll-prev"></span>
                                </div>
                                <div id="cn-prod-ppl" class="photo-container cn-carroussel">
                                    <div class="photo-presentation">
                                        <img class="lazy-load-img" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-2/2/1/0/sv19vt-mini-pelle-yanmar-1-880-kg-6739012.png" alt="nom-image-a-dynamiser">
                                    </div>
                                    <div class="photo-presentation">
                                        <img class="lazy-load-img" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-2/2/1/0/sv19vt-mini-pelle-yanmar-1-880-kg-6739012.png" alt="nom-image-a-dynamiser">
                                    </div>
                                    <div class="photo-presentation">
                                        <img class="lazy-load-img" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-2/2/1/0/sv19vt-mini-pelle-yanmar-1-880-kg-6739012.png" alt="nom-image-a-dynamiser">
                                    </div>
                                </div>
                                <div class="btn-scroll next-scroll">
                                    <span class="arrow-scroll arrow-scroll-next"></span>
                                </div>
                            </div>
                            <div class="vignette-produit">
                                <span class="img-vignette-container mr-15">
                                    <img class="lazy-load-img" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/v2/produit-3/1/9/8/sv17vt-mini-pelle-yanmar-1-700-kg-5645891.jpg" alt="nom-image-a-dynamiser">
                                </span>
                                <span class="img-vignette-container mr-15">
                                    <img class="lazy-load-img" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/v3/produit-3/1/9/8/sv17vt-mini-pelle-yanmar-1-700-kg-5645891.jpg" alt="nom-image-a-dynamiser">
                                </span>
                                <span class="img-vignette-container">
                                    <img class="lazy-load-img" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/v4/produit-3/1/9/8/sv17vt-mini-pelle-yanmar-1-700-kg-5645891.jpg" alt="nom-image-a-dynamiser">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="spec-produit">
                        <div class="description">
                            <h2 class="spec-label">Description</h2>
                            <p class="desc-content">
                                Les mini-pelles sur chenilles New Holland ont une capacit&eacute; de 1,7 &agrave; 6,0 tonnes. Avec un large choix de versions avec toit canopy, cabine et encombrement arri&egrave;re nul avec rayon de rotation court, vous trouverez le mod&egrave;le id&eacute;al pour l'am&eacute;nagement paysager, les travaux d'am&eacute;nagement, l'agriculture, l'horticulture, les p&eacute;pini&egrave;res, la gestion des domaines vinicoles et les travaux publics.<br><br> Les nombreuses applications possibles sont notamment la construction et l'entretien des chemins d'exploitation, des syst&egrave;mes d'irrigation et de drainage, mais &eacute;galement la construction de cl&ocirc;tures, de b&acirc;timents provisoires et de supports de plantations. Avec des accessoires hydrauliques tels que tari&egrave;res, rotors &agrave; fl&eacute;aux et faucheuses de talus, barres-s&eacute;cateurs et scies, la fl&egrave;che et le balancier offrent la souplesse d'un bras motoris&eacute; mais avec la force intrins&egrave;que d'une mini-pelle. Les m&ecirc;mes fl&egrave;che et balancier peuvent actionner des cisailles, des brise-roche et autres accessoires robustes comme des broyeuses de souches.
                            </p>
                        </div>
                        <div class="caracteristique">
                            <h2 class="spec-label">Caract&eacute;ristiques</h2>
                            <div class="bloc-carac">
                                <div class="bloc-ref-1">
                                    <div class="spec-container">
                                        <span class="spec-label">R&eacute;f. site:</span>
                                        <span class="spec-value">7836481</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Carrosserie:</span>
                                        <span class="spec-value">Mini pelle</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Marque:</span>
                                        <span class="spec-value">Wacker Neuson</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Gamme:</span>
                                        <span class="spec-value">6003</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Etat:</span>
                                        <span class="spec-value">Occasion</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Ann&eacute;e:</span>
                                        <span class="spec-value">01/01/2012</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Garantie mat&eacute;riel:</span>
                                        <span class="spec-value">Oui</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Dur&eacute;e de la garantie:</span>
                                        <span class="spec-value">3 mois</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Pays:</span>
                                        <span class="spec-value">FRANCE</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Constructeur:</span>
                                        <span class="spec-value">Wacker Neuson</span>
                                    </div>
                                </div>
                                <div class="bloc-ref-2">
                                    <div class="spec-container">
                                        <span class="spec-label">Puissance:</span>
                                        <span class="spec-value">59 CV</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Poids:</span>
                                        <span class="spec-value">6 Tonnes</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Nombre d'heures:</span>
                                        <span class="spec-value">5000 heures</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Type:</span>
                                        <span class="spec-value">sur chenilles</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Type de fl&egrave;che:</span>
                                        <span class="spec-value">Monobloc</span>
                                    </div>
                                    <div class="spec-container">
                                        <span class="spec-label">Type de cabine:</span>
                                        <span class="spec-value">Cabine ferm&eacute;e</span>
                                    </div>
                                    <div>
                                        <a href="#" id="telecharger-ft-prod" class="btn-down-ft input-rounded">
                                            T&eacute;l&eacute;charger fiche techique
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-frns">
                            <div class="img-produit-vign">
                                <img src="https://www.hellopro.fr/images/produit-2/2/1/0/sv19vt-mini-pelle-yanmar-1-880-kg-6739012.png" alt="alt-img-a-dynamiser">
                            </div>
                            <div class="souhait-contact">
                                <span class="label">Ce produit vous int&eacute;resse ?</span>
                                <span class="label-small">
                                    N'attendez pas plus longtemps, contactez la soci&eacute;t&eacute; <strong class="nom-comm">YANMAR</strong> pour plus d'informations !
                                </span>
                                <div class="btn-contact-group">
                                    <a href="#" class="btn-call-frns box-rounded mr-15">
                                        Appeler
                                    </a>
                                    <a href="#" class="btn-send-msg box-rounded">
                                        Envoyer un message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="a-propos-frns">
                            <div class="top-afrns">
                                <div class="top-left">
                                    <div class="logo-nom-comm">
                                        <img src="https://www.hellopro.fr/images/logo/logo_2971.jpg" alt="nom-soc-a-dynamiser" class="logo-soc-icon">
                                        <div class="info-soc">
                                            <span class="nom-comm">YANMAR</span>
                                            <span class="level">
                                                Top vendeur
                                            </span>
                                        </div>
                                    </div>
                                    <span class="date-creation-soc">
                                        Cr&eacute;&eacute;e en 2001
                                    </span>
                                    <span class="vendeur-hp-time">Vendeur sur Hellopro depuis 8 ans</span>
                                </div>
                                <div class="top-right">
                                    <div class="map-soc">
                                        <iframe id="map_canvas" src="https://maps.google.com/maps?q=48.9481236,2.3285748&amp;z=13&amp;output=embed" style="border:0" allowfullscreen=""></iframe>
                                    </div>
                                    <span class="adresse-ville">France, Les Andelys,(27)Normandie</span>
                                </div>
                            </div>
                            <div class="bottom-afrns">
                                <p class="desc-soc">
                                    Pionnier dans le domaine des Centres de Contacts, App-line apporte aux entreprises des solutions technologiques leur permettant de d&eacute;velopper une approche comp&eacute;titive de la Relation Client. Tourn&eacute;e vers la diversit&eacute; des acc&egrave;s, la qualit&eacute; du service rendu et la productivit&eacute;. La gamme Sibilo d'App-line a &eacute;t&eacute; conçue pour permettre aux entreprises de d&eacute;velopper une Strat&eacute;gie Multicanal aboutie et coh&eacute;rente, d'engager avec chaque client un dialogue crosschannel et de g&eacute;n&eacute;rer une interactivit&eacute; plus intense dans tous les &eacute;changes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bloc-right-devis">
                    <div class="bloc-devis">
                        <?php 
                        #DEBUT include($_SERVER['DOCUMENT_ROOT']."annuaire_hp/v6/include/formulaire_devis_v6.php") 
                        ?>
                        <div class="prix-produit box-rounded">
                                <span class="prix-ht">112.47 &euro; HT</span>
                                <span class="prix-ttc">(134.96&euro; T.T.C)</span>
                                <a href="#" class="btn_achat_prod input-rounded">Acheter ce produit</a>
                        </div>
                        <div class="contenu-demande box-rounded"> 
                            <div class="logo-soc">
                                <img class="img-logo-soc" src="https://www.hellopro.fr/images/logo/logo_2971.jpg" alt="nom-soc-a-dynamiser">
                                <span class="nom-comm">YANMAR</span>
                            </div>
                            <div class="info-soc">
                                <div class="info-contact-soc">
                                    <span class="nom">M. Fr&eacute;d&eacute;ric Lancenar</span>
                                    <span class="type">Commercial chez YANMAR</span>
                                    <span class="etat-soc">Disponible</span>
                                </div>
                            </div>
                            <div class="num-tel-soc input-rounded">
                                <span>+ 33 (0)1 50...</span>
                                <span id="afficher-numero">&nbsp;Afficher le num&eacute;ro</span>
                            </div>
                            <form action="form.php" id="form-demande">
                                <div class="title">
                                    <span>Ecrire un message à <span class="nom-comm">Yanmar</span></span>
                                    <div>
                                        <div class="bg-bleu">
                                            <span class="info-tmp-soc">Yanmar r&eacute;pond en moyenne en 2h</span>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" placeholder="Entrer votre email" name="mail-acheteur" class="input-rounded input-custom">
                                <textarea name="message-acheteur" id="message-acheteur" class="input-rounded textarea-custom" placeholder="Merci de préciser votre demande pour que Yanmar puisse vous répondre dans les plus brefs délais"></textarea>
                                <button class="submit-devis box-rounded">Envoyer</button>
                            </form>
                        </div>
                        <?php
                        #FIN include($_SERVER['DOCUMENT_ROOT']."annuaire_hp/v6/include/formulaire_devis_v6.php") 
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php       
            #FIN include($_SERVER['DOCUMENT_ROOT'].'annuaire_hp/v6/include/info-produit.php');
        ?>
        <?php
        /*Nicolas Daniel*/

        #DEBUTrequire_once($_SERVER['DOCUMENT_ROOT'].'annuaire_hp/v6/include/bottom_bloc.php')
        ?>
        <div id="cn-bloc-bottom">
            <div id="cn-form-devis-minute">
                <span id="title-devis-minute">Recevez des devis des meilleurs fournisseurs en moins d'une minute !</span>
                <span id="subtitle-devis-minute">Vous cherchez une mini-pelle :</span>
                <span id="cn-critere-cta">
                    <span id="cn-criteres">
                        <span class="aff-critere">
                            <input type="checkbox" id="critere-form-minute-1" name="critere-form-minute" class="custom-chkbx">
                            <label class="lab-crt-form-minute" for="critere-form-minute-1">Sur chenilles</label>
                        </span>
                        <span class="aff-critere">
                            <input type="checkbox" id="critere-form-minute-2"  name="critere-form-minute" class="custom-chkbx">
                            <label class="lab-crt-form-minute" for="critere-form-minute-2">Sur roues</label>
                        </span>
                        <span class="aff-critere">
                            <input type="checkbox" id="critere-form-minute-3" name="critere-form-minute" class="custom-chkbx">
                            <label class="lab-crt-form-minute" for="critere-form-minute-3">Sur rails</label>
                        </span>
                    </span>
                    <span id="sub-devis-minute"><a href="javascript:void(0)"></a>Envoyer</span>
                </span>
                
            </div>
            <div id="bloc-produit-similaire" class="parent-cn-carroussel">
                <h2 class="sub-bloc-title">Produits similaires</h2>
                <div id="cn-prod-similaire" class="cn-carroussel">
                    <div class="btn-scroll prev-scroll">
                        <span class="arrow-scroll arrow-scroll-prev"></span>
                    </div>
                    <div class="prod-similaire">
                        <span class="photo-prod-sim">
                            <img class="lazy-load-img img-prod-sim" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-prod-sim">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                    </div>
                    <div class="prod-similaire">
                        <span class="photo-prod-sim">
                            <img class="lazy-load-img img-prod-sim" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-prod-sim">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                    </div>
                    <div class="prod-similaire">
                        <span class="photo-prod-sim">
                            <img class="lazy-load-img img-prod-sim" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-prod-sim">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                    </div>
                    <div class="prod-similaire">
                        <span class="photo-prod-sim">
                            <img class="lazy-load-img img-prod-sim" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-prod-sim">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                    </div>
                    <div class="prod-similaire">
                        <span class="photo-prod-sim">
                            <img class="lazy-load-img img-prod-sim" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-prod-sim">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                    </div>
                    <div class="prod-similaire">
                        <span class="photo-prod-sim">
                            <img class="lazy-load-img img-prod-sim" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-prod-sim">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                    </div>
                    <div class="prod-similaire">
                        <span class="photo-prod-sim">
                            <img class="lazy-load-img img-prod-sim" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-prod-sim">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                    </div>
                    <div class="prod-similaire">
                        <span class="photo-prod-sim">
                            <img class="lazy-load-img img-prod-sim" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-prod-sim">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                    </div>
                    <div class="btn-scroll next-scroll">
                        <span class="arrow-scroll arrow-scroll-next"></span>
                    </div>
                </div>
            </div>
            <div id="cn-conseil">
                <h2 class="title-bloc-conseil">Les derniers conseils de nos experts</h2>
                <div id="cn-conseil-card">
                    <div class="conseil-card">
                        <span class="left-conseil-card">
                            <img class="lazy-load-img img-conseil-card" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/8/9/porte-engin-magnum-explorer-300-saris-6071985.jpg" alt="conseil-1">
                        </span>
                        <span class="right-conseil-card">
                            <span class="title-conseil-card">Comment transporter une mini-pelle ?</span>
                            <span class="link-conseil-card">Lire la suite</span>
                        </span>
                    </div>
                    <div class="conseil-card">
                        <span class="left-conseil-card">
                            <img class="lazy-load-img img-conseil-card" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/9/2/4/plateau-lider-1-5t-6048429.jpg" alt="conseil-1">
                        </span>
                        <span class="right-conseil-card">
                            <span class="title-conseil-card">Comment choisir sa remorque pour mini-pelle ?</span>
                            <span class="link-conseil-card">Lire la suite</span>
                        </span>
                    </div>
                    <div class="conseil-card">
                        <span class="left-conseil-card">
                            <img class="lazy-load-img img-conseil-card" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/9/remorque-porte-engins-tema-builder-2-ptac-2-7t-2-essieux-6322935.jpg" alt="conseil-1">
                        </span>
                        <span class="right-conseil-card">
                            <span class="title-conseil-card">Guide sur les formations de conduite d'une mini pelle ?</span>
                            <span class="link-conseil-card">Lire la suite</span>
                        </span>
                    </div>
                </div>
                <span class="more-conseil"><span class="more-link">Afficher plus de conseils</span></span>
            </div>
            <div id="bloc-ra" class="parent-cn-carroussel">
                <h2 class="sub-bloc-title">Requêtes associées</h2>
                <div id="cn-ra" class="cn-carroussel">
                    <div class="btn-scroll prev-scroll">
                        <span class="arrow-scroll arrow-scroll-prev"></span>
                    </div>
                    <div class="bloc-ra">
                        <div class="bloc-ra-top">
                            <span class="photo-ra">
                                <img class="lazy-load-img img-ra" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/6/9/2/e10z-micro-pelle-compacte-6514296.jpg" alt="produit-simi-1">
                            </span>
                            <span class="nom-ra">Mini-pelle Yanmar</span>
                            <span class="nb-prod ">
                                <i class="picto-green-dot"></i>
                                <span class="txt-nb-prod">95 produits disponibles</span>
                            </span>
                        </div>
                        <span class="cta-detail-ra">                
                            Voir la recherche
                        </span>
                    </div>
                    <div class="bloc-ra">
                        <div class="bloc-ra-top">
                            <span class="photo-ra">
                                <img class="lazy-load-img img-ra" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/6/9/2/e10z-micro-pelle-compacte-6514296.jpg" alt="produit-simi-1">
                            </span>
                            <span class="nom-ra">Mini-pelle Yanmar</span>
                            <span class="nb-prod ">
                                <i class="picto-green-dot"></i>
                                <span class="txt-nb-prod">95 produits disponibles</span>
                            </span>
                        </div>
                        <span class="cta-detail-ra">                
                            Voir la recherche
                        </span>
                    </div>
                    <div class="bloc-ra">
                        <div class="bloc-ra-top">
                            <span class="photo-ra">
                                <img class="lazy-load-img img-ra" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/6/9/2/e10z-micro-pelle-compacte-6514296.jpg" alt="produit-simi-1">
                            </span>
                            <span class="nom-ra">Mini-pelle Yanmar</span>
                            <span class="nb-prod ">
                                <i class="picto-green-dot"></i>
                                <span class="txt-nb-prod">95 produits disponibles</span>
                            </span>
                        </div>
                        <span class="cta-detail-ra">                
                            Voir la recherche
                        </span>
                    </div>
                    <div class="btn-scroll next-scroll">
                        <span class="arrow-scroll arrow-scroll-next"></span>
                    </div>
                </div>
            </div>
            <div id="bloc-top-prod" class="parent-cn-carroussel">
                <h2 class="sub-bloc-title">Le top 5 des produits</h2>
                <div id="cn-top-five-prod" class="cn-carroussel">
                    <div class="btn-scroll prev-scroll">
                        <span class="arrow-scroll arrow-scroll-prev"></span>
                    </div>
                    <div class="top-prod">
                        <span class="photo-top-prod">
                            <img class="lazy-load-img img-top-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/7/3/4/mini-pelle-e10z-bobcat-6765437.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-top-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="top-prod">
                        <span class="photo-top-prod">
                            <img class="lazy-load-img img-top-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/7/3/4/mini-pelle-e10z-bobcat-6765437.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-top-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="top-prod">
                        <span class="photo-top-prod">
                            <img class="lazy-load-img img-top-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/1/4/6/vehicule-de-chantier-bobcat-pelles-chargeuses-et-engins-158641.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-top-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="top-prod">
                        <span class="photo-top-prod">
                            <img class="lazy-load-img img-top-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/1/4/6/vehicule-de-chantier-bobcat-pelles-chargeuses-et-engins-158641.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-top-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="top-prod">
                        <span class="photo-top-prod">
                            <img class="lazy-load-img img-top-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/1/4/6/vehicule-de-chantier-bobcat-pelles-chargeuses-et-engins-158641.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-top-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="btn-scroll next-scroll">
                        <span class="arrow-scroll arrow-scroll-next"></span>
                    </div>
                </div>
            </div>
            <div id="bloc-nouveau-produit" class="parent-cn-carroussel">
                <h2 class="sub-bloc-title">Nouveaux produits</h2>
                <div id="cn-nouv-prod" class="cn-carroussel">
                    <div class="btn-scroll prev-scroll">
                        <span class="arrow-scroll arrow-scroll-prev"></span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/1/4/6/vehicule-de-chantier-bobcat-pelles-chargeuses-et-engins-158641.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/1/4/6/vehicule-de-chantier-bobcat-pelles-chargeuses-et-engins-158641.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/1/4/6/vehicule-de-chantier-bobcat-pelles-chargeuses-et-engins-158641.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/1/4/6/vehicule-de-chantier-bobcat-pelles-chargeuses-et-engins-158641.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="nouv-prod">
                        <span class="photo-nouv-prod">
                            <img class="lazy-load-img img-nv-prod" src="https://www.hellopro.fr/images/annuaire_hp/loading-ps.svg" data-src="https://www.hellopro.fr/images/produit-3/5/3/4/mini-pelle-e27z-bobcat-6765435.jpg" alt="produit-simi-1">
                        </span>
                        <span class="nom-nouv-prod">Mini-pelle 1.6t - Kubota Europe sas u15-3n</span>
                        <span class="aff-prix">Prix sur demande</span>
                        <span class="aff-fabr-vend">
                            <span class="label-fabr-vend">Vendu et fabriqué par : </span>
                            <span class="val-fabr-vend">KUBOTA</span>
                        </span>
                        <span class="cta-contact-vend">Contacter le vendeur</span>
                    </div>
                    <div class="btn-scroll next-scroll">
                        <span class="arrow-scroll arrow-scroll-next"></span>
                    </div>
                </div>
            </div>
            <div id="bloc-exemple-dd">
                <h2 class="sub-bloc-title">Exemples de demandes de devis</h2>
                <div id="cn-exemple-dd">
                    <div class="exemple-dd">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <span class="blue-text">Sylvie (Béziers - Doubs -25)</span>
                    </div>
                    <div class="exemple-dd">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <span class="blue-text">Sylvie (Béziers - Doubs -25)</span>
                    </div>
                    <div class="exemple-dd">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <span class="blue-text">Sylvie (Béziers - Doubs -25)</span>
                    </div>
                </div>
            </div>
        </div>
        <?php
        #FINrequire_once($_SERVER['DOCUMENT_ROOT'].'annuaire_hp/v6/include/bottom_bloc.php')
        ?>
    </div>
        <?php
            include($_SERVER['DOCUMENT_ROOT'].'no/v6/include/footer_v6.php');
        ?>
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/css/annuaire_hp/v6/body_content.css?v=202210041400">
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/css/annuaire_hp/v6/footer_v6.css?v=202210041200">
</body>
</html>