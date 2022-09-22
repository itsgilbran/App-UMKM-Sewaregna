<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WELCOME TO MANADO</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <!--  CSS BOOTSTRAP -->
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/leaflet-search.css">
    <link rel="stylesheet" href="css/leaflet-measure.css">
    <style>
        html,
        body,
        #map {
            width: 100%;
            ;
            position: relative;
            height: 100%;
        }

        .masthead {
            height: 100vh;
            min-height: 500px;
            background-image: url('assets/header.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <link href="css/styles.css" rel="stylesheet" />
</head>



<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Home</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#map">Map</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background-image: url('assets/header.jpeg')">
        <div class=" container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class=" d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">KOTA MANADO</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Torang samua basudara.</h2>
                    <a class="btn btn-primary" href="#about">Get Started</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Built with Bootstrap 5</h2>
                    <p class="text-white-50">
                        Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                        <a href="">the preview page.</a>
                        The theme is open source, and you can use it for any purpose, personal or commercial.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
        </div>
    </section>
    <!-- Projects-->

    <div id="map">
    </div>


    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                            <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2 text-white">
                                <div class="fw-bolder">Form submission successful!</div>
                                Untuk mendapatkan berita terkini silahkan kunjungi
                                <br />
                                <a href="https://manadokota.bps.go.id">https://manadokota.bps.go.id</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Jl. Cempaka Sari IV No.05 RT01/RW01, Kel. Sekaran, Kec. Gunung Pati, Kota Semarang, Jawa Tengah, Kode Pos 50229, Indonesia</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">muhammadnaufaljilbran1011@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+62 812 2578 2778</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="https://twitter.com/andrzgbrn_96?t=UlVfFM6uRoabgECVp5Uldw&s=08!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="https://wa.me/6285643918500?text=Hello!"><i class="fab fa-whatsapp"></i></a>
                <a class="mx-2" href="https://www.instagram.com/andreias.gilbran/!"><i class="fab fa-instagram"></i></a>
                <a class="mx-2" href="https://www.facebook.com/alghraaglbrn/!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="https://github.com/itsgilbran!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; 2022</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script src="js/qgis2web_expressions.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/leaflet.rotatedMarker.js"></script>
    <script src="js/leaflet.pattern.js"></script>
    <script src="js/leaflet-hash.js"></script>
    <script src="js/Autolinker.min.js"></script>
    <script src="js/rbush.min.js"></script>
    <script src="js/labelgun.min.js"></script>
    <script src="js/labels.js"></script>
    <script src="js/leaflet-measure.js"></script>
    <script src="js/leaflet-search.js"></script>
    <script src="data/ADMINISTRASIKECAMATAN_AR_50K_1.js"></script>
    <script>
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [1.40260002944973, 124.63163263839216],
            [1.632285169049699, 125.03876595441432]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
            .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
            .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}
        map.createPane('pane_OSMStandard_0');
        map.getPane('pane_OSMStandard_0').style.zIndex = 400;
        var layer_OSMStandard_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OSMStandard_0',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OSMStandard_0;
        map.addLayer(layer_OSMStandard_0);

        function pop_ADMINISTRASIKECAMATAN_AR_50K_1(feature, layer) {
            var popupContent = '<table>\
                    \
                  \
                  \
                  \
                   \
                    <tr>\
                    <th scope="row">Provinsi</th>\
                        <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                  \
                   \
                   \
            \
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kodedagri</th>\
                        <td>' + (feature.properties['Kodedagri'] !== null ? autolinker.link(feature.properties['Kodedagri'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jumlah</th>\
                        <td>' + (feature.properties['Jumlah'] !== null ? autolinker.link(feature.properties['Jumlah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_ADMINISTRASIKECAMATAN_AR_50K_1_0(feature) {
            if (feature.properties['Jumlah'] >= 6313.000000 && feature.properties['Jumlah'] <= 25872.000000) {
                return {
                    pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(255,255,255,1.0)',
                    interactive: true,
                }
            }
            if (feature.properties['Jumlah'] >= 25872.000000 && feature.properties['Jumlah'] <= 32623.000000) {
                return {
                    pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                    opacity: 1,
                    hoverOpacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(255,191,191,1.0)',
                    interactive: true,
                }
            }
            if (feature.properties['Jumlah'] >= 32623.000000 && feature.properties['Jumlah'] <= 52871.000000) {
                return {
                    pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(255,128,128,1.0)',
                    interactive: true,
                }
            }
            if (feature.properties['Jumlah'] >= 52871.000000 && feature.properties['Jumlah'] <= 59803.000000) {
                return {
                    pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(255,64,64,1.0)',
                    interactive: true,
                }
            }
            if (feature.properties['Jumlah'] >= 59803.000000 && feature.properties['Jumlah'] <= 63763.000000) {
                return {
                    pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                    opacity: 1,
                    color: 'rgba(35,35,35,1.0)',
                    dashArray: '',
                    lineCap: 'butt',
                    lineJoin: 'miter',
                    weight: 1.0,
                    fill: true,
                    fillOpacity: 1,
                    fillColor: 'rgba(255,0,0,1.0)',
                    interactive: true,
                }
            }
        }
        map.createPane('pane_ADMINISTRASIKECAMATAN_AR_50K_1');
        map.getPane('pane_ADMINISTRASIKECAMATAN_AR_50K_1').style.zIndex = 401;
        map.getPane('pane_ADMINISTRASIKECAMATAN_AR_50K_1').style['mix-blend-mode'] = 'normal';
        var layer_ADMINISTRASIKECAMATAN_AR_50K_1 = new L.geoJson(json_ADMINISTRASIKECAMATAN_AR_50K_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_ADMINISTRASIKECAMATAN_AR_50K_1',
            layerName: 'layer_ADMINISTRASIKECAMATAN_AR_50K_1',
            pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
            onEachFeature: pop_ADMINISTRASIKECAMATAN_AR_50K_1,
            style: style_ADMINISTRASIKECAMATAN_AR_50K_1_0,
        });
        bounds_group.addLayer(layer_ADMINISTRASIKECAMATAN_AR_50K_1);
        map.addLayer(layer_ADMINISTRASIKECAMATAN_AR_50K_1);
        var baseMaps = {};
        L.control.layers(baseMaps, {
            'Kecamatan<br /><table><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_6313258720.png" /></td><td>6313 - 25872</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_25872326231.png" /></td><td>25872 - 32623</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_32623528712.png" /></td><td>32623 - 52871</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_52871598033.png" /></td><td>52871 - 59803</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_59803637634.png" /></td><td>59803 - 63763</td></tr></table>': layer_ADMINISTRASIKECAMATAN_AR_50K_1,
            "OSM Standard": layer_OSMStandard_0,
        }).addTo(map);
        setBounds();
        var i = 0;
        layer_ADMINISTRASIKECAMATAN_AR_50K_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String('<div style="color: #323232; font-size: 10pt; font-family: \'Times New Roman\', sans-serif;">' + layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_ADMINISTRASIKECAMATAN_AR_50K_1'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        map.addControl(new L.Control.Search({
            layer: layer_ADMINISTRASIKECAMATAN_AR_50K_1,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'Jumlah'
        }));
        document.getElementsByClassName('search-button')[0].className +=
            ' fa fa-binoculars';
        resetLabels([layer_ADMINISTRASIKECAMATAN_AR_50K_1]);
        map.on("zoomend", function() {
            resetLabels([layer_ADMINISTRASIKECAMATAN_AR_50K_1]);
        });
        map.on("layeradd", function() {
            resetLabels([layer_ADMINISTRASIKECAMATAN_AR_50K_1]);
        });
        map.on("layerremove", function() {
            resetLabels([layer_ADMINISTRASIKECAMATAN_AR_50K_1]);
        });
    </script>
</body>

</html>