(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-2d0a482c"], {
        "076e": function(t, e, a) {
            "use strict";
            a.r(e);
            a("14d9");
            var i = function() {
                    var t = this,
                        e = t._self._c;
                    return e("ul", {
                        staticClass: "tw-w-full tw-h-full tw-flex tw-justify-around"
                    }, t._l(t.navList, (function(a) {
                        return e("li", {
                            key: a.path,
                            staticClass: "tw-flex-1 tw-flex tw-flex-col tw-items-center tw-justify-center",
                            class: t.activeName === a.name ? "actived" : "",
                            on: {
                                click: function(e) {
                                    return t.$router.push(a.path)
                                }
                            }
                        }, [e("svg-icon", {
                            staticClass: "tw-mb-2px",
                            attrs: {
                                name: a.icon,
                                size: "22",
                                color: t.activeName === a.name ? a.activeColor : a.color
                            }
                        }), e("span", {
                            staticClass: "tw-text-12px",
                            class: t.activeName === a.name ? "tw-text-primary" : "tw-text-secondary"
                        }, [t._v(" " + t._s(a.title))])], 1)
                    })), 0)
                },
                o = [],
                l = {
                    props: {
                        activeName: {
                            type: String,
                            default: "home"
                        }
                    },
                    computed: {
                        navList() {
                            return [{
                                title: this.$t("title.doc0"),
                                name: "home",
                                icon: "home",
                                color: "#AEB8C4",
                                activeColor: "#0A71F7",
                                path: "/"
                            }, {
                                title: "SEOKORE",
                                name: "grid",
                                icon: "robot",
                                color: "#AEB8C4",
                                activeColor: "#0A71F7",
                                path: "/grid"
                            }, {
                                title: this.$t("title.doc4"),
                                name: "team",
                                icon: "team",
                                color: "#AEB8C4",
                                activeColor: "#0A71F7",
                                path: "/team"
                            }, {
                                title: this.$t("title.doc8"),
                                name: "wallet",
                                icon: "assets",
                                color: "#AEB8C4",
                                activeColor: "#0A71F7",
                                path: "/wallet/index"
                            }]
                        }
                    }
                },
                c = l,
                n = a("2877"),
                s = Object(n["a"])(c, i, o, !1, null, null, null);
            e["default"] = s.exports
        }
    }
]);