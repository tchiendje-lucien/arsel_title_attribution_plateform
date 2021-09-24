<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARSEL - Rigimes</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap Documentation Template For Software Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="../assets/fontawesome/js/all.min.js"></script>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/adminlte.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/theme.css">

</head>

<body>

    <!--//header-->
  @include('include.nav_bar_vitrine')

    <div class="py-5 text-center page-header theme-bg-dark position-relative" style="background-color: rgb(28, 28, 102); margin-top: -1%">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h1 class="mx-auto page-heading single-col-max">Documentation sur les regimes</h1>
        </div>
    </div>
    <!--//page-header-->
    <div class="page-content">
        <div class="container">
            @include('include.boutton_titre')
            <div class="py-5 docs-overview">

                <div class="" id=" declaration-rating" role="tabpanel" aria-labelledby="declaration-rating-tab">
                    L’octroi des régimes juridiques pour exercer des activités dons le secteur de l’électricité du
                    Cameroun.
                    <br><br>La Loi de 2011 sur l’électricité secteur au Cameroun dans son Article 11. Stipule que
                    l’exercice des activités dans le secteur de l’électricité doit être soumis à l’acquisition de l’une
                    des séries suivantes :
                    <br><br>
                    <h5>Concession, Licence, Autorisation, Régime de déclaration et liberté.</h5>
                </div>
                <div class="mt-4 row">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true"
                                style="color: #0069d9">Concession</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                href="#product-comments" role="tab" aria-controls="product-comments"
                                aria-selected="false" style="color: #0069d9">Licence</a>
                            <a class="nav-item nav-link" id="liberte-rating-tab" data-toggle="tab"
                                href="#liberte-rating" role="tab" aria-controls="liberte-rating" aria-selected="false"
                                style="color: #0069d9">Autorisation</a>
                            <a class="nav-item nav-link" id="autorisation-rating-tab" data-toggle="tab"
                                href="#autorisation-rating" role="tab" aria-controls="autorisation-rating"
                                aria-selected="false" style="color: #0069d9">Déclaration</a>
                            <a class="nav-item nav-link" id="declaration-rating-tab" data-toggle="tab"
                                href="#declaration-rating" role="tab" aria-controls="declaration-rating"
                                aria-selected="false" style="color: #0069d9">Liberté</a>
                        </div>
                    </nav>
                    <div class="p-3 tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                            aria-labelledby="product-desc-tab"> Conformément a la loi 2011 régissant le secteur de
                            d’électricité au Cameroun. La concession’ est définie comme une convention conclue de
                            manière exclusive entre l’État et un opérateur. Lui permettant d’exploiter le domaine public
                            dans des limites territoriales bien précises. En vue d’assurer la production. Le transport
                            et la distribution de l’énergie électrique sur la base d’un cahier de charges<br><br>

                            Sont soumis au régime de la concession:<br>
                            <ul>
                                <li>le stockage de Peau sur te domaine public. Pour la production d’électricité</li>
                                <li>la production notamment hydroélectrique. Établie sur le domaine public;</li>
                                <li>la gestion du réseau de transport’</li>
                                <li>le transport d’électricité;</li>
                                <li>La distribution d’électricité ;</li>
                                <li>La production et le transport d’électricité à des industrielles.</li>
                            </ul><br>
                            Les conventions de concession fixent la durée et les conditions de suspension, de caducité
                            et de révision, de renouvellement et de révocation du contrat par l’autorité concédante,
                            ainsi que les modalités de règlement des litiges.
                            <br><br>
                            <div>
                                <a href="dowload_loi_regime/REGIME_DE_CONCESSION.pdf"> Texte juridique du régime de concession </a>&nbsp;&nbsp;&nbsp;
                                <a href="/find_site_by_concession/1"> Les site du régime de concession </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel"
                            aria-labelledby="product-comments-tab"> Conformément à la loi 2011 régissant le secteur de
                            l’électricité au Cameroun, une Licence est un contrat ou titre administratif délivré par
                            l’autorité compétente à un administratif qualifié, ayant été sélectionné pour exercer des
                            activités de production indépendante de vente d’énergie de très haute haute de moyenne
                            tension, ainsi que des activités d »importation et d’exportation d’électricité destinées
                            totalement ou partiellement à des distributeurs ou grands comptes.<br><br>

                            Les licences sont accordés pour:<br>
                            <ul>
                                <li>La production indépendante d’électricité</li>
                                <li>La vente de l’électricité de très haute, haute et moyenne tension électrique</li>
                                <li>L’importation et l’exportation de l’électricité</li>
                            </ul><br>
                            Les licences de vente d’électricité de très haute, haute et moyenne tension, ainsi que
                            celles de production indépendante, d’importation et d’exportation d’électricité ne sont
                            accordées qu’aux opérateurs techniquement qualifiés et justifiant de garanties financières
                            suffisantes pour exercer ces activités.
                            <br><br>
                            <div>
                                <a href="dowload_loi_regime/REGIME_DE_LICENCE.pdf"> Texte juridique du régime de licence </a>&nbsp;&nbsp;&nbsp;
                                <a href="/find_site_by_licence/2"> Les site du régime de licence </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#" style="margin-left: 30%">
                                    <button class="position-sticky btn btn-primary" type="submit">Demander un titre</button>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liberte-rating" role="tabpanel"
                            aria-labelledby="liberte-rating-tab">L’autorisation est un acte juridique délivré par
                            l’autorité compétente, permettant la réalisation d’une activité dans le secteur de
                            l’électricité, et constatant que l’opérateur remplit les conditions et les obligations
                            auxquelles il est soumis par la loi et ses textes d’application.<br><br>

                            Relèvent du régime de l’autorisation dans les conditions fixées par voie réglementaire:<br>
                            <ul>
                                <li>Les installations d’autoproduction d’une puissance supérieure à 1 MW</li>
                                <li>L’établissement et l’exploitation d’une distribution d’énergie électrique en vue de
                                    fournir directement ou indirectement une puissance inférieure ou égale à 100 KW</li>
                                <li>L’établissement de lignes électriques privées utilisant ou traversant une voie
                                    publique ou un point situé à moins de dix (10) mètres de distance horizontale d’une
                                    ligne électrique, téléphonique ou télégraphique existante sur le domaine public.
                                </li>
                                <li>Dans le cadre de l’électrification rurale, et dans les limites définies par voir
                                    réglementaire, la production notamment de centrales hydroélectriques de puissance
                                    inférieure ou égale à 5 MW, la distribution et la vente de l’électricité sont
                                    assurées par simple autorisation de l’Agence de Régulation du Secteur de
                                    l’Électricité son exigences particulières d’appel d’offres, de publicités, dans le
                                    respect des règles de sécurité et de protection de l’environnement.</li>
                            </ul><br>
                            L’autorisation ne peut être accordée que dans le cas ou il y a carence du service public de
                            l’électricité, en raison de l’inexistence ou de l’insuffisance dans la région concernée des
                            moyens de production, de transport et de distribution d’énergie électrique.
                            <br><br>
                            <div>
                                <a href="dowload_loi_regime/regime_autorisation.pdf"> Texte juridique du régime d'autorisation </a>&nbsp;&nbsp;&nbsp;
                                <a href="" style="margin-left: 30%">
                                    <button class="position-sticky btn btn-primary" type="submit">Demander un titre</button>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="autorisation-rating" role="tabpanel"
                            aria-labelledby="autorisation-rating-tab"> Lorsque la puissance des installations
                            d’auto-Production est supérieure à 100 kW et inférieure à 1 MW,le propriétaire est tenu de
                            faire une déclaration préalable à leur mise en service auprès De l’Agence de Régulation du
                            Secteur de l’électricité.
                            <br><br>
                            <div>
                                <a href="dowload_loi_regime/REGIME_DE_DECLARATION.pdf"> Texte juridique du régime de declaration </a>&nbsp;&nbsp;&nbsp;
                                <a href="#" style="margin-left: 30%">
                                    <button class="position-sticky btn btn-primary" type="submit">Demander un titre</button>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="declaration-rating" role="tabpanel"
                            aria-labelledby="declaration-rating-tab">
                            <ul>
                                <li>l’établissement des lignes électrique privées est libre lorsque les ouvrages sont
                                    entièrement implantés sur une propriété, à condition que aucune voie publique ne
                                    soit utilisée par ces lignes et que les conducteurs ne soient , en aucun point,
                                    situés à moins de dix (10)mètres de distances horizontale d’une ligne électrique,
                                    téléphonique, télégraphique existante sur le domaine public:</li>
                                <li>l’établissement de lignes électriques privées droit satisfaire aux standards et
                                    normes homologués :</li>
                            </ul><br>
                            Une déclaration, à but statistique, st exigée du propriétaire de ces installations apurés de
                            l’agence de Régulation du Secteur de l’électricité (ARSEL)
                            <br><br>
                            <div>
                                <a href="dowload_loi_regime/REGIME_DE_LIBERTE.pdf"> Texte juridique du régime de Liberté </a>&nbsp;&nbsp;&nbsp;
                                <a href="#" style="margin-left: 30%">
                                    <button class="position-sticky btn btn-primary" type="submit">Demander un titre</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//row-->
            </div>
            <!--//container-->
        </div>
        <!--//container-->

        @include('include.footer')
    </div>

    <!-- Javascript -->
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../js/demo.js"></script>


    <!-- Page Specific JS -->
    <script src="../assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="../assets/js/highlight-custom.js"></script>
    <script src="../assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="../assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="../assets/js/docs.js"></script>


</body>

</html>
