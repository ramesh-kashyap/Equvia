(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-84d1de02"], {
        "386e": function(t, e, s) {
            "use strict";
            s.r(e);
            var a = function() {
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
                                        src: s("a5f7"),
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
                                }, [t._v(" " + t._s(t.$t("title.doc26")) + " ")])]), e("div", {
                                    staticClass: "tw-relative tw-z-10 tw-bg-white tw-px-16px tw-pb-20px tw-pt-20px tw-rounded-10px"
                                }, [e("div", {
                                    staticClass: "tw-text-16px"
                                }, [t._v(t._s(t.$t("page.doc110")))]), e("FocusedField", {
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
                                }), e("div", {
                                    staticClass: "tw-mt-16px tw-text-16px"
                                }, [t._v(t._s(t.$t("page.doc111")))]), e("FocusedField", {
                                    attrs: {
                                        "οnkeyup": "this.value=this.value.replace(/\\s+/g,'')",
                                        type: "text",
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
                                }), 1 == t.isEmailCode ? [e("div", {
                                    staticClass: "tw-mt-16px tw-text-16px"
                                }, [t._v(" " + t._s(t.$t("page.doc115")) + " ")]), e("verify-code-field", {
                                    attrs: {
                                        target: t.email
                                    },
                                    model: {
                                        value: t.verifyCode,
                                        callback: function(e) {
                                            t.verifyCode = e
                                        },
                                        expression: "verifyCode"
                                    }
                                })] : t._e(), e("div", {
                                    staticClass: "tw-mt-16px tw-text-16px"
                                }, [t._v(t._s(t.$t("page5.doc35")))]), e("FocusedField", {
                                    attrs: {
                                        type: "text",
                                        placeholder: t.$t("page.doc84"),
                                        mode: "line"
                                    },
                                    model: {
                                        value: t.inviteCode,
                                        callback: function(e) {
                                            t.inviteCode = e
                                        },
                                        expression: "inviteCode"
                                    }
                                }), e("div", {
                                    staticClass: "tw-mt-16px tw-text-16px"
                                }, [t._v(t._s(t.$t("page.doc112")))]), e("FocusedField", {
                                    attrs: {
                                        type: t.isShowPassword ? "text" : "password",
                                        placeholder: t.$t("page.doc85"),
                                        mode: "line",
                                        autocomplete: "new-password"
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
                                    staticClass: "tw-mt-16px tw-text-16px"
                                }, [t._v(t._s(t.$t("page.doc113")))]), e("FocusedField", {
                                    attrs: {
                                        type: t.isShowRepeatPassword ? "text" : "password",
                                        placeholder: t.$t("page.doc85"),
                                        mode: "line",
                                        autocomplete: "new-password"
                                    },
                                    scopedSlots: t._u([{
                                        key: "right-icon",
                                        fn: function() {
                                            return [e("van-icon", {
                                                class: t.isShowRepeatPassword ? "tw-text-primary" : "tw-text-secondary",
                                                attrs: {
                                                    name: t.isShowRepeatPassword ? "eye" : "closed-eye"
                                                },
                                                on: {
                                                    click: function(e) {
                                                        t.isShowRepeatPassword = !t.isShowRepeatPassword
                                                    }
                                                }
                                            })]
                                        },
                                        proxy: !0
                                    }]),
                                    model: {
                                        value: t.repeatPassword,
                                        callback: function(e) {
                                            t.repeatPassword = e
                                        },
                                        expression: "repeatPassword"
                                    }
                                }), e("div", {
                                    staticClass: "tw-mt-16px tw-flex tw-items-center tw-text-14px"
                                }, [e("van-checkbox", {
                                    staticClass: "tw-mr-8px rounded",
                                    attrs: {
                                        shape: "square"
                                    },
                                    model: {
                                        value: t.isAgreed,
                                        callback: function(e) {
                                            t.isAgreed = e
                                        },
                                        expression: "isAgreed"
                                    }
                                }), e("router-link", {
                                    attrs: {
                                        to: "/article?id=REGISTRATION_AGREEMENT"
                                    }
                                }, [t._v(" " + t._s(t.$t("page4.doc113")) + " ")])], 1)], 2), e("div", {
                                    staticClass: "tw-relative tw-z-0 tw-bottom-10px tw-flex tw-justify-end"
                                }, [e("router-link", {
                                    staticClass: "page-auth-form-footer",
                                    attrs: {
                                        to: "/login"
                                    }
                                }, [t._v(" " + t._s(t.$t("title.doc25")) + " "), e("van-icon", {
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
                                        click: t.onRegister
                                    }
                                }, [t._v(" " + t._s(t.$t("title.doc26")) + " ")])], 1)])])]), e("van-popup", {
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
                                }, t._l(t.searchResult, (function(s) {
                                    return e("li", {
                                        key: s.mobilePrefix,
                                        staticClass: "tw-h-42px tw-flex tw-items-center",
                                        on: {
                                            click: function(e) {
                                                return t.onSetAreaId(s.mobilePrefix)
                                            }
                                        }
                                    }, [e("div", {
                                        staticClass: "tw-w-24px tw-h-24px"
                                    }, [e("img", {
                                        attrs: {
                                            src: s.iconUrl,
                                            alt: ""
                                        }
                                    })]), e("div", {
                                        staticClass: "tw-h-full tw-flex-1 tw-flex tw-items-center van-hairline--bottom"
                                    }, [t._v(" " + t._s(s.name) + "（+" + t._s(s.mobilePrefix) + "） ")])])
                                })), 0)], 1)])]
                            },
                            proxy: !0
                        }])
                    })
                },
                i = [],
                o = (s("14d9"), s("2f62"));
            const r = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,20}$/;
            var l = {
                    data() {
                        return {
                            areaId: "",
                            mobile: "",
                            email: "",
                            verifyCode: "",
                            inviteCode: "",
                            password: "",
                            isShowPassword: !1,
                            repeatPassword: "",
                            isShowRepeatPassword: !1,
                            areaData: [],
                            isShowArea: !1,
                            searchAreaId: "",
                            isUa: "",
                            isAgreed: !0,
                            isDisable: !1,
                            isBtnLoading: !1,
                            isEmailCode: 0,
                            accountType: 0
                        }
                    },
                    computed: {
                        searchResult() {
                            return "" != this.searchAreaId ? this.areaData.filter(t => t.mobilePrefix.includes(this.searchAreaId)) : this.areaData
                        },
                        isDisabled() {
                            return !((0 != this.accountType || this.mobile) && this.areaId && this.password && this.repeatPassword && this.isAgreed && this.email && !this.isBtnLoading)
                        },
                        showload() {
                            if ("" != this.$store.state.h5Url) {
                                let t = this.$store.state.h5Url.find(t => "Download_APP" == t.tag);
                                if (void 0 != t) {
                                    let e = !1;
                                    return e = "/" != t.url, e
                                }
                                return !1
                            }
                            return !1
                        }
                    },
                    mounted() {
                        this.onInit(), this.$post(this.URL.user.codeOpen).then(t => {
                            0 == t.code && (this.isEmailCode = t.data)
                        })
                    },
                    methods: { ...Object(o["c"])(["SET_USER_DATA", "SET_TOKEN", "SET_LOGIN", "SET_MOBILE", "SET_EMAIL", "SET_AREA_ID"]),
                        ...Object(o["b"])(["getUserData", "getH5Url"]),
                        onInit() {
                            if (window.getIsApp = this.getIsApp, "IOS" == this.common.getPlatform) try {
                                window.webkit.messageHandlers.getIsApp.postMessage(JSON.stringify(json)), this.isUa && this.SET_IS_APP(!0)
                            } catch (t) {} else try {
                                this.isUa = window.android.getIsApp(), this.isUa && this.SET_IS_APP(!0)
                            } catch (t) {}
                            "index" !== this.$route.params.code && (this.inviteCode = this.$route.params.code), localStorage.getItem("mobile") && (this.mobile = localStorage.getItem("mobile")), localStorage.getItem("email") && (this.email = localStorage.getItem("email")), localStorage.getItem("areaId") && (this.areaId = localStorage.getItem("areaId")), localStorage.getItem("inviteCode") && (this.inviteCode = localStorage.getItem("inviteCode")), this.getArea()
                        },
                        onSetAreaId(t) {
                            this.areaId = t, this.isShowArea = !1
                        },
                        getArea() {
                            this.$post(this.URL.user.country_list, {}).then(t => {
                                0 == t.code ? (this.areaData = t.data, this.areaId = t.data[0].mobilePrefix) : this.$toast(t.message)
                            })
                        },
                        onRegister() {
                            if (this.mobile.toString().length < 6 && this.mobile.toString().length < 13) return void this.$toast.fail(this.$t("page.doc97"));
                            let t = new RegExp(r);
                            if (!t.test(this.password)) return void this.$showToast(this.$t("page.doc100"));
                            if ("" == this.inviteCode) return void this.$showToast(this.$t("page.doc84"));
                            if (this.password != this.repeatPassword) return void this.$showToast(this.$t("page.doc101"));
                            if (!this.isAgreed) return void this.$showToast(this.$t("page.doc102"));
                            if (this.isBtnLoading) return;
                            this.isBtnLoading = !0;
                            let e = {
                                prefix: this.areaId,
                                mobile: this.mobile,
                                accountType: 0,
                                email: this.email.replace(/\s*/g, ""),
                                code: this.verifyCode.replace(/\s+/g, ""),
                                inviteCode: this.inviteCode.replace(/\s+/g, ""),
                                loginPassword: this.$md5(this.password.replace(/\s+/g, ""))
                            };
                            this.$post(this.URL.user.registerNew, e).then(t => {
                                0 == t.code ? (localStorage.setItem("isFirstLogin", "true"), this.$toast.success(this.$t("page.doc103")), this.SET_MOBILE(this.mobile.replace(/\s*/g, "")), this.SET_TOKEN(t.data.token), this.SET_LOGIN(!0), this.SET_AREA_ID(this.areaId), this.getH5Url(), this.getUserData().then(t => {
                                    this.onOpenLink("/")
                                })) : this.$toast(t.message)
                            }).finally(() => {
                                this.isBtnLoading = !1
                            })
                        },
                        onOpenLink(t, e) {
                            "/my/kf" != t ? (1 == e && (localStorage.setItem("mobile", this.mobile.replace(/\s*/g, "")), localStorage.setItem("email", this.email.replace(/\s*/g, "")), localStorage.setItem("areaId", this.areaId), localStorage.setItem("inviteCode", this.inviteCode)), this.$router.push({
                                path: t,
                                query: {}
                            })) : this.$post(this.URL.home.config_group, {}).then(t => {
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
                n = l,
                c = (s("568c"), s("2877")),
                d = Object(c["a"])(n, a, i, !1, null, null, null);
            e["default"] = d.exports
        },
        "4ea6": function(t, e, s) {},
        "568c": function(t, e, s) {
            "use strict";
            s("4ea6")
        },
        a5f7: function(t, e, s) {
            t.exports = s.p + "static/1756094289381/img/logo.41d208eb.svg"
        }
    }
]);