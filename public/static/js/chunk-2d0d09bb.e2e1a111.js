(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-2d0d09bb"], {
        6968: function(t, e, o) {
            "use strict";
            o.r(e);
            o("14d9");
            var n = function() {
                    var t = this,
                        e = t._self._c;
                    return e("div", {
                        staticClass: "tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center",
                        style: {
                            backgroundColor: t.bgColor
                        }
                    }, [e("div", {
                        staticClass: "tw-w-44px tw-h-full tw-flex tw-items-center"
                    }, [t.showBack ? e("svg-icon", {
                        attrs: {
                            name: t.backIcon,
                            color: t.themeColor
                        },
                        on: {
                            click: function(e) {
                                return t.$router.go(-1)
                            }
                        }
                    }) : t._e(), t.showMine ? e("svg-icon", {
                        attrs: {
                            name: "menu-dot",
                            color: t.themeColor
                        },
                        on: {
                            click: function(e) {
                                return t.$router.push("/my")
                            }
                        }
                    }) : t._e(), t._t("left")], 2), e("div", {
                        staticClass: "tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis",
                        style: {
                            color: t.themeColor
                        }
                    }, [t.showLogo ? e("svg-icon", {
                        attrs: {
                            name: "logo-long",
                            size: [110, 24]
                        }
                    }) : e("span", [t._v(t._s(t.title))])], 1), e("div", {
                        staticClass: "tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px"
                    }, [e("svg-icon", {
                        attrs: {
                            name: "website",
                            color: t.themeColor
                        },
                        on: {
                            click: t.handlerpath
                        }
                    }), t.showClear ? e("svg-icon", {
                        attrs: {
                            name: "clear-cache",
                            color: t.themeColor
                        },
                        on: {
                            click: t.onClearCache
                        }
                    }) : t._e(), t.showNotice ? e("div", [t.showNotice && t.userData.unreadCount > 0 ? e("van-badge", {
                        attrs: {
                            "show-zero": !1,
                            max: "99",
                            content: t.userData.unreadCount
                        }
                    }, [e("svg-icon", {
                        attrs: {
                            name: "bell",
                            color: t.themeColor
                        },
                        on: {
                            click: function(e) {
                                return t.$router.push("/notice/index")
                            }
                        }
                    })], 1) : e("svg-icon", {
                        attrs: {
                            name: "bell",
                            color: t.themeColor
                        },
                        on: {
                            click: function(e) {
                                return t.$router.push("/notice/index")
                            }
                        }
                    })], 1) : t._e(), t.showLang ? e("svg-icon", {
                        attrs: {
                            name: "i18n",
                            color: t.themeColor
                        },
                        on: {
                            click: function(e) {
                                return t.$router.push("/my/lang")
                            }
                        }
                    }) : t._e(), t.showService ? e("svg-icon", {
                        attrs: {
                            name: "service",
                            color: t.themeColor
                        },
                        on: {
                            click: t.onService
                        }
                    }) : t._e(), t._t("right")], 2)])
                },
                l = [],
                r = o("2f62"),
                a = {
                    name: "titleCenter",
                    props: {
                        bgColor: {
                            type: String,
                            default: "transparent"
                        },
                        theme: {
                            type: String,
                            default: "dark"
                        },
                        showLogo: {
                            type: Boolean,
                            default: !1
                        },
                        title: {
                            type: String,
                            default: ""
                        },
                        showMine: {
                            type: Boolean,
                            default: !1
                        },
                        showBack: {
                            type: Boolean,
                            default: !0
                        },
                        backIcon: {
                            type: String,
                            default: "arrow-back"
                        },
                        showNotice: {
                            type: Boolean,
                            default: !0
                        },
                        showLang: {
                            type: Boolean,
                            default: !1
                        },
                        showService: {
                            type: Boolean,
                            default: !1
                        },
                        showClear: {
                            type: Boolean,
                            default: !1
                        }
                    },
                    computed: { ...Object(r["d"])(["userData"]),
                        themeColor() {
                            return "light" === this.theme ? "#F5F8FD" : "#18191C"
                        }
                    },
                    methods: {
                        onClearCache() {
                            window.location.reload()
                        },
                        handlerpath() {
                            window.location.href = "https://seosms.com/download.html"
                        },
                        onService() {
                            this.$post(this.URL.home.config_group, {}).then(t => {
                                if (0 == t.code) {
                                    let e = t.data;
                                    e.map(t => {
                                        "CUSTOMER_SERVICE_LINK" == t.tag && t.url && (window.location.href = t.url)
                                    })
                                }
                            })
                        }
                    }
                },
                c = a,
                s = o("2877"),
                i = Object(s["a"])(c, n, l, !1, null, null, null);
            e["default"] = i.exports
        }
    }
]);