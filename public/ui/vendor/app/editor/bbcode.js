/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.3.2 (2020-06-10)
 *
 * Edited for Mention
 */
if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
	"use strict";

	var o = tinymce.util.Tools.resolve("tinymce.PluginManager"),
		e = tinymce.util.Tools.resolve("tinymce.util.Tools"),
		t = function (t) {
			t = e.trim(t);

			var o = function (o, e) {
				t = t.replace(o, e);
			};

			return t;
		};

	!(function i() {
		o.add("bbcodeCustom", function (o) {
			o.on("BeforeSetContent", function (o) {
				o.content = t(o.content);
			}), o.on("PostProcess", function (o) {
				o.set && (o.content = t(o.content)), o.get && (o.content = (function (t) {
					t = e.trim(t);
					var o = function (o, e) {
						t = t.replace(o, e);
					};

					var blkstr = [];
					$.each(app.setupEditorPostProcess(), function (idx2, val2) {
						var str = idx2 + ", " + val2;
						blkstr.push(str);
					});

					return (
						$.each(app.setupEditorPostProcess(), function (key, val) {
							(o(new RegExp(`${val.pattern}`, val.option), val.modification), t)
						}),
						o(/^\n$/gi, '<br />'),
						t
					);
				})(o.content));
			});
		});
	})();
}
(window.jQuery, window, document);