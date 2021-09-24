$ (document).ready (function () {
  $ ('#stepper2').mdbStepper ();
});

// Recherche des departements
$ (document).ready (function () {
  $ ('select[name="region_select"]').on ('change', function () {
    let id = $ (this).val ();
    //alert(id)
    $ ('select[name="departement_select"]').empty ();
    $ ('select[name="departement_select"]').append (
      `<option value="0" disabled selected>Recherche...</option>`
    );
    $.ajax ({
      type: 'GET',
      url: '/find_dept/' + id,
      success: function (response) {
        var response = JSON.parse (response);
        console.log (response);
        $ ('select[name="departement_select"]').empty ();
        $ ('select[name="departement_select"]').append (
          `<option value="0" disabled selected>Choisissez un departement</option>`
        );
        response.forEach (element => {
          $ ('select[name="departement_select"]').append (
            `<option value="${element['ID_DEPARTEMENT']}">${element['LIBELLE_DEPATEMENT']}</option>`
          );
        });
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log (JSON.stringify (jqXHR));
        console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
      },
    });
  });
});

//Recherche des activités
$ (document).ready (function () {
  $ ('select[name="type_regime"]').on ('change', function () {
    let id = $ (this).val ();
    $ ('select[name="type_activite"]').empty ();
    $ ('select[name="type_activite"]').append (
      `<option value="0" disabled selected>Recherche...</option>`
    );
    $.ajax ({
      type: 'GET',
      url: '/find_activity/' + id,
      success: function (response) {
        var response = JSON.parse (response);
        console.log (response);
        $ ('select[name="type_activite"]').empty ();
        $ ('select[name="type_activite"]').append (
          `<option value="0" disabled selected>Choisissez une activité</option>`
        );
        response.forEach (element => {
          $ ('select[name="type_activite"]').append (
            `<option value="${element['ID_ACTIVITE']}">${element['LIBELLE_ACTIVITE']}</option>`
          );
        });
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log (JSON.stringify (jqXHR));
        console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
      },
    });
  });
});

// Recherche des arrondissement
$ (document).ready (function () {
  $ ('select[name="departement_select"]').on ('change', function () {
    let id = $ (this).val ();
    $ ('select[name="arr_site"]').empty ();
    $ ('select[name="arr_site"]').append (
      `<option value="0" disabled selected>Recherche...</option>`
    );
    $.ajax ({
      type: 'GET',
      url: '/find_arrondissement/' + id,
      success: function (response) {
        var response = JSON.parse (response);
        console.log (response);
        $ ('select[name="arr_site"]').empty ();
        $ ('select[name="arr_site"]').append (
          `<option value="0" disabled selected>Choisissez un arrondissement</option>`
        );
        response.forEach (element => {
          $ ('select[name="arr_site"]').append (
            `<option value="${element['ID_ARRONDISSEMENT']}">${element['LIBELLE_ARRONDISSEMENT']}</option>`
          );
        });
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log (JSON.stringify (jqXHR));
        console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
      },
    });
  });
});


// Find all site
/*$ (document).ready (function () {
    $ ('#site_filter').empty ();
    $.ajax ({
      type: 'GET',
      url: '/les-site',
      beforeSend: function () {
        $ ('.loader').show ();
      },
      success: function (response) {
        var response = JSON.parse (response);
        if (response.length == 0) {
        $ ('.loader').hide ();
            $ ('#site_filter').append (
          `<center><h1 style="margin-top:25%"> Not found </h1>`
          );
        } else {
          console.log (response);
          $ ('#site_filter').empty ();
          response.forEach (element => {
              //alert(element['LIBELLE_IMAGE'])
            $ ('#site_filter').append (
              `
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"><div class="card card-small">
              <div class="thumbnail">
                  <img alt="${element['LIBELLE_IMAGE']}"
                      src="../images_site/${element['LIBELLE_IMAGE']}">
                  <a href="/editer-site/${element['ID_SITE']}">
                      <div class="thumb-cover"></div>
                  </a>
              </div>
              <div class="card-info">
                  <div class="moving">
                      <a href="/editer-site/${element['ID_SITE']}">
                          <h3>${element['LIBELLE_REGION']},
                              ${element['LIBELLE_DEPATEMENT']},
                              ${element['LIBELLE_ARRONDISSEMENT']},
                              ${element['LIBELLE_QUARTIER']},
                              ${element['CAPACITE_SITE']} MW</h3>
                          <p>
                          ${element['DESCRIPTION_SITE']}
                          </p>
                      </a>
                  </div>
              </div>
          </div>
        </div>`
            );
          });
        $ ('.loader').hide ();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log (JSON.stringify (jqXHR));
        console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
      },
    });
});*/


// Filtre par region
$ (document).ready (function () {
  $ ('select[name="region_select"]').on ('change', function () {
    let id = $ (this).val ();
    $ ('#site_filter').empty ();
    $.ajax ({
      type: 'GET',
      url: '/filter_site_by_region/' + id,
      beforeSend: function () {
        $ ('.loader').show ();
      },
      success: function (response) {
        var response = JSON.parse (response);
        if (response.length == 0) {
        $ ('.loader').hide ();
            $ ('#site_filter').append (
          `<center><h1 style="margin-top:25%"> Not found </h1>`
          );
        } else {
          console.log (response);
          $ ('#site_filter').empty ();
          response.forEach (element => {
              //alert(element['LIBELLE_IMAGE'])
            $ ('#site_filter').append (
              `
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"><div class="card card-small">
              <div class="thumbnail">
                  <img alt="${element['LIBELLE_IMAGE']}"
                      src="../images_site/${element['LIBELLE_IMAGE']}">
                  <a href="/editer-site/${element['ID_SITE']}">
                      <div class="thumb-cover"></div>
                  </a>
              </div>
              <div class="card-info">
                  <div class="moving">
                      <a href="/editer-site/${element['ID_SITE']}">
                          <h3>${element['LIBELLE_REGION']},
                              ${element['LIBELLE_DEPATEMENT']},
                              ${element['LIBELLE_ARRONDISSEMENT']},
                              ${element['LIBELLE_QUARTIER']},
                              ${element['CAPACITE_SITE']} MW</h3>
                          <p>
                          ${element['DESCRIPTION_SITE']}
                          </p>
                      </a>
                  </div>
              </div>
          </div>
        </div>`
            );
          });
        $ ('.loader').hide ();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log (JSON.stringify (jqXHR));
        console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
      },
    });
  });
});


// Filtre par departement
$ (document).ready (function () {
  $ ('select[name="departement_select"]').on ('change', function () {
    let id = $ (this).val ();
    $ ('#site_filter').empty ();
    $.ajax ({
      type: 'GET',
      url: '/filter_site_by_dept/' + id,
      beforeSend: function () {
        $ ('.loader').show ();
      },
      success: function (response) {
        var response = JSON.parse (response);
        if (response.length == 0) {
        $ ('.loader').hide ();
            $ ('#site_filter').append (
          `<center><h1 style="margin-top:25%"> Not found </h1>`
          );
        } else {
          console.log (response);
          $ ('#site_filter').empty ();
          response.forEach (element => {
              //alert(element['LIBELLE_IMAGE'])
            $ ('#site_filter').append (
              `
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"><div class="card card-small">
              <div class="thumbnail">
                  <img alt="${element['LIBELLE_IMAGE']}"
                      src="../images_site/${element['LIBELLE_IMAGE']}">
                  <a href="/editer-site/${element['ID_SITE']}">
                      <div class="thumb-cover"></div>
                  </a>
              </div>
              <div class="card-info">
                  <div class="moving">
                      <a href="/editer-site/${element['ID_SITE']}">
                          <h3>${element['LIBELLE_REGION']},
                              ${element['LIBELLE_DEPATEMENT']},
                              ${element['LIBELLE_ARRONDISSEMENT']},
                              ${element['LIBELLE_QUARTIER']},
                              ${element['CAPACITE_SITE']} MW</h3>
                          <p>
                          ${element['DESCRIPTION_SITE']}
                          </p>
                      </a>
                  </div>
              </div>
          </div>
        </div>`
            );
          });
        $ ('.loader').hide ();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log (JSON.stringify (jqXHR));
        console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
      },
    });
  });
});


// Filtre par arrondissement
$ (document).ready (function () {
  $ ('select[name="arr_site"]').on ('change', function () {
    let id = $ (this).val ();
    $ ('#site_filter').empty ();
    $.ajax ({
      type: 'GET',
      url: '/filter_site_by_arr/' + id,
      beforeSend: function () {
        $ ('.loader').show ();
      },
      success: function (response) {
        var response = JSON.parse (response);
        if (response.length == 0) {
        $ ('.loader').hide ();
            $ ('#site_filter').append (
          `<center><h1 style="margin-top:25%"> Not found </h1>`
          );
        } else {
          console.log (response);
          $ ('#site_filter').empty ();
          response.forEach (element => {
              //alert(element['LIBELLE_IMAGE'])
            $ ('#site_filter').append (
              `
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"><div class="card card-small">
              <div class="thumbnail">
                  <img alt="${element['LIBELLE_IMAGE']}"
                      src="../images_site/${element['LIBELLE_IMAGE']}">
                  <a href="/editer-site/${element['ID_SITE']}">
                      <div class="thumb-cover"></div>
                  </a>
              </div>
              <div class="card-info">
                  <div class="moving">
                      <a href="/editer-site/${element['ID_SITE']}">
                          <h3>${element['LIBELLE_REGION']},
                              ${element['LIBELLE_DEPATEMENT']},
                              ${element['LIBELLE_ARRONDISSEMENT']},
                              ${element['LIBELLE_QUARTIER']},
                              ${element['CAPACITE_SITE']} MW</h3>
                          <p>
                          ${element['DESCRIPTION_SITE']}
                          </p>
                      </a>
                  </div>
              </div>
          </div>
        </div>`
            );
          });
        $ ('.loader').hide ();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log (JSON.stringify (jqXHR));
        console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
      },
    });
  });
});


// Filtre par régime
$ (document).ready (function () {
  $ ('select[name="type_regime"]').on ('change', function () {
    let id = $ (this).val ();
    $ ('#site_filter').empty ();
    $.ajax ({
      type: 'GET',
      url: '/filter_site_by_regime/' + id,
      beforeSend: function () {
        $ ('.loader').show ();
      },
      success: function (response) {
        var response = JSON.parse (response);
        if (response.length == 0) {
        $ ('.loader').hide ();
            $ ('#site_filter').append (
          `<center><h1 style="margin-top:25%"> Not found </h1>`
          );
        } else {
          console.log (response);
          $ ('#site_filter').empty ();
          response.forEach (element => {
              //alert(element['LIBELLE_IMAGE'])
            $ ('#site_filter').append (
              `
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"><div class="card card-small">
              <div class="thumbnail">
                  <img alt="${element['LIBELLE_IMAGE']}"
                      src="../images_site/${element['LIBELLE_IMAGE']}">
                  <a href="/editer-site/${element['ID_SITE']}">
                      <div class="thumb-cover"></div>
                  </a>
              </div>
              <div class="card-info">
                  <div class="moving">
                      <a href="/editer-site/${element['ID_SITE']}">
                          <h3>${element['LIBELLE_REGION']},
                              ${element['LIBELLE_DEPATEMENT']},
                              ${element['LIBELLE_ARRONDISSEMENT']},
                              ${element['LIBELLE_QUARTIER']},
                              ${element['CAPACITE_SITE']} MW</h3>
                          <p>
                          ${element['DESCRIPTION_SITE']}
                          </p>
                      </a>
                  </div>
              </div>
          </div>
        </div>`
            );
          });
        $ ('.loader').hide ();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log (JSON.stringify (jqXHR));
        console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
      },
    });
  });
});


// Filtre par activité
$ (document).ready (function () {
  $ ('select[name="type_activite"]').on ('change', function () {
    let id = $ (this).val ();
    $ ('#site_filter').empty ();
    $.ajax ({
      type: 'GET',
      url: '/filter_site_by_activite/' + id,
      beforeSend: function () {
        $ ('.loader').show ();
      },
      success: function (response) {
        var response = JSON.parse (response);
        if (response.length == 0) {
        $ ('.loader').hide ();
            $ ('#site_filter').append (
          `<center><h1 style="margin-top:25%"> Not found </h1>`
          );
        } else {
          console.log (response);
          $ ('#site_filter').empty ();
          response.forEach (element => {
              //alert(element['LIBELLE_IMAGE'])
            $ ('#site_filter').append (
              `
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"><div class="card card-small">
              <div class="thumbnail">
                  <img alt="${element['LIBELLE_IMAGE']}"
                      src="../images_site/${element['LIBELLE_IMAGE']}">
                  <a href="/editer-site/${element['ID_SITE']}">
                      <div class="thumb-cover"></div>
                  </a>
              </div>
              <div class="card-info">
                  <div class="moving">
                      <a href="/editer-site/${element['ID_SITE']}">
                          <h3>${element['LIBELLE_REGION']},
                              ${element['LIBELLE_DEPATEMENT']},
                              ${element['LIBELLE_ARRONDISSEMENT']},
                              ${element['LIBELLE_QUARTIER']},
                              ${element['CAPACITE_SITE']} MW</h3>
                          <p>
                          ${element['DESCRIPTION_SITE']}
                          </p>
                      </a>
                  </div>
              </div>
          </div>
        </div>`
            );
          });
        $ ('.loader').hide ();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log (JSON.stringify (jqXHR));
        console.log ('Ajax error: ' + textStatus + ' : ' + errorThrown);
      },
    });
  });
});
