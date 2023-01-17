<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')
    @yield('meta_description')
    @yield('meta_keywords')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.2/css/bootstrap.min.css"
        referrerpolicy="no-referrer" />
    <link rel="icon" href={{ asset('monarch-frontend/image/favicon.png') }} sizes="192x192" />
    <link rel="stylesheet" href={{ asset('monarch-frontend/css/homepage.css') }} rel="stylesheet">
    <link rel="stylesheet" href={{ asset('monarch-frontend/css/style.css') }} rel="stylesheet">

    <link rel="stylesheet" href={{ asset('monarch-frontend/css/contact.css') }}>
    <link rel="stylesheet" href={{ asset('monarch-frontend/css/career.css') }}>
    <link rel="stylesheet" href={{ asset('monarch-frontend/css/find-location.css') }}>

    <link rel="stylesheet" href={{ asset('monarch-frontend/css/owl.carousel.min.css') }} rel="stylesheet">
    <link rel="stylesheet" href={{ asset('monarch-frontend/css/flaticon.css') }}>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css"
        referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    {{-- 26-10 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


    @stack('styles')

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NH9JPJP6SK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NH9JPJP6SK');
    </script>

</head>

<body>


    @include('frontend.layout.top-nav')

    @yield('page-contents')

    @include('frontend.layout.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.2/js/bootstrap.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script> --}}
    <script src={{ asset('monarch-frontend/js/main.js') }}></script>

    {{-- added --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" rel="stylesheet"
        crossorigin="anonymous">
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        $('.go-top').on('click', function() {
            $("html, body").animate({
                scrollTop: "0"
            }, 500);
        });
    </script>
    <script>
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fa fa-arrow-left'></i></div>",
                "<div class='nav-btn next-slide'><i class='fa fa-arrow-right'></i></div>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>
    <script>
        $('.owl-two').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <script>
        $('.owl-home-plan').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fa fa-arrow-left'></i></div>",
                "<div class='nav-btn next-slide'><i class='fa fa-arrow-right'></i></div>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <script>
        $('.owl-partner').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <script>
        $('.owl-three').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <script>
        $('.owl-four').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <script>
        $('.owl-five').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 6
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>
    <script>
        $('.owl-plan').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <script>
        $('.owl-gallery').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <script>
        $('.owl-six').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>

    <script>
        $('.owl-seven').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            navText: ["<div class='nav-btn prev-slide'><i class='fa fa-arrow-left'></i></div>",
                "<div class='nav-btn next-slide'><i class='fa fa-arrow-right'></i></div>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>

    <script>
        $(function() {
            $.ajax({
                type: "GET",
                url: '{{ route('footer') }}',
                dataType: "json",
                success: function(answer) {

                    for (var i = 0; i < answer.length; i++) {
                        var route = "{{ url('') }}";
                        console.log('route', route);
                        var htm = '<li><a href="' + route + '/location/' + answer[i]['slug'] + '">' +
                            answer[i]['name'] + '</a><li>';
                        $('#footer').append(htm);
                    }
                },
            });
            return false;
        });
    </script>

    {{-- image pop up --}}
    <script>
        $(document).ready(function() {
            $('[data-fancybox="gallery"]').fancybox({
                loop: true,
                buttons: [
                    "zoom",
                    "share",
                    "slideShow",
                    "fullScreen",
                    "download",
                    "thumbs",
                    "close"
                ]
            });
            loadAutoComplete()
        })
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZuRJggt3Hg37Vrl5EeL9j9FREsD7SBo8&libraries=places&callback=initMap&v=weekly"
        defer></script>

    <script>
        window.initMap = initMap;

        var all_coordinators = null;
        var coords = [];
        var radius = 32186;


        var currWindow = false;

        function addClinicsMarker(map) {
            all_coordinators.map((point) => {
                //    var slug = `${point.slug}`;
                var infowindow = new google.maps.InfoWindow({
                    content: `<div>
                      <div class="location_map_image">  <img src="{{ asset('storage/${point.banner}') }}"></div><br/>
                        <h5>${point.name}</h5>
                        ${point.address} <br/>
                        <i class="fal fa-phone-volume"></i> ${point.phone_number} <br/>
                        <a href={{ url('/location/${point.slug}') }}>
                                       <b style="color:blue">View Details<b>
                                    </a>
                        </div>`
                });
                var marker = new google.maps.Marker({
                    position: {
                        lat: parseFloat(point.lat),
                        lng: parseFloat(point.lng)
                    },
                    map: map,
                });
                marker.addListener('click', function() {
                    // infowindow.open(map, marker);


                    if (currWindow) {
                        currWindow.close();
                    }

                    currWindow = infowindow;
                    infowindow.open(map, marker);
                });
            })
        };

        function initMap() {
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 9,
                center: {
                    // lat: 43.3040346, 
                    lat: 43.449906,
                    // lng: -79.5071179,
                    lng: -79.751922,
                },
            });

            $.ajax({
                type: "GET",
                url: '{{ route('map_locations') }}',
                dataType: "json",
                success: function(answer) {
                    all_coordinators = answer;
                    addClinicsMarker(map);
                },
            });


        }
    </script>

    <script>
        var place;

        function loadAutoComplete() {
            const componentForm = {
                administrative_area_level_1: "long_name",
                postal_code: "short_name",
                locality: "long_name"
            };
            var localeKeyword = "Toronto"
            var autocomplete;


            autocomplete = new google.maps.places.Autocomplete((document.getElementById('name')), {
                strictBounds: false,
                types: ['establishment', 'geocode'],
                componentRestrictions: {
                    country: "CA"
                },
                // fields: ['address_components'],
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                place = autocomplete.getPlace();

                //get all coordinated of nearby
                // getAllNearbyPonits(place);

            });


        }

        const getAllNearbyPonits = async (place) => {
            var sel_lat = place.geometry.location.lat();
            var sel_lon = place.geometry.location.lng();
            var pyrmont = new google.maps.LatLng(sel_lat, sel_lon);
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 9,
                center: pyrmont,
            });

            var marker = new google.maps.Marker({
                map: map,
                position: map.getCenter(),
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    fillColor: '#00F',
                    fillOpacity: 0.6,
                    strokeColor: '#00A',
                    strokeOpacity: 0.9,
                    strokeWeight: 1,
                    scale: 7
                }
            });

            var circle = new google.maps.Circle({
                map: map,
                radius: radius, // 10 miles in metres
                fillColor: '#ccc',
                strokeColor: '#00000075'
            });
            circle.bindTo('center', marker, 'position');


            addClinicsMarker(map);

            $("html, body").animate({
                scrollTop: 0
            }, "slow");

            // var request = {
            //     location: pyrmont,
            //     radius: '100000',
            //     query: 'churches'
            // };

            // service = new google.maps.places.PlacesService(map);

            // service.textSearch(request, callback);
            // setTimeout(() => {
            //     console.log(coords.length)
            //     var editablePolygon = new google.maps.Polygon({
            //         paths: coords,
            //         strokeColor: '#FF0000',
            //         strokeOpacity: 0.8,
            //         strokeWeight: 2,
            //         fillColor: '#FF0000',
            //         fillOpacity: 0.35,
            //         editable: true
            //     });
            //     editablePolygon.setMap(map);

            //     console.log('coordinators', all_coordinators);
            //     addClinicsMarker(map);

            // }, 2000);


        }

        // const callback = async (results, status) => {

        //     if (status == google.maps.places.PlacesServiceStatus.OK) {
        //         for (var i = 0; i < 0; i++) {

        //             coords.push({
        //                 lat: results[i].geometry.location.lat(),
        //                 lng: results[i].geometry.location.lng(),
        //             })


        //         }
        //     }

        // }

        $('#btn-search-map').on('click', function() {
            getAllNearbyPonits(place);
        });
    </script>

    <script>
        $('#miles').on('change', function() {
            var miles = $(this).val();
            var oneMile = 1609.3
            radius = oneMile * miles;
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#btn-reset').on('click', function() {
                $('input[name=name]').val('');
                $('select[name=Radius]').val('');
                initMap();
            })
        })
    </script>
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {}
        }

        function showPosition(position) {
            lat = position.coords.latitude;
            lon = position.coords.longitude;
            latlon = new google.maps.LatLng(lat, lon)
            map = document.getElementById('map')
            map.style.height = '440px';
            map.style.width = '100%';

            var myOptions = {
                center: latlon,
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                navigationControlOptions: {
                    style: google.maps.NavigationControlStyle.SMALL
                }
            };
            var map = new google.maps.Map(document.getElementById("map"), myOptions);
            var marker = new google.maps.Marker({
                position: latlon,
                map: map,
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").slideUp(400);
            });
        })
    </script>
    <script>
        function validateCaptcha() {
            document.getElementById('app-btn').style.opacity = "1";
            var btn = document.getElementById('app-btn');
            btn.disabled = false;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script>
        $(document).ready(function() {
            var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
                backgroundColor: 'rgba(255, 255, 255, 0)',
                penColor: 'rgb(0, 0, 0)'
            });
            var saveButton = document.getElementById('save');
            var cancelButton = document.getElementById('clear');

            saveButton.addEventListener('click', function(event) {

                if (signaturePad.isEmpty()) {
                    alert("Please provide signature first.");
                } else {
                    var image = signaturePad.toDataURL('image/png');
                    document.getElementById('signature').value = image;
                    $('#staticBackdrop').modal('hide');
                }
            });
            cancelButton.addEventListener('click', function(event) {
                signaturePad.clear();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#phone_number').on('change', function() {
                var string = $('#phone_number').val();
                var phone = string.replace(/(\d{3})(\d{3})(\d{4})/, '$1' + '-' + '$2' + '-' + '$3');
                $('#phone_number').val(phone);
            });
        });
    </script>

    @stack('scripts')

</body>

</html>
