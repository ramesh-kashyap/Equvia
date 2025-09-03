(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-5c64915e"], {
        "1ef9": function(t, e, a) {},
        "657c": function(t, e, a) {
            "use strict";
            a("1ef9")
        },
        "71a8": function(t, e, a) {
            "use strict";
            a.r(e);
            var s = function() {
                    var t = this,
                        e = t._self._c;
                    return e("page-scroll", {
                        staticClass: "page-auth",
                        attrs: {
                            footer: !1
                        },
                        scopedSlots: t._u([{
                            key: "header",
                            fn: function() {
                                return [e("glTitle", {
                                    attrs: {
                                        "back-icon": "close",
                                        "show-clear": "",
                                        "show-service": "",
                                        "show-lang": ""
                                    }
                                })]
                            },
                            proxy: !0
                        }, {
                            key: "content",
                            fn: function() {
                                return [e("div", {
                                    staticClass: "page-auth-container tw-h-full tw-p-20px"
                                }, [e("div", {
                                    staticClass: "page-auth-header tw-relative tw-z-10 tw-mb-20px tw-flex tw-items-center"
                                }, [e("img", {
                                    staticClass: "tw-w-64px tw-h-64px",
                                    attrs: {
                                        src: a("a5f7"),
                                        alt: ""
                                    }
                                }), e("div", {
                                    staticClass: "tw-pl-12px tw-flex-1"
                                }, [e("div", {
                                    staticClass: "tw-mb-6px tw-text-24px"
                                }, [t._v(t._s(t.$t("page6.doc3")) + ",")]), e("div", {
                                    staticClass: "tw-text-18px van-ellipsis"
                                }, [t._v(" " + t._s(t.$t("page6.doc4")) + " SEOKORE ")])])]), e("div", {
                                    staticClass: "page-auth-content tw-relative tw-z-10"
                                }, [e("div", {
                                    staticClass: "page-auth-form tw-pb-24px"
                                }, [e("div", {
                                    staticClass: "tw-relative tw-z-0 tw-top-10px tw-flex tw-justify-between tw-items-start"
                                }, [e("div", {
                                    staticClass: "page-auth-form-title"
                                }, [t._v(" " + t._s(t.$t("title.doc25")) + " ")])]), e("div", {
                                    staticClass: "tw-relative tw-z-10 tw-bg-white tw-px-16px tw-pb-20px tw-rounded-10px"
                                }, [e("van-tabs", {
                                    attrs: {
                                        border: ""
                                    },
                                    model: {
                                        value: t.accountType,
                                        callback: function(e) {
                                            t.accountType = e
                                        },
                                        expression: "accountType"
                                    }
                                }, [e("van-tab", {
                                    attrs: {
                                        title: t.$t("page.doc107"),
                                        name: "0"
                                    }
                                }, [e("div", {
                                    staticClass: "tw-mt-20px tw-text-16px"
                                }, [t._v(" " + t._s(t.$t("page.doc110")) + " ")]), e("focused-field", {
                                    attrs: {
                                        type: "tel",
                                        placeholder: t.$t("page.doc79"),
                                        mode: "line"
                                    },
                                    scopedSlots: t._u([{
                                        key: "left-icon",
                                        fn: function() {
                                            return [e("div", {
                                                staticClass: "tw-flex tw-items-center",
                                                on: {
                                                    click: function(e) {
                                                        t.isShowArea = !0
                                                    }
                                                }
                                            }, [e("span", {
                                                staticClass: "tw-pr-4px"
                                            }, [t._v("+" + t._s(t.areaId))]), e("van-icon", {
                                                attrs: {
                                                    name: t.isShowArea ? "arrow-up" : "arrow-down"
                                                }
                                            })], 1)]
                                        },
                                        proxy: !0
                                    }]),
                                    model: {
                                        value: t.mobile,
                                        callback: function(e) {
                                            t.mobile = e
                                        },
                                        expression: "mobile"
                                    }
                                }), e("div")], 1), e("van-tab", {
                                    attrs: {
                                        title: t.$t("page.doc108"),
                                        name: "1"
                                    }
                                }, [e("div", {
                                    staticClass: "tw-mt-20px tw-text-16px"
                                }, [t._v(" " + t._s(t.$t("page.doc111")) + " ")]), e("focused-field", {
                                    attrs: {
                                        placeholder: t.$t("page.doc80"),
                                        mode: "line"
                                    },
                                    model: {
                                        value: t.email,
                                        callback: function(e) {
                                            t.email = e
                                        },
                                        expression: "email"
                                    }
                                }), e("div")], 1)], 1), e("div", {
                                    staticClass: "tw-mt-20px tw-text-16px"
                                }, [t._v(t._s(t.$t("page.doc112")))]), e("focused-field", {
                                    attrs: {
                                        autocomplete: "new-password",
                                        type: t.isShowPassword ? "text" : "password",
                                        placeholder: t.$t("page.doc85"),
                                        mode: "line"
                                    },
                                    scopedSlots: t._u([{
                                        key: "right-icon",
                                        fn: function() {
                                            return [e("van-icon", {
                                                class: t.isShowPassword ? "tw-text-primary" : "tw-text-secondary",
                                                attrs: {
                                                    name: t.isShowPassword ? "eye" : "closed-eye"
                                                },
                                                on: {
                                                    click: function(e) {
                                                        t.isShowPassword = !t.isShowPassword
                                                    }
                                                }
                                            })]
                                        },
                                        proxy: !0
                                    }]),
                                    model: {
                                        value: t.password,
                                        callback: function(e) {
                                            t.password = e
                                        },
                                        expression: "password"
                                    }
                                }), e("div", {
                                    staticClass: "tw-mt-16px tw-flex tw-items-center tw-text-14px"
                                }, [e("van-checkbox", {
                                    staticClass: "tw-mr-8px rounded",
                                    attrs: {
                                        shape: "square"
                                    },
                                    model: {
                                        value: t.isRemember,
                                        callback: function(e) {
                                            t.isRemember = e
                                        },
                                        expression: "isRemember"
                                    }
                                }, [t._v(" " + t._s(t.$t("page2.doc230")) + " ")])], 1)], 1), e("div", {
                                    staticClass: "tw-relative tw-z-0 tw-bottom-10px tw-flex tw-justify-between tw-items-center"
                                }, [e("router-link", {
                                    staticClass: "tw-mt-12px tw-text-primary",
                                    attrs: {
                                        to: "/user/forget_password?id=1"
                                    }
                                }, [t._v(" " + t._s(t.$t("page.doc105")) + "? ")]), e("router-link", {
                                    staticClass: "page-auth-form-footer",
                                    attrs: {
                                        to: "/user/register/index"
                                    }
                                }, [t._v(" " + t._s(t.$t("title.doc26")) + " "), e("van-icon", {
                                    attrs: {
                                        name: "arrow"
                                    }
                                })], 1)], 1), e("div", {
                                    staticClass: "tw-mt-24px"
                                }, [e("van-button", {
                                    attrs: {
                                        type: t.isDisabled ? "default" : "primary",
                                        size: "large",
                                        block: "",
                                        disabled: t.isDisabled,
                                        loading: t.isBtnLoading
                                    },
                                    on: {
                                        click: t.onLogin
                                    }
                                }, [t._v(" " + t._s(t.$t("title.doc25")) + " ")])], 1)])])]), e("van-popup", {
                                    attrs: {
                                        position: "bottom",
                                        round: "",
                                        closeable: "",
                                        "get-container": "body"
                                    },
                                    model: {
                                        value: t.isShowArea,
                                        callback: function(e) {
                                            t.isShowArea = e
                                        },
                                        expression: "isShowArea"
                                    }
                                }, [e("div", {
                                    staticClass: "tw-p-16px tw-overflow-hidden"
                                }, [e("div", {
                                    staticClass: "tw-text-center tw-text-16px"
                                }, [t._v(" " + t._s(t.$t("page.doc91")) + " ")]), e("van-field", {
                                    attrs: {
                                        type: "text",
                                        placeholder: t.$t("page.doc92"),
                                        clearable: ""
                                    },
                                    scopedSlots: t._u([{
                                        key: "left-icon",
                                        fn: function() {
                                            return [e("van-icon", {
                                                attrs: {
                                                    name: "search"
                                                }
                                            })]
                                        },
                                        proxy: !0
                                    }]),
                                    model: {
                                        value: t.searchAreaId,
                                        callback: function(e) {
                                            t.searchAreaId = e
                                        },
                                        expression: "searchAreaId"
                                    }
                                }), e("ul", {
                                    staticClass: "tw-h-32 tw-overflow-y-auto"
                                }, t._l(t.searchResult, (function(a) {
                                    return e("li", {
                                        key: a.mobilePrefix,
                                        staticClass: "tw-h-42px tw-flex tw-items-center",
                                        on: {
                                            click: function(e) {
                                                return t.onSetAreaId(a.mobilePrefix)
                                            }
                                        }
                                    }, [e("div", {
                                        staticClass: "tw-w-24px tw-h-24px"
                                    }, [e("img", {
                                        attrs: {
                                            src: a.iconUrl,
                                            alt: ""
                                        }
                                    })]), e("div", {
                                        staticClass: "tw-h-full tw-flex-1 tw-flex tw-items-center van-hairline--bottom"
                                    }, [t._v(" " + t._s(a.name) + "（+" + t._s(a.mobilePrefix) + "） ")])])
                                })), 0)], 1)])]
                            },
                            proxy: !0
                        }])
                    })
                },
                i = [],
                o = (a("14d9"), a("2f62"));
            var r = {
                    data() {
                        return {
                            accountType: 0,
                            areaId: "01",
                            mobile: "",
                            email: "",
                            password: "",
                            isShowPassword: !1,
                            areaData: [],
                            isShowArea: !1,
                            searchAreaId: "",
                            isRemember: !1,
                            isBtnLoading: !1
                        }
                    },
                    computed: {
                        searchResult() {
                            try {
                                return "" != this.searchAreaId ? this.areaData.filter(t => t.mobilePrefix.indexOf(this.searchAreaId) > -1) : this.areaData
                            } catch (t) {
                                return this.areaData
                            }
                        },
                        isDisabled() {
                            try {
                                return !((0 != this.accountType || this.mobile) && this.password && !this.isBtnLoading) || !((1 != this.accountType || this.email) && this.password && !this.isBtnLoading)
                            } catch (t) {
                                return !1
                            }
                        },
                        isDownloadShow() {
                            try {
                                if ("" != this.$store.state.h5Url) {
                                    const t = this.$store.state.h5Url.find(t => "Download_APP" == t.tag);
                                    return !!t && "/" != t.url
                                }
                                return !1
                            } catch (t) {
                                return !1
                            }
                        }
                    },
                    mounted() {
                        this.onInit()
                    },
                    methods: { ...Object(o["c"])(["SET_IS_APP", "SET_USER_DATA", "SET_TOKEN", "SET_LOGIN", "SET_MOBILE", "SET_EMAIL", "SET_AREA_ID"]),
                        ...Object(o["b"])(["getUserData", "getH5Url"]),
                        onInit() {
                            window.getIsApp = this.getIsApp;
                            let t = localStorage.getItem("account"),
                                e = localStorage.getItem("prefix"),
                                a = localStorage.getItem("accountType");
                            if (this.isRemember = "true" === localStorage.getItem("isRemember"), t && a && (this.mobile = t, this.accountType = a), e && (this.areaId = e), "IOS" == this.common.getPlatform) try {
                                window.webkit.messageHandlers.getIsApp.postMessage(JSON.stringify(json)), this.isUa && this.SET_IS_APP(!0)
                            } catch (s) {} else try {
                                this.isUa = window.android.getIsApp(), this.isUa && this.SET_IS_APP(!0)
                            } catch (s) {}
                            localStorage.getItem("mobile") && (this.mobile = localStorage.getItem("mobile")), localStorage.getItem("areaId") && (this.areaId = localStorage.getItem("areaId")), this.getArea()
                        },
                        onSetAreaId(t) {
                            this.areaId = t, this.isShowArea = !1
                        },
                        getArea() {
                            this.$post(this.URL.user.country_list, {}).then(t => {
                                if (0 == t.code) {
                                    this.areaData = t.data;
                                    let e = localStorage.getItem("prefix");
                                    this.areaId = e, e || (this.areaId = t.data[0].mobilePrefix)
                                } else this.$toast(t.message)
                            })
                        },
                        onLogin() {
                            if (this.isBtnLoading) return;
                            this.isBtnLoading = !0;
                            let t = this.mobile.replace(/\s+/g, "");
                            1 == this.accountType && (t = this.email);
                            let e = {
                                accountType: this.accountType,
                                account: t,
                                code: this.$md5(this.password),
                                verifyType: 1
                            };
                            0 == this.accountType && (e.prefix = this.areaId), this.$post(this.URL.user.login, e).then(e => {
                                0 == e.code ? (this.$toast.success(this.$t("page.doc109")), this.isRemember ? (localStorage.setItem("account", t), localStorage.setItem("accountType", this.accountType), 0 == this.accountType ? localStorage.setItem("prefix", this.areaId) : localStorage.removeItem("prefix")) : (localStorage.removeItem("account"), localStorage.removeItem("prefix"), localStorage.removeItem("accountType")), localStorage.setItem("isRemember", this.isRemember), localStorage.setItem("isFirstLogin", "true"), this.SET_MOBILE(this.mobile), this.SET_TOKEN(e.data.token), this.SET_LOGIN(!0), this.SET_AREA_ID(this.areaId), this.getH5Url(), this.getUserData().then(t => {
                                    this.onOpenLink("/")
                                })) : this.$toast(e.message)
                            }).finally(() => {
                                this.isBtnLoading = !1
                            })
                        },
                        onOpenLink(t) {
                            "/my/kf" != t ? this.$router.push({
                                path: t,
                                query: {}
                            }) : this.$post(this.URL.home.config_group, {}).then(t => {
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
                c = r,
                l = (a("657c"), a("2877")),
                n = Object(l["a"])(c, s, i, !1, null, null, null);
            e["default"] = n.exports
        },
        a5f7: function(t, e, a) {
            t.exports = a.p + "static/1756094289381/img/logo.41d208eb.svg"
        }
    }
]);