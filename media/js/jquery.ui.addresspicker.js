!function (e, t) {
    e.widget("ui.addresspicker", {
        options: {
            appendAddressString: "",
            draggableMarker: !0,
            regionBias: null,
            bounds: "",
            componentsFilter: "",
            updateCallback: null,
            reverseGeocode: !1,
            autocomplete: "default",
            language: "",
            mapOptions: {
                zoom: 5,
                center: new google.maps.LatLng(46, 2),
                scrollwheel: !1,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            },
            elements: {
                map: !1,
                lat: !1,
                lng: !1,
                street_number: !1,
                route: !1,
                locality: !1,
                sublocality: !1,
                administrative_area_level_3: !1,
                administrative_area_level_2: !1,
                administrative_area_level_1: !1,
                country: !1,
                postal_code: !1,
                type: !1
            },
            autocomplete: ""
        },
        marker: function () {
            return this.gmarker
        },
        map: function () {
            return this.gmap
        },
        updatePosition: function () {
            this._updatePosition(this.gmarker.getPosition())
        },
        reloadPosition: function () {
            this.gmarker.setVisible(!0),
                this.gmarker.setPosition(new google.maps.LatLng(this.lat.val, this.lng.val)),
                this.gmap.setCenter(this.gmarker.getPosition())
        },
        resize: function () {
            google.maps.event.trigger(this.gmap, "resize")
        },
        selected: function () {
            return this.selectedResult
        },
        _mapped: {},
        _create: function () {
            var t = this;
            this.geocoder = {
                geocode: function (e, t) {
                    jQuery.ajax({
                        url: "https://maps.googleapis.com/maps/api/geocode/json?" + jQuery.param(e) + "&sensor=false",
                        type: "GET",
                        success: function (e) {
                            t(e.results, e.status)
                        }
                    })
                }
            },
                this.options.autocomplete === "bootstrap" ? this.element.typeahead({
                    source: function (e, s) {
                        t._mapped = {};
                        var i = function (e) {
                                for (var i = [], o = 0; o < e.length; o++) {
                                    t._mapped[e[o].label] = e[o], i.push(e[o].label);
                                }
                                s(i)
                            },
                            o = {
                                term: e
                            };
                        t._geocode(o, i)
                    },
                    updater: function (e) {
                        var s = {
                            item: t._mapped[e]
                        };
                        return t._focusAddress(null, s),
                            t._selectAddress(null, s),
                            e
                    }
                }) : this.element.autocomplete(e.extend({
                    source: e.proxy(this._geocode, this),
                    focus: e.proxy(this._focusAddress, this),
                    select: e.proxy(this._selectAddress, this)
                }), this.options.autocomplete),
                this.lat = e(this.options.elements.lat),
                this.lng = e(this.options.elements.lng),
                this.street_number = e(this.options.elements.street_number),
                this.route = e(this.options.elements.route),
                this.locality = e(this.options.elements.locality),
                this.sublocality = e(this.options.elements.sublocality),
                this.administrative_area_level_3 = e(this.options.elements.administrative_area_level_3),
                this.administrative_area_level_2 = e(this.options.elements.administrative_area_level_2),
                this.administrative_area_level_1 = e(this.options.elements.administrative_area_level_1),
                this.country = e(this.options.elements.country),
                this.postal_code = e(this.options.elements.postal_code),
                this.type = e(this.options.elements.type),
            this.options.elements.map && (this.mapElement = e(this.options.elements.map), this._initMap())
        },
        _initMap: function () {
            this.lat && this.lat.val() && (this.options.mapOptions.center = new google.maps.LatLng(this.lat.val(), this.lng.val())),
                this.gmap = new google.maps.Map(this.mapElement[0], this.options.mapOptions),
                this.gmarker = new google.maps.Marker({
                    position: this.options.mapOptions.center,
                    map: this.gmap,
                    draggable: this.options.draggableMarker
                }),
                google.maps.event.addListener(this.gmarker, "dragend", e.proxy(this._markerMoved, this)),
                this.gmarker.setVisible(!1)
        },
        _updatePosition: function (e) {
            this.lat && this.lat.val(e.lat()),
            this.lng && this.lng.val(e.lng())
        },
        _addressParts: {
            street_number: null,
            route: null,
            locality: null,
            sublocality: null,
            administrative_area_level_3: null,
            administrative_area_level_2: null,
            administrative_area_level_1: null,
            country: null,
            postal_code: null,
            type: null
        },
        _updateAddressParts: function (e) {
            parsedResult = this._parseGeocodeResult(e);
            for (addressPart in this._addressParts) {
                this[addressPart] && this[addressPart].val(parsedResult[addressPart] === !1 ? "" : parsedResult[addressPart])
            }
        },
        _updateAddressPartsViaReverseGeocode: function (t) {
            // this.geocoder.geocode({
            // latlng : t.lat() + "," + t.lng()
            // }, e.proxy(function (e, t) {
            // t == google.maps.GeocoderStatus.OK && (this._updateAddressParts(e[0]), this.element.val(e[0].formatted_address), this.selectedResult = e[0], this.options.updateCallback && this.options.updateCallback(this.selectedResult, this._parseGeocodeResult(this.selectedResult)))
            // }, this))
        },
        _parseGeocodeResult: function (e) {
            var t = this._parseLatAndLng(e.geometry.location);
            for (var s in this._addressParts) {
                t[s] = this._findInfo(e, s);
            }
            return t.type = e.types[0],
                t
        },
        _parseLatAndLng: function (e) {
            var t,
                s;
            return typeof e.lat == "function" ? (s = e.lat(), t = e.lng()) : (s = e.lat, t = e.lng), {
                lat: s,
                lng: t
            }
        },
        _markerMoved: function () {
            this._updatePosition(this.gmarker.getPosition()),
            this.options.reverseGeocode && this._updateAddressPartsViaReverseGeocode(this.gmarker.getPosition())
        },
        _geocode: function (e, t) {
            var s = e.term;
            this.geocoder.geocode({
                language: this.options.language,
                address: s + this.options.appendAddressString,
                region: this.options.regionBias,
                bounds: this.options.bounds,
                components: this.options.componentsFilter
            }, function (e, s) {
                if (s == google.maps.GeocoderStatus.OK && e) {
                    for (var i = 0; i < e.length; i++) {
                        result = e[i], g = result.geometry, g.location = new google.maps.LatLng(g.location.lat, g.location.lng), g.viewport = new google.maps.LatLngBounds(new google.maps.LatLng(g.viewport.southwest.lat, g.viewport.southwest.lng), new google.maps.LatLng(g.viewport.northeast.lat, g.viewport.northeast.lng)), result.label = e[i].formatted_address;
                    }
                }
                t(e)
            })
        },
        _findInfo: function (e, t) {
            for (var s = 0; s < e.address_components.length; s++) {
                var i = e.address_components[s];
                if (-1 != i.types.indexOf(t)) {
                    return i.long_name
                }
            }
            return !1
        },
        _focusAddress: function (e, t) {
            var s = t.item;
            s && (this.gmarker && (this.gmarker.setPosition(s.geometry.location), this.gmarker.setVisible(!0), this.gmap.fitBounds(s.geometry.viewport)), this._updatePosition(s.geometry.location), this._updateAddressParts(s))
        },
        _selectAddress: function (e, t) {
            this.selectedResult = t.item,
            this.options.updateCallback && this.options.updateCallback(this.selectedResult, this._parseGeocodeResult(this.selectedResult))
        }
    }),
        e.extend(e.ui.addresspicker, {
            version: "@VERSION"
        }),
    Array.indexOf || (Array.prototype.indexOf = function (e) {
        for (var t = 0; t < this.length; t++) {
            if (this[t] == e) {
                return t;
            }
        }
        return -1
    })
}(jQuery);
