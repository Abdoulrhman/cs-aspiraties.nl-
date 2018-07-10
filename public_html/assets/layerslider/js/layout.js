$(function() {
    var e = $(window),
        t = $("html"),
        n = $("body"),
        i = $("body, html");
    String.prototype.capitalize = function() {
        return this.charAt(0).toUpperCase() + this.slice(1)
    }, setTimeout(function() {
        n.addClass("docready")
    }, 250);
    var a = $(".licenses").children(),
        r = [".title", ".price", ".usp", ".comment"];
    e.on("resize.eqh", function() {
        if (a.find(r.join(", ")).css("height", ""), 1 < Math.floor(a.parent().width() / a.first().width()))
            for (var e = 0; e < r.length; e++) {
                var t = 0;
                a.each(function() {
                    t = Math.max(t, $(this).find(r[e]).height())
                }).find(r[e]).height(t)
            }
    }).trigger("resize.eqh");
    var o = [],
        s = "";
    if ($(".submenutext").each(function(e) {
            var t = $(this).parent(),
                n = t.attr("id") || "h" + e;
            t.attr("id", n), o.push("#" + n), s += '<li><a href="#' + n + '">' + $(this).text().capitalize() + "</a></li>"
        }), s.length) {
        o = o.reverse();
        var l = $("h1").first().addClass("has-submenu"),
            f = $('<div class="submenu Sticky"><div><ul>' + s + "</ul></div></div>").insertAfter(l);
        f.find("a").each(function() {
            var e = $(this).attr("href");
            n.find('a[href="' + e + '"]').on("click", function(t) {
                t.preventDefault(), i.animate({
                    scrollTop: $(e).offset().top - 120
                })
            })
        });
        var c = -1,
            h = f.find("li");
        e.on("scroll.submenu", function(t) {
            for (var n = e.scrollTop(), i = 0; i < o.length; i++)
                if ($(o[i]).offset().top < n + 160) {
                    c !== i && (c = i, h.removeClass("selected").find('[href="' + o[i] + '"]').parent().addClass("selected"));
                    break
                }
        }), e.trigger("scroll.submenu")
    }
    if ($.fn.mmenu) {
        var u = $("#menu").mmenu({
                extensions: {
                    all: ["theme-white", "fx-menu-slide", "pagedim-black"],
                    "(min-width: 1430px)": ["widescreen"]
                },
                counters: !0,
                dividers: {
                    fixed: !0
                },
                navbar: {
                    title: "mmenu"
                },
                navbars: [{
                    position: "top",
                    content: ["searchfield"]
                }, {
                    position: "top"
                }, {
                    position: "bottom",
                    content: ['<div>Hosted by <a href="https://www.byte.nl/" target="_blank">Byte</a></div>']
                }],
                searchfield: {
                    resultsPanel: !0
                },
                setSelected: {
                    parent: !0
                }
            }, {
                fixedElements: {
                    sticky: {
                        offset: -100
                    }
                },
                searchfield: {
                    clear: !0
                }
            }).data("mmenu"),
            d = $("#hamburger").on("click", function(e) {
                e.preventDefault(), t.hasClass("mm-opened") ? u.close() : u.open()
            }).children(".hamburger");
        u.bind("close:finish", function() {
            setTimeout(function() {
                d.removeClass("is-active")
            }, 100)
        }), u.bind("open:finish", function() {
            setTimeout(function() {
                d.addClass("is-active")
            }, 100)
        })
    }
    $("a.rotate").on("click", function(e) {
        e.preventDefault(), $(this).parent().toggleClass("portrait")
    }), setTimeout(function() {
        var e = "frebsite.nl",
            t = "info",
            n = "mailto";
        $("#emaillink").attr("href", n + ":" + t + "@" + e)
    }, 2e3);
    var m = $(".phone, .tablets").not(".no-auto-open");
    if (m.length) {
        var p = {};
        m.each(function() {
            var e = $(this).offset().top - 150;
            e < 0 && (e = 0), p[e] || (p[e] = $()), p[e] = p[e].add(this)
        }), e.on("scroll.phones", function() {
            var t = e.scrollTop();
            for (var n in p) t > n && (p[n].each(function(e) {
                var t = $(this).find("iframe"),
                    n = 0;
                if (t.length) {
                    t = t[0].contentWindow;
                    var i = setInterval(function() {
                        if (t.$) {
                            var e = t.$("#menu").data("mmenu");
                            e && (e.open && e.open(), clearInterval(i))
                        }
                        n++, n > 50 && clearInterval(i)
                    }, 250 + 250 * e)
                }
            }), delete p[n]);
            for (var n in p) return;
            $(this).off("scroll.phones")
        }), setTimeout(function() {
            e.trigger("scroll.phones")
        }, 2500)
    }
});