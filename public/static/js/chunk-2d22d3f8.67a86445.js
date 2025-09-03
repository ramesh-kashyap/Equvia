(window["webpackJsonp"] = window["webpackJsonp"] || []).push([
    ["chunk-2d22d3f8"], {
        f74e: function(e, t, i) {
            "use strict";
            i.r(t);
            var s = function() {
                    var e = this,
                        t = e._self._c;
                    return t("focused-field", {
                        attrs: {
                            type: "digit",
                            placeholder: e.$t("page.doc197"),
                            maxlength: "6"
                        },
                        scopedSlots: e._u([{
                            key: "right-icon",
                            fn: function() {
                                return [t("van-button", {
                                    staticClass: "!tw-border-none tw-w-8",
                                    attrs: {
                                        type: "primary",
                                        size: "mini",
                                        plain: "",
                                        disabled: e.isCodeSent,
                                        loading: e.isBtnLoading
                                    },
                                    on: {
                                        click: e.onSendCode
                                    }
                                }, [t("span", {
                                    directives: [{
                                        name: "show",
                                        rawName: "v-show",
                                        value: !e.isShowCountdown,
                                        expression: "!isShowCountdown"
                                    }]
                                }, [e._v(e._s(e.$t("page.doc83")))]), t("span", {
                                    directives: [{
                                        name: "show",
                                        rawName: "v-show",
                                        value: e.isShowCountdown,
                                        expression: "isShowCountdown"
                                    }]
                                }, [e._v(e._s(e.leftTime) + " s")])])]
                            },
                            proxy: !0
                        }]),
                        model: {
                            value: e.innerValue,
                            callback: function(t) {
                                e.innerValue = t
                            },
                            expression: "innerValue"
                        }
                    })
                },
                n = [],
                o = {
                    name: "VerifyCodeField",
                    props: {
                        value: {
                            type: [String, Number]
                        },
                        target: {
                            type: [String, Number],
                            required: !0
                        },
                        targetType: {
                            type: [String, Number],
                            default: "1"
                        },
                        codeType: {
                            type: [String, Number],
                            default: "1"
                        }
                    },
                    data() {
                        return {
                            isShowCountdown: !1,
                            leftTime: 60,
                            isBtnLoading: !1,
                            isCodeSent: !1,
                            timer: null
                        }
                    },
                    computed: {
                        innerValue: {
                            get() {
                                return this.value
                            },
                            set(e) {
                                this.$emit("input", e)
                            }
                        }
                    },
                    methods: {
                        onSendCode() {
                            if (this.target)
                                if (this.isCodeSent) this.$toast(this.$t("page.doc96"));
                                else {
                                    const e = {
                                        accountType: this.targetType,
                                        account: this.target.replace(/\s*/g, ""),
                                        type: this.codeType
                                    };
                                    this.isBtnLoading = !0, this.$post(this.URL.user.code_send, e).then(e => {
                                        0 == e.code ? (this.$toast.success(this.$t("page.doc99")), this.isShowCountdown = !0, this.isCodeSent = !0, this.timer = setInterval(() => {
                                            this.leftTime--, this.leftTime <= 0 && this.onFinish()
                                        }, 1e3)) : this.$toast(e.message)
                                    }).finally(() => {
                                        this.isBtnLoading = !1
                                    })
                                }
                            else this.$toast(1 == this.targetType ? this.$t("page.doc98") : this.$t("page.doc97"))
                        },
                        onFinish() {
                            this.isShowCountdown = !1, this.leftTime = 60, this.isCodeSent = !1, clearInterval(this.timer)
                        }
                    }
                },
                a = o,
                r = i("2877"),
                d = Object(r["a"])(a, s, n, !1, null, null, null);
            t["default"] = d.exports
        }
    }
]);