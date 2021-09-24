<div class="container">
    <div class="row">
        @if ($info_site->count() > 0)
            @foreach ($info_site as $info_site)
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">
                    <div class="card card-small">
                        <div class="thumbnail">
                            <img alt="Coming sssoon thumbnail"
                                src="{{ URL::asset('images_site/' . $info_site->LIBELLE_IMAGE) }}">
                            <a href="/editer-site/{{ $info_site->ID_SITE }}">
                                <div class="thumb-cover"></div>
                            </a>
                        </div>
                        <div class="card-info">
                            <div class="moving">
                                <a href="/editer-site/{{ $info_site->ID_SITE }}">
                                    <h3>{{ $info_site->LIBELLE_REGION }},
                                        {{ $info_site->LIBELLE_DEPATEMENT }},
                                        {{ $info_site->LIBELLE_ARRONDISSEMENT }},
                                        {{ $info_site->LIBELLE_QUARTIER }}, {{ $info_site->CAPACITE_SITE }} MW</h3>
                                    <p>
                                        <?php
                                        if (strlen($info_site->DESCRIPTION_SITE) > 100) {
                                            echo substr($info_site->DESCRIPTION_SITE, 0, 100) . '....';
                                        }
                                        ?>
                                        <a href='/editer-site/{{ $info_site->ID_SITE }}' style="color: blue">
                                            Voir plus...
                                        </a>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif


    </div>

</div>


<script type="text/javascript">

</script>
