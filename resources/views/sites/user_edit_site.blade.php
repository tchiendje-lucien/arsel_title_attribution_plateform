<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ARSEL - Detail d'un site</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/adminlte.min.css">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../assets/plugins/simplelightbox/simple-lightbox.min.css">
    <link rel="stylesheet" href="../assets/style.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/theme.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('include.user_nav_bar')

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body">
                        @if ($info_site->count() > 0)
                            @foreach ($info_site as $info_site)
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="col-12">
                                            <img src="{{ URL::asset('images_site/' . $info_site->LIBELLE_IMAGE) }}"
                                                class="product-image" alt="Product Image">
                                        </div>
                                        <div class="col-12 product-image-thumbs">
                                            <div class="product-image-thumb active"><img
                                                    src="{{ URL::asset('images_site/' . $info_site->LIBELLE_IMAGE) }}"
                                                    alt="Product Image"></div>
                                            <div class="product-image-thumb"><img
                                                    src="../img/2ab42add69_109337_esperance-vie-chiens-chiot-golden-retriever.jpg"
                                                    alt="Site Image"></div>
                                            <div class="product-image-thumb"><img
                                                    src="../img/80e8c3cb672cd7b6ea3c94b42b229cd5.jpg" alt="Site Image">
                                            </div>
                                            <div class="product-image-thumb"><img src="../img/chiot.jpg"
                                                    alt="Site Image"></div>
                                            <div class="product-image-thumb"><img src="../img/photo1.png"
                                                    alt="Site Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h3 class="my-3">
                                            Site de {{ $info_site->LIBELLE_SITE }} avec un potentiel de production
                                            d'environ
                                            {{ $info_site->CAPACITE_SITE }} MW
                                        </h3>
                                        <p>{{ $info_site->DESCRIPTION_SITE }}</p>

                                        <hr>
                                        <h4>{{ $info_site->LIBELLE_REGION }},
                                            {{ $info_site->LIBELLE_DEPATEMENT }},
                                            {{ $info_site->LIBELLE_ARRONDISSEMENT }},
                                            {{ $info_site->LIBELLE_QUARTIER }}
                                        </h4>
                                        <div>
                                            <label class="text-center btn btn-default">
                                                Source d'energie : {{ $info_site->LIBELLE_SOURCE_ENR }}
                                            </label><br>
                                            <label class="text-center btn btn-default">
                                                Type d'exploitantation : {{ $info_site->LIBELLE_EXPLOITANT }}
                                            </label><br>
                                            <label class="text-center btn btn-default">
                                                Regime proposé : {{ $info_site->LIBELLE_REGIME }}
                                            </label><br>
                                            <label class="text-center btn btn-default">
                                                Activité proposé : {{ $info_site->LIBELLE_ACTIVITE }}
                                            </label>
                                        </div>
                                        <div class="mt-4">
                                            <div class="btn btn-primary btn-lg btn-flat" style="background-color: #0069d9">
                                                Demander un titre
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="mt-4 row">
                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                        href="#product-desc" role="tab" aria-controls="product-desc"
                                        aria-selected="true" style="color: #0069d9">Concession</a>
                                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                        href="#product-comments" role="tab" aria-controls="product-comments"
                                        aria-selected="false" style="color: #0069d9">Licence</a>
                                    <a class="nav-item nav-link" id="liberte-rating-tab" data-toggle="tab"
                                        href="#liberte-rating" role="tab" aria-controls="liberte-rating"
                                        aria-selected="false" style="color: #0069d9">Autorisation</a>
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
                                </div>
                                <div class="tab-pane fade" id="autorisation-rating" role="tabpanel"
                                    aria-labelledby="autorisation-rating-tab"> Lorsque la puissance des installations
                                    d’auto-Production est supérieure à 100 kW et inférieure à 1 MW,le propriétaire est tenu de
                                    faire une déclaration préalable à leur mise en service auprès De l’Agence de Régulation du
                                    Secteur de l’électricité.</div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
        <!-- /.content-wrapper -->

        @include('include.footer_admin')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../js/demo.js"></script>
    <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function() {
                var $image_element = $(this).find('img')
                $('.product-image').prop('src', $image_element.attr('src'))
                $('.product-image-thumb.active').removeClass('active')
                $(this).addClass('active')
            })
        })
    </script>
</body>

</html>
