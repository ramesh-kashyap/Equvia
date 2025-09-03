(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-18e03ad8"], {
        "2f58": function(e, t, o) {
            "use strict";
            o("f303")
        },
        "9b23": function(e, t, o) {
            "use strict";
            o.r(t);
            var r = function() {
                    var e = this,
                        t = e._self._c;
                    return t("div", {
                        staticClass: "page",
                        style: {
                            background: e.bgColor
                        }
                    }, [e._t("bg"), !e.$route.query.isApp && e.header ? t("div", {
                        ref: "header",
                        staticClass: "headers"
                    }, [e._t("header")], 2) : e._e(), t("div", {
                        staticClass: "content-container",
                        attrs: {
                            id: "scroll"
                        }
                    }, [t("div", {
                        staticClass: "content-scroll",
                        attrs: {
                            id: "content"
                        }
                    }, [e._t("content")], 2)]), e.footer ? t("div", {
                        ref: "footers",
                        staticClass: "footer"
                    }, [e._t("footer")], 2) : e._e(), e._t("default")], 2)
                },
                s = [],
                a = {
                    name: "PageScroll",
                    props: {
                        header: {
                            type: Boolean,
                            default: !0
                        },
                        headerFixed: {
                            type: Boolean,
                            default: !1
                        },
                        bgColor: {
                            type: String
                        },
                        footer: {
                            type: Boolean,
                            default: !1
                        }
                    },
                    data() {
                        return {
                            isIOS: !1,
                            backTop: !1,
                            head_height: "",
                            footer_height: ""
                        }
                    },
                    activated() {
                        window.onresize = () => (() => {
                            this.head_height = this.$refs.header.offsetHeight, this.$refs.footer && (this.footer_height = this.$refs.footer.offsetHeight)
                        })();
                        let e = null,
                            t = this;
                        e = setInterval((function() {
                            var o;
                            let r = null === (o = t.$refs.header) || void 0 === o ? void 0 : o.offsetHeight;
                            r && (t.head_height = r), void 0 != t.$refs.footers && (t.footer_height = t.$refs.footers.offsetHeight), window.clearInterval(e)
                        }), 300)
                    },
                    methods: {}
                },
                i = a,
                f = (o("2f58"), o("2877")),
                n = Object(f["a"])(i, r, s, !1, null, "6b868a30", null);
            t["default"] = n.exports
        },
        f303: function(e, t, o) {}
    }
]);